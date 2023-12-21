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
    } elseif (basename($_SERVER['PHP_SELF']) == "about.php") {
        return 'ZulEdu - Tentang Kami';
    } elseif (basename($_SERVER['PHP_SELF']) === "galleries.php") {
        return 'ZulEdu - Gallery';
    } elseif (basename($_SERVER['PHP_SELF']) === "admission.php") {
        return 'ZulEdu - Pendaftaran';
    } elseif (basename($_SERVER['PHP_SELF']) === "academics.php") {
        return 'ZulEdu - Akademik';
    } else {
        return 'ZulEdu';
    }
}
function navLink($pageName, string $link = '')
{
    if (basename($_SERVER['PHP_SELF']) === $pageName) {
        return '#';
    } elseif (basename($_SERVER['PHP_SELF']) === "index.php" && $pageName === "/") {
        return "#";
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

<?php
$provinsi_per_region = array(
    'Sumatra' => array(
        'Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Riau', 'Kepulauan Riau', 'Jambi', 'Sumatera Selatan', 'Bangka Belitung', 'Bengkulu', 'Lampung'
    ),
    'Java' => array(
        'DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah', 'DI Yogyakarta', 'Jawa Timur'
    ),
    'Bali & Nusa Tenggara' => array(
        'Bali', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur'
    ),
    'Kalimantan' => array(
        'Kalimantan Barat', 'Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur', 'Kalimantan Utara'
    ),
    'Sulawesi' => array(
        'Gorontalo', 'Sulawesi Utara', 'Sulawesi Tengah', 'Sulawesi Selatan', 'Sulawesi Tenggara', 'Sulawesi Barat'
    ),
    'Maluku & Papua' => array(
        'Maluku', 'Maluku Utara', 'Papua Barat', 'Papua'
    )
);
?>