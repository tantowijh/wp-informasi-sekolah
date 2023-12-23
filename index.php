<?php
require('header.php');
?>
<!-- Banner Section -->
<main>
    <section class="hero">
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/hero-1.jpg" class="w-100" alt="">
                    <div class="zuledu-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>ZulEdu.</h1>
                            <p class="opacity-75">Zone for Unparalleled Learning Education.</p>
                            <p><a class="btn min-btn btn-zuledu" id="startReading-Button" href="#start-reading" role="button">View More</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/hero-2.jpg" class="w-100" alt="">
                    <div class="zuledu-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Empower Growth</h1>
                            <p>We provide the insight and knowledge you need to succeed.</p>
                            <p><a class="btn min-btn btn-zuledu" href="galleries.php" role="button">View Gallery</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/hero-3.jpg" class="w-100" alt="">
                    <div class="zuledu-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Enhance Your Learning</h1>
                            <p>Your educational progress starts here. Join ZulEdu.</p>
                            <p><a class="btn min-btn btn-zuledu" href="admission.php" role="button">Start Learning</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Mission -->
    <section class="misi-sekolah py-5 text-white content-color pattern-bg" id="start-reading">
        <div class="py-5 text-center container">
            <h1 class="pb-2 border-bottom text-uppercase content-color fw-bolder">Mission and Vision</h1>
            <div class="pt-3 col-lg-9 mx-auto">
                <p class="lead-zuledu content-color text-start">
                    Our Mission and Vision guide everything that we do from how we learn to the dispositions that ZulEdu students gain while at our school.
                <ol class="text-start z-mt-0">
                    <li>We are passionate, inquisitive and creative</li>
                    <li>Learning in Indonesia to be best for the world.</li>
                    <li>We value perseverance, integrity, responsibility, respect, compassion, balance and fun.</li>
                    <li>We will inspire joyful, rigorous learning and foster wellness as a pioneering, inclusive, and collaborative community.</li>
                    <li>We learn by reflecting and relating, by being resourceful and resilient.</li>
                </ol>
                </p>
            </div>
        </div>
    </section>
    <!-- Admission CTA -->
    <section class="zuledu-background-fixed py-5 text-white">
        <div class="py-5 text-center container">
            <svg class="d-none" xmlns="http://www.w3.org/2000/svg">
                <!-- Logo -->
                <symbol id="zuledu-center" viewBox="0 0 577.2 88.3">
                    <g>
                        <path d="M88.49,87.17H0L45.09,20.82H3.71V0H88.49l-45,66.29h45Z" style="fill: var(--logo-main-color-2)" />
                        <path d="M193.21,48.11q0,11.2-4.19,19.09A33.49,33.49,0,0,1,178,79.69a47.67,47.67,0,0,1-14.85,6.6,64.61,64.61,0,0,1-15.88,2,63.2,63.2,0,0,1-21.54-3.77A38.25,38.25,0,0,1,108.18,71.7q-7.05-9.06-7.05-23.59V0h26.23V41.32c0,5.75.83,10.49,2.48,14.25a17.18,17.18,0,0,0,6.92,8.23,21.94,21.94,0,0,0,20.72,0,17,17,0,0,0,7-8.18q2.49-5.59,2.49-14.21V0h26.29Z" style="fill: var(--logo-main-color-2)" />
                        <path d="M280.06,87.17H213.84V0h26.28V66.29h39.94Z" style="fill: var(--logo-main-color-2)" />
                        <path d="M470.16,45.16q0,13.4-4.87,21.51a46,46,0,0,1-11.48,13.14q-9.37,7.36-26.23,7.36h-47V0h36.22a98.2,98.2,0,0,1,14,.85,61.79,61.79,0,0,1,10.47,2.39,41.62,41.62,0,0,1,7.92,3.46A40.66,40.66,0,0,1,455,10.82a39.83,39.83,0,0,1,7.83,8.61,42.39,42.39,0,0,1,5.35,11.51A48.88,48.88,0,0,1,470.16,45.16ZM443.43,44q0-10.62-4.06-16.57a19.85,19.85,0,0,0-9.74-7.95,34.69,34.69,0,0,0-11.61-2H406.83V69.12H418a32,32,0,0,0,17.86-4.91Q443.43,59.31,443.43,44Z" style="fill: var(--logo-main-color-2)" />
                        <path d="M577.2,48.11q0,11.2-4.18,19.09A33.6,33.6,0,0,1,562,79.69a47.62,47.62,0,0,1-14.84,6.6,64.67,64.67,0,0,1-15.88,2,63.2,63.2,0,0,1-21.54-3.77A38.32,38.32,0,0,1,492.17,71.7q-7.05-9.06-7-23.59V0h26.22V41.32c0,5.75.83,10.49,2.49,14.25a17.13,17.13,0,0,0,6.92,8.23,21.94,21.94,0,0,0,20.72,0,17,17,0,0,0,6.95-8.18q2.48-5.59,2.48-14.21V0H577.2Z" style="fill: var(--logo-main-color-2)" />
                        <polygon points="323.49 17.48 333.2 17.48 361.86 17.48 361.86 0 297.2 0 297.2 17.48 323.49 17.48" style="fill: var(--logo-secondary-color-2)" />
                        <polygon points="323.49 69.62 323.49 51.01 360.1 51.01 360.1 33.46 333.2 33.46 323.49 33.46 297.2 33.46 297.2 87.17 362.93 87.17 362.93 69.62 323.49 69.62" style="fill: var(--logo-main-color-2)" />
                    </g>
                </symbol>
            </svg>
            <div class="cta-container">
                <span class="admission-cta-text"> APPLY TO</span>
                <svg><use href="#zuledu-center"></use></svg>
                <span class="admission-cta-text"> TODAY</span>
                <div>
                    <a href="admission.php">
                        <button class="zuledu-cta-btn" type="button">Join Our School</button>
                    </a>
                    <a href="contact.php">
                        <button class="zuledu-cta-btn" type="button">Contact Us</button>
                    </a>
                </div>                    
            </div>
        </div>
    </section>
    <!-- Prestasi -->
    <section class="prestasi pt-5">
        <div class="container py-5 text-center">
            <h1 class="pb-2 text-uppercase border-bottom">OUR SCHOOL BY THE NUMBERS</h1>
            <div class="row justify-content-center pt-3 z-icon">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                    <div class="item p-4 rounded text-center">
                        <i class="fa-solid fa-trophy"></i>
                        <p class="mt-3 mb-0">88%</p>
                        <span>Participate in Extracurriculars</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                    <div class="item p-4 rounded text-center">
                        <i class="fa-solid fa-user-graduate"></i>
                        <p class="mt-3 mb-0">97%</p>
                        <span>Graduation Rate</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                    <div class="item p-4 rounded text-center">
                        <i class="fa-solid fa-building-columns"></i>
                        <p class="mt-3 mb-0">90%</p>
                        <span>Students Continuing their Education</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                    <div class="item p-4 rounded text-center">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <p class="mt-3 mb-0">100%</p>
                        <span>Certification - Student Services</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Program -->
    <section>
        <div class="container text-center px-4 py-5" id="custom-cards">
            <h1 class="pb-2 text-uppercase border-bottom">Personal Growth and Development</h1>

            <div class="row text-start row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('assets/img/departments/english.jpg');">
                            <i class="fa-solid fa-language fa-4x"></i>
                            <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                English Department
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('assets/img/departments/math.jpg');">
                            <i class="fa-solid fa-square-root-variable fa-4x"></i>
                            <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                Mathematics Department
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('assets/img/departments/science.jpg');">
                            <i class="fa-solid fa-flask fa-4x"></i>
                            <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                Science Department
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('assets/img/departments/social-study.jpg');">
                            <i class="fa-solid fa-globe fa-4x"></i>
                            <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                Social Studies Department
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('assets/img/departments/physical-edu.jpg');">
                            <i class="fa-solid fa-person-walking fa-4x"></i>
                            <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                Physical Education Department
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('assets/img/departments/extracurricular.jpg');">
                            <i class="fa-solid fa-palette fa-4x"></i>
                            <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                Extracurricular Activities
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Video -->
    <section class="zuledu-video py-5 text-white">
        <div class="py-5 text-center container">
            <div class="row">
                <h2 class="pb-2 text-uppercase text-center">Latest Videos</h2>
                <div class="col-md-12 gallery-container">
                    <p>
                        <?php
                            // Array of YouTube video IDs
                            $videoIds = array(
                                '9YuO6np8Ma8',
                                'Zc3iFsYr-AE',
                                '4Ba_qTPA4Ds',
                                'NPLeuBXoPXI',
                            );

                            if($videoIds) {
                                foreach($videoIds as $videoId) {
                                    echo '<div class="gallery-item">';
                                    echo '<a href="https://www.youtube.com/watch?v=' . $videoId . '" data-fancybox="video-gallery">';
                                    echo '<img alt="" width="200" src="https://i3.ytimg.com/vi/' . $videoId . '/hqdefault.jpg">';
                                    echo '</a>';
                                    echo '</div>';
                                }
                                echo '<script src="assets/js/fancybox.umd.js"></script>';
                                echo '<script src="assets/js/custom.videoku.js"></script>';
                            } else {
                                echo '<div><p>There are no videos to display.</p></div>';
                            }

                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Footer -->
<?php
require('footer.php');
?>