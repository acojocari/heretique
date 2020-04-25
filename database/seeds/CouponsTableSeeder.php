<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code'=>'NEW2020',
            'value'=>2
            ]);
        Coupon::create([
            'code'=>'WINTER',
            'value'=>1
        ]);
        Coupon::create([
            'code'=>'GIGACOUPON',
            'value'=>5
        ]);
    }
}
