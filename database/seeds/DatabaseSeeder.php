<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Adding Admin user

        User::create([
            'name' => 'admin',
            'email' => 'admin@electronics.com',
            'password' => '123456789',
            'role' => 'admin',
            'phone' => '',
            'address' => '',
            'identification_number' => ''
        ]);

        // adding categories

        Category::create(['name' => 'phones']);
        Category::create(['name' => 'Computer & Tablets']);
        Category::create(['name' => 'Accessories']);
        Category::create(['name' => "Ac's"]);
        Category::create(['name' => 'Home Entertainment']);

        // Brands
        Brand::create(['name' => 'sumsung']);
        Brand::create(['name' => 'huawei']);
        Brand::create(['name' => 'Oppo']);
        Brand::create(['name' => 'Apple']);
        Brand::create(['name' => 'Xiaomi']);
        Brand::create(['name' => 'Nokia']);
        Brand::create(['name' => 'Dell']);
        Brand::create(['name' => 'Lenovo']);
        Brand::create(['name' => 'Hp']);
        Brand::create(['name' => 'LG']);
        Brand::create(['name' => 'Infinix']);


        // seller
        User::create([
            'name' => 'Union Trading Company W.L.L',
            'email' => 'admin@utc.com.kw',
            'password' => '123456789',
            'role' => 'seller',
            'phone' => '+965 22423355',
            'address' => ' Fahad Al Salem Street Kuwait City, Hawalli Governate، 14000, Kuwait',
            'identification_number' => ''
        ]);

        User::create([
            'name' => 'Blink Co',
            'email' => 'admin@blink.com.kw',
            'password' => '123456789',
            'role' => 'seller',
            'phone' => '+965 94448637',
            'address' => 'UASC Building, Third Floor, Airport Road,
            Al-Shuwaikh 13068,
            Kuwait',
            'identification_number' => ''
        ]);

        User::create([
            'name' => 'International Makka Co',
            'email' => 'admin@makka.com.kw',
            'password' => '123456789',
            'role' => 'seller',
            'phone' => '+965 55009096',
            'address' => 'bn Khaldoun St, Hawally,Kairouan Complex - Mezzanine, Kuwait',
            'identification_number' => ''
        ]);
    }
}
