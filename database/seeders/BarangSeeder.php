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
                'penjual_id' => 1,
                'nama_barang' => 'Pizza Margherita',
                'harga' => 120000,
                'image' => 'https://cdn.loveandlemons.com/wp-content/uploads/2023/07/margherita-pizza-500x375.jpg',
                'is_ready' => true,
                'keterangan' => 'Pizza Margherita adalah salah satu varian pizza klasik yang berasal dari Italia. Pizza ini terkenal dengan kombinasi sederhana namun lezat, yaitu saus tomat segar yang dibuat dari tomat pilihan, dilapisi dengan keju mozzarella yang meleleh sempurna. Dihiasi dengan daun basil segar dan sedikit minyak zaitun, Pizza Margherita menjadi representasi cita rasa Italia yang autentik dan kaya. Ideal untuk pencinta pizza yang menghargai kelezatan bahan-bahan alami.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjual_id' => 1,
                'nama_barang' => 'Sushi Salmon',
                'harga' => 150000,
                'image' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/4/9/c705f96d-ece7-45f8-b7c1-13aeca25362c.jpg',
                'is_ready' => true,
                'keterangan' => 'Sushi Salmon merupakan salah satu jenis sushi paling populer, dengan irisan salmon segar yang dihidangkan di atas nasi yang lembut dan sedikit beraroma cuka. Makanan ini terkenal karena perpaduan tekstur lembut dari ikan salmon dengan rasa nasi yang lezat. Sushi ini menjadi favorit di seluruh dunia, dan merupakan pilihan sempurna bagi pecinta makanan laut yang ingin menikmati kesegaran salmon dalam bentuk yang sederhana namun elegan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjual_id' => 2,
                'nama_barang' => 'Burger Keju',
                'harga' => 100000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTUBmsQI4CXq52guvZ8w3XGh0dwPh74XkFPQ&s',
                'is_ready' => false,
                'keterangan' => 'Burger Keju ini adalah kombinasi sempurna antara daging sapi yang dimasak dengan baik dan melelehnya keju cheddar di atasnya. Dibuat dengan roti burger yang lembut, sayuran segar seperti selada dan tomat, serta tambahan saus spesial, membuat setiap gigitan memberikan rasa yang kaya dan lezat. Ideal untuk pencinta makanan cepat saji dengan cita rasa klasik dan modern.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjual_id' => 2,
                'nama_barang' => 'Pasta Carbonara',
                'harga' => 130000,
                'image' => 'https://www.cookingclassy.com/wp-content/uploads/2020/10/spaghetti-carbonara-01.jpg',
                'is_ready' => true,
                'keterangan' => 'Pasta Carbonara adalah hidangan khas Italia yang terkenal dengan saus krim yang kaya dan gurih. Dibuat dengan kombinasi sempurna dari pasta al dente, saus yang terbuat dari telur, keju Parmesan, dan daging asap, hidangan ini menghadirkan keseimbangan rasa yang lezat. Pasta Carbonara ini cocok bagi siapa saja yang mencari hidangan pasta yang creamy dan memuaskan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjual_id' => 3,
                'nama_barang' => 'Tacos Al Pastor',
                'harga' => 80000,
                'image' => 'https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/05/al-pastor-3507w.jpg',
                'is_ready' => true,
                'keterangan' => 'Tacos Al Pastor adalah hidangan khas Meksiko yang terbuat dari daging babi panggang yang dimarinasi dengan bumbu khas, dipanggang dengan sempurna, dan disajikan dalam tortilla jagung yang lembut. Dengan tambahan topping seperti nanas, bawang, dan cilantro, Tacos Al Pastor memberikan perpaduan rasa manis, gurih, dan sedikit pedas dalam setiap gigitan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjual_id' => 3,
                'nama_barang' => 'Ramen Tonkotsu',
                'harga' => 140000,
                'image' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/c4e7f587-e9e1-4953-b032-f58f82e91f4d/Derivates/4b8b814f-8562-4ad0-8db8-9939cb103685.jpg',
                'is_ready' => true,
                'keterangan' => 'Ramen Tonkotsu adalah ramen dengan kuah kaldu babi yang kental dan berlemak, yang dimasak selama berjam-jam untuk menghasilkan rasa yang dalam dan kaya. Hidangan ini disajikan dengan mie ramen yang kenyal, daging babi, telur rebus setengah matang, serta berbagai topping lainnya seperti daun bawang dan jamur. Ramen ini sangat cocok untuk mereka yang mencari hidangan mie yang kaya dan memuaskan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjual_id' => 1,
                'nama_barang' => 'Dim Sum',
                'harga' => 90000,
                'image' => 'https://www.unileverfoodsolutions.co.id/dam/global-ufs/mcos/SEA/calcmenu/recipes/ID-recipes/chicken-&-other-poultry-dishes/prawn---chicken-shumai-dimsum/Dimsum1260-700.jpg',
                'is_ready' => true,
                'keterangan' => 'Dim Sum adalah kumpulan makanan kecil khas Cina yang umumnya dihidangkan dalam porsi kecil, seperti siomay, dumpling, dan bakpao. Setiap jenis dim sum dibuat dengan bahan-bahan berkualitas, seperti daging ayam, udang, dan sayuran, yang dibungkus dalam kulit pangsit lembut. Dim sum ini sangat cocok untuk dinikmati bersama teh hangat dalam suasana santai.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjual_id' => 2,
                'nama_barang' => 'Crepes Suzette',
                'harga' => 95000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNZzY4RE0N1EnjV5JrcUdMoAg8eM3D_w8DVg&s',
                'is_ready' => false,
                'keterangan' => 'Crepes Suzette adalah hidangan pencuci mulut klasik asal Prancis yang terdiri dari crepes tipis yang disajikan dengan saus jeruk manis yang dibuat dari jus jeruk segar, gula, dan sedikit Grand Marnier atau likuor lainnya. Disajikan hangat dengan aroma jeruk yang segar, hidangan ini merupakan pilihan yang sempurna untuk mengakhiri makan malam dengan manis dan elegan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        
        
    }
}
