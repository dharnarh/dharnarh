<?php /* Template Name: FrontEndWebPage */ ?>

<?php get_header(); ?>

<?php 
$title = 'Front End Development';
$subtitle = 'Start your journey as a Frontend Developer. You’ll learn all you need to know to become a Frontend Developer.';
include __DIR__ . '/../template-parts/banner.php'; 
?>

<?php

$course_outline = [
  [
    'name' => 'Pre-course Introduction',
    'content' => 'Introduction to front-end development, languages used and their functionalities, structure, and understanding development in general.'
  ],
  [
    'name' => 'User Interface Design',
    'content' => 'Introduction to fundamental UI (User Interface) designs, layouts, components, typography, using the 12 grid system.'
  ],
  [
    'name' => 'Markup and Styling',
    'content' => 'Getting Started in HTML5, CSS3, responsiveness, structure, elements and usage.'
  ],
  [
    'name' => 'JavaScript',
    'content' => 'Introduction to JavaScript language, DOM manipulations and the basics needed for this course.'
  ],
  [
    'name' => 'Framework',
    'content' => 'Introduction to Bootstrap framework for CSS, setup, usage and best pratices.'
  ],
  [
    'name' => 'Course Project',
    'content' => 'End of Course Project.'
  ],
  [
    'name' => 'Valuable tips and further mentorship',
    'content' => 'Tips on how to go on from here, getting your first client, setting up a new project quickly and development. I will also be answering any of your questions even after the course.'
  ]
]

?>

<div class="container-fluid my-5 py-5">
  <div class="container col-12 col-lg-10 py-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-7 mb-3">
        <h3 class="h1 fw-bold">Learn to create a responsive website.</h3>
        <p class="lead">This is a beginner-friendly programme with no prerequisites required, while some
          may have previously written coded or heard about it, it's an addition. First-time/all learners will be given
          pre-course introductions and
          basic resources to boost their confidence with key concepts.</p>
      </div>
      <div class="col-12 col-md-5 mb-3 p-4 bg-primary text-white rounded-3">
        <h3 class="h1 fw-bold">Date</h3>
        <p class="lead">Starts on the 12th of April, 2021 and ends on the 30th of April, 2021.</p>
        <p class="lead">3 weeks intensive training, 4 days a week. For every week, training happens for 3 days and
          the last day is for exercises and questions.</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid my-5 py-5 bg-light rounded-3">
  <div class="container my-3">
    <div class="d-block text-center">
      <h1 class="h1 fw-bold text-primary">What I will be teaching</h1>
      <p>This course covers the fundamentals on HTML, CSS, JavaScript, and a CSS framework named Bootstrap.
      </p>
    </div>
    <div class="d-block pt-5">
      <?php foreach ($course_outline as $key => $value) : ?>
      <div class="row py-4 justify-content-end <?= ($key + 1) !== count($course_outline) ? 'border-bottom' : ''; ?>">
        <div class="col-1 me-2 me-lg-0">
          <h3 class="h3 fw-bold text-primary">0<?= $key + 1; ?>.</h3>
        </div>
        <div class="col">
          <h3 class="h3 fw-bold text-primary"><?= $value['name']; ?></h3>
        </div>
        <div class="col-12 col-md">
          <p class="p mb-0"><?= $value['content']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="container-fluid my-5 py-5">
  <div class="container my-3">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6 mb-3">
        <h3 class="h1 fw-bold">Fair payment options.</h3>
        <p class="lead">Start learning now, figure out payments later. I offer two payment options which are upfront
          payment and installment payment.</p>
      </div>
      <div class="col-12 col-lg-6">
        <h3 class=" h1 fw-bold">Payment structure.</h3>
        <p class="lead">Installment payment does not incur any extra charges, you learning is more important to me.</p>
        <p class="lead">For one-on-one training, get in touch with me for price and process.</p>
        <div class="row">
          <div class="col-12 col-sm-6 mb-3">
            <div class="card border-0 bg-primary rounded-3 h-100">
              <div class="card-body d-flex flex-column justify-content-center text-white py-5">
                <h5 class="card-title small">Full Payment</h5>
                <p class="card-text display-6 fw-bold">GHc 300.00</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 mb-3">
            <div class="card border-0 bg-light rounded-3 h-100">
              <div class="card-body d-flex flex-column justify-content-center py-5">
                <h5 class="card-title small">Installment Payment option - Weekly</h5>
                <p class="card-text display-6 fw-bold text-primary">GHc 100.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mb-3 pb-3">
  <div class="container col-12 col-lg-9 text-center py-5 bg-light rounded-3">
    <div class="row">
      <div class="col-12">
        <h3 class="h3 fw-bold">Are you ready?</h3>
        <p class="p">To get started, reach me via any of the below.</p>
        <ul class="nav flex-row justify-content-center py-1 small">
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
        </ul>
        <p class="p">Chat me on Telegram.</p>
        <ul class="nav flex-row justify-content-center py-1 small">
          <li class="nav-item">
            <a class="nav-link" href="https://t.me/dharnarh" target="_blank" rel="noreferrer">
              <img src="<?= get_template_directory_uri() . '/assets/images/svg/send.svg'; ?>" alt="Telegram"
                class="img-fluid m-social" />
            </a>
          </li>
        </ul>
        <p class="p">Call me on.</p>
        <a class="nav-link lead fw-bold" href="tel:+233245183621" target="_blank" rel="noreferrer">
          +233 (245) 183 621
        </a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>