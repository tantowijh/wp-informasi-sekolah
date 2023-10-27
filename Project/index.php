<?php
require('header.php');
?>
<!-- Banner Section -->
<main>
    <section class="hero">
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/hero-1.jpg" class="w-100" alt="">
                    <div class="zuledu-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>ZulEdu.</h1>
                            <p class="opacity-75">Zona Unggul untuk Pembelajaran dan Edukasi.</p>
                            <p><a class="btn min-btn btn-zuledu" href="#" role="button">Mulai Belajar</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/hero-2.jpg" class="w-100" alt="">
                    <div class="zuledu-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Menginspirasi Pembelajaran</h1>
                            <p>Kami memberikan wawasan dan pengetahuan yang Anda butuhkan untuk sukses.</p>
                            <p><a class="btn min-btn btn-zuledu" href="#" role="button">Lihat Gallery</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/hero-3.jpg" class="w-100" alt="">
                    <div class="zuledu-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Pelajari Lebih Baik</h1>
                            <p>Kemajuan pendidikan Anda dimulai di sini. Bergabunglah dengan ZulEdu.</p>
                            <p><a class="btn min-btn btn-zuledu" href="#start-reading" role="button">Lihat Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Mission -->
    <section class="misi-sekolah text-white py-4 content-color" id="start-reading">
        <div class="px-4 py-4  text-center">
            <h1 class="h1-zuledu content-color fw-bolder">MISI</h1>
            <div class="col-lg-9 mx-auto">
                <p class="lead-zuledu content-color mb-4">Di ZulEdu, kami memiliki komitmen kuat untuk memberikan pendidikan berkualitas yang mendalam dan berkelanjutan kepada setiap siswa. Misi kami adalah menjadi pusat pembelajaran yang memberdayakan siswa untuk mencapai potensi maksimal mereka, mempersiapkan mereka menjadi individu yang tangguh, bijaksana, dan berkontribusi positif pada masyarakat global.</p>
            </div>
        </div>
    </section>
</main>
<!-- Footer -->
<?php
require('footer.php');
?>