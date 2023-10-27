<?php
$pageTitle = ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME));
function isActiveLink($pageName)
{
    if (basename($_SERVER['PHP_SELF']) === $pageName) {
        return 'active';
    } else {
        return '';
    }
}
function isCurrentPage($pageName)
{
    if (basename($_SERVER['PHP_SELF']) === $pageName) {
        return 'aria-current="page"';
    } else {
        return '';
    }
}
function subTitle()
{
    if (basename($_SERVER['PHP_SELF']) === "index.php") {
        return 'ZulEdu - High School';
    } elseif (basename($_SERVER['PHP_SELF']) == "zuledu.php") {
        return 'ZulEdu - Tentang Kami';
    } elseif (basename($_SERVER['PHP_SELF']) === "gallery.php") {
        return 'ZulEdu - Gallery';
    } else {
        return 'ZulEdu';
    }
}
function navLink($pageName)
{
    if (basename($_SERVER['PHP_SELF']) === $pageName) {
        return '#';
    } else {
        return $pageName;
    }
}
function headerItem($pageName, $itemName) {
    return '<a class="nav-link ' . isActiveLink($pageName) . '" ' 
    . isCurrentPage($pageName) . ' href="' . navLink($pageName) . '">' . $itemName . '</a>';
}
function footerItem($pageName, $itemName) {
    return '<li class="nav-item"><a href="' . navLink($pageName) 
    . '" class="nav-link px-2 text-body-secondary ' . isActiveLink($pageName) 
    . '" ' . isCurrentPage($pageName) . '>' . $itemName . '</a></li>';
}
?>