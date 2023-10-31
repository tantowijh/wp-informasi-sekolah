document.addEventListener('DOMContentLoaded', function() {
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
});
