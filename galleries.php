<?php
require('header.php');
include('breadcrumb.php');
?>

<main>
    <div class="container">
        <div class="row">
            <h1 class="pb-2 text-uppercase text-center border-bottom">ZulEdu Gallery</h1>
            <div class="col-md-12 gallery-container">
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