<?php
require('header.php');
?>

<!-- Main content -->
<main>
    <?php
    include('breadcrumb.php');
    ?>
    <div class="container py-4 mb-4 about-zuledu">
        <div class="p-5 mb-4 zd-main-opacity border rounded-3">
            <div class="container-fluid py-3">
                <h1 class="fw-bold">About ZulEdu</h1>
                <p class="col lead-zuledu">
                    We create, teach, and learn together across three garden-like campuses with leading-edge facilities that support independent inquiry, critical thinking, problem-solving, and collaborative study.
                    We play sports, put on drama productions, paint, sculpt, engineer, and create. Our students are able to explore and grow in a safe environment and are encouraged to follow their passions to be as successful as they can be.
                </p>
            </div>
        </div>

        <div class="row align-items-md-stretch mb-2">
            <div class="col-md-6 mb-2">
                <div class="h-100 p-5 zd-main-opacity border rounded-3">
                    <h2 class="fw-bold">Inspire Learning</h2>
                    <p>We view each individual as a lifelong learner and are committed to providing educational resources and experiences that are relevant, in-depth, and enjoyable. With a love of learning, we encourage them to explore, grow and contribute to the world.</p>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="h-100 p-5 zd-main-opacity border rounded-3">
                    <h2 class="fw-bold">Learn Better</h2>
                    <p>ZulEdu's philosophy is about understanding that knowledge is the key to achieving goals and dreams. We support students on their journey to achieve success, create positive change, and become agents of change in society. We are committed to making education a life-changing force, helping each individual become the best version of themselves.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="contact-section" class="container pb-4 mb-4">
        <div class="col-md-12 my-2">
            <h1 class="pb-2 text-uppercase border-bottom">Contact ZulEdu</h1>
            <p>
                Get in touch with us for any inquiries, feedback, or information. We're here to assist you and provide the information you need.
            </p>
        </div>


        <div class="row contact-zuledu mb-2">
            <div class="col-md-8 mb-2">
                <div class="h-100 shadow map-container">
                    <iframe src="https://maps.google.com/maps?q=ubsi+bsd&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="h-100 p-5 shadow contact-container">
                    <h2 class="fw-bold">Contact Us</h2>
                    <form onsubmit="fakeEmail(); event.preventDefault();">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required oninvalid="validateInput(this, 'Sorry, ZulEdu needs your name.')" oninput="clearCustomValidity(this)">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" oninvalid="validateInput(this, 'Sorry, ZulEdu needs your email.')" oninput="clearCustomValidity(this)">
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required oninvalid="validateInput(this, 'Sorry, ZulEdu needs the subject.')" oninput="clearCustomValidity(this)">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required oninvalid="validateInput(this, 'Sorry, ZulEdu needs your message, paling penting ini :) .')" oninput="clearCustomValidity(this)"></textarea>
                        </div>

                        <button type="submit" class="btn">Contact Now</button>
                    </form>
                    <div id="form-message"></div>
                </div>
            </div>
        </div>
    </div>
</main>



<?php
require('footer.php');
?>