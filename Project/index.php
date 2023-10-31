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
                            <p><a class="btn min-btn btn-zuledu" href="#" role="button">Start Learning</a></p>
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
                            <p><a class="btn min-btn btn-zuledu" href="#" role="button">View Gallery</a></p>
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
                            <p><a class="btn min-btn btn-zuledu" id="startReading-Button" href="#start-reading" role="button">View More</a></p>
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
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('https://media.istockphoto.com/id/1047570732/vector/english.jpg?s=612x612&w=0&k=20&c=zgafUJxCytevU-ZRlrZlTEpw3mLlS_HQTIOHLjaSPPM=');">
                            <i class="fa-solid fa-language fa-4x"></i>
                            <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                English Department
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('https://img.freepik.com/free-vector/math-background_23-2148146269.jpg?w=360');">
                            <i class="fa-solid fa-square-root-variable fa-4x"></i>
                            <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                Mathematics Department
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('https://cdn3.vectorstock.com/i/1000x1000/95/22/science-background-research-outline-icons-vector-26539522.jpg');">
                            <i class="fa-solid fa-flask fa-4x"></i>
                            <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                Science Department
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('https://news.mit.edu/sites/default/files/styles/news_article__image_gallery/public/images/202209/MIT_Weak-Ties-01-PRESS_0.jpg?itok=WI9LkFVZ');">
                            <i class="fa-solid fa-globe fa-4x"></i>
                            <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                Social Studies Department
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('https://static.vecteezy.com/system/resources/previews/002/512/050/original/illustration-of-fitness-girls-performing-sports-exercises-on-a-pink-background-vector.jpg');">
                            <i class="fa-solid fa-person-walking fa-4x"></i>
                            <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                Physical Education Department
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('https://static.vecteezy.com/system/resources/thumbnails/028/624/866/small/abstract-graffiti-art-background-generative-ai-photo.jpg');">
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

</main>
<!-- Footer -->
<?php
require('footer.php');
?>