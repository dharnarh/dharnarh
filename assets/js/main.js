const $query = (value) => document.querySelector(value);
const ajaxUrl = '/wp-admin/admin-ajax.php';

function postTemplate({ title, postUrl, date }) {
  return `
  <div class="col-11 col-md-10 col-lg-7 mx-auto my-2 article-lists">
    <div class="d-block py-3">
      <a href="${postUrl}" class="text-decoration-none">
        <h2 class="lead fw-bold">${title}</h2>
      </a>
      <p class="small mb-0">Published on: ${date}</p>
    </div>
  </div>
  `;
}

let page = 1;

async function loadPost() {
  let dataForm = {
    action: 'load_posts_by_ajax',
    page: page
  };
  const init = {
    method: 'POST',
    body: new URLSearchParams(dataForm),
    headers: {
      'X-Requested-With': 'XMLHttpRequest'
    }
  };

  $query('#loadPost').classList.toggle('d-none');
  $query('#loadPostSpinner').classList.toggle('d-none');

  const res = await fetch(ajaxUrl, init);
  if (!res.ok) {
    const error = await res.json();
    const message = error.err ? error.err : null;
    throw new Error(message);
  }
  let appendData = '';
  await res.json().then(function (res) {
    if (page === 1 && res.length < 10) {
      $query('#noPost').classList.remove('d-none');
      $query('#loadPost').classList.add('d-none');
      $query('#loadPostSpinner').classList.add('d-none');
      $query('#endOfPost').classList.add('d-none');
      return;
    }
    if (res.length < 1) {
      $query('#loadPost').classList.add('d-none');
      $query('#loadPostSpinner').classList.add('d-none');
      $query('#endOfPost').classList.remove('d-none');
      return;
    }
    res.forEach(function (_) {
      let posts = postTemplate({
        title: _.title,
        postUrl: _.post_link,
        date: _.date
      });
      appendData += posts;
    });
    let domParser = new DOMParser().parseFromString(appendData, 'text/html');
    let body = domParser.body;
    body.childNodes.forEach((_) => {
      $query('#postSections').appendChild(_);
    });
    $query('#loadPost').classList.toggle('d-none');
    $query('#loadPostSpinner').classList.toggle('d-none');
    page++;
  });
}

if (typeof $query('#loadPost') !== 'undefined' && $query('#loadPost') !== null) {
  loadPost();
  $query('#loadPost').onclick = function () {
    loadPost();
  };
}
