<!doctype html>
<html lang="en">
<?php
require('functions.php');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo subTitle(); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fancybox.css" />
    <script src="assets/js/048de552e6.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</head>

<body>
    <!-- ZulEdu SVG -->
    <svg class="d-none" xmlns="http://www.w3.org/2000/svg">
        <!-- Logo -->
        <symbol id="zuledu" viewBox="0 0 577.2 88.3">
            <g>
                <path d="M88.49,87.17H0L45.09,20.82H3.71V0H88.49l-45,66.29h45Z" style="fill: var(--logo-main-color)" />
                <path d="M193.21,48.11q0,11.2-4.19,19.09A33.49,33.49,0,0,1,178,79.69a47.67,47.67,0,0,1-14.85,6.6,64.61,64.61,0,0,1-15.88,2,63.2,63.2,0,0,1-21.54-3.77A38.25,38.25,0,0,1,108.18,71.7q-7.05-9.06-7.05-23.59V0h26.23V41.32c0,5.75.83,10.49,2.48,14.25a17.18,17.18,0,0,0,6.92,8.23,21.94,21.94,0,0,0,20.72,0,17,17,0,0,0,7-8.18q2.49-5.59,2.49-14.21V0h26.29Z" style="fill: var(--logo-main-color)" />
                <path d="M280.06,87.17H213.84V0h26.28V66.29h39.94Z" style="fill: var(--logo-main-color)" />
                <path d="M470.16,45.16q0,13.4-4.87,21.51a46,46,0,0,1-11.48,13.14q-9.37,7.36-26.23,7.36h-47V0h36.22a98.2,98.2,0,0,1,14,.85,61.79,61.79,0,0,1,10.47,2.39,41.62,41.62,0,0,1,7.92,3.46A40.66,40.66,0,0,1,455,10.82a39.83,39.83,0,0,1,7.83,8.61,42.39,42.39,0,0,1,5.35,11.51A48.88,48.88,0,0,1,470.16,45.16ZM443.43,44q0-10.62-4.06-16.57a19.85,19.85,0,0,0-9.74-7.95,34.69,34.69,0,0,0-11.61-2H406.83V69.12H418a32,32,0,0,0,17.86-4.91Q443.43,59.31,443.43,44Z" style="fill: var(--logo-main-color)" />
                <path d="M577.2,48.11q0,11.2-4.18,19.09A33.6,33.6,0,0,1,562,79.69a47.62,47.62,0,0,1-14.84,6.6,64.67,64.67,0,0,1-15.88,2,63.2,63.2,0,0,1-21.54-3.77A38.32,38.32,0,0,1,492.17,71.7q-7.05-9.06-7-23.59V0h26.22V41.32c0,5.75.83,10.49,2.49,14.25a17.13,17.13,0,0,0,6.92,8.23,21.94,21.94,0,0,0,20.72,0,17,17,0,0,0,6.95-8.18q2.48-5.59,2.48-14.21V0H577.2Z" style="fill: var(--logo-main-color)" />
                <polygon points="323.49 17.48 333.2 17.48 361.86 17.48 361.86 0 297.2 0 297.2 17.48 323.49 17.48" style="fill: var(--logo-secondary-color)" />
                <polygon points="323.49 69.62 323.49 51.01 360.1 51.01 360.1 33.46 333.2 33.46 323.49 33.46 297.2 33.46 297.2 87.17 362.93 87.17 362.93 69.62 323.49 69.62" style="fill: var(--logo-main-color)" />
            </g>
        </symbol>
    </svg>
    <!-- End ZulEdu SVG -->
    <!-- Navigation bar -->
    <header class="py-1 zuledu-main-color zul-nav-scroll sticky-top shadow-lg">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary nav-color border-bottom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo navLink('/'); ?>">
                        <svg><use href="#zuledu"></use></svg>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <?php echo headerItem('about.php', 'About'); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo headerItem('admission.php', 'Admission'); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo headerItem('academics.php', 'Academics'); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo headerItem('galleries.php', 'Galleries'); ?>
                            </li>
                        </ul>
                        <form class="d-flex" role="search" method="POST" action="search.php">
                            <input name="search" class="form-control me-2 placeholder-color" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-cari-color" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>