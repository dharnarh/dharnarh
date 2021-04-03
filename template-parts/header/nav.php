<?php // top navigation ?>

<div class="container-fluid bg-white p-0">
  <nav class="container-lg py-4 bg-transparent">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-sm-auto">
        <div class="text-center">
          <a href="/" class="navbar-brand me-0 fw-bold text-decoration-none">
            <img src="<?= get_template_directory_uri() . '/assets/images/svg/__.svg'; ?>" alt="Umar" width="40"
              height="40" class="d-inline-block align-middle" />
            Umar F. Mohammed
          </a>
        </div>
      </div>
      <div class="col-12 col-sm">
        <ul class="nav py-2 py-lg-0 justify-content-center justify-content-sm-end">
          <li class="nav-item">
            <a class="nav-link px-2 px-md-3 text-dark" href="/about">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2 px-md-3 text-dark"
              href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2 px-md-3 text-dark" href="/course">Courses</a>
          </li>
          <li class="nav-item d-block d-sm-none">
            <a class="nav-link px-2 px-md-3 text-dark" href="https://thedevbuild.com" target="_blank"
              rel="noreferrer">Hire Me</a>
          </li>
          <li class="nav-item d-none d-sm-block">
            <a class="nav-link btn-outline-primary" href="https://thedevbuild.com" target="_blank" rel="noreferrer">Hire
              Me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>