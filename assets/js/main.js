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

        if(window.location.pathname.indexOf("galleries.php") !== -1) {
            Fancybox.bind('[data-fancybox="gallery"]', {
                //
            });
        }
        
        if (window.location.pathname.indexOf("admission.php") !== -1) {

            // and values are arrays of cities
            var citiesData = {
                'Aceh': ['Banda Aceh', 'Sabang', 'Langsa'],
                'Sumatera Utara': ['Medan', 'Binjai', 'Pematangsiantar'],
                'Sumatera Barat': ['Padang', 'Bukittinggi', 'Padang Panjang'],
                'Riau': ['Pekanbaru', 'Dumai', 'Bengkalis'],
                'Kepulauan Riau': ['Tanjung Pinang', 'Batam', 'Bintan'],
                'Jambi': ['Jambi', 'Sungai Penuh', 'Muara Bungo'],
                'Sumatera Selatan': ['Palembang', 'Prabumulih', 'Lubuklinggau'],
                'Bangka Belitung': ['Pangkalpinang', 'Toboali', 'Mentok'],
                'Bengkulu': ['Bengkulu', 'Curup', 'Manna'],
                'Lampung': ['Bandar Lampung', 'Metro', 'Liwa'],
                'DKI Jakarta': ['Jakarta Pusat', 'Jakarta Barat', 'Jakarta Selatan'],
                'Jawa Barat': ['Bandung', 'Bogor', 'Cirebon'],
                'Banten': ['Serang', 'Tangerang', 'Cilegon'],
                'Jawa Tengah': ['Semarang', 'Surakarta', 'Tegal'],
                'DI Yogyakarta': ['Yogyakarta', 'Sleman', 'Bantul'],
                'Jawa Timur': ['Surabaya', 'Malang', 'Probolinggo'],
                'Bali': ['Denpasar', 'Singaraja', 'Tabanan'],
                'Nusa Tenggara Barat': ['Mataram', 'Bima', 'Sumbawa Besar'],
                'Nusa Tenggara Timur': ['Kupang', 'Ende', 'Makassar'],
                'Kalimantan Barat': ['Pontianak', 'Singkawang', 'Ketapang'],
                'Kalimantan Tengah': ['Palangka Raya', 'Sampit', 'Kuala Kapuas'],
                'Kalimantan Selatan': ['Banjarmasin', 'Banjarbaru', 'Martapura'],
                'Kalimantan Timur': ['Samarinda', 'Balikpapan', 'Bontang'],
                'Kalimantan Utara': ['Tanjung Selor', 'Tarakan', 'Malinau'],
                'Gorontalo': ['Gorontalo', 'Kwandang', 'Bone Bolango'],
                'Sulawesi Utara': ['Manado', 'Bitung', 'Tomohon'],
                'Sulawesi Tengah': ['Palu', 'Donggala', 'Parigi Moutong'],
                'Sulawesi Selatan': ['Makassar', 'Makale', 'Parepare'],
                'Sulawesi Tenggara': ['Kendari', 'Baubau', 'Raha'],
                'Sulawesi Barat': ['Mamuju', 'Majene', 'Polewali Mandar'],
                'Maluku': ['Ambon', 'Tual', 'Saumlaki'],
                'Maluku Utara': ['Ternate', 'Tidore', 'Sofifi'],
                'Papua Barat': ['Manokwari', 'Sorong', 'Fak-Fak'],
                'Papua': ['Jayapura', 'Biak', 'Merauke']
            };

            // Event listener for State dropdown change
            $('#inputState').on('change', function () {
                var selectedProvince = $(this).val();

                // Clear the existing options in the City dropdown
                $('#inputCity').empty().append('<option selected>Choose...</option>');

                // If a valid province is selected, populate the City dropdown with corresponding cities
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