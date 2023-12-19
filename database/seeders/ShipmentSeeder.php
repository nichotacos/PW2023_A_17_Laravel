<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shipment = [
            [
                'id' => 1,
                'name' => 'J&T Express',
                'shipping_cost' => 20000.0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'SiCepat',
                'shipping_cost' => 25000.0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Ninja Express',
                'shipping_cost' => 22000.0,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        DB::table('shipments')->insert($shipment);
    }
}
