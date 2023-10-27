<div class="zuledu-main-color zuledu-footer-container">
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">&copy; <?php echo date('Y');?> - High School </p>

            <a href="<?php echo navLink('index.php'); ?>" class="col-md-4 d-flex align-items-center justify-content-center mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="img/zuledu.png">
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <?php echo footerItem('index.php', 'Home'); ?>
                <?php echo footerItem('zuledu.php', 'ZulEdu'); ?>
                <?php echo footerItem('gallery.php', 'Gallery'); ?>
            </ul>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>