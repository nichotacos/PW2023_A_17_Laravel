<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'id' => '1',
                'category_id' => 1,
                'name' => 'Galaxy Z Flip 5',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-flip5-f731-sm-f731blgexsp-thumb-537228831?$216_216_PNG$',
                'price' => '17999000',
                'stock' => '15',
                'rating' => '4.3',
                'reviews' => '398',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'category_id' => 1,
                'name' => 'Galaxy Z Fold 5',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-fold5-f946-sm-f946blbgxsp-thumb-537228871?$216_216_PNG$',
                'price' => '26999000',
                'stock' => '21',
                'rating' => '4.5',
                'reviews' => '321',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'category_id' => 1,
                'name' => 'Galaxy S23 Ultra',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s918-sm-s918bzgqxid-thumb-534862772?$216_216_PNG$',
                'price' => '21999000',
                'stock' => '5',
                'rating' => '4.2',
                'reviews' => '451',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '4',
                'category_id' => 1,
                'name' => 'Galaxy S23+',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s916-sm-s916blicxid-thumb-534841521?$216_216_PNG$',
                'price' => '17999000',
                'stock' => '19',
                'rating' => '4.1',
                'reviews' => '231',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '5',
                'category_id' => 1,
                'name' => 'Galaxy S23',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s911-sm-s911bzecxid-thumb-534842510?$216_216_PNG$',
                'price' => '13999000',
                'stock' => '17',
                'rating' => '4.8',
                'reviews' => '61',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '6',
                'category_id' => 1,
                'name' => 'Galaxy A54 5G',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a546elgdxid/gallery/id-galaxy-a54-5g-sm-a546-sm-a546elgdxid-thumb-535684163?$216_216_PNG$',
                'price' => '6399000',
                'stock' => '34',
                'rating' => '3.8',
                'reviews' => '485',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '7',
                'category_id' => 1,
                'name' => 'Galaxy A34 5G',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a346ezsexid/gallery/id-galaxy-a34-5g-sm-a346-sm-a346ezsexid-thumb-535599555?$216_216_PNG$',
                'price' => '5399000',
                'stock' => '44',
                'rating' => '4.0',
                'reviews' => '201',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '8',
                'category_id' => 1,
                'name' => 'Galaxy A73',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a736blghxid/gallery/id-galaxy-a73-5g-a736-sm-a736blghxid-thumb-531910363?$216_216_PNG$',
                'price' => '6499000',
                'stock' => '17',
                'rating' => '4.8',
                'reviews' => '61',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '9',
                'category_id' => 1,
                'name' => 'Samsung S23 FE',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/sm-s711bzpcxsp/gallery/sg-galaxy-s23-fe-s711-sm-s711bzpcxsp-thumb-538441856?$216_216_PNG$',
                'price' => '8999000',
                'stock' => '44',
                'rating' => '4.0',
                'reviews' => '201',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '10',
                'category_id' => 2,
                'name' => 'ROG Strix Scar 18 (2023)',
                'image' => 'images/laptops/laptop1.png',
                'price' => '72999000',
                'stock' => '15',
                'rating' => '4.3',
                'reviews' => '398',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '11',
                'category_id' => 2,
                'name' => 'ROG Strix G18 (2023)',
                'image' => 'images/laptops/laptop2.png',
                'price' => '27499000',
                'stock' => '21',
                'rating' => '4.5',
                'reviews' => '321',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '12',
                'category_id' => 2,
                'name' => 'ROG Strix G16 (2023)',
                'image' => 'images/laptops/laptop3.png',
                'price' => '23999000',
                'stock' => '5',
                'rating' => '4.2',
                'reviews' => '451',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '13',
                'category_id' => 2,
                'name' => 'ROG Strix Scar 16 (2023)',
                'image' => 'images/laptops/laptop4.png',
                'price' => '71999000',
                'stock' => '19',
                'rating' => '4.1',
                'reviews' => '231',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '14',
                'category_id' => 2,
                'name' => 'ROG Strix G17 (2022)',
                'image' => 'images/laptops/laptop5.png',
                'price' => '27499000',
                'stock' => '17',
                'rating' => '4.8',
                'reviews' => '61',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '15',
                'category_id' => 2,
                'name' => 'ROG Strix Scar 17 SE (2022)',
                'image' => 'images/laptops/laptop6.png',
                'price' => '65999000',
                'stock' => '44',
                'rating' => '4.0',
                'reviews' => '201',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '16',
                'category_id' => 2,
                'name' => 'ROG Zephyrus Duo 16 (2023)',
                'image' => 'images/laptops/laptop7.png',
                'price' => '79999000',
                'stock' => '44',
                'rating' => '4.0',
                'reviews' => '201',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '17',
                'category_id' => 2,
                'name' => 'ROG Zephyrus G16 (2023)',
                'image' => 'images/laptops/laptop8.png',
                'price' => '27999000',
                'stock' => '34',
                'rating' => '3.8',
                'reviews' => '485',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '18',
                'category_id' => 2,
                'name' => 'ROG Zephyrus G14 (2023)',
                'image' => 'images/laptops/laptop9.png',
                'price' => '28999000',
                'stock' => '17',
                'rating' => '4.8',
                'reviews' => '61',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '19',
                'category_id' => 3,
                'name' => '85" Neo QLED 8K QN900C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/qa85qn900ckxxs/gallery/sg-qled-qn900c-qa85qn900ckxxs-thumb-535812922?$172_172_PNG$',
                'price' => '129349000',
                'stock' => '15',
                'rating' => '4.3',
                'reviews' => '398',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '20',
                'category_id' => 3,
                'name' => '75" Neo QLED 4K QN90C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/qa75qn90cakxxs/gallery/sg-qled-qn90c-qa75qn90cakxxs-thumb-535812690?$172_172_PNG$',
                'price' => '60918000',
                'stock' => '21',
                'rating' => '4.5',
                'reviews' => '321',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '21',
                'category_id' => 3,
                'name' => '65" OLED 4K S95C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id65s95cako2/gallery/id-65-inch-oled-s95c-and-hw-s800b-soundbar-f-id65s95cako2-thumb-537963731?$172_172_PNG$',
                'price' => '51418000',
                'stock' => '5',
                'rating' => '4.2',
                'reviews' => '451',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '22',
                'category_id' => 3,
                'name' => '55" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu7000u9/gallery/id-55-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id55cu7000u9-thumb-537188177?$172_172_PNG$',
                'price' => '20238000',
                'stock' => '19',
                'rating' => '4.1',
                'reviews' => '231',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '23',
                'category_id' => 3,
                'name' => '55 inch Crystal UHD 4K CU8000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu8000u8/gallery/id-55-inch-crystal-uhd-4k-cu8000-and-hw-c450-soundbar-f-id55cu8000u8-thumb-537188310?$172_172_PNG$',
                'price' => '11038000',
                'stock' => '17',
                'rating' => '4.8',
                'reviews' => '61',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '24',
                'category_id' => 3,
                'name' => '50" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id50cu7000uc/gallery/id-50-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id50cu7000uc-thumb-537186618?$172_172_PNG$',
                'price' => '8638000',
                'stock' => '31',
                'rating' => '4.9',
                'reviews' => '591',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '25',
                'category_id' => 3,
                'name' => '43" Crystal UHD 4K CU8000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id43cu8000ud/gallery/id-43-inch-crystal-uhd-4k-cu8000-and-hw-c450-soundbar-f-id43cu8000ud-thumb-537186261?$172_172_PNG$',
                'price' => '7840000',
                'stock' => '59',
                'rating' => '4.5',
                'reviews' => '430',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '26',
                'category_id' => 3,
                'name' => '50" Crystal UHD 4K CU8500',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id50cu8500ua/gallery/id-50-inch-crystal-uhd-4k-cu8500-and-hw-c450-soundbar-f-id50cu8500ua-thumb-537187395?$172_172_PNG$',
                'price' => '10088000',
                'stock' => '44',
                'rating' => '4.0',
                'reviews' => '201',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '27',
                'category_id' => 3,
                'name' => '43" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id43cu7000ue/gallery/id-43-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id43cu7000ue-thumb-537182314?$172_172_PNG$',
                'price' => '7040000',
                'stock' => '34',
                'rating' => '3.8',
                'reviews' => '485',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('products')->insert($products);
    }
}
