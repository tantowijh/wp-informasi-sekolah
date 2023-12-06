document.addEventListener('DOMContentLoaded', function () {
    var navbar = document.querySelector('.zul-nav-scroll');
    var prevScrollpos = window.scrollY;

    window.addEventListener('scroll', function () {
        var currentScrollPos = window.scrollY;
        if (prevScrollpos > currentScrollPos) {
            navbar.classList.add('sticky-top');
        } else {
            navbar.classList.remove('sticky-top');
        }
        prevScrollpos = currentScrollPos;
    });


    var currentPageUrl = window.location.href;
    var footer = document.querySelector('.zuledu-footer-container');
    // Apakah url saat ini mengandung "search.php"
    if (currentPageUrl.indexOf('search.php') !== -1) {
        footer.classList.add('fixed-bottom');
    }
});
