@extends('layouts.template')
@section('content')
<style>
    .img-container {
        text-align: center;
        display: block;
        width: 500px;
        padding: 20px;
    }

    .bg-card {
        background-image: url("{{ asset('bg/sumberawan-opacity2.png') }}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        font-family: 'Comic Sans MS', 'Comic Sans';
    }
</style>
<div id="services" class="our-services section">
    <div class="container-fluid">
        <div class="row">
            <div class="service-item bg-card">
                <div class="row">

                    <div class="right-content">
                        <h3 style="color:black;" class="d-flex justify-content-center"><b>Candi Sumberawan</b></h3><br><br>
                        <div id="page1">
                        <div class="d-flex justify-content-center">
                            <span class="img-container "> <!-- Inline parent element -->
                                <img src="{{ asset('images/Foto 1. Panorama 360 Candi Sumberawan.jpg') }}" alt="">
                                <p><b>Foto 1. Panorama 360 Candi Sumberawan</b></p>
                                <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                            </span>
                        </div>
                        <p style="text-align: justify; text-indent: 0.5in;">Candi Sumberawan merupakan satu-satunya candi yang berbentuk stupa di Jawa Timur dan bercorak agama Buddha. Candi Sumberawan terletak di Desa Toyomarto, Kecamatan Singhasari, Kabupaten Malang. Candi ini merupakan peninggalan umat Buddha dari kerajaan Singhasari. Istilah Sumberawan berasal dari kata “sumber” dan “rawan” (telaga) karena terdapat telaga yang berasal dari beberapa sumber mata air. Telaga tersebutlah yang menjadi sumber mata air masyarakat sekitar dan digunakan dalam kebutuhan sehari-hari, seperti untuk mencuci, mandi, dan minum. Menurut pendapat lainnya, istilah Sumberawan berasal dari kata Sanskerta Bhariwahana atau Bariawan, yaitu penunggang merak atau Sang Buddha (Ayuni, 2019). Pada bagian dalam Stupa Sumberawan tidak terdapat rongga atau ruang yang biasanya digunakan untuk menyimpan benda-benda suci (relik) seperti stupa pada umumnya.</p>
                        <p style="text-align: justify; text-indent: 0.5in;">Terdapat dugaan bahwa Candi Sumberawan digunakan hanya sebagai tempat pemujaan (Sedyawati, 2013). Menurut Kitab Negarakertagama Candi Sumberawan diberi nama “Kasunggrahan” yang mempunyai makna sebagai taman yang dipenuhi oleh malaikat atau bidadari. Dalam Kitab Negarakertagama Candi ini diperkirakan dibangun sekitar abad ke 14 atau awal abad ke 15 (Soeroto, 2010).</p>
                        <p style="text-align: justify; text-indent: 0.5in;">Pada tahun 1359 M dalam Kitab Negarakertagama Raja Hayamwuruk dari Kerajaan Majapahit berkunjung ke Candi Singhasari untuk melakukan ziarah kepada leluhurnya sekaligus berkunjung ke Kasunggrahan atau Candi Sumberawan sewaktu mengadakan perjalanan mengelilingi wilayah kekuasaannya (Sedyawati, 2013).</p>
                        </div>
                        <div id="page2">
                        <div class="d-flex justify-content-center">
                            <span class="img-container "> <!-- Inline parent element -->
                                <img src="{{ asset('images/Foto 2. Bentuk Bangunan Candi Sumberawan.jpg') }}" alt="">
                                <p><b>Foto 2. Bentuk Bangunan Candi Sumberawan</b></p>
                                <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                            </span>
                        </div>
                        <p style="text-align: justify; text-indent: 0.5in;">Candi Sumberawan berbentuk stupa (Lihat Foto 2) tanpa adanya hiasan atau ukiran relief apapun dan memiliki ketinggian sekitar 5,23 m (Soeroto, 2010). Candi ini ditemukan oleh penduduk pribumi pada tahun 1845 M yang kemudian dilaporkan ke pemerintah Hindia Belanda dan diteliti oleh Van Romondt seorang arkeolog dari Belanda. Pada tahun 1937 M, pemugaran Candi Sumberawan dilakukan oleh Dinas Purbakala Hindia Belanda (Sedyawati, 2013). </p>
                        <p style="text-align: justify; text-indent: 0.5in;">Stupa Sumberawan berfungsi sebagai simbol dari agama Buddha sekaligus sebagai simbol kesucian dengan digambarkan dalam perwujudan Gunung Meru. Selain itu, juga sebagai transformasi dari air biasa menjadi air suci (amertha) yaitu air kehidupan para dewa. Adapun kegiatan keagamaan yang dilaksanakan yaitu, Upacara Tri Waisak umat Buddha. Kegiatan spiritual dilaksanakan pada malam Jum’at legi dan kegiatan adat dilakukan ritual selametan sumber air yang diperingati setiap bulan Suro penanggalan Jawa. Kegiatan ini dinamakan Tirta Amerta Sari (Ayuni, 2019). Ritual Tirta Amerta Sari bertujuan untuk menghormati telaga mata air Sumberawan dan mensyukuri berkah yang telah diberikan melalui telaga tersebut. Dengan menghormati telaga tersebut, sumber mata air yang digunakan sehari-hari oleh masyarakat akan terus terjaga.</p><br><br>
                        </div>
                        <div id="page3">    
                        <p><b>Daftar Pustaka</b><br>
                        1. Ayuni, F. Q. (2019). Peran Kepercayaan Sakral dalam Menghindari Nasib Buruk.<br>
                        2. Sedyawati Edi, Hariani Santiko, Hasan, Ratnacah, Wiwin Djuwita, Ramelan, A. (2013). Candi Indonesia Seri Jawa. <br>&ensp;&ensp; Direktorat Pelestarian Cagar Budaya dan Permuseuman, Direktorat Jenderal Kebudayaan, Kementerian Pendidikan dan Kebudayaan: Jakarta.<br>
                        3. Soeroto, Myrtha. (2010). Album Arsitektur Candi Cagar Budaya Klasik Hindu Buddha; Cetakan Kedua. Yayasan Keluarga Batam Myrtle Publishing: Batam.
                        </p>
                        </div>
                        <div class="pagination d-flex justify-content-center">
                            <a onclick="page(1)" href="#">1</a>
                            <a onclick="page(2)" href="#">2</a>
                            <a onclick="page(3)" href="#">3</a>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
<script>
    window.onload = function() {
        var x2 = document.getElementById("page2");
        var x3 = document.getElementById("page3");
        x2.style.display = "none";
        x3.style.display = "none";
    }

    function page(pg) {
        var x = document.getElementById("page1");
        var x2 = document.getElementById("page2");
        var x3 = document.getElementById("page3");
        if (pg === 1) {
            x.style.display = "block";
            x2.style.display = "none";
            x3.style.display = "none";
        } else if (pg === 2) {
            x.style.display = "none";
            x2.style.display = "block";
            x3.style.display = "none";
        } else if (pg === 3) {
            x.style.display = "none";
            x2.style.display = "none";
            x3.style.display = "block";
        }
    }
</script>
@endsection