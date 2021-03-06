<?php /* Template Name: ComingPage */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hi! I'm Umar Farouq Mohammed</title>

  <!-- meta -->
  <meta name="description" content="This is the website of Umar Farouq Mohammed." />
  <meta name="keywords" content="Creative Designer, Software Developer, User Interface Designer, Teacher, Instructor" />
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="English" />
  <meta name="Classification" content="Personal" />

  <!-- facebook open graph -->
  <meta property="og:title" content="Umar F. Mohammed - A Creative Guy" />
  <meta property="og:site_name" content="Umar Mohammed" />
  <meta property="og:url" content="https://umar.website" />
  <meta property="og:description" content="This is the website of Umar Farouq Mohammed." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?= get_template_directory_uri() . '/assets/images/og:preview.png'; ?>" />

  <!-- twitter meta -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@dharnarh" />
  <meta name="twitter:description" content="This is the website of Umar Farouq Mohammed." />
  <meta name="twitter:title" content="Umar F. Mohammed - A Creative Guy" />
  <meta name="twitter:image" content="<?= get_template_directory_uri() . '/assets/images/og:preview.png'; ?>" />

  <!-- favicon generator -->
  <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri() . '/assets/favicon/favicon.ico'; ?>" />
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?= get_template_directory_uri() . '/assets/favicon/apple-touch-icon.png'; ?>" />
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?= get_template_directory_uri() . '/assets/favicon/favicon-32x32.png'; ?>" />
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?= get_template_directory_uri() . '/assets/favicon/favicon-16x16.png'; ?>" />
  <link rel="manifest" href="<?= get_template_directory_uri() . '/assets/favicon/site.webmanifest'; ?>" />

  <!-- css fonts and bootstrap -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= get_template_directory_uri() . '/assets/css/bootstrap.min.css'; ?>" />

  <!-- ld json -->
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Person",
    "email": "mailto:hey@umar.website",
    "image": "https://umar.website/wp-content/themes/umar/assets/images/mine.jpg",
    "jobTitle": "Self-employed",
    "name": "Umar Farouq Mohammed",
    "gender": "mail",
    "url": "https://umar.website",
    "description": "Software Developer, UI Designer, Instructor"
  }
  </script>
</head>

<body class="bg-light">
  <div class="container-fluid vh-100 p-0 m-0">
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
      <div class="container">
        <div class="d-block text-center">
          <h3 class="h3 fw-normal">
            | Coming Soon.
          </h3>
        </div>
      </div>
      <ul class="nav flex-row py-3 small">
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/dharnarh" target="_blank" rel="noreferrer">
            <img src="<?= get_template_directory_uri() . '/assets/images/svg/github.svg'; ?>" alt="Github"
              class="img-fluid m-social" />
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://linkedin.com/in/dharnarh" target="_blank" rel="noreferrer">
            <img src="<?= get_template_directory_uri() . '/assets/images/svg/linkedin.svg'; ?>" alt="LinkedIn"
              class="img-fluid m-social" />
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/dharnarh" target="_blank" rel="noreferrer">
            <img src="<?= get_template_directory_uri() . '/assets/images/svg/twitter.svg'; ?>" alt="Twitter"
              class="img-fluid m-social" />
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://facebook.com/iamdharnarh" target="_blank" rel="noreferrer">
            <img src="<?= get_template_directory_uri() . '/assets/images/svg/facebook.svg'; ?>" alt="Facebook"
              class="img-fluid m-social" />
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://t.me/dharnarh" target="_blank" rel="noreferrer">
            <img src="<?= get_template_directory_uri() . '/assets/images/svg/send.svg'; ?>" alt="Telegram"
              class="img-fluid m-social" />
          </a>
        </li>
      </ul>
    </div>
  </div>
</body>

</html>