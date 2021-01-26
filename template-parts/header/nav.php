<?php // top navigation ?>

<div class="container-fluid bg-light p-0">
  <div class="container h-100 d-flex flex-column justify-content-between">
    <nav class="container-fluid py-3 bg-transparent">
      <div class="container p-0 d-flex align-items-center justify-content-between">
        <a href="/">
          <div class="navbar-brand">
            <img src="<?= get_template_directory_uri() . '/assets/images/svg/__.svg'; ?>" alt="Umar"
              class="img-fluid" />
          </div>
        </a>
        <ul class="nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark pe-0" href="/coming">Courses</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>