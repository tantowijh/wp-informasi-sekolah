<?php
require('header.php');
?>

<!-- Main content -->
<main>
    <?php
    include('breadcrumb.php');
    ?>
    <div class="container py-4 mb-4">
        <div class="p-5 mb-4 zd-main-opacity border rounded-3">
            <div class="container-fluid py-5">
                <h2 class="fw-bold">Academics</h2>
                <p class="col lead-zuledu">
                    At ZulEdu, educators prepare students for excellence by encouraging them to take responsibility for their learning and refine their study skills. Each child has a unique set of talents and abilities, and as they grow, we aim to help them apply their knowledge consistently, confidently and effectively.
                    Our international programme equips senior learners with the tools they need to thrive in the years leading up to studying at university, and our student-centred teaching methods are designed to help them reach their full potential in all subject areas.
                </p>
                <div class="row text-start row-cols-1 row-cols-lg-2 align-items-stretch g-4 py-5 d-flex justify-content-center">
                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden shadow-lg">
                            <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('assets/img/academics/elementary-school.jpg');">
                                <i class="fa-solid fa-language fa-4x"></i>
                                <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                    Elementary School
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden shadow-lg">
                            <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('assets/img/academics/middle-school.jpg');">
                                <i class="fa-solid fa-square-root-variable fa-4x"></i>
                                <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                    Middle School
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden shadow-lg">
                            <div class="d-flex flex-column h-100 p-5 pb-3 zuledu-secondary-color text-shadow-1" style="background-image: url('assets/img/academics/high-school.jpg');">
                                <i class="fa-solid fa-flask fa-4x"></i>
                                <h3 class="mt-3 mb-4 display-6 lh-1 fw-bold">
                                    High School
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require('footer.php');
?>