<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('actionRegister', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

Route::get('/', function() {
    return view('home', [
        "title" => 'Home',
        "items" => [
            [
                'name' => 'Console',
                'image' => 'https://media.ldlc.com/r1600/ld/products/00/05/74/94/LD0005749420_1.jpg',
                'ref' => ''
            ],
            [
                'name' => 'Handphones',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-flip5-f731-sm-f731blgexsp-thumb-537228831?$216_216_PNG$',
                'ref' => 'phone'
            ],
            [
                'name' => 'Laptops',
                'image' => asset('images/laptops/laptop3.png'),
                'ref' => 'laptop'
            ],
            [
                'name' => 'TVs',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/qa85qn900ckxxs/gallery/sg-qled-qn900c-qa85qn900ckxxs-thumb-535812922?$172_172_PNG$',
                'ref' => 'tv'
            ],
            [
                'name' => 'Audio',
                'image' => 'https://www.sony.co.id/image/5d02da5df552836db894cead8a68f5f3?fmt=pjpeg&wid=330&bgcolor=FFFFFF&bgc=FFFFFF',
                'ref' => ''
            ],
        ]
    ]);
});

Route::get('/product', function() {
    return view('product', [
        "title" => 'Product'
    ]);
});

Route::get('/laptop', function() {
    return view('products/laptop', [
        "title" => 'Laptops',
        'products' => [
            [
                'id' => '1',
                'name' => 'ROG Strix Scar 18 (2023)',
                'image' => asset('images/laptops/laptop1.png'),
                'price' => '72999000'
            ],
            [
                'id' => '2',
                'name' => 'ROG Strix G18 (2023)',
                'image' => asset('images/laptops/laptop2.png'),
                'price' => '27499000'
            ],
            [
                'id' => '3',
                'name' => 'ROG Strix G16 (2023)',
                'image' => asset('images/laptops/laptop3.png'),
                'price' => '23999000'
            ],
            [
                'id' => '4',
                'name' => 'ROG Strix Scar 16 (2023)',
                'image' => asset('images/laptops/laptop4.png'),
                'price' => '71999000'
            ],
            [
                'id' => '5',
                'name' => 'ROG Strix G17 (2022)',
                'image' => asset('images/laptops/laptop5.png'),
                'price' => '27499000'
            ],
            [
                'id' => '6',
                'name' => 'ROG Strix Scar 17 SE (2022)',
                'image' => asset('images/laptops/laptop6.png'),
                'price' => '65999000'
            ],
            [
                'id' => '7',
                'name' => 'ROG Zephyrus Duo 16 (2023)',
                'image' => asset('images/laptops/laptop7.png'),
                'price' => '79999000'
            ],
            [
                'id' => '8',
                'name' => 'ROG Zephyrus G16 (2023)',
                'image' => asset('images/laptops/laptop8.png'),
                'price' => '27999000'
            ],
            [
                'id' => '9',
                'name' => 'ROG Zephyrus G14 (2023)',
                'image' => asset('images/laptops/laptop9.png'),
                'price' => '28999000'
            ]
        ]
    ]);
});

Route::get('/phone', function() {
    return view('products/phone', [
        "title" => 'Smartphones',
        'products' => [
            [
                'id' => '1',
                'name' => 'Galaxy Z Flip 5',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-flip5-f731-sm-f731blgexsp-thumb-537228831?$216_216_PNG$',
                'price' => '17999000'
            ],
            [
                'id' => '2',
                'name' => 'Galaxy Z Fold 5',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-fold5-f946-sm-f946blbgxsp-thumb-537228871?$216_216_PNG$',
                'price' => '26999000'
            ],
            [
                'id' => '3',
                'name' => 'Galaxy S23 Ultra',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s918-sm-s918bzgqxid-thumb-534862772?$216_216_PNG$',
                'price' => '21999000'
            ],
            [
                'id' => '4',
                'name' => 'Galaxy S23+',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s916-sm-s916blicxid-thumb-534841521?$216_216_PNG$',
                'price' => '17999000'
            ],
            [
                'id' => '5',
                'name' => 'Galaxy S23',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s911-sm-s911bzecxid-thumb-534842510?$216_216_PNG$',
                'price' => '13999000'
            ],
            [
                'id' => '6',
                'name' => 'Galaxy A54 5G',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a546elgdxid/gallery/id-galaxy-a54-5g-sm-a546-sm-a546elgdxid-thumb-535684163?$216_216_PNG$',
                'price' => '6399000'
            ],
            [
                'id' => '7',
                'name' => 'Galaxy A34 5G',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a346ezsexid/gallery/id-galaxy-a34-5g-sm-a346-sm-a346ezsexid-thumb-535599555?$216_216_PNG$',
                'price' => '5399000'
            ],
            [
                'id' => '8',
                'name' => 'Galaxy A73',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a736blghxid/gallery/id-galaxy-a73-5g-a736-sm-a736blghxid-thumb-531910363?$216_216_PNG$',
                'price' => '6499000'
            ],
            [
                'id' => '9',
                'name' => 'Samsung S23 FE',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/sm-s711bzpcxsp/gallery/sg-galaxy-s23-fe-s711-sm-s711bzpcxsp-thumb-538441856?$216_216_PNG$',
                'price' => '8999000'
            ],

            
        ]
    ]);
});

Route::get('/details', function() {
    return view('products/phones/phone-detail' , [
        'title' => 'Details',
        'item' => [
            [
                'id' => '3',
                'name' => 'Galaxy S23 Ultra',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s918-sm-s918bzgqxid-thumb-534862772?$216_216_PNG$',
                'price' => '21999000',
                'stock' => '21',
                'rating' => '4.5',
                'review' => '321',
                'sold' => '781'
            ],
        ],
        'review' => [
            [
                'id' => '1',
                'username' => 'user1',
                'reviews' => 'nice, ty bang'
            ],
            [
                'id' => '2',
                'username' => 'user2',
                'reviews' => 'ggwp'
            ],
            [
                'id' => '3',
                'username' => 'user3',
                'reviews' => 'keren bisa main valo'
            ],
            [
                'id' => '4',
                'username' => 'user4',
                'reviews' => 'apik tenan, saya jadi bisa mitikal glori'
            ],
        ]
    ]);
});

Route::get('/tv', function() {
    return view('products/tv', [
        "title" => 'TVs',
        'products' => [
            [
                'id' => '1',
                'name' => '85" Neo QLED 8K QN900C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/qa85qn900ckxxs/gallery/sg-qled-qn900c-qa85qn900ckxxs-thumb-535812922?$172_172_PNG$',
                'price' => '129349000',
                'stock' => '15',
                'rating' => '4.3',
                'review' => '398'
            ],
            [
                'id' => '2',
                'name' => '75" Neo QLED 4K QN90C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/qa75qn90cakxxs/gallery/sg-qled-qn90c-qa75qn90cakxxs-thumb-535812690?$172_172_PNG$',
                'price' => '60918000',
                'stock' => '21',
                'rating' => '4.5',
                'review' => '321'
            ],
            [
                'id' => '3',
                'name' => '65" OLED 4K S95C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id65s95cako2/gallery/id-65-inch-oled-s95c-and-hw-s800b-soundbar-f-id65s95cako2-thumb-537963731?$172_172_PNG$',
                'price' => '51418000',
                'stock' => '5',
                'rating' => '4.2',
                'review' => '451'
            ],
            [
                'id' => '4',
                'name' => '55" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu7000u9/gallery/id-55-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id55cu7000u9-thumb-537188177?$172_172_PNG$',
                'price' => '20238000',
                'stock' => '19',
                'rating' => '4.1',
                'review' => '231'
            ],
            [
                'id' => '5',
                'name' => '55 inch Crystal UHD 4K CU8000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu8000u8/gallery/id-55-inch-crystal-uhd-4k-cu8000-and-hw-c450-soundbar-f-id55cu8000u8-thumb-537188310?$172_172_PNG$',
                'price' => '11038000',
                'stock' => '17',
                'rating' => '4.8',
                'review' => '61'
            ],
            [
                'id' => '6',
                'name' => '50" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id50cu7000uc/gallery/id-50-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id50cu7000uc-thumb-537186618?$172_172_PNG$',
                'price' => '8638000',
                'stock' => '31',
                'rating' => '4.9',
                'review' => '591'
            ],
            [
                'id' => '7',
                'name' => '43" Crystal UHD 4K CU8000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id43cu8000ud/gallery/id-43-inch-crystal-uhd-4k-cu8000-and-hw-c450-soundbar-f-id43cu8000ud-thumb-537186261?$172_172_PNG$',
                'price' => '7840000',
                'stock' => '59',
                'rating' => '4.5',
                'review' => '430'
            ],
            [
                'id' => '8',
                'name' => '50" Crystal UHD 4K CU8500',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id50cu8500ua/gallery/id-50-inch-crystal-uhd-4k-cu8500-and-hw-c450-soundbar-f-id50cu8500ua-thumb-537187395?$172_172_PNG$',
                'price' => '10088000',
                'stock' => '44',
                'rating' => '4.0',
                'review' => '201'
            ],
            [
                'id' => '9',
                'name' => '43" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id43cu7000ue/gallery/id-43-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id43cu7000ue-thumb-537182314?$172_172_PNG$',
                'price' => '7040000',
                'stock' => '34',
                'rating' => '3.8',
                'review' => '485'
            ],
        ]
    ]);
});

Route::get('/register', function() {
    return view('register', [
        "title" => 'Register'
    ]);
});

Route::get('/cart', function() {
    return view('cart', [
        "title" => 'Cart',
        'inventory' => [
            [
                'id' => '1',
                'name' => 'Galaxy Z Flip 5',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-flip5-f731-sm-f731blgexsp-thumb-537228831?$216_216_PNG$',
                'price' => '17999000'
            ],
            [
                'id' => '2',
                'name' => 'ROG Strix G18 (2023)',
                'image' => asset('images/laptops/laptop2.png'),
                'price' => '27499000'
            ]
        ],
        'promo' => [
            [
                'id' => '1',
                'name' => 'Promo 1'
            ],
            [
                'id' => '2',
                'name' => 'Promo 2'
            ],
            [
                'id' => '3',
                'name' => 'Promo 3'
            ],
            [
                'id' => '4',
                'name' => 'Promo 4'
            ],
        ]
    ]);
});

Route::get('/wishlist', function() {
    return view('wishlist', [
        "title" => 'Wishlist',
        'inventory' => [
            [
                'id' => '1',
                'name' => 'Galaxy Z Flip 5',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-flip5-f731-sm-f731blgexsp-thumb-537228831?$216_216_PNG$',
                'price' => '17999000'
            ],
            [
                'id' => '2',
                'name' => 'ROG Strix G18 (2023)',
                'image' => asset('images/laptops/laptop2.png'),
                'price' => '27499000'
            ],
            [
                'id' => '3',
                'name' => '65" OLED 4K S95C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id65s95cako2/gallery/id-65-inch-oled-s95c-and-hw-s800b-soundbar-f-id65s95cako2-thumb-537963731?$172_172_PNG$',
                'price' => '51418000',
                'stock' => '5',
                'rating' => '4.2',
                'review' => '451'
            ],
            [
                'id' => '4',
                'name' => '55" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu7000u9/gallery/id-55-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id55cu7000u9-thumb-537188177?$172_172_PNG$',
                'price' => '20238000',
                'stock' => '19',
                'rating' => '4.1',
                'review' => '231'
            ],
            [
                'id' => '5',
                'name' => '55 inch Crystal UHD 4K CU8000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu8000u8/gallery/id-55-inch-crystal-uhd-4k-cu8000-and-hw-c450-soundbar-f-id55cu8000u8-thumb-537188310?$172_172_PNG$',
                'price' => '11038000',
                'stock' => '17',
                'rating' => '4.8',
                'review' => '61'
            ],
            [
                'id' => '6',
                'name' => 'ROG Strix Scar 17 SE (2022)',
                'image' => asset('images/laptops/laptop6.png'),
                'price' => '65999000'
            ],
            [
                'id' => '7',
                'name' => 'ROG Zephyrus Duo 16 (2023)',
                'image' => asset('images/laptops/laptop7.png'),
                'price' => '79999000'
            ],
            [
                'id' => '8',
                'name' => 'ROG Zephyrus G16 (2023)',
                'image' => asset('images/laptops/laptop8.png'),
                'price' => '27999000'
            ],
            [
                'id' => '1',
                'name' => '85" Neo QLED 8K QN900C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/qa85qn900ckxxs/gallery/sg-qled-qn900c-qa85qn900ckxxs-thumb-535812922?$172_172_PNG$',
                'price' => '129349000',
                'stock' => '15',
                'rating' => '4.3',
                'review' => '398'
            ],
            [
                'id' => '2',
                'name' => '75" Neo QLED 4K QN90C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/qa75qn90cakxxs/gallery/sg-qled-qn90c-qa75qn90cakxxs-thumb-535812690?$172_172_PNG$',
                'price' => '60918000',
                'stock' => '21',
                'rating' => '4.5',
                'review' => '321'
            ],
            [
                'id' => '3',
                'name' => '65" OLED 4K S95C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id65s95cako2/gallery/id-65-inch-oled-s95c-and-hw-s800b-soundbar-f-id65s95cako2-thumb-537963731?$172_172_PNG$',
                'price' => '51418000',
                'stock' => '5',
                'rating' => '4.2',
                'review' => '451'
            ],
            [
                'id' => '4',
                'name' => '55" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu7000u9/gallery/id-55-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id55cu7000u9-thumb-537188177?$172_172_PNG$',
                'price' => '20238000',
                'stock' => '19',
                'rating' => '4.1',
                'review' => '231'
            ],
            [
                'id' => '5',
                'name' => '55 inch Crystal UHD 4K CU8000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu8000u8/gallery/id-55-inch-crystal-uhd-4k-cu8000-and-hw-c450-soundbar-f-id55cu8000u8-thumb-537188310?$172_172_PNG$',
                'price' => '11038000',
                'stock' => '17',
                'rating' => '4.8',
                'review' => '61'
            ],
            [
                'id' => '6',
                'name' => '50" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id50cu7000uc/gallery/id-50-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id50cu7000uc-thumb-537186618?$172_172_PNG$',
                'price' => '8638000',
                'stock' => '31',
                'rating' => '4.9',
                'review' => '591'
            ],
            [
                'id' => '7',
                'name' => '43" Crystal UHD 4K CU8000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id43cu8000ud/gallery/id-43-inch-crystal-uhd-4k-cu8000-and-hw-c450-soundbar-f-id43cu8000ud-thumb-537186261?$172_172_PNG$',
                'price' => '7840000',
                'stock' => '59',
                'rating' => '4.5',
                'review' => '430'
            ],
            [
                'id' => '8',
                'name' => '50" Crystal UHD 4K CU8500',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id50cu8500ua/gallery/id-50-inch-crystal-uhd-4k-cu8500-and-hw-c450-soundbar-f-id50cu8500ua-thumb-537187395?$172_172_PNG$',
                'price' => '10088000',
                'stock' => '44',
                'rating' => '4.0',
                'review' => '201'
            ],
            [
                'id' => '9',
                'name' => '43" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id43cu7000ue/gallery/id-43-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id43cu7000ue-thumb-537182314?$172_172_PNG$',
                'price' => '7040000',
                'stock' => '34',
                'rating' => '3.8',
                'review' => '485'
            ],
        ]
    ]);
});


Route::get('/shipment', function() {
    return view('shipment', [
        "title" => 'Shipment',
        'inventory' => [
            [
                'id' => '1',
                'name' => 'Galaxy Z Flip 5',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-flip5-f731-sm-f731blgexsp-thumb-537228831?$216_216_PNG$',
                'price' => '17999000'
            ],
            [
                'id' => '2',
                'name' => 'ROG Strix G18 (2023)',
                'image' => asset('images/laptops/laptop2.png'),
                'price' => '27499000'
            ]
        ],
        'profile' => [
            [
                'name' => 'John Doe',
                'telephone' => '081253323432',
                'address' => 'Perumahan Citra Kedaton 1 no. 7. Jl. Sukun, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55283'
            ]
        ],
        'promo' => [
            [
                'id' => '1',
                'name' => 'Promo 1'
            ],
            [
                'id' => '2',
                'name' => 'Promo 2'
            ],
            [
                'id' => '3',
                'name' => 'Promo 3'
            ],
            [
                'id' => '4',
                'name' => 'Promo 4'
            ],
        ]
    ]);
});

Route::get('/profile', function() {
    return view('profile', [
        'title' => 'Profile',
        'data' => [
            [
                'id' => '1',
                'name' => 'John Doe',
                'image' => 'https://img.freepik.com/premium-vector/man-avatar-profile-picture-vector-illustration_268834-538.jpg',
                'username' => 'userjohn',
                'telephone' => '081232123442'
            ]   
        ]
    ]);
});

//Admin Routes
Route::get('/admin', function() {
    return view('admin/main-admin', [
        "title" => 'Admin Page'
    ]);
});

Route::get('/orders', function() {
    return view('admin/orders', [
        "title" => 'Orders',
    ]);
});

Route::get('/stocks', function() {
    return view('admin/stocks', [
        "title" => 'Stocks',
        'products' => [
            [
                'id' => '1',
                'name' => 'ROG Strix Scar 18 (2023)',
                'image' => asset('images/laptops/laptop1.png'),
                'price' => '72999000',
                'stock' => '15',
                'rating' => '4.3',
                'review' => '398'
            ],
            [
                'id' => '2',
                'name' => 'ROG Strix G18 (2023)',
                'image' => asset('images/laptops/laptop2.png'),
                'price' => '27499000',
                'stock' => '21',
                'rating' => '4.5',
                'review' => '321'
            ],
            [
                'id' => '3',
                'name' => 'ROG Strix G16 (2023)',
                'image' => asset('images/laptops/laptop3.png'),
                'price' => '23999000',
                'stock' => '5',
                'rating' => '4.2',
                'review' => '451'
            ],
            [
                'id' => '4',
                'name' => 'ROG Strix Scar 16 (2023)',
                'image' => asset('images/laptops/laptop4.png'),
                'price' => '71999000',
                'stock' => '19',
                'rating' => '4.1',
                'review' => '231'
            ],
            [
                'id' => '5',
                'name' => 'ROG Strix G17 (2022)',
                'image' => asset('images/laptops/laptop5.png'),
                'price' => '27499000',
                'stock' => '17',
                'rating' => '4.8',
                'review' => '61'
            ],
            [
                'id' => '6',
                'name' => 'ROG Strix Scar 17 SE (2022)',
                'image' => asset('images/laptops/laptop6.png'),
                'price' => '65999000',
                'stock' => '44',
                'rating' => '4.0',
                'review' => '201'
            ],
            [
                'id' => '7',
                'name' => 'ROG Zephyrus Duo 16 (2023)',
                'image' => asset('images/laptops/laptop7.png'),
                'price' => '79999000',
                'stock' => '44',
                'rating' => '4.0',
                'review' => '201'
            ],
            [
                'id' => '8',
                'name' => 'ROG Zephyrus G16 (2023)',
                'image' => asset('images/laptops/laptop8.png'),
                'price' => '27999000',
                'stock' => '34',
                'rating' => '3.8',
                'review' => '485'
            ],
            [
                'id' => '9',
                'name' => 'ROG Zephyrus G14 (2023)',
                'image' => asset('images/laptops/laptop9.png'),
                'price' => '28999000',
                'stock' => '17',
                'rating' => '4.8',
                'review' => '61'
            ],
            [
                'id' => '1',
                'name' => 'Galaxy Z Flip 5',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-flip5-f731-sm-f731blgexsp-thumb-537228831?$216_216_PNG$',
                'price' => '17999000',
                'stock' => '15',
                'rating' => '4.3',
                'review' => '398'
            ],
            [
                'id' => '2',
                'name' => 'Galaxy Z Fold 5',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-fold5-f946-sm-f946blbgxsp-thumb-537228871?$216_216_PNG$',
                'price' => '26999000',
                'stock' => '21',
                'rating' => '4.5',
                'review' => '321'
            ],
            [
                'id' => '3',
                'name' => 'Galaxy S23 Ultra',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s918-sm-s918bzgqxid-thumb-534862772?$216_216_PNG$',
                'price' => '21999000',
                'stock' => '5',
                'rating' => '4.2',
                'review' => '451'
            ],
            [
                'id' => '4',
                'name' => 'Galaxy S23+',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s916-sm-s916blicxid-thumb-534841521?$216_216_PNG$',
                'price' => '17999000',
                'stock' => '19',
                'rating' => '4.1',
                'review' => '231'
            ],
            [
                'id' => '5',
                'name' => 'Galaxy S23',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s911-sm-s911bzecxid-thumb-534842510?$216_216_PNG$',
                'price' => '13999000',
                'stock' => '17',
                'rating' => '4.8',
                'review' => '61'
            ],
            [
                'id' => '6',
                'name' => 'Galaxy A54 5G',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a546elgdxid/gallery/id-galaxy-a54-5g-sm-a546-sm-a546elgdxid-thumb-535684163?$216_216_PNG$',
                'price' => '6399000',
                'stock' => '34',
                'rating' => '3.8',
                'review' => '485'
            ],
            [
                'id' => '7',
                'name' => 'Galaxy A34 5G',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a346ezsexid/gallery/id-galaxy-a34-5g-sm-a346-sm-a346ezsexid-thumb-535599555?$216_216_PNG$',
                'price' => '5399000',
                'stock' => '44',
                'rating' => '4.0',
                'review' => '201'
            ],
            [
                'id' => '8',
                'name' => 'Galaxy A73',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a736blghxid/gallery/id-galaxy-a73-5g-a736-sm-a736blghxid-thumb-531910363?$216_216_PNG$',
                'price' => '6499000',
                'stock' => '17',
                'rating' => '4.8',
                'review' => '61'
            ],
            [
                'id' => '9',
                'name' => 'Samsung S23 FE',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/sm-s711bzpcxsp/gallery/sg-galaxy-s23-fe-s711-sm-s711bzpcxsp-thumb-538441856?$216_216_PNG$',
                'price' => '8999000',
                'stock' => '44',
                'rating' => '4.0',
                'review' => '201'
            ],
            [
                'id' => '1',
                'name' => '85" Neo QLED 8K QN900C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/qa85qn900ckxxs/gallery/sg-qled-qn900c-qa85qn900ckxxs-thumb-535812922?$172_172_PNG$',
                'price' => '129349000',
                'stock' => '15',
                'rating' => '4.3',
                'review' => '398'
            ],
            [
                'id' => '2',
                'name' => '75" Neo QLED 4K QN90C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/qa75qn90cakxxs/gallery/sg-qled-qn90c-qa75qn90cakxxs-thumb-535812690?$172_172_PNG$',
                'price' => '60918000',
                'stock' => '21',
                'rating' => '4.5',
                'review' => '321'
            ],
            [
                'id' => '3',
                'name' => '65" OLED 4K S95C',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id65s95cako2/gallery/id-65-inch-oled-s95c-and-hw-s800b-soundbar-f-id65s95cako2-thumb-537963731?$172_172_PNG$',
                'price' => '51418000',
                'stock' => '5',
                'rating' => '4.2',
                'review' => '451'
            ],
            [
                'id' => '4',
                'name' => '55" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu7000u9/gallery/id-55-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id55cu7000u9-thumb-537188177?$172_172_PNG$',
                'price' => '20238000',
                'stock' => '19',
                'rating' => '4.1',
                'review' => '231'
            ],
            [
                'id' => '5',
                'name' => '55 inch Crystal UHD 4K CU8000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu8000u8/gallery/id-55-inch-crystal-uhd-4k-cu8000-and-hw-c450-soundbar-f-id55cu8000u8-thumb-537188310?$172_172_PNG$',
                'price' => '11038000',
                'stock' => '17',
                'rating' => '4.8',
                'review' => '61'
            ],
            [
                'id' => '6',
                'name' => '50" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id50cu7000uc/gallery/id-50-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id50cu7000uc-thumb-537186618?$172_172_PNG$',
                'price' => '8638000',
                'stock' => '31',
                'rating' => '4.9',
                'review' => '591'
            ],
            [
                'id' => '7',
                'name' => '43" Crystal UHD 4K CU8000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id43cu8000ud/gallery/id-43-inch-crystal-uhd-4k-cu8000-and-hw-c450-soundbar-f-id43cu8000ud-thumb-537186261?$172_172_PNG$',
                'price' => '7840000',
                'stock' => '59',
                'rating' => '4.5',
                'review' => '430'
            ],
            [
                'id' => '8',
                'name' => '50" Crystal UHD 4K CU8500',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id50cu8500ua/gallery/id-50-inch-crystal-uhd-4k-cu8500-and-hw-c450-soundbar-f-id50cu8500ua-thumb-537187395?$172_172_PNG$',
                'price' => '10088000',
                'stock' => '44',
                'rating' => '4.0',
                'review' => '201'
            ],
            [
                'id' => '9',
                'name' => '43" Crystal UHD 4K CU7000',
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id43cu7000ue/gallery/id-43-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id43cu7000ue-thumb-537182314?$172_172_PNG$',
                'price' => '7040000',
                'stock' => '34',
                'rating' => '3.8',
                'review' => '485'
            ],
        ]
    ]);
});

Route::get('/tasks', function() {
    return view('admin/tasks', [
        "title" => 'Tasks',
    ]);
});

Route::get('/support', function() {
    return view('admin/support', [
        "title" => 'Support',
    ]);
});

Route::get('/users', function() {
    return view('admin/users', [
        "title" => 'User Data',
        'data' => [
            [
                'id' => '1',
                'username' => 'user1',
                'email' => 'user1@mail.com',
                'telephone' => '08525928392',
                'join-date' => 'dd/mm/yyyy'
            ],
            [
                'id' => '2',
                'username' => 'user2',
                'email' => 'user2@mail.com',
                'telephone' => '08525928392',
                'join-date' => 'dd/mm/yyyy'
            ],
            [
                'id' => '3',
                'username' => 'user3',
                'email' => 'user3@mail.com',
                'telephone' => '08525928392',
                'join-date' => 'dd/mm/yyyy'
            ],
            [
                'id' => '4',
                'username' => 'user4',
                'email' => 'user4@mail.com',
                'telephone' => '08525928392',
                'join-date' => 'dd/mm/yyyy'
            ],
            [
                'id' => '5',
                'username' => 'user5',
                'email' => 'user5@mail.com',
                'telephone' => '08525928392',
                'join-date' => 'dd/mm/yyyy'
            ],
            [
                'id' => '6',
                'username' => 'user6',
                'email' => 'user6@mail.com',
                'telephone' => '08525928392',
                'join-date' => 'dd/mm/yyyy'
            ],
            [
                'id' => '7',
                'username' => 'user7',
                'email' => 'user7@mail.com',
                'telephone' => '08525928392',
                'join-date' => 'dd/mm/yyyy'
            ],
            [
                'id' => '8',
                'username' => 'user8',
                'email' => 'user8@mail.com',
                'telephone' => '08525928392',
                'join-date' => 'dd/mm/yyyy'
            ]
        ]
    ]);
});