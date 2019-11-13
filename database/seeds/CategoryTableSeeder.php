<?php

use Illuminate\Database\Seeder;
use App\Category;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = Carbon::now();

        Category::insert([
        		['name'=>'Vegetables', 'slug'=>'vegetables', 'created_at'=>$now, 'updated_at'=>$now],
        		['name'=>'Clothers', 'slug'=>'clothers', 'created_at'=>$now, 'updated_at'=>$now],
        		['name'=>'Laptops', 'slug'=>'laptops', 'created_at'=>$now, 'updated_at'=>$now],
        		['name'=>'Tablets', 'slug'=>'tablets', 'created_at'=>$now, 'updated_at'=>$now],
        ]);
    }
}
