<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    
    public function run()
    {

        Food::create([
            'nama' => 'Nasi Padang Rendang',
            'slug' => 'nasi-padang-rendang',
            'toko' => 'Nasi Padang Barokah',
            'lokasi' => 'Jl. Paus No. 22',
            'harga' => '20000',
            'thumb' => 'nasi-padang-rendang.jpg',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Nasi Padang Ayam Bakar',
            'slug' => 'nasi-padang-ayam-bakar',
            'toko' => 'Nasi Padang Barokah',
            'lokasi' => 'Jl. Paus No. 22',
            'harga' => '23000',
            'thumb' => 'nasi-padang-ayam-bakar.png',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Nasi Padang Dendeng Balado',
            'slug' => 'nasi-padang-dendeng-balado',
            'toko' => 'Nasi Padang Barokah',
            'lokasi' => 'Jl. Paus No. 22',
            'harga' => '20000',
            'thumb' => 'nasi-padang-dendeng-balado.png',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Nasi Bebek',
            'slug' => 'nasi-bebek',
            'toko' => 'Nasi Bebek Madura',
            'lokasi' => 'Jl. Kesadaran, Blok G',
            'harga' => '25000',
            'thumb' => 'nasi-bebek.jpg',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Nasi Ayam',
            'slug' => 'nasi-ayam',
            'toko' => 'Nasi Bebek Madura',
            'lokasi' => 'Jl. Kesadaran, Blok G',
            'harga' => '23000',
            'thumb' => 'nasi-ayam.jpg',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Es Teh Manis',
            'slug' => 'es-teh-manis',
            'toko' => 'Nasi Bebek Madura',
            'lokasi' => 'Jl. Kesadaran, Blok G',
            'harga' => '5000',
            'thumb' => 'es-teh-manis.jpg',
            'kategori' => 'minuman'
        ]);

        Food::create([
            'nama' => 'Jus Stroberi',
            'slug' => 'jus-stroberi',
            'toko' => 'Aneka Jus Buah',
            'lokasi' => 'Jl. Mawar, Blok C',
            'harga' => '10000',
            'thumb' => 'jus-stroberi.jpg',
            'kategori' => 'minuman'
        ]);

        Food::create([
            'nama' => 'Jus Mangga',
            'slug' => 'jus-mangga',
            'toko' => 'Aneka Jus Buah',
            'lokasi' => 'Jl. Mawar, Blok C',
            'harga' => '10000',
            'thumb' => 'jus-mangga.jpg',
            'kategori' => 'minuman'
        ]);

        Food::create([
            'nama' => 'Jus Jambu Biji',
            'slug' => 'jus-jambu-biji',
            'toko' => 'Aneka Jus Buah',
            'lokasi' => 'Jl. Mawar, Blok C',
            'harga' => '10000',
            'thumb' => 'jus-jambu-biji.jpeg',
            'kategori' => 'minuman'
        ]);

        Food::create([
            'nama' => 'Brown Sugar Milk Tea',
            'slug' => 'brown-sugar-milk-tea',
            'toko' => 'Super Boba',
            'lokasi' => 'Jl. In Aja Dulu',
            'harga' => '25000',
            'thumb' => 'brown-sugar-milk-tea.jpg',
            'kategori' => 'minuman'
        ]);

        Food::create([
            'nama' => 'Dalgona Matcha',
            'slug' => 'dalgona-matcha',
            'toko' => 'Super Boba',
            'lokasi' => 'Jl. In Aja Dulu',
            'harga' => '23000',
            'thumb' => 'dalgona-matcha.jpg',
            'kategori' => 'minuman'
        ]);

        Food::create([
            'nama' => 'Brown Sugar Fresh Milk',
            'slug' => 'brown-sugar-fresh-milk',
            'toko' => 'Super Boba',
            'lokasi' => 'Jl. In Aja Dulu',
            'harga' => '25000',
            'thumb' => 'brown-sugar-fresh-milk.jpeg',
            'kategori' => 'minuman'
        ]);

        Food::create([
            'nama' => 'Bakso',
            'slug' => 'bakso',
            'toko' => 'BakMie',
            'lokasi' => 'Jl. Otista, No. 7',
            'harga' => '15000',
            'thumb' => 'bakso.jpg',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Mie Ayam',
            'slug' => 'mie-ayam',
            'toko' => 'BakMie',
            'lokasi' => 'Jl. Otista, No. 7',
            'harga' => '15000',
            'thumb' => 'mie-ayam.jpg',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Mie Yamin',
            'slug' => 'mie-yamin',
            'toko' => 'BakMie',
            'lokasi' => 'Jl. Otista, No. 7',
            'harga' => '15000',
            'thumb' => 'mie-yamin.jpg',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Takoyaki',
            'slug' => 'takoyaki',
            'toko' => 'TakoMen',
            'lokasi' => 'Jl. Elang, No. 1',
            'harga' => '2000',
            'thumb' => 'takoyaki.jpeg',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Mentai Rice',
            'slug' => 'mentai-rice',
            'toko' => 'TakoMen',
            'lokasi' => 'Jl. Elang, No. 1',
            'harga' => '35000',
            'thumb' => 'mentai-rice.png',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Okonomiyaki',
            'slug' => 'okonomiyaki',
            'toko' => 'TakoMen',
            'lokasi' => 'Jl. Elang, No. 1',
            'harga' => '30000',
            'thumb' => 'okonomiyaki.jpg',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Bubur Kacang Hijau',
            'slug' => 'bubur-kacang-hijau',
            'toko' => 'BurCang',
            'lokasi' => 'Jl. Merpati',
            'harga' => '10000',
            'thumb' => 'bubur-kacang-hijau.jpeg',
            'kategori' => 'makanan'
        ]);

        Food::create([
            'nama' => 'Bubur Ketan Item',
            'slug' => 'bubur-ketan-item',
            'toko' => 'BurCang',
            'lokasi' => 'Jl. Merpati',
            'harga' => '10000',
            'thumb' => 'bubur-ketan-item.jpg',
            'kategori' => 'makanan'
        ]);
        
    }
}
