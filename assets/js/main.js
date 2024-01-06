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

    $(document).ready(function () {

        if (window.location.pathname.indexOf("admission.php") !== -1) {

            // Data kota
            var citiesData = {
                'Aceh': [
                    'Kabupaten Simeulue',
                    'Kabupaten Aceh Singkil',
                    'Kabupaten Aceh Selatan',
                    'Kabupaten Aceh Tenggara',
                    'Kabupaten Aceh Timur',
                    'Kabupaten Aceh Tengah',
                    'Kabupaten Aceh Barat',
                    'Kabupaten Aceh Besar',
                    'Kabupaten Pidie',
                    'Kabupaten Bireuen',
                    'Kabupaten Aceh Utara',
                    'Kabupaten Aceh Barat Daya',
                    'Kabupaten Gayo Lues',
                    'Kabupaten Aceh Tamiang',
                    'Kabupaten Nagan Raya',
                    'Kabupaten Aceh Jaya',
                    'Kabupaten Bener Meriah',
                    'Kabupaten Pidie Jaya',
                    'Kota Banda Aceh',
                    'Kota Sabang',
                    'Kota Langsa',
                    'Kota Lhokseumawe',
                    'Kota Subulussalam'
                ],
                'Sumatera Utara': [
                    'Kabupaten Nias',
                    'Kabupaten Mandailing Natal',
                    'Kabupaten Tapanuli Selatan',
                    'Kabupaten Tapanuli Tengah',
                    'Kabupaten Tapanuli Utara',
                    'Kabupaten Toba Samosir',
                    'Kabupaten Labuhan Batu',
                    'Kabupaten Asahan',
                    'Kabupaten Simalungun',
                    'Kabupaten Dairi',
                    'Kabupaten Karo',
                    'Kabupaten Deli Serdang',
                    'Kabupaten Langkat',
                    'Kabupaten Nias Selatan',
                    'Kabupaten Humbang Hasundutan',
                    'Kabupaten Pakpak Bharat',
                    'Kabupaten Samosir',
                    'Kabupaten Serdang Bedagai',
                    'Kabupaten Batu Bara',
                    'Kabupaten Padang Lawas Utara',
                    'Kabupaten Padang Lawas',
                    'Kabupaten Labuhan Batu Selatan',
                    'Kabupaten Labuhan Batu Utara',
                    'Kabupaten Nias Utara',
                    'Kabupaten Nias Barat',
                    'Kota Sibolga',
                    'Kota Tanjung Balai',
                    'Kota Pematang Siantar',
                    'Kota Tebing Tinggi',
                    'Kota Medan',
                    'Kota Binjai',
                    'Kota Padangsidimpuan',
                    'Kota Gunungsitoli'
                ],
                'Sumatera Barat': [
                    'Kabupaten Kepulauan Mentawai',
                    'Kabupaten Pesisir Selatan',
                    'Kabupaten Solok',
                    'Kabupaten Sijunjung',
                    'Kabupaten Tanah Datar',
                    'Kabupaten Padang Pariaman',
                    'Kabupaten Agam',
                    'Kabupaten Lima Puluh Kota',
                    'Kabupaten Pasaman',
                    'Kabupaten Solok Selatan',
                    'Kabupaten Dharmasraya',
                    'Kabupaten Pasaman Barat',
                    'Kota Padang',
                    'Kota Solok',
                    'Kota Sawah Lunto',
                    'Kota Padang Panjang',
                    'Kota Bukittinggi',
                    'Kota Payakumbuh',
                    'Kota Pariaman'
                ],
                'Riau': [
                    'Kabupaten Kuantan Singingi',
                    'Kabupaten Indragiri Hulu',
                    'Kabupaten Indragiri Hilir',
                    'Kabupaten Pelalawan',
                    'Kabupaten S I A K',
                    'Kabupaten Kampar',
                    'Kabupaten Rokan Hulu',
                    'Kabupaten Bengkalis',
                    'Kabupaten Rokan Hilir',
                    'Kabupaten Kepulauan Meranti',
                    'Kota Pekanbaru',
                    'Kota D U M A I'
                ],
                'Jambi': [
                    'Kabupaten Kerinci',
                    'Kabupaten Merangin',
                    'Kabupaten Sarolangun',
                    'Kabupaten Batang Hari',
                    'Kabupaten Muaro Jambi',
                    'Kabupaten Tanjung Jabung Timur',
                    'Kabupaten Tanjung Jabung Barat',
                    'Kabupaten Tebo',
                    'Kabupaten Bungo',
                    'Kota Jambi',
                    'Kota Sungai Penuh'
                ],
                'Kepulauan Riau': [
                    'Kabupaten Karimun',
                    'Kabupaten Bintan',
                    'Kabupaten Natuna',
                    'Kabupaten Lingga',
                    'Kabupaten Kepulauan Anambas',
                    'Kota B A T A M',
                    'Kota Tanjung Pinang'
                ],
                'Sumatera Selatan': [
                    'Kabupaten Ogan Komering Ulu',
                    'Kabupaten Ogan Komering Ilir',
                    'Kabupaten Muara Enim',
                    'Kabupaten Lahat',
                    'Kabupaten Musi Rawas',
                    'Kabupaten Musi Banyuasin',
                    'Kabupaten Banyu Asin',
                    'Kabupaten Ogan Komering Ulu Selatan',
                    'Kabupaten Ogan Komering Ulu Timur',
                    'Kabupaten Ogan Ilir',
                    'Kabupaten Empat Lawang',
                    'Kabupaten Penukal Abab Lematang Ilir',
                    'Kabupaten Musi Rawas Utara',
                    'Kota Palembang',
                    'Kota Prabumulih',
                    'Kota Pagar Alam',
                    'Kota Lubuklinggau'
                ],
                'Kepulauan Bangka Belitung': [
                    'Kabupaten Bangka',
                    'Kabupaten Belitung',
                    'Kabupaten Bangka Barat',
                    'Kabupaten Bangka Tengah',
                    'Kabupaten Bangka Selatan',
                    'Kabupaten Belitung Timur',
                    'Kota Pangkal Pinang'
                ],
                'Bengkulu': [
                    'Kabupaten Bengkulu Selatan',
                    'Kabupaten Rejang Lebong',
                    'Kabupaten Bengkulu Utara',
                    'Kabupaten Kaur',
                    'Kabupaten Seluma',
                    'Kabupaten Mukomuko',
                    'Kabupaten Lebong',
                    'Kabupaten Kepahiang',
                    'Kabupaten Bengkulu Tengah',
                    'Kota Bengkulu'
                ],
                'Lampung': [
                    'Kabupaten Lampung Barat',
                    'Kabupaten Tanggamus',
                    'Kabupaten Lampung Selatan',
                    'Kabupaten Lampung Timur',
                    'Kabupaten Lampung Tengah',
                    'Kabupaten Lampung Utara',
                    'Kabupaten Way Kanan',
                    'Kabupaten Tulangbawang',
                    'Kabupaten Pesawaran',
                    'Kabupaten Pringsewu',
                    'Kabupaten Mesuji',
                    'Kabupaten Tulang Bawang Barat',
                    'Kabupaten Pesisir Barat',
                    'Kota Bandar Lampung',
                    'Kota Metro'
                ],
                'DKI Jakarta': [
                    'Kabupaten Kepulauan Seribu',
                    'Kota Jakarta Selatan',
                    'Kota Jakarta Timur',
                    'Kota Jakarta Pusat',
                    'Kota Jakarta Barat',
                    'Kota Jakarta Utara'
                ],
                'Jawa Barat': [
                    'Kabupaten Bogor',
                    'Kabupaten Sukabumi',
                    'Kabupaten Cianjur',
                    'Kabupaten Bandung',
                    'Kabupaten Garut',
                    'Kabupaten Tasikmalaya',
                    'Kabupaten Ciamis',
                    'Kabupaten Kuningan',
                    'Kabupaten Cirebon',
                    'Kabupaten Majalengka',
                    'Kabupaten Sumedang',
                    'Kabupaten Indramayu',
                    'Kabupaten Subang',
                    'Kabupaten Purwakarta',
                    'Kabupaten Karawang',
                    'Kabupaten Bekasi',
                    'Kabupaten Bandung Barat',
                    'Kabupaten Pangandaran',
                    'Kota Bogor',
                    'Kota Sukabumi',
                    'Kota Bandung',
                    'Kota Cirebon',
                    'Kota Bekasi',
                    'Kota Depok',
                    'Kota Cimahi',
                    'Kota Tasikmalaya',
                    'Kota Banjar'
                ],
                'Banten': [
                    'Kabupaten Pandeglang',
                    'Kabupaten Lebak',
                    'Kabupaten Tangerang',
                    'Kabupaten Serang',
                    'Kota Tangerang',
                    'Kota Cilegon',
                    'Kota Serang',
                    'Kota Tangerang Selatan'
                ],
                'Jawa Tengah': [
                    'Kabupaten Cilacap',
                    'Kabupaten Banyumas',
                    'Kabupaten Purbalingga',
                    'Kabupaten Banjarnegara',
                    'Kabupaten Kebumen',
                    'Kabupaten Purworejo',
                    'Kabupaten Wonosobo',
                    'Kabupaten Magelang',
                    'Kabupaten Boyolali',
                    'Kabupaten Klaten',
                    'Kabupaten Sukoharjo',
                    'Kabupaten Wonogiri',
                    'Kabupaten Karanganyar',
                    'Kabupaten Sragen',
                    'Kabupaten Grobogan',
                    'Kabupaten Blora',
                    'Kabupaten Rembang',
                    'Kabupaten Pati',
                    'Kabupaten Kudus',
                    'Kabupaten Jepara',
                    'Kabupaten Demak',
                    'Kabupaten Semarang',
                    'Kabupaten Temanggung',
                    'Kabupaten Kendal',
                    'Kabupaten Batang',
                    'Kabupaten Pekalongan',
                    'Kabupaten Pemalang',
                    'Kabupaten Tegal',
                    'Kabupaten Brebes',
                    'Kota Magelang',
                    'Kota Surakarta',
                    'Kota Salatiga',
                    'Kota Semarang',
                    'Kota Pekalongan',
                    'Kota Tegal'
                ],
                'DI Yogyakarta': [
                    'Kabupaten Kulon Progo',
                    'Kabupaten Bantul',
                    'Kabupaten Gunung Kidul',
                    'Kabupaten Sleman',
                    'Kota Yogyakarta'
                ],
                'Jawa Timur': [
                    'Kabupaten Pacitan',
                    'Kabupaten Ponorogo',
                    'Kabupaten Trenggalek',
                    'Kabupaten Tulungagung',
                    'Kabupaten Blitar',
                    'Kabupaten Kediri',
                    'Kabupaten Malang',
                    'Kabupaten Lumajang',
                    'Kabupaten Jember',
                    'Kabupaten Banyuwangi',
                    'Kabupaten Bondowoso',
                    'Kabupaten Situbondo',
                    'Kabupaten Probolinggo',
                    'Kabupaten Pasuruan',
                    'Kabupaten Sidoarjo',
                    'Kabupaten Mojokerto',
                    'Kabupaten Jombang',
                    'Kabupaten Nganjuk',
                    'Kabupaten Madiun',
                    'Kabupaten Magetan',
                    'Kabupaten Ngawi',
                    'Kabupaten Bojonegoro',
                    'Kabupaten Tuban',
                    'Kabupaten Lamongan',
                    'Kabupaten Gresik',
                    'Kabupaten Bangkalan',
                    'Kabupaten Sampang',
                    'Kabupaten Pamekasan',
                    'Kabupaten Sumenep',
                    'Kota Kediri',
                    'Kota Blitar',
                    'Kota Malang',
                    'Kota Probolinggo',
                    'Kota Pasuruan',
                    'Kota Mojokerto',
                    'Kota Madiun',
                    'Kota Surabaya',
                    'Kota Batu'
                ],
                'Bali': [
                    'Kabupaten Jembrana',
                    'Kabupaten Tabanan',
                    'Kabupaten Badung',
                    'Kabupaten Gianyar',
                    'Kabupaten Klungkung',
                    'Kabupaten Bangli',
                    'Kabupaten Karang Asem',
                    'Kabupaten Buleleng',
                    'Kota Denpasar'
                ],
                'Nusa Tenggara Barat': [
                    'Kabupaten Lombok Barat',
                    'Kabupaten Lombok Tengah',
                    'Kabupaten Lombok Timur',
                    'Kabupaten Sumbawa',
                    'Kabupaten Dompu',
                    'Kabupaten Bima',
                    'Kabupaten Sumbawa Barat',
                    'Kabupaten Lombok Utara',
                    'Kota Mataram',
                    'Kota Bima'
                ],
                'Nusa Tenggara Timur': [
                    'Kabupaten Sumba Barat',
                    'Kabupaten Sumba Timur',
                    'Kabupaten Kupang',
                    'Kabupaten Timor Tengah Selatan',
                    'Kabupaten Timor Tengah Utara',
                    'Kabupaten Belu',
                    'Kabupaten Alor',
                    'Kabupaten Lembata',
                    'Kabupaten Flores Timur',
                    'Kabupaten Sikka',
                    'Kabupaten Ende',
                    'Kabupaten Ngada',
                    'Kabupaten Manggarai',
                    'Kabupaten Rote Ndao',
                    'Kabupaten Manggarai Barat',
                    'Kabupaten Sumba Tengah',
                    'Kabupaten Sumba Barat Daya',
                    'Kabupaten Nagekeo',
                    'Kabupaten Manggarai Timur',
                    'Kabupaten Sabu Raijua',
                    'Kabupaten Malaka',
                    'Kota Kupang'
                ],
                'Kalimantan Barat': [
                    'Kabupaten Sambas',
                    'Kabupaten Bengkayang',
                    'Kabupaten Landak',
                    'Kabupaten Mempawah',
                    'Kabupaten Sanggau',
                    'Kabupaten Ketapang',
                    'Kabupaten Sintang',
                    'Kabupaten Kapuas Hulu',
                    'Kabupaten Sekadau',
                    'Kabupaten Melawi',
                    'Kabupaten Kayong Utara',
                    'Kabupaten Kubu Raya',
                    'Kota Pontianak',
                    'Kota Singkawang'
                ],
                'Kalimantan Tengah': [
                    'Kabupaten Kotawaringin Barat',
                    'Kabupaten Kotawaringin Timur',
                    'Kabupaten Kapuas',
                    'Kabupaten Barito Selatan',
                    'Kabupaten Barito Utara',
                    'Kabupaten Sukamara',
                    'Kabupaten Lamandau',
                    'Kabupaten Seruyan',
                    'Kabupaten Katingan',
                    'Kabupaten Pulang Pisau',
                    'Kabupaten Gunung Mas',
                    'Kabupaten Barito Timur',
                    'Kabupaten Murung Raya',
                    'Kota Palangka Raya'
                ],
                'Kalimantan Selatan': [
                    'Kabupaten Tanah Laut',
                    'Kabupaten Kota Baru',
                    'Kabupaten Banjar',
                    'Kabupaten Barito Kuala',
                    'Kabupaten Tapin',
                    'Kabupaten Hulu Sungai Selatan',
                    'Kabupaten Hulu Sungai Tengah',
                    'Kabupaten Hulu Sungai Utara',
                    'Kabupaten Tabalong',
                    'Kabupaten Tanah Bumbu',
                    'Kabupaten Balangan',
                    'Kota Banjarmasin',
                    'Kota Banjar Baru'
                ],
                'Kalimantan Timur': [
                    'Kabupaten Paser',
                    'Kabupaten Kutai Barat',
                    'Kabupaten Kutai Kartanegara',
                    'Kabupaten Kutai Timur',
                    'Kabupaten Berau',
                    'Kabupaten Penajam Paser Utara',
                    'Kabupaten Mahakam Hulu',
                    'Kota Balikpapan',
                    'Kota Samarinda',
                    'Kota Bontang'
                ],
                'Kalimantan Utara': [
                    'Kabupaten Malinau',
                    'Kabupaten Bulungan',
                    'Kabupaten Tana Tidung',
                    'Kabupaten Nunukan',
                    'Kota Tarakan'
                ],
                'Gorontalo': [
                    'Kabupaten Boalemo',
                    'Kabupaten Gorontalo',
                    'Kabupaten Pohuwato',
                    'Kabupaten Bone Bolango',
                    'Kabupaten Gorontalo Utara',
                    'Kota Gorontalo'
                ],
                'Sulawesi Utara': [
                    'Kabupaten Bolaang Mongondow',
                    'Kabupaten Minahasa',
                    'Kabupaten Kepulauan Sangihe',
                    'Kabupaten Kepulauan Talaud',
                    'Kabupaten Minahasa Selatan',
                    'Kabupaten Minahasa Utara',
                    'Kabupaten Bolaang Mongondow Utara',
                    'Kabupaten Siau Tagulandang Biaro',
                    'Kabupaten Minahasa Tenggara',
                    'Kabupaten Bolaang Mongondow Selatan',
                    'Kabupaten Bolaang Mongondow Timur',
                    'Kota Manado',
                    'Kota Bitung',
                    'Kota Tomohon',
                    'Kota Kotamobagu'
                ],
                'Sulawesi Tengah': [
                    'Kabupaten Banggai Kepulauan',
                    'Kabupaten Banggai',
                    'Kabupaten Morowali',
                    'Kabupaten Poso',
                    'Kabupaten Donggala',
                    'Kabupaten Toli-Toli',
                    'Kabupaten Buol',
                    'Kabupaten Parigi Moutong',
                    'Kabupaten Tojo Una-Una',
                    'Kabupaten Sigi',
                    'Kabupaten Banggai Laut',
                    'Kabupaten Morowali Utara',
                    'Kota Palu'
                ],
                'Sulawesi Selatan': [
                    'Kabupaten Kepulauan Selayar',
                    'Kabupaten Bulukumba',
                    'Kabupaten Bantaeng',
                    'Kabupaten Jeneponto',
                    'Kabupaten Takalar',
                    'Kabupaten Gowa',
                    'Kabupaten Sinjai',
                    'Kabupaten Maros',
                    'Kabupaten Pangkajene Dan Kepulauan',
                    'Kabupaten Barru',
                    'Kabupaten Bone',
                    'Kabupaten Soppeng',
                    'Kabupaten Wajo',
                    'Kabupaten Sidenreng Rappang',
                    'Kabupaten Pinrang',
                    'Kabupaten Enrekang',
                    'Kabupaten Luwu',
                    'Kabupaten Tana Toraja',
                    'Kabupaten Luwu Utara',
                    'Kabupaten Luwu Timur',
                    'Kabupaten Toraja Utara',
                    'Kota Makassar',
                    'Kota Parepare',
                    'Kota Palopo'
                ],
                'Sulawesi Tenggara': [
                    'Kabupaten Buton',
                    'Kabupaten Muna',
                    'Kabupaten Konawe',
                    'Kabupaten Kolaka',
                    'Kabupaten Konawe Selatan',
                    'Kabupaten Bombana',
                    'Kabupaten Wakatobi',
                    'Kabupaten Kolaka Utara',
                    'Kabupaten Buton Utara',
                    'Kabupaten Konawe Utara',
                    'Kabupaten Kolaka Timur',
                    'Kabupaten Konawe Kepulauan',
                    'Kabupaten Muna Barat',
                    'Kabupaten Buton Tengah',
                    'Kabupaten Buton Selatan',
                    'Kota Kendari',
                    'Kota Baubau'
                ],
                'Sulawesi Barat': [
                    'Kabupaten Majene',
                    'Kabupaten Polewali Mandar',
                    'Kabupaten Mamasa',
                    'Kabupaten Mamuju',
                    'Kabupaten Mamuju Utara',
                    'Kabupaten Mamuju Tengah'
                ],
                'Maluku': [
                    'Kabupaten Maluku Tenggara Barat',
                    'Kabupaten Maluku Tenggara',
                    'Kabupaten Maluku Tengah',
                    'Kabupaten Buru',
                    'Kabupaten Kepulauan Aru',
                    'Kabupaten Seram Bagian Barat',
                    'Kabupaten Seram Bagian Timur',
                    'Kabupaten Maluku Barat Daya',
                    'Kabupaten Buru Selatan',
                    'Kota Ambon',
                    'Kota Tual'
                ],
                'Maluku Utara': [
                    'Kabupaten Halmahera Barat',
                    'Kabupaten Halmahera Tengah',
                    'Kabupaten Kepulauan Sula',
                    'Kabupaten Halmahera Selatan',
                    'Kabupaten Halmahera Utara',
                    'Kabupaten Halmahera Timur',
                    'Kabupaten Pulau Morotai',
                    'Kabupaten Pulau Taliabu',
                    'Kota Ternate',
                    'Kota Tidore Kepulauan'
                ],
                'Papua Barat': [
                    'Kabupaten Fakfak',
                    'Kabupaten Kaimana',
                    'Kabupaten Teluk Wondama',
                    'Kabupaten Teluk Bintuni',
                    'Kabupaten Manokwari',
                    'Kabupaten Sorong Selatan',
                    'Kabupaten Sorong',
                    'Kabupaten Raja Ampat',
                    'Kabupaten Tambrauw',
                    'Kabupaten Maybrat',
                    'Kabupaten Manokwari Selatan',
                    'Kabupaten Pegunungan Arfak',
                    'Kota Sorong'
                ],
                'Papua': [
                    'Kabupaten Merauke',
                    'Kabupaten Jayawijaya',
                    'Kabupaten Jayapura',
                    'Kabupaten Nabire',
                    'Kabupaten Kepulauan Yapen',
                    'Kabupaten Biak Numfor',
                    'Kabupaten Paniai',
                    'Kabupaten Puncak Jaya',
                    'Kabupaten Mimika',
                    'Kabupaten Boven Digoel',
                    'Kabupaten Mappi',
                    'Kabupaten Asmat',
                    'Kabupaten Yahukimo',
                    'Kabupaten Pegunungan Bintang',
                    'Kabupaten Tolikara',
                    'Kabupaten Sarmi',
                    'Kabupaten Keerom',
                    'Kabupaten Waropen',
                    'Kabupaten Supiori',
                    'Kabupaten Mamberamo Raya',
                    'Kabupaten Nduga',
                    'Kabupaten Lanny Jaya',
                    'Kabupaten Mamberamo Tengah',
                    'Kabupaten Yalimo',
                    'Kabupaten Puncak',
                    'Kabupaten Dogiyai',
                    'Kabupaten Intan Jaya',
                    'Kabupaten Deiyai',
                    'Kota Jayapura'
                ]
            };

            // Mengisi opsi provinsi
            $('#inputState').on('change', function () {
                var selectedProvince = $(this).val();

                // Mengosongkan kota ketika provinsi berubah
                $('#inputCity').empty().append('<option selected>Choose...</option>');

                // Validasi provinsi dan memberikan opsi kota
                if (selectedProvince in citiesData) {
                    citiesData[selectedProvince].forEach(function (city) {
                        $('#inputCity').append('<option value="' + city + '">' + city + '</option>');
                    });
                }
            });
        }
    });
});


function validateInput(input, message) {
    input.setCustomValidity(message);
}

function clearCustomValidity(input) {
    input.setCustomValidity("");
}

function fakeEmail() {
    var name = document.getElementById("name").value;
    var formMessage = document.getElementById("form-message");
    formMessage.innerHTML = "<p class='text-center text-success'>Thank you for contacting us, " + name + "!</p>";
}

function resetForm() {
    document.getElementById("reset_ygy").reset();
}

$(document).ready(function () {
    Fancybox.bind('[data-fancybox]', {
        // Next update aja lah
    });
});