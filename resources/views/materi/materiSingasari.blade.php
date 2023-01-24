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
                            <h3 style="color:black;" class="d-flex justify-content-center"><b>Candi Singhasari</b></h3><br><br>
                            <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 1. Panorama 360 Candi Singhasari.jpg') }}" alt="">
                                    <p><b>Foto 1. Panorama 360 Candi Singhasari</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>  
                                <p style="text-align: justify; text-indent: 0.5in;">Candi Singhasari berlokasi di Desa Candirenggo, Kecamatan Singhasari Kabupaten Malang. Candi ini bercorak atau beraliran agama Hindu-Buddha yang merupakan peninggalan terakhir dari Kerajaan Singhasari. Candi Singasari diperkirakan dibangun sekitar tahun 1300-an Masehi. Berdasarkan prasasti Gajahmada tahun 1273 Saka atau 1351 Masehi Candi Singhasari atau Candi Catya (candi yang suci) dibangun sebagai tempat pendharmaan raja terakhir dari Kerajaan Singhasari (Sedyawati, dkk, 2013) sekaligus untuk mengenang kejayaan dari Raja Kertanegara yang memerintah pada tahun 1268-1292 M (Istari, 2015).</p>
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 2. Arca Syiwa.jpg') }}" alt="">
                                    <p><b>Foto 2. Arca Syiwa</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>  
                                <p style="text-align: justify; text-indent: 0.5in;">Raja Kertanegara merupakan raja yang menerapkan politik persatuan nusantara (Soekmono, 1973). Politik tersebut kemudian dilanjutkan oleh Gajahmada. Raja Kertanegara merupakan raja terakhir dari Kerajaan Singhasari yang dibunuh oleh Jaya Katwang yaitu Raja dari Kerajaan Kediri. Tidak lama kemudian Jaya Katwang dikalahkan oleh Raden Wijaya yang merupakan menantu dari Raja Kertanegara. Setelah itu, Raden Wijaya mendirikan Kerajaan Majapahit dengan pusat pemerintahannya berada di Hutan Tarik Trowulan (Mardiono, 2020). </p>
                                <p style="text-align: justify; text-indent: 0.5in;">Menurut Prasasti Gajahmada, Candi Singhasari dibangun kembali (renovasi) pada masa pemerintahan Kerajaan Majapahit yang pada saat itu dipimpin oleh Tribuwanatunggadewi (Soeroto, 2009). Tribuwanatunggadewi merupakan cucu dari Kertanegara, yang sekaligus pada saat itu menjadi ketua dari Bhatara Sapta Prabu atau pemimpin tertinggi dari Kerajaan Majapahit. Tribuwanatunggadewi memerintahkan Mahapatih Gajahmada untuk  membangunkan candi sebagai bentuk penghormatan dan memuliakan Raja Kertanegara. Candi tersebut bernama Candi Singhasari. Candi Singhasari merupakan Candi Syiwa, dibuktikan dengan adanya beberapa Arca Syiwa (Lihat foto 2) yang berada di halaman Candi Singhasari.</p>
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 3. Bentuk Bangunan Candi Singhasari.jpg') }}" alt="">
                                    <p><b>Foto 3. Bentuk Bangunan Candi Singhasari</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>  
                                <p style="text-align: justify; text-indent: 0.5in;">Candi Singhasari terletak di tengah halaman dan menghadap ke arah Barat. Candi ini terbuat dari batuan andesit (Lihat Foto 3). Candi Singhasari memiliki ketinggian sekitar 15 meter dengan alas berbentuk bujur sangkar yang berukuran sekitar 14 m x 14 m (Soeroto, 2009). Candi Singhasari bergaya arsitektur Jawa Timur. Terdapat pahatan Kala berahang bawah lengkap dengan taringnya, yang berada di atas ambang pintu masuk dan setiap relung Candi Singhasari (Lihat Foto 4). </p>
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 4. Pahatan Kala Candi Singhasari.jpg') }}" alt="">
                                    <p><b>Foto 4. Pahatan Kala Candi Singhasari</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span> 
                                <p style="text-align: justify; text-indent: 0.5in;">Candi Singhasari ditemukan pada awal tahun 1900-an dan pada tahun 1934 kondisi bangunan candi sudah mengalami kerusakan yang parah sehingga dilakukan pemugaran sampai tahun 1936 (Soeroto, 2009). </p>
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 5. Tumpukan Batu di Halaman Candi Singhasari.jpg') }}" alt="">
                                    <p><b>Foto 5. Tumpukan Batu di Halaman Candi Singhasari</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span> 
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 6. Arca di Halaman Candi Singhasari.jpg') }}" alt="">
                                    <p><b>Foto 6. Arca di Halaman Candi Singhasari</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span> 
                                <p style="text-align: justify; text-indent: 0.5in;">Pemugaran Candi Singhasari terlihat belum menyeluruh, hal tersebut dapat dilihat di sekeliling halaman Candi Singhasari masih berjajar tumpukan batu yang belum berhasil untuk dikembalikan pada tempat semula (Lihat Foto 5). Selain itu, di halaman candi juga masih terdapat beberapa arca yang sebagaian besar dalam keadaan rusak (Lihat Foto 6).<br><br>
                                <b>Daftar Pustaka</b><br>
                                Istari, T. M. R. (2015). Ragam Hias Candi-Candi di Jawa: Motif dan Maknanya. Kepel Press: Yogyakarta.<br>
                                Mardiono, P. (2020). Sejarah Kelam Majapahit: Jejak-Jejak Konflik Kekuasaan dan Tumbal Asmara di Majapahit. Indonesia: Araska Publishing.<br>
                                Kementrian Pendidikan, Kebudayaan, Riset, dan Teknologi. 2019. Prasasti Gajahmada.  (Online), (http://kebudayaan.kemdikbud.go.id/munas/4933-2/) diakses pada tanggal 01 Desember 2023.<br>
                                Perpustakaan Nasional Republik Indonesia. 2014. Candi Singhasari. (Online), (https://candi.perpusnas.go.id/temples/deskripsi-jawa_timur-candi_Singhasari) diakses pada tanggal 10 Oktober 2022.<br>
                                Sedyawati Edi, Hariani Santiko, Hasan, Ratnacah, Wiwin Djuwita, Ramelan, A. (2013). Candi Indonesia Seri Jawa. Direktorat Pelestarian Cagar Budaya dan Permuseuman, Direktorat Jendral Kebudayaan, Kementerian Pendidikan dan Kebudayaan: Jakarta.<br>
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