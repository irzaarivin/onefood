<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Toko;

class TokoSeeder extends Seeder
{

    public function run() {

        Toko::create([
            'nama' => 'Nasi Padang Barokah',
            'slug' => 'nasi-padang-barokah',
            'lokasi' => 'Jl. Paus, No. 22',
            'deskripsi' => 'Rumah makan yang menyajikan macam-macam menu makanan khas Minang asli, dengan teknik pembuatan dan rempah-rempah hasil turun temurun daerah Minang.'
        ]);

        Toko::create([
            'nama' => 'Nasi Bebek Madura',
            'slug' => 'nasi-bebek-madura',
            'lokasi' => 'Jl. Kesadaran, Blok G',
            'deskripsi' => 'Bebek yang diolah dan di ternak langsung, melalui hasil tangan sendiri. Menggunakan resep masakan madura yang menghasilkan cita rasa asli Madura sehingga memiliki ciri khas rasa berbeda dengan bebek lainnya.'
        ]);

        Toko::create([
            'nama' => 'Aneka Jus Buah',
            'slug' => 'aneka-jus-buah',
            'lokasi' => 'Jl. Mawar, Blok C',
            'deskripsi' => 'Kedai yang hadir dengan berbagai macam jenis buah-buahan segar yang diolah secara langsung dengan higenis menjadi minuman jus yang bisa di nikmati semua kalangan.'
        ]);

        Toko::create([
            'nama' => 'TakoMen',
            'slug' => 'takomen',
            'lokasi' => 'Jl. Elang, No. 1',
            'deskripsi' => 'Bebek yang diolah dan di ternak langsung, melalui hasil tangan sendiri. Menggunakan resep masakan madura yang menghasilkan cita rasa asli Madura sehingga memiliki ciri khas rasa berbeda dengan bebek lainnya.'
        ]);

        Toko::create([
            'nama' => 'Super Boba',
            'slug' => 'super-boba',
            'lokasi' => 'Jl. In Aja Dulu',
            'deskripsi' => 'Boba yang diolah menggunakan bahan-bahan premium dan menggunakan  gula aren asli sehingga menghasilkan rasa manis alami. Minuman modern yang hits dikalangan anak muda, bisa di nikmati juga oleh semua kalangan.'
        ]);

        Toko::create([
            'nama' => 'BakMie',
            'slug' => 'bakmie',
            'lokasi' => 'Jl. Otista, No. 7',
            'deskripsi' => 'Kedai mie sederhana yang menyediakan macam-macam olahan mie, dari rasa yang gurih hingga rasa yang manis juga tersedia, dengan harga terjangkau dan standar namun memiliki cita rasa yang mahal.'
        ]);

        Toko::create([
            'nama' => 'BurCang',
            'slug' => 'bubur-kacang',
            'lokasi' => 'Jl. Merpati, Blog K',
            'deskripsi' => 'Bubur kacang yang disiram dengan perasan santan kelapa berkualitas, dioalah dengan menggunakan bahan bahan premium sehingga menghasilkan rasa yang pas.'
        ]);
        
    }

}
