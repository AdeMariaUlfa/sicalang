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
        $nama = $request->nama;
        $kelas = $request->kelas;

        return view('dashboard', compact('nama', 'kelas'));
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
                'img' => 'candiBadut.jpg',
                'soal' => 'Candi tersebut berada di Malang-Jawa Timur namun dikategorikan sebagai candi dengan langgam arsitektur Jawa Tengah, karena…',
                'jawaban' => [
                    'Puncak berbentuk kubus dan dibangun dari batuan andesit',
                    'Bangunan berbentuk ramping dan relief kala memiliki rahang bawah',
                    'Bangunan berbentuk tambun dan relief kala tanpa rahang bawah',
                    'Dibangun dari batu andesit dan berbadan tambun'
                ],
                'benar' => 2,
                'next' => '2'
            ],
            '2' => [
                'soal' => 'Candi Karangbesuki dibangun sekitar abad ke-8 Masehi sebagai tempat untuk memuliakan Resi Agastya. Masyarakat sekitar menyebutnya sebagai “Candi Wurung” mengapa seperti itu?',
                'jawaban' => [
                    'karena Candi Karangbesuki dibangun sebagai tempat untuk mendharmakan raja',
                    'karena Candi Karangbesuki merupakan candi yang beraliran agama Hindu-Siwa',
                    'karena Candi Karangbesuki dibuat dari batu andesit & memuliakan Resi Agastya',
                    'karena Candi Karangbesuki belum selesai dibangun dan tersisa pondasinya saja'
                ],
                'benar' => 3,
                'next' => '3'
            ],
            '3' => [
                'soal' => 'Candi Karangbesuki juga disebut sebagai Candi Wurung atau candi yang belum selesai dan gagal dalam proses pembangunannya. Struktur dari Candi Karangbesuki juga sudah hancur hanya tersisa pondasinya saja.',
                'jawaban' => [
                    'Sebagai tempat untuk memuliakan raja',
                    'Sebagai bangunan suci bagi para pandai logam.',
                    'Sebagai tempat pendharmaan raja dan petirtaan',
                    'Sebagai tempat bangunan suci bagi para raja.'
                ],
                'benar' => 1,
                'next' => '4'
            ],
            '4' => [
                'soal' => 'Dari kedua candi tersebut memiliki ciri-ciri bentuk bangunan yang berbeda. Sebutkan perbedaan antara bentuk bangunan Candi Kidal dengan Candi Songgoriti!',
                'img' => 'kidal.jpg',
                'img2' => 'songgoriti.jpg',
                'jawaban' => [
                    'Puncak bangunan Candi Kidal berbentuk kubus, sedangkan puncak bangunan candi Songgoriti berbentuk limas.',
                    'Atap Candi Kidal berbentuk datar, sedangkan atap Candi Songgoriti bertingkat dan  mengecil ke atas.',
                    'Bangunan Candi Kidal berbentuk tambun, sedangkan bangunan Candi Songgoriti berbentuk ramping.',
                    'Bangunan Candi Kidal berbentuk ramping, sedangkan bangunan Candi Songgoriti berbentuk tambun.'
                ],
                'benar' => 3,
                'next' => '5'
            ],
            '5' => [
                'soal' => 'Relief Garudheya yang dipahatkan pada setiap sisi Candi Kidal adalah sebagai amanat dari Anusapati. Tujuan dari dipahatnya relief Garudheya adalah?',
                'jawaban' => [
                    'sebagai tempat pendharmaan Raja Singosari yakni Anusapati.',
                    'untuk meruwat Ken Dedes yang merupakan ibu dari Anusapati',
                    'sebagai tempat untuk mendharmakan Ken Arok sebagai ayah Anusapati',
                    'untuk meruwat Ken Arok sebagai suami dari Ken Dedes dan Raja Singosari.'
                ],
                'benar' => 1,
                'next' => '6'
            ],
            '6' => [
                'soal' => 'Bangunan Candi Jago berbentuk tambun, pada badan candi terdapat relief padma (bunga teratai) dan terdapat patung Amogaphasa yang berada di halaman Candi Jago. Berdasarkan kondisi fisik dan reief yang ada pada bangunan candi serta informasi dari Kitab Negarakertagama menjelaskan bahwa, Candi Jago dibangun sebagai tempat untuk mendharmakan Raja Wisnuwardhana yaitu raja dari Kerajaan Singasari yang menganut agama Syiwa Buddha Tantrayana. Berikut ini yang merupakan pengertian dari aliran Syiwa Buddha Tantrayana yaitu?',
                'jawaban' => [
                    'Syiwa Buddha Tantrayana adalah perpaduan antara ajaran Hindu dengan Dinamisme.',
                    'Syiwa Buddha Tantrayana adalah perpaduan antara ajaran Buddha dengan Animisme.',
                    'Aliran Syiwa Buddha Tantrayana adalah perpaduan antara ajaran Hindu dengan Buddha.',
                    'Aliran Syiwa Buddha Tantrayana adalah perpaduan antara ajaran Hindu dengan Animisme.'
                ],
                'benar' => 2,
                'next' => '7'
            ],
            '7' => [
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
                    'Jawa Timur',
                    'Jawa Barat',
                    'Jawa Tengah',
                    'Sumatera'
                ],
                'benar' => 0,
                'next' => '8'
            ],
            '8' => [
                'soal' => 'Berdasarkan prasasti Gajahmada tahun 1273 Saka (1351 Masehi), Candi Singhasari dibangun sebagai tempat untuk mendharmakan raja terakhir dari Kerajaan Singhasari, yaitu raja? ',
                'jawaban' => [
                    'Kertanegara',
                    'Ken Arok',
                    'Wisnuwardhana',
                    'Anusapati'
                ],
                'benar' => 0,
                'next' => '9'
            ],
            '9' => [
                'soal' => 'Candi Sumberawan merupakan satu-satunya candi berbentuk Stupa yang ada di Jawa Timur. Menurut kitab Negarakertagama, Candi Sumberawan disebut sebagai candi?',
                'jawaban' => [
                    'Catya',
                    'Liswa',
                    'Kasunggrahan',
                    'Wurung'
                ],
                'benar' => 2,
                'next' => '10'
            ],
            '10' => [
                'soal' => 'Upacara adat selametan sumber air yang selalu diperingati setiap bulan Syuro penanggalan Jawa di Stupa Sumberawan dinamakan?',
                'jawaban' => [
                    'Puja Bakti',
                    'Tri waisya',
                    'Tirta Amerta Sari',
                    'Upacara Kas'
                ],
                'benar' => 2,
                'next' => 'hasil'
            ],
        ]);
        if ($s == 'hasil') {
            $hasil--;
            return view('quiz.hasil', compact('hasil'));
        } else {
            $search = Arr::get($soal, $s);
            return view('quiz.quiz', compact('search', 'hasil'));
        }
    }
}
