<?php

use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\AdminOrder;
use App\Http\Controllers\AdminStocks;
use App\Http\Controllers\AdminUsers;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\UserController;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('actionRegister', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

Route::get('logout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');

Route::get('/products/{category}', [ProductController::class, 'showByCategory'])->name('showByCategory')->middleware('auth');
Route::get('/products/details/{item_id}', [ProductController::class, 'showDetails'])->name('showDetails')->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/cart/{id}', [CartController::class, 'showByUser'])->name('showByUser')->middleware('auth');
Route::resource('/carts', CartController::class)->middleware('auth');

Route::put('/user/update', [UserController::class, 'update'])->name('user.update')->middleware('auth');
Route::post('/user/updateImage', [UserController::class, 'updateImage'])->name('user.updateImage')->middleware('auth');

Route::get('shipment/{id}', [ShipmentController::class, 'showShipmentByUser'])->name('showShipmentByUser')->middleware('auth');

Route::resource('/profile', ProfileController::class)->middleware('auth');

Route::post('/review', [ReviewController::class, 'store'])->name('storeReview')->middleware('auth');

Route::get('/product', function () {
    return view('product', [
        "title" => 'Product'
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => 'Register'
    ]);
});

Route::get('/wishlist', function () {
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

//Admin Routes
Route::get('/stocks', [AdminStocks::class, 'index'])->name('index');
Route::get('/orders', [AdminOrder::class, 'index'])->name('index');
Route::post('/orders/ship', [AdminOrder::class, 'ship'])->name('ship');
Route::get('/users', [AdminUsers::class, 'index'])->name('index');
Route::delete('/users/destroy/{user}', [AdminUsers::class, 'destroy'])->name('delete');

Route::resource('/admin', AdminMainController::class);

Route::get('/tasks', function () {
    return view('admin/tasks', [
        "title" => 'Tasks',
    ]);
});

Route::get('/support', function () {
    return view('admin/support', [
        "title" => 'Support',
    ]);
});
