<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->count(20)->create();
        Category::factory()->count(10)->create();


        $categories = Category::all();
        Product::all()->each(function ($product) use ($categories){
            $product->categories()->attach(
                $categories->random(2)->pluck('id')->toArray()
            );
        });

        $name = ['Standard Hair Cut', 'Skin Fade', 'Beard Trim & Shape Up','Kids Hair Cut Under 13’s','Kids Skin Fade','Hot Towel Shave','All Over','Head Shave','Nose Waxing','Chafer Special (Full Service, Haircut, Hot Towel Shave, Nose waxing, Ear Waxing & Face Massage)'];


        DB::table('services')->insert([
            'name'=> $name[0],
            'slug'=>Str::slug($name[0]),
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequuntur doloremque eos est excepturi expedita explicabo fugiat harum itaque mollitia, obcaecati optio quasi quidem quis recusandae soluta veniam veritatis?',
            'price'=>10,
        ]);


        DB::table('services')->insert([
            'name'=> $name[1],
            'slug'=>Str::slug($name[1]),
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequuntur doloremque eos est excepturi expedita explicabo fugiat harum itaque mollitia, obcaecati optio quasi quidem quis recusandae soluta veniam veritatis?',
            'price'=>10,
        ]);
        DB::table('services')->insert([
            'name'=> $name[2],
            'slug'=>Str::slug($name[2]),
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequuntur doloremque eos est excepturi expedita explicabo fugiat harum itaque mollitia, obcaecati optio quasi quidem quis recusandae soluta veniam veritatis?',
            'price'=>10,
        ]);
        DB::table('services')->insert([
            'name'=> $name[3],
            'slug'=>$name[3],
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequuntur doloremque eos est excepturi expedita explicabo fugiat harum itaque mollitia, obcaecati optio quasi quidem quis recusandae soluta veniam veritatis?',
            'price'=>11,
        ]);
        DB::table('services')->insert([
            'name'=> $name[4],
            'slug'=>Str::slug($name[4]),
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequuntur doloremque eos est excepturi expedita explicabo fugiat harum itaque mollitia, obcaecati optio quasi quidem quis recusandae soluta veniam veritatis?',
            'price'=>11,
        ]);
        DB::table('services')->insert([
            'name'=> $name[5],
            'slug'=>Str::slug($name[5]),
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequuntur doloremque eos est excepturi expedita explicabo fugiat harum itaque mollitia, obcaecati optio quasi quidem quis recusandae soluta veniam veritatis?',
            'price'=>8,
        ]);
        DB::table('services')->insert([
            'name'=> $name[6],
            'slug'=>Str::slug($name[6]),
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequuntur doloremque eos est excepturi expedita explicabo fugiat harum itaque mollitia, obcaecati optio quasi quidem quis recusandae soluta veniam veritatis?',
            'price'=>10,
        ]);
        DB::table('services')->insert([
            'name'=> $name[7],
            'slug'=>Str::slug($name[7]),
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequuntur doloremque eos est excepturi expedita explicabo fugiat harum itaque mollitia, obcaecati optio quasi quidem quis recusandae soluta veniam veritatis?',
            'price'=>3,
        ]);
        DB::table('services')->insert([
            'name'=> $name[8],
            'slug'=>Str::slug($name[8]),
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequuntur doloremque eos est excepturi expedita explicabo fugiat harum itaque mollitia, obcaecati optio quasi quidem quis recusandae soluta veniam veritatis?',
            'price'=>30,
        ]);
        DB::table('services')->insert([
            'name'=> $name[9],
            'slug'=>Str::slug($name[9]),
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequuntur doloremque eos est excepturi expedita explicabo fugiat harum itaque mollitia, obcaecati optio quasi quidem quis recusandae soluta veniam veritatis?',
            'price'=>12,
        ]);
    }
}
