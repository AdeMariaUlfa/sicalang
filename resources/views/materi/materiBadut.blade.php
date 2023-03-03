@extends('layouts.template')
@section('content')
<style>
    .img-container {
        text-align: center;
        display: block;
        width: 500px;
        padding: 20px;
    }

    body {
        /*  */
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .bg-card{
        background-image: url("{{ asset('bg/badut-opacity2.png') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: 'Comic Sans MS', 'Comic Sans';
    }
</style>
<div id="services" class="our-services section">
    <div class="container-fluid">
        <div class="row">
            <div class="service-item bg-card" >
                <div class="row">
                    <div class="right-content">
                        <div id="page1">
                            <h3 style="color:black;" class="d-flex justify-content-center"><b>Candi Badut</b></h3><br><br>
                            <div class="d-flex justify-content-center">
                                <div class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 1. Panorama 360 Candi Badut.jpg') }}" alt="">
                                    <p><b>Foto 1. Panorama 360 Candi Badut.jpg</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </div>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Candi Badut atau disebut dengan Candi Liswa berlokasi di Desa Karangbesuki Kecamatan Dau, Kota Malang Jawa Timur. Candi Badut bercorak agama Hindu-Syiwa yang memiliki tinggi sekitar 8 m dengan lebar 12,27 m x 14,04 m. Candi Badut merupakan candi tertua di Jawa Timur. Menurut Prasasti Dinoyo Candi Badut dibangun atas perintah Raja Gajayana putra dari Dewasimha Kerajaan Kanjuruhan (Sedyawati dkk, 2013), yang diperkirakan berdiri pada tahun 682 Caka atau di tahun 760M (Istari, 2015). </p>
                            <p style="text-align: justify; text-indent: 0.5in;">Pada prasasti Dinoyo baris keempat disebutkan bahwa, Raja Gajayana mendirikan Candi Badut sebagai tempat pemujaan untuk Dewa Agastya. Arca Agastya yang dahulunya dibuat dari kayu cendana, oleh Raja Gajayana diganti dengan arca batu hitam (Soekmono, 1973). Candi Badut yang dibangun sebagai tempat memuliakan Resi Agastya tersebut berguna untuk memusnahkan penyakit yang dapat menghilangkan semangat atau kekuatan dan malapetaka (Soviyani dkk, 1995). Candi Badut berfungsi sebagai lokasi upacara keagaamaan dan tempat pemujaan bagi umat yang beragama Hindu-Syiwa. Selain sebagai tempat pemujaan, hingga saat ini Candi Badut digunakan sebagai destinasi wisata situs sejarah, sarana pendidikan, dan juga sebagai tempat penelitian.</p>
                            <p style="text-align: justify; text-indent: 0.5in;">Prasasti Dinoyo juga menceritakan masa pemerintahan dari Raja Dewasimha beserta putranya Sang Liswa. Dimana kedua raja tersebut sangat disayangi oleh rakyat dari Kerajaan Kanjuruhan (Sulistio dkk, 2018). Sang Liswa merupakan gelar dari Raja Gajayana. Liswa dalam kamus Sansekerta memiliki arti ”anak Kemidi, tukang tari” dalam bahasa jawa dinamakan ”Badut” (Soviyani dkk, 1995).
                                Namun hingga saat ini, belum ditemukan bukti yang kuat mengenai Candi Badut dengan Sang Liswa.
                            </p>
                        </div>
                        <div id="page2">
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 2. Bentuk Bangunan Candi Badut.jpg') }}" alt="">
                                    <p><b>Foto 2. Bentuk Bangunan Candi Badut</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Gaya arsitektur dari Candi Badut tidak seperti candi-candi yang ada di Jawa Timur pada umumnya, melainkan mengikuti gaya arsiktektur yang lebih tua, seperti bangunan candi yang ada di Jawa Tengah (Istari, 2015). Candi ini tersusun dari batu andesit yang berdiri di atas batur setinggi 2 m. Candi Badut memiliki bentuk tubuh tambun (Lihat Foto 2) mirip seperti bentuk tubuh Candi Dieng yang ada di Jawa Tengah. Candi Badut memiliki ruangan yang agak besar dan batur (kaki candi) yang relatif tinggi dimana, gaya arsitektur tersebut mencerminkan gaya arsitektur Jawa Tengah (Soviyani dkk, 1995). Di antara kaki dan tubuh Candi Badut terdapat selasar cukup lebar yang berfungsi sebagai tempat untuk melakukan pradaksina (ritual memutari candi searah dengan jarum jam).</p>
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 3. Pahatan Kalamakara di ambang pintu Candi Badut.jpg') }}" alt="">
                                    <p><b>Foto 3. Pahatan Kalamakara di ambang pintu Candi Badut</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Pahatan Kalamakara atau relief kepala raksasa yang indah menghiasi ambang pintu dan relung setiap Candi Badut dibuat tanpa adanya rahang bawah (Sedyawati dkk, 2013) tidak seperti candi-candi lain yang ada di Jawa Timur dimana pahatan Kalamakara lengkap dengan rahang bawah (Lihat Foto 3). Pahatan kalamakara tersebut mirip dengan pahatan candi yang ada di Jawa Tengah. Pada ketiga sisi Candi Badut terdapat relung yang berisi, Arca Dewi Durga di bagian utara (Lihat Foto 4), Arca Agastya di bagian selatan dan Arca Ganesha di bagian timur yang hilang. </p>
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 4. Arca Dewi Durga.jpg') }}" alt="">
                                    <p><b>Foto 4. Arca Dewi Durga</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Di dalam ruang bilik Candi Badut yang berukuran 5,53 m x 3,67 m berisi Lingga dan Yoni (Lihat Foto 5). Lingga dan Yoni tersebut merupakan simbol dari Siwa dan Parwati yang sekaligus menandakan bahwa Candi Badut merupakan Candi Hindu.</p>
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 5. Lingga dan Yoni.jpg') }}" alt="">
                                    <p><b>Foto 5. Lingga dan Yoni</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Candi Badut ditemukan pertama kali oleh Maurenboucher dan Be de Haan pada tahun 1923 dalam kondisi tidak berbentuk dan ditumbuhi banyak pepohonan (Soeroto, 2009). Pada tahun 1925 B. De Haan mengawali pemugaran dengan melaksanakan penggalian mencapai dasar bangunan candi. Hasil dari penggalian tersebut, Candi Badut telah ditemukan dalam keadaan runtuh, kecuali bagian kaki candi yang masih dapat dilihat susunannya, meskipun pada bagian tersebut banyak kerusakan. Batu-batu yang berada disekitar Candi Badut kemudian dipilah-pilah dan dikumpulkan berdasarkan ukurannya. Pada tahun 1926 M, bagian kaki dan tubuh candi dapat dibangun kembali atau dipugar, namun bagian atap candi tidak diketemukan kembali (Soviyani dkk, 1995). Pemugaran selanjutnya pada tahun 1977 M. Pemugaran terakhir dilakukan pada tahun 1990-1993 M, berhasil mencapai bentuk bangunan Candi Badut yang sekarang (Soeroto, 2009).</p><br><br>
                        </div>
                        <div id="page3">
                            <p><b>Daftar Pustaka</b>
                            <br>1.Istari, T. M. R. (2015). Ragam Hias Candi-Candi di Jawa: Motif dan Maknanya. Kepel Press: Yogyakarta.<br>
                            2.Perpustakaan Nasional Republik Indonesia. 2014. Candi Badut. (Online), (https://candi.perpusnas.go.id/temples/deskripsi-jawa_timur-candi_badut) diakses pada tanggal 28 September 2022.<br>
                            3.Sedyawati Edi, Hariani Santiko, Hasan, Ratnacah, Wiwin Djuwita, Ramelan, A. (2013). Candi Indonesia Seri Jawa. Direktorat Pelestarian Cagar Budaya dan Permuseuman, Direktorat Jendral Kebudayaan, Kementrian Pendidikan dan Kebudayaan: Jakarta.<br>
                            4.Soekmono, R. (1973). Pengantar Sejarah Kebudayaan Indonesia 2. Yayasan Kanisius: Yogyakarta.<br>
                            5.Soeroto, Myrtha. (2009). Album Arsitektur Candi Cagar Budaya Klasik Hindu Buddha; Cetakan Pertama. Yayasan Keluarga Batam Myrtle Publishing: Batam.<br>
                            6.Soviyani, Aris dkk. (1995). Candi Badut dan Pemugarannya. Bagian Proyek Pembinaan Peninggalan Sejarah dan Purbakala: Jawa Timur.<br>
                            7.Sulistio, A., Natadjaja, L., & Febriani, R. (2018). Perancangan Buku Fotografi Historis Candi Badut Sebagai Candi Tertua Di Jawa Timur. Jurnal DKV Adiwarna, 1(12), 1–9.
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