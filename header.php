<!doctype html>
<html lang="en">
<?php
    require('functions.php');
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo subTitle();?></title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/048de552e6.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navigation bar -->
    <header class="sticky-top py-1 zuledu-main-color">
        <nav class="navbar navbar-expand-lg bg-body-tertiary nav-color">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo navLink('index.php');?>"><img src="img/zuledu.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <?php echo headerItem('index.php', 'Home'); ?>
                        </li>
                        <li class="nav-item">
                            <?php echo headerItem('zuledu.php', 'ZulEdu'); ?>
                        </li>
                        <li class="nav-item">
                            <?php echo headerItem('gallery.php', 'Gallery'); ?>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Informasi
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Pendaftaran</a></li>
                                <li><a class="dropdown-item" href="#">Kontak</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="zuledu.php">Sekolah</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" method="POST" action="search.php">
                        <input name="search" class="form-control me-2 placeholder-color" type="search" placeholder="Pencarian" aria-label="Pencarian">
                        <button class="btn btn-cari-color" type="submit">Cari</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>