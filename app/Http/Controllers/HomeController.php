<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    // return view('home');
    $active = 'home';
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
          ],
      compact('active'),
    ]);
  }
}
