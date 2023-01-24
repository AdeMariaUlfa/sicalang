@extends('layouts.template')
@section('content')
<style>
      .img-container {
        text-align: center;
        display: block;
        width: 500px;
      }
      body {
        background-image: url('{{ asset('images/patern3.gif') }}');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }
</style>
<div id="services" class="our-services section">
    <div class="container-fluid">
        <div class="row">
            <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="row">

                            <div class="right-content">
                            <h3 style="color:black;" class="d-flex justify-content-center"><b>Candi Kidal</b></h3><br><br>
                            <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 1. Panorama 360 Candi Kidal.jpg') }}" alt="">
                                    <p><b>Foto 1. Panorama 360 Candi Kidal</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span> 
                                <p style="text-align: justify; text-indent: 0.5in;">Candi Kidal terletak di Lembah Gunung Bromo, Desa Rejokidal, Kec. Tumpang, Kabupaten Malang. Candi ini dibangun sebagai tempat pendharmaan/persemayaman Raja Anusapati yaitu raja kedua dari Kerajaan Singhasari, agar sang raja bisa memperoleh kemuliaan sebagai Syiwa Mahadewa yang dibangun pada tahun 1248 M hingga tahun 1260 M (Soeroto, 2009). Candi Kidal dibangun dengan memadukan gaya Candi Jawa Tengah yang terbuat dari batu andesit dan Candi Jawa Timur yang berbentuk ramping dan atap yang berbentuk kubus (Lihat Foto 2). Candi kidal memiliki 3 bagian yaitu atap, badan, dan kaki (batur) dengan ketinggian sekitar 2 meter (Sedyawati dkk, 2013). </p>
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 2. Bentuk Bangunan Candi Kidal.jpg') }}" alt="">
                                    <p><b>Foto 2. Bentuk Bangunan Candi Kidal</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span> 
                                <p style="text-align: justify; text-indent: 0.5in;">Candi Kidal beraliran Hindu Syiwa, hal tersebut dibuktikan dengan adanya Arca Syiwamahadewa di dalam ruangan candi yang sekarang arca tersebut berada di Royal Tropical Institute Amsterdam (Sedyawati dkk, 2013). Arca Syiwa tersebut sebagai perwujudan Raja Anusapati. Menurut Kitab Negarakertagama yang ditulis oleh Mpu Prapanca pada tahun 1365 M, Anusapati adalah anak dari pendiri Kerajaan Tumapel atau Kerajaan Singhasari yang bernama Ranggah Rajasa Sang Girinathapura. Anusapati diangkat sebagai raja untuk menggantikan ayahnya pada tahun 1227-1248 M. Di bawah pemerintahan Raja Anusapati Kerajaan Tumapel diliputi dengan ketenangan dan kemakmuran, hingga pada tahun 1248 M Raja Anusapati wafat yang kemudian digantikan oleh Wisnuwardhana yang merupakan putra dari Anusapati. Wisnuwardhana membuatkan Candi Kidal sebagai tempat pendharmaan ayahnya dan dipuja sebagai Dewa Syiwa (Sedyawati dkk, 2013).</p>
                                <p style="text-align: justify; text-indent: 0.5in;">Selain Kitab Negarakertagama juga terdapat kitab Pararaton yang menjelaskan tentang Raja Anusapati. Kitab Pararaton yang ditulis antara tahun 1481 M hingga tahun 1600 M, mengisahkan Raja Anusapati merupakan anak dari Ken Dedes dan Tunggul Ametung yaitu seorang Akuwu (Kepala Daerah) di Tumapel. Pada akhirnya Ken Arok membunuh Tunggul Ametung, dimana pada saat itu Ken Dedes masih mengandung Anusapati. Ken Arok kemudian mempersunting Ken Dedes yang telah ditinggalkan oleh suaminya (Soekmono, 1973). </p>
                                <p style="text-align: justify; text-indent: 0.5in;">Pada tahun 1222 M Ken Arok mengumumkan Tumapel menjadi Kerajaan dan bergelar sebagai Ranggah Rajasa Sang Girinathapura. Bahkan pada saat itu, Kerajaan Tumapel telah berhasil meruntuhkan Kerajaan Kediri. Anusapati  yang merasa diperlakukan tidak adil oleh ayahnya, kemudian bertanya kepada ibunya, sehingga Anusapati mengetahui bahwa dirinya bukanlah anak kandung dari Ken Arok, dan Ken Aroklah yang membunuh ayahnya. Anusapatipun marah, kemudian dia mendapatkan keris dari Mpu Gandring yang digunakan oleh Ken Arok untuk membunuh Tunggul Ametung dan menyuruh pembantunya untuk membunuh Ken Arok ketika makan malam pada tahun 1227 M. Untuk menghilangkan jejak pembunuhan, Anusapati membunuh pembantunya dan kemudian mengumumkan bahwa pembantunya mengamuk sehingga menyebabkan kematian sang raja. Kemudian pada tahun 1247 M setelah meninggalnya Ken Arok, Anusapati diangkat sebagai seorang Raja. Hingga pada suatu hari, Tohjaya putra dari Ken Arok dan Ken Umang, mengajak Anusapati untuk mengikutinya pergi beradu ayam. Tanpa menaruh curiga, Anusapati mengiyakan ajakan dari Tohjaya. Tanpa disangka Anusapati ditusuk keris dari Empu Gandring oleh Tohjaya sampai menewaskan Raja Anusapati yang terjadi sekitar tahun 1248 M. Kemudian Tohjaya diangkat sebagai seorang raja, namun ketika pemerintahan Tohjaya terjadilah pemberontakan  yang bernama Ranggawuni oleh anak dari Anusapati pada tahun 1248 M (Soekmono, 1973). </p>
                                <p style="text-align: justify; text-indent: 0.5in;">Thomas Stamford Rafles menemukan Candi Kidal pada tahun 1817, yang kemudian pada tahun 1867 dan tahun 1883 pemerintah dari Hindia Belanda melakukan pembersihan candi dari berbagai pepohonan. Pemugaran candi Kidal pertama kali dilakukan oleh De Hasan sebagai atasan dari pemerintah Hinda Belanda pada tahun 1925. Kemudian pemugaran dilakukan oleh Suaka Peninggalan Sejarah dan Purbakala Jawa Timur tahun 1986 hingga tahun 1990 dengan memperbaiki bagian kaki (batur) hingga atap candi agar kokoh (Soeroto, 2009).</p>
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 3. Kepala Kala di Pintu Candi Kidal.jpg') }}" alt="">
                                    <p><b>Foto 3. Kepala Kala di Pintu Candi Kidal</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span> 
                                <p style="text-align: justify; text-indent: 0.5in;">Candi Kidal menghadap ke arah barat dengan  ketinggian 12,36 meter dan berukuran 8,36 m x 8,36 m. Pada setiap relung candi juga dihiasi dengan pahatan Kala (Kepala Raksasa) di atas ambangnya, lengkap dengan taring yang melengkung seperti candi yang berlanggam arsitektur Jawa Timur pada umumnya (Lihat Foto 3). Bagian kaki candi menjorok ke depan dan dilengkapi tangga yang berhiaskan kepala naga di ujung tangga (Lihat Foto 4). Di bagian kiri dan kanan candi juga terdapat patung binatang mirip seperti singa yang sedang menyangga pelipit kaki candi dan menjorok keluar dari selasar (Lihat Foto 5).</p>
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
                                <p style="text-align: justify; text-indent: 0.5in;">Pada kesustraan Jawa kuno terdapat suatu  mitos yang terkenal di masyarakat yakni mitos Garudheya. Garudheya merupakan seekor garuda yang berhasil membebaskan ibunya dari perbudakan dengan menggunakan air amerta (air kehidupan) sebagai tebusan (Sedyawati, 2013). Konon relief timbul dari Garudheya merupakan amanat dari Raja Anusapati yang menginginkan untuk meruwat Ken Dedes yaitu ibunda yang sangat dicintainya dari perbudakan. Selain sebagai tempat pendharmaan Raja Anusapati dan peruwatan Ken Dedes, Candi Kidal juga berfungsi sebagai tempat pemujaan bagi pemeluk agama Hindu hingga saat ini. </p>
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

                                <p style="text-align: justify; text-indent: 0.5in;">Pembacaan relief Garudheya pada Candi Kidal yaitu dari kanan ke kiri atau berlawanan dengan arah jarum jam (Prasawya). Mulai dari sisi selatan, gambar didalam kekuasaan para naga. Ibu Garuda masih dalam perbudakan Dewi Kadru/naga (Lihat Foto 6). Sisi timur, Garuda telah mendapatkan Amertha yang direbut dari para dewa sebagai penebus ibunya (Lihat Foto 7). Sisi utara, Garuda siap berangkat bersama ibunya meninggalkan para naga karena telah bebas dari Dewi Kadru (Lihat Foto 8). Pembacaan relief Garudheya yang dimulai dari kanan ke kiri tersebut juga berkaitan dengan penamaan Kidal yang berarti kiri.<br><br>
                                <b>Daftar Pustaka</b><br>
                                Perpustakaan Nasional Republik Indonesia. 2014. Candi Kidal. (Online), (https://candi.perpusnas.go.id/temples/deskripsi-jawa_timur-candi_kidal) diakses pada tanggal 28 September 2022.<br>
                                Sedyawati Edi, Hariani Santiko, Hasan, Ratnacah, Wiwin Djuwita, Ramelan, A. (2013). Candi Indonesia Seri Jawa. Direktorat Pelestarian Cagar Budaya dan Permuseuman, Direktorat Jenderal Kebudayaan, Kementerian Pendidikan dan Kebudayaan: Jakarta.<br>
                                Soekmono, R. (1973). Pengantar Sejarah Kebudayaan Indonesia 2. Yayasan Kanisius: Yogyakarta.<br>
                                Soeroto, Myrtha. (2009). Album Arsitektur Candi Cagar Budaya Klasik Hindu Buddha; Cetakan Pertama. Yayasan Keluarga Batam Myrtle Publishing: Batam.
                                </p>
                            </div>
                        </div>
                    </div>



        </div>
    </div>
</div>

@endsection