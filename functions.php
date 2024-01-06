<?php
$pageTitle = ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME));

// Memunculkan class active di link sesuai halaman
function isActiveLink($pageName)
{
    if (basename($_SERVER['PHP_SELF']) === $pageName) {
        return 'active';
    } else {
        return '';
    }
}

// Memunculkan aria-current="page" di link sesuai halaman
function isCurrentPage($pageName)
{
    if (basename($_SERVER['PHP_SELF']) === $pageName) {
        return 'aria-current="page"';
    } else {
        return '';
    }
}

// Memunculkan title di tab sesuai halaman
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

// Memunculkan link sesuai halaman di navbar
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

// Memunculkan link sesuai halaman di header
function headerItem($pageName, $itemName) {
    return '<a class="nav-link ' . isActiveLink($pageName) . '" ' 
    . isCurrentPage($pageName) . ' href="' . navLink($pageName) . '">' . $itemName . '</a>';
}

// Memunculkan link sesuai halaman di footer
function footerItem($pageName, $itemName) {
    return '<li class="nav-item"><a href="' . navLink($pageName) 
    . '" class="nav-link px-2 text-body-secondary ' . isActiveLink($pageName) 
    . '" ' . isCurrentPage($pageName) . '>' . $itemName . '</a></li>';
}
?>

<?php
// Data provinsi
$provinsi_per_region = array(
    'Sumatra' => array(
        'Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Riau', 'Jambi', 'Sumatera Selatan', 'Bengkulu', 'Lampung', 'Kepulauan Bangka Belitung', 'Kepulauan Riau'
    ),
    'Java' => array(
        'DKI Jakarta', 'Jawa Barat', 'Jawa Tengah', 'DI Yogyakarta', 'Jawa Timur', 'Banten'
    ),
    'Bali & Nusa Tenggara' => array(
        'Bali', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur'
    ),
    'Kalimantan' => array(
        'Kalimantan Barat', 'Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur', 'Kalimantan Utara'
    ),
    'Sulawesi' => array(
        'Sulawesi Utara', 'Sulawesi Tengah', 'Sulawesi Selatan', 'Sulawesi Tenggara', 'Gorontalo', 'Sulawesi Barat'
    ),
    'Maluku & Papua' => array(
        'Maluku', 'Maluku Utara', 'Papua Barat', 'Papua'
    )
);
?>