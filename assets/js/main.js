const $ = (value) => document.querySelector(value);
const ajaxUrl = '/wp-admin/admin-ajax.php';

function postTemplate({ title, postUrl, excerpt, date }) {
  return `
  <div class="col-10 col-md-10 col-lg-7 mx-auto">
    <div class="d-block">
      <a href="${postUrl}" class="text-decoration-none">
        <h2 class="h2 fw-bold">${title}</h2>
      </a>
      <p class="mt-3">${excerpt}</p>
      <p class="small">Date: ${date} | Posted by Me</p>
    </div>
    <hr class="my-5">
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

  $('#loadPost').classList.toggle('d-none');
  $('#loadPostSpinner').classList.toggle('d-none');

  const res = await fetch(ajaxUrl, init);
  if (!res.ok) {
    const error = await res.json();
    const message = error.err ? error.err : null;
    throw new Error(message);
  }
  let appendData = '';
  await res.json().then(function (res) {
    if (page === 1 && res.length < 10) {
      $('#noPost').classList.remove('d-none');
      $('#loadPost').classList.add('d-none');
      $('#loadPostSpinner').classList.add('d-none');
      $('#endOfPost').classList.add('d-none');
      return;
    }
    if (res.length < 1) {
      $('#loadPost').classList.add('d-none');
      $('#loadPostSpinner').classList.add('d-none');
      $('#endOfPost').classList.remove('d-none');
      return;
    }
    res.forEach(function (_) {
      let posts = postTemplate({
        title: _.title,
        postUrl: _.post_link,
        excerpt: _.excerpt,
        date: _.date
      });
      appendData += posts;
    });
    let domParser = new DOMParser().parseFromString(appendData, 'text/html');
    let body = domParser.body;
    body.childNodes.forEach((_) => {
      $('#postSections').appendChild(_);
    });
    $('#loadPost').classList.toggle('d-none');
    $('#loadPostSpinner').classList.toggle('d-none');
    page++;
  });
}

if (typeof $('#loadPost') !== 'undefined' && $('#loadPost') !== null) {
  loadPost();
  $('#loadPost').onclick = function () {
    loadPost();
  };
}
