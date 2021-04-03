<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hi! I'm Umar Farouq Mohammed</title>

  <!-- meta -->
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="English" />
  <meta name="Classification" content="Personal" />
  <meta name="revisit-after" content="7 days">

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

<body class="bg-white container-lg bg-light">
  <?php get_template_part( 'template-parts/header/nav' ); ?>