<div class="zuledu-main-color zuledu-footer-container pattern-bg border-top">
    <div class="container footer-list pt-4">
        <div class="row justify-content-center align-bottom">
            <p>Our School</p>
            <div class="col-6 col-md-4 mb-3">
                <ul class="nav flex-column">
                    <li>0812635797177</li>
                    <li>BSD City School</li>
                    <li>Jl. Griya Loka</li>
                    <li>BSD, Tanggerang Selatan 15310</li>
                </ul>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <ul class="nav flex-column">
                    <li>081265900233</li>
                    <li>Pondok Indah School</li>
                    <li>Jl. Duta Indah III</li>
                    <li>Pondok Indah, Jakarta 12310</li>
                </ul>
            </div>
            <div class="col-6 col-md-4 mb-3">
                <ul class="nav flex-column">
                    <li>0812872266135</li>
                    <li>Jagakarsa School</li>
                    <li>Jl. Moch Kahfi II</li>
                    <li>Jagakarsa, Jakarta Selatan 12620</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">&copy; <?php echo date('Y');?> - High School </p>

            <a href="<?php echo navLink('index.php'); ?>" class="col-md-4 d-flex align-items-center justify-content-center mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg><use href="#zuledu"></use></svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <?php echo footerItem('about.php', 'About'); ?>
                <?php echo footerItem('admission.php', 'Admission'); ?>
                <?php echo footerItem('academics.php', 'Academics'); ?>
                <?php echo footerItem('galleries.php', 'Galleries'); ?>
            </ul>
        </footer>
    </div>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/fancybox.umd.js"></script>
</body>

</html>