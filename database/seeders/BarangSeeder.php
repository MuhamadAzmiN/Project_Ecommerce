<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = Barang::all();
        DB::table('barangs')->insert([
            [
                'nama_barang' => 'Pizza Margherita',
                'harga' => 120000,
                'image' => 'https://cdn.loveandlemons.com/wp-content/uploads/2023/07/margherita-pizza-500x375.jpg', // Ganti dengan URL gambar yang valid
                'is_ready' => true,
                'keterangan' => 'Pizza klasik dengan saus tomat dan keju mozzarella',
                'created_at' => now(),
                'updated_at' => now(),
                
            
            ],
            [
                'nama_barang' => 'Sushi Salmon',
                'harga' => 150000,
                'image' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/4/9/c705f96d-ece7-45f8-b7c1-13aeca25362c.jpg', // Ganti dengan URL gambar yang valid
                'is_ready' => true,
                'keterangan' => 'Sushi dengan irisan salmon segar dan nasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Burger Keju',
                'harga' => 100000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTUBmsQI4CXq52guvZ8w3XGh0dwPh74XkFPQ&s', // Ganti dengan URL gambar yang valid
                'is_ready' => false,
                'keterangan' => 'Burger lezat dengan keju dan bahan segar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Pasta Carbonara',
                'harga' => 130000,
                'image' => 'https://www.cookingclassy.com/wp-content/uploads/2020/10/spaghetti-carbonara-01.jpg', // Ganti dengan URL gambar yang valid
                'is_ready' => true,
                'keterangan' => 'Pasta dengan saus krim dan daging asap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Tacos Al Pastor',
                'harga' => 80000,
                'image' => 'https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/05/al-pastor-3507w.jpg', // Ganti dengan URL gambar yang valid
                'is_ready' => true,
                'keterangan' => 'Tacos dengan daging babi panggang dan aneka topping',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Ramen Tonkotsu',
                'harga' => 140000,
                'image' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/c4e7f587-e9e1-4953-b032-f58f82e91f4d/Derivates/4b8b814f-8562-4ad0-8db8-9939cb103685.jpg', // Ganti dengan URL gambar yang valid
                'is_ready' => true,
                'keterangan' => 'Ramen dengan kuah babi kental dan topping yang lezat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Dim Sum',
                'harga' => 90000,
                'image' => 'https://www.unileverfoodsolutions.co.id/dam/global-ufs/mcos/SEA/calcmenu/recipes/ID-recipes/chicken-&-other-poultry-dishes/prawn---chicken-shumai-dimsum/Dimsum1260-700.jpg', // Ganti dengan URL gambar yang valid
                'is_ready' => true,
                'keterangan' => 'Kumpulan makanan kecil khas Cina yang lezat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Crepes Suzette',
                'harga' => 95000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNZzY4RE0N1EnjV5JrcUdMoAg8eM3D_w8DVg&s', // Ganti dengan URL gambar yang valid
                'is_ready' => false,
                'keterangan' => 'Crepes tipis dengan saus jeruk dan sedikit alkohol',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
