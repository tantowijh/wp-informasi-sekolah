<?php
require('header.php');
include('breadcrumb.php');
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-2">
                <h1 class="pb-2 text-uppercase text-center border-bottom">ZulEdu Gallery</h1>
                <p class="text-center">
                    Explore the wonders of learning through our educational galleries, where each image tells a story of discovery and enlightenment.
                </p>
            </div>
            <div class="col-md-12 mb-5 gallery-container">
                <?php
                // Directory path to the folder containing images
                $image_folder = 'assets/img/galleries';

                // Get all image files from the folder
                $images = glob($image_folder . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);

                // Iterate through the images and create gallery items
                foreach ($images as $index => $image) {
                    echo '<div class="gallery-item">';
                    echo '<a data-fancybox="gallery" data-src="' . $image . '">';
                    echo '<img src="' . $image . '" alt="Image ' . ($index + 1) . '">';
                    echo '</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php require('footer.php'); ?>