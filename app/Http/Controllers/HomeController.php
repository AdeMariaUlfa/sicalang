<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    }
    public function login()
    {
        return view('login');
    }
    public function prosesLogin(Request $request)
    {
        $request->session()->put('nama',$request->nama);
        $request->session()->put('kelas',$request->kelas);
        $nama = $request->session()->get('nama');
        $kelas = $request->session()->get('kelas');

        return view('dashboard');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function pageCandi($candi)
    {
        return view('page-candi', compact('candi'));
    }
    public function quizCandi($s, $j, $sblm)
    {
        $hasil = $sblm;
        if ($j == 'benar') {
            $hasil++;
        }
        $soal =  collect([
            '1' => [
                'no' => '1',
                'img' => [
                    'img' => 'candiBadut.jpg',
                    'sumber'=>'(Sumber: Dokumentasi Pribadi, 2022)'
                ],
                'soal' => 'Candi tersebut berada di Malang-Jawa Timur namun dikategorikan sebagai candi dengan langgam arsitektur Jawa Tengah, karena…',
                'jawaban' => [
                    'A. Puncak berbentuk kubus dan dibangun dari batuan andesit',
                    'B. Bangunan berbentuk ramping dan relief kala memiliki rahang bawah',
                    'C. Bangunan berbentuk tambun dan relief kala tanpa rahang bawah',
                    'D. Dibangun dari batu andesit dan berbadan tambun'
                ],
                'warna' => [
                    '<div class="bg-primary">',
                    '<div class="bg-warning">',
                    '<div class="bg-danger">',
                    '<div class="bg-success">',
                ],
                'benar' => 2,
                'next' => '2'
            ],
            '2' => [
                'no' => '2',
                'soal' => 'Candi Karangbesuki dibangun sekitar abad ke-8 Masehi sebagai tempat untuk memuliakan Resi Agastya. Masyarakat sekitar menyebutnya sebagai “Candi Wurung” mengapa seperti itu?',
                'jawaban' => [
                    'A. karena Candi Karangbesuki dibangun sebagai tempat untuk mendharmakan raja',
                    'B. karena Candi Karangbesuki merupakan candi yang beraliran agama Hindu-Siwa',
                    'C. karena Candi Karangbesuki dibuat dari batu andesit & memuliakan Resi Agastya',
                    'D. karena Candi Karangbesuki belum selesai dibangun dan tersisa pondasinya saja'
                ],
                'warna' => [
                    '<div class="bg-primary">',
                    '<div class="bg-warning">',
                    '<div class="bg-danger">',
                    '<div class="bg-success">',
                ],
                'benar' => 3,
                'next' => '3'
            ],
            '3' => [
                'no' => '3',
                'soal' => 'Candi Karangbesuki juga disebut sebagai Candi Wurung atau candi yang belum selesai dan gagal dalam proses pembangunannya. Struktur dari Candi Karangbesuki juga sudah hancur hanya tersisa pondasinya saja.',
                'jawaban' => [
                    'A. Sebagai tempat untuk memuliakan raja',
                    'B. Sebagai bangunan suci bagi para pandai logam.',
                    'C. Sebagai tempat pendharmaan raja dan petirtaan',
                    'D. Sebagai tempat bangunan suci bagi para raja.'
                ],
                'warna' => [
                    '<div class="bg-primary">',
                    '<div class="bg-warning">',
                    '<div class="bg-danger">',
                    '<div class="bg-success">',
                ],
                'benar' => 1,
                'next' => '4'
            ],
            '4' => [
                'no' => '4',
                'soal' => 'Dari kedua candi tersebut memiliki ciri-ciri bentuk bangunan yang berbeda. Sebutkan perbedaan antara bentuk bangunan Candi Kidal dengan Candi Songgoriti!',
                'img' => [
                    'img' =>'kidal.jpg',
                    'sumber' => '(Sumber: Dokumentasi Pribadi, 2022)',
                ],
                'img2' => [
                    'img' => 'songgoriti.jpg',
                    'sumber' => '(Sumber: Dokumentasi Pribadi, 2022)'
                ],
                'jawaban' => [
                    'A. Puncak bangunan Candi Kidal berbentuk kubus, sedangkan puncak bangunan candi Songgoriti berbentuk limas.',
                    'B. Atap Candi Kidal berbentuk datar, sedangkan atap Candi Songgoriti bertingkat dan  mengecil ke atas.',
                    'C. Bangunan Candi Kidal berbentuk tambun, sedangkan bangunan Candi Songgoriti berbentuk ramping.',
                    'D. Bangunan Candi Kidal berbentuk ramping, sedangkan bangunan Candi Songgoriti berbentuk tambun.'
                ],
                'warna' => [
                    '<div class="bg-primary">',
                    '<div class="bg-warning">',
                    '<div class="bg-danger">',
                    '<div class="bg-success">',
                ],
                'benar' => 3,
                'next' => '5'
            ],
            '5' => [
                'no' => '5',
                'soal' => 'Relief Garudheya yang dipahatkan pada setiap sisi Candi Kidal adalah sebagai amanat dari Anusapati. Tujuan dari dipahatnya relief Garudheya adalah?',
                'jawaban' => [
                    'A.sebagai tempat pendharmaan Raja Singosari yakni Anusapati.',
                    'B. untuk meruwat Ken Dedes yang merupakan ibu dari Anusapati',
                    'C. sebagai tempat untuk mendharmakan Ken Arok sebagai ayah Anusapati',
                    'D. untuk meruwat Ken Arok sebagai suami dari Ken Dedes dan Raja Singosari.'
                ],
                'warna' => [
                    '<div class="bg-primary">',
                    '<div class="bg-warning">',
                    '<div class="bg-danger">',
                    '<div class="bg-success">',
                ],
                'benar' => 1,
                'next' => '6'
            ],
            '6' => [
                'no' => '6',
                'soal' => 'Bangunan Candi Jago berbentuk tambun, pada badan candi terdapat relief padma (bunga teratai) dan terdapat patung Amogaphasa yang berada di halaman Candi Jago. Berdasarkan kondisi fisik dan reief yang ada pada bangunan candi serta informasi dari Kitab Negarakertagama menjelaskan bahwa, Candi Jago dibangun sebagai tempat untuk mendharmakan Raja Wisnuwardhana yaitu raja dari Kerajaan Singasari yang menganut agama Syiwa Buddha Tantrayana. Berikut ini yang merupakan pengertian dari aliran Syiwa Buddha Tantrayana yaitu?',
                'jawaban' => [
                    'A. Syiwa Buddha Tantrayana adalah perpaduan antara ajaran Hindu dengan Dinamisme.',
                    'B. Syiwa Buddha Tantrayana adalah perpaduan antara ajaran Buddha dengan Animisme.',
                    'C. Aliran Syiwa Buddha Tantrayana adalah perpaduan antara ajaran Hindu dengan Buddha.',
                    'D. Aliran Syiwa Buddha Tantrayana adalah perpaduan antara ajaran Hindu dengan Animisme.'
                ],
                'warna' => [
                    '<div class="bg-primary">',
                    '<div class="bg-warning">',
                    '<div class="bg-danger">',
                    '<div class="bg-success">',
                ],
                'benar' => 2,
                'next' => '7'
            ],
            '7' => [
                'no' => '7',
                'soal' => 'Bangunan Candi Singasari memiliki ciri-ciri sebagai berikut!
                <br>
                1)	Memiliki bentuk tubuh bangunan candi yang ramping.
                <br>
                2)	Pahatan Kala pada ambang pintu candi memiliki rahang bawah.
                <br>
                3)	Puncak candi berbentuk kubus.
                <br>
                4)	Atap bertingkat mengecil ke atas.
                <br>
                Berdasarkan ciri-ciri tersebut, Candi Singhasari berlanggam arsitektur?
                ',
                'jawaban' => [
                    'A. Jawa Timur',
                    'B. Jawa Barat',
                    'C. Jawa Tengah',
                    'D. Sumatera'
                ],
                'warna' => [
                    '<div class="bg-primary">',
                    '<div class="bg-warning">',
                    '<div class="bg-danger">',
                    '<div class="bg-success">',
                ],
                'benar' => 0,
                'next' => '8'
            ],
            '8' => [
                'no' => '8',
                'soal' => 'Berdasarkan prasasti Gajahmada tahun 1273 Saka (1351 Masehi), Candi Singhasari dibangun sebagai tempat untuk mendharmakan raja terakhir dari Kerajaan Singhasari, yaitu raja? ',
                'jawaban' => [
                    'A. Kertanegara',
                    'B. Ken Arok',
                    'C. Wisnuwardhana',
                    'D. Anusapati'
                ],
                'warna' => [
                    '<div class="bg-primary">',
                    '<div class="bg-warning">',
                    '<div class="bg-danger">',
                    '<div class="bg-success">',
                ],
                'benar' => 0,
                'next' => '9'
            ],
            '9' => [
                'no' => '9',
                'soal' => 'Candi Sumberawan merupakan satu-satunya candi berbentuk Stupa yang ada di Jawa Timur. Menurut kitab Negarakertagama, Candi Sumberawan disebut sebagai candi?',
                'jawaban' => [
                    'A. Catya',
                    'B. Liswa',
                    'C. Kasunggrahan',
                    'D. Wurung'
                ],
                'warna' => [
                    '<div class="bg-primary">',
                    '<div class="bg-warning">',
                    '<div class="bg-danger">',
                    '<div class="bg-success">',
                ],
                'benar' => 2,
                'next' => '10'
            ],
            '10' => [
                'no' => '10',
                'soal' => 'Upacara adat selametan sumber air yang selalu diperingati setiap bulan Syuro penanggalan Jawa di Stupa Sumberawan dinamakan?',
                'jawaban' => [
                    'A. Puja Bakti',
                    'B. Tri waisya',
                    'C. Tirta Amerta Sari',
                    'D. Upacara Kas'
                ],
                'warna' => [
                    '<div class="bg-primary">',
                    '<div class="bg-warning">',
                    '<div class="bg-danger">',
                    '<div class="bg-success">',
                ],
                'benar' => 2,
                'next' => 'hasil'
            ],
        ]);
        if ($s == 'hasil') {
            $hasil--;
            $jumlah=$hasil*10;
            return view('quiz.hasil', compact('jumlah'));
        } else {
            $search = Arr::get($soal, $s);
            return view('quiz.quiz', compact('search', 'hasil'));
        }
    }
}
