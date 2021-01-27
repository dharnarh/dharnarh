<?php get_header(); ?>

<div class="container-fluid bg-light p-0">
  <div class="container banner d-flex align-items-center justify-content-center">
    <div class="d-block text-center">
      <h1 class="display-4 fw-bold"><span class="text-primary">My Articles</span></h1>
      <h4 class="h4 fw-normal">All articles are original and written by me.</h4>
    </div>
  </div>
</div>

<div class="my-5 py-3"></div>

<div class="container">
  <div id="postSections" class="row">
    <!-- posts loaded using ajax call -->
  </div>
  <!-- ajax -->
  <div class="d-block text-center">
    <div id="noPost" class="col-10 col-md-10 col-lg-7 mx-auto d-none">
      <div class="d-block text-center">
        <h2 class="h2 fw-bold">No articles yet.</h2>
        <p class="mt-3">Check back in a few days.</p>
      </div>
    </div>
    <div>
      <span id="loadPost" type="button" class="text-primary">Load older posts <h3>&darr;</h3> </span>
    </div>
    <div id="loadPostSpinner" class="spinner-border text-primary d-none" role="status"></div>
    <div id="endOfPost" class="col-10 col-md-10 col-lg-7 mx-auto d-none">
      <div class="d-block text-center">
        <h2 class="h2 fw-bold">End of articles.</h2>
        <p class="mt-3">Come back in a few days for new article.</p>
      </div>
    </div>
  </div>
</div>

<div class="my-5 py-3"></div>

<?php get_footer(); ?>