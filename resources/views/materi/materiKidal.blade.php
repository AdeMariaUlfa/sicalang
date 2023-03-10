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
        background-image: url("{{ asset('bg/kidal-opacity2.png') }}");
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
                        <h3 style="color:black;" class="d-flex justify-content-center"><b>Candi Kidal</b></h3><br><br>
                        <div id="page1">
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 1. Panorama 360 Candi Kidal.jpg') }}" alt="">
                                    <p><b>Foto 1. Panorama 360 Candi Kidal</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Candi Kidal terletak di Lembah Gunung Bromo, Desa Rejokidal, Kec. Tumpang, Kabupaten Malang. Candi ini dibangun sebagai tempat pendharmaan/persemayaman Raja Anusapati yaitu raja kedua dari Kerajaan Singhasari, agar sang raja bisa memperoleh kemuliaan sebagai Siwa Mahadewa yang dibangun pada tahun 1248 M hingga tahun 1260 M (Soeroto, 2009). Candi Kidal dibangun dengan memadukan gaya Candi Jawa Tengah yang terbuat dari batu andesit dan Candi Jawa Timur yang berbentuk ramping dan atap yang berbentuk kubus <i>(Lihat Foto 2).</i> Candi kidal memiliki 3 bagian yaitu atap, badan, dan kaki (batur) dengan ketinggian sekitar 2 meter (Sedyawati dkk, 2013). </p>
                        </div>
                        <div id="page2">
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 2. Bentuk Bangunan Candi Kidal.jpg') }}" alt="">
                                    <p><b>Foto 2. Bentuk Bangunan Candi Kidal</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Candi Kidal beraliran Hindu Siwa, hal tersebut dibuktikan dengan adanya Arca Siwamahadewa di dalam ruangan candi yang sekarang arca tersebut berada di Royal Tropical Institute Amsterdam (Sedyawati dkk, 2013). Arca Siwa tersebut sebagai perwujudan Raja Anusapati. Menurut Kitab Negarakertagama yang ditulis oleh Mpu Prapanca pada tahun 1365 M, Anusapati adalah anak dari pendiri Kerajaan Tumapel atau Kerajaan Singhasari yang bernama Ranggah Rajasa Sang Girinathapura. Anusapati diangkat sebagai raja untuk menggantikan ayahnya pada tahun 1227-1248 M. Di bawah pemerintahan Raja Anusapati Kerajaan Tumapel diliputi dengan ketenangan dan kemakmuran, hingga pada tahun 1248 M Raja Anusapati wafat yang kemudian digantikan oleh Wisnuwardhana yang merupakan putra dari Anusapati. Wisnuwardhana membuatkan Candi Kidal sebagai tempat pendharmaan ayahnya dan dipuja sebagai Dewa Siwa (Sedyawati dkk, 2013).</p>
                            <p style="text-align: justify; text-indent: 0.5in;">Selain Kitab Negarakertagama juga terdapat Kitab Pararaton yang menjelaskan tentang Raja Anusapati. Kitab Pararaton yang ditulis antara tahun 1481 M hingga tahun 1600 M, mengisahkan Raja Anusapati merupakan anak dari Ken Dedes dan Tunggul Ametung yaitu seorang Akuwu (Kepala Daerah) di Tumapel. Pada akhirnya Ken Arok membunuh Tunggul Ametung, dimana pada saat itu Ken Dedes masih mengandung Anusapati. Ken Arok kemudian mempersunting Ken Dedes yang telah ditinggalkan oleh suaminya (Soekmono, 1973). </p>
                            <p style="text-align: justify; text-indent: 0.5in;">Pada tahun 1222 M Ken Arok mengumumkan Tumapel menjadi Kerajaan dan bergelar sebagai Ranggah Rajasa Sang Girinathapura. Bahkan pada saat itu, Kerajaan Tumapel telah berhasil meruntuhkan Kerajaan Kediri. Anusapati yang merasa diperlakukan tidak adil oleh ayahnya, kemudian bertanya kepada ibunya, sehingga Anusapati mengetahui bahwa dirinya bukanlah anak kandung dari Ken Arok, dan Ken Aroklah yang membunuh ayahnya. Anusapatipun marah, kemudian dia mendapatkan keris dari Mpu Gandring yang digunakan oleh Ken Arok untuk membunuh Tunggul Ametung dan menyuruh pembantunya untuk membunuh Ken Arok ketika makan malam pada tahun 1227 M. Untuk menghilangkan jejak pembunuhan, Anusapati membunuh pembantunya dan kemudian mengumumkan bahwa pembantunya mengamuk sehingga menyebabkan kematian sang raja. Kemudian pada tahun 1247 M setelah meninggalnya Ken Arok, Anusapati diangkat sebagai seorang Raja. Hingga pada suatu hari, Tohjaya putra dari Ken Arok dan Ken Umang, mengajak Anusapati untuk mengikutinya pergi beradu ayam. Tanpa menaruh curiga, Anusapati mengiyakan ajakan dari Tohjaya. Tanpa disangka Anusapati ditusuk keris dari Empu Gandring oleh Tohjaya sampai menewaskan Raja Anusapati yang terjadi sekitar tahun 1248 M. Kemudian Tohjaya diangkat sebagai seorang raja, namun ketika pemerintahan Tohjaya terjadilah pemberontakan yang bernama Ranggawuni oleh anak dari Anusapati pada tahun 1248 M (Soekmono, 1973). </p>
                            <p style="text-align: justify; text-indent: 0.5in;">Thomas Stamford Rafles menemukan Candi Kidal pada tahun 1817, yang kemudian pada tahun 1867 dan tahun 1883 pemerintah dari Hindia Belanda melakukan pembersihan candi dari berbagai pepohonan. Pemugaran candi Kidal pertama kali dilakukan oleh De Hasan sebagai atasan dari pemerintah Hinda Belanda pada tahun 1925. Kemudian pemugaran dilakukan oleh Suaka Peninggalan Sejarah dan Purbakala Jawa Timur tahun 1986 hingga tahun 1990 dengan memperbaiki bagian kaki (batur) hingga atap candi agar kokoh (Soeroto, 2009).</p>
                        </div>
                        <div id="page3">
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 3. Kepala Kala di Pintu Candi Kidal.jpg') }}" alt="">
                                    <p><b>Foto 3. Kepala Kala di Pintu Candi Kidal</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Candi Kidal menghadap ke arah barat dengan ketinggian 12,36 meter dan berukuran 8,36 meter x 8,36 meter. Pada setiap relung candi juga dihiasi dengan pahatan Kala (Kepala Raksasa) di atas ambangnya, lengkap dengan taring yang melengkung seperti candi yang berlanggam arsitektur Jawa Timur pada umumnya <i>(Lihat Foto 3)</i>. Bagian kaki candi menjorok ke depan dan dilengkapi tangga yang berhiaskan kepala naga di ujung tangga <i>(Lihat Foto 4).</i> Di bagian kiri dan kanan candi juga terdapat patung binatang mirip seperti singa yang sedang menyangga pelipit kaki candi dan menjorok keluar dari selasar <i>(Lihat Foto 5)</i>.</p>
                        </div>
                        <div id="page4">
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 4. Makara.jpg') }}" alt="">
                                    <p><b>Foto 4. Makara</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 5. Patung Singa di Pelipit Kaki Candi Kidal.jpg') }}" alt="">
                                    <p><b>Foto 5. Patung Singa di Pelipit Kaki Candi Kidal</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Pada kesustraan Jawa kuno terdapat suatu mitos yang terkenal di masyarakat yakni mitos Garudheya. Garudheya merupakan garuda yang berhasil membebaskan ibunya dari perbudakan dengan menggunakan Air Amerta (air kehidupan) sebagai tebusan (Sedyawati, 2013). Konon relief timbul dari Garudheya merupakan amanat dari Raja Anusapati yang menginginkan untuk meruwat Ken Dedes yaitu ibunda yang sangat dicintainya dari perbudakan. Selain sebagai tempat pendharmaan Raja Anusapati dan peruwatan Ken Dedes, Candi Kidal juga berfungsi sebagai tempat pemujaan bagi pemeluk agama Hindu hingga saat ini. </p>
                        </div>
                        <div id="page5">
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 6. Garudheya dengan Para Naga.jpg') }}" alt="">
                                    <p><b>Foto 6. Garudheya dengan Para Naga</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 7. Garudheya dengan Guci Amertha.jpg') }}" alt="">
                                    <p><b>Foto 7. Garudheya dengan Guci Amertha</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 8. Garudheya dengan Ibunya.jpg') }}" alt="">
                                    <p><b>Foto 8. Garudheya dengan Ibunya</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Pembacaan relief Garudheya pada Candi Kidal yaitu dari kanan ke kiri atau berlawanan dengan arah jarum jam (<i>Prasawya</i>). Mulai dari sisi selatan, gambar didalam kekuasaan para naga. Ibu Garuda masih dalam perbudakan Dewi Kadru/naga <i>(Lihat Foto 6).</i> Sisi timur, Garuda telah mendapatkan Amertha yang direbut dari para dewa sebagai penebus ibunya <i>(Lihat Foto 7).</i> Sisi utara, Garuda siap berangkat bersama ibunya meninggalkan para naga karena telah bebas dari Dewi Kadru <i>(Lihat Foto 8).</i> Pembacaan relief Garudheya yang dimulai dari kanan ke kiri tersebut juga berkaitan dengan penamaan Kidal yang berarti kiri.</p><br><br>
                        </div>
                        <div id="page6">
                            <p> <b>Daftar Pustaka</b><br>
                                1. Perpustakaan Nasional Republik Indonesia. 2014. Candi Kidal. (Online), (https://candi.perpusnas.go.id/temples/deskripsi-jawa_timur-candi_kidal) diakses pada tanggal <br>
                                &ensp;&ensp;28 September 2022.<br>
                                2. Sedyawati Edi, Hariani Santiko, Hasan, Ratnacah, Wiwin Djuwita, Ramelan, A. (2013). Candi Indonesia Seri Jawa. Direktorat Pelestarian Cagar Budaya dan Permuseuman,<br>&ensp;&ensp; Direktorat Jenderal Kebudayaan, Kementerian Pendidikan dan Kebudayaan: Jakarta.<br>
                                3. Soekmono, R. (1973). Pengantar Sejarah Kebudayaan Indonesia 2. Yayasan Kanisius: Yogyakarta.<br>
                                4. Soeroto, Myrtha. (2009). Album Arsitektur Candi Cagar Budaya Klasik Hindu Buddha; Cetakan Pertama. Yayasan Keluarga Batam Myrtle Publishing: Batam.
                            </p>
                        </div>
                        <div class="pagination d-flex justify-content-center">
                            <a onclick="page(1)" href="#">1</a>
                            <a onclick="page(2)" href="#">2</a>
                            <a onclick="page(3)" href="#">3</a>
                            <a onclick="page(4)" href="#">4</a>
                            <a onclick="page(5)" href="#">5</a>
                            <a onclick="page(6)" href="#">6</a>
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
        var x4 = document.getElementById("page4");
        var x5 = document.getElementById("page5");
        var x6 = document.getElementById("page6");
        x2.style.display = "none";
        x3.style.display = "none";
        x4.style.display = "none";
        x5.style.display = "none";
        x6.style.display = "none";
    }

    function page(pg) {
        var x = document.getElementById("page1");
        var x2 = document.getElementById("page2");
        var x3 = document.getElementById("page3");
        var x4 = document.getElementById("page4");
        var x5 = document.getElementById("page5");
        var x6 = document.getElementById("page6");

        if (pg === 1) {
            x.style.display = "block";
            x2.style.display = "none";
            x3.style.display = "none";
            x4.style.display = "none";
            x5.style.display = "none";
            x6.style.display = "none";
        } else if (pg === 2) {
            x.style.display = "none";
            x2.style.display = "block";
            x3.style.display = "none";
            x4.style.display = "none";
            x5.style.display = "none";
            x6.style.display = "none";
        } else if (pg === 3) {
            x.style.display = "none";
            x2.style.display = "none";
            x3.style.display = "block";
            x4.style.display = "none";
            x5.style.display = "none";
            x6.style.display = "none";
        } else if (pg === 4) {
            x.style.display = "none";
            x2.style.display = "none";
            x3.style.display = "none";
            x4.style.display = "block";
            x5.style.display = "none";
            x6.style.display = "none";
        } else if (pg === 5) {
            x.style.display = "none";
            x2.style.display = "none";
            x3.style.display = "none";
            x4.style.display = "none";
            x5.style.display = "block";
            x6.style.display = "none";
        } else if (pg === 6) {
            x.style.display = "none";
            x2.style.display = "none";
            x3.style.display = "none";
            x4.style.display = "none";
            x5.style.display = "none";
            x6.style.display = "block";
        }
    }
</script>
@endsection