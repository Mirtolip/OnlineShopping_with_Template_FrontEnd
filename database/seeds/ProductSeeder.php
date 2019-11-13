<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
     		Product::create([
     			'name' =>'Olma',
     			'slug' =>'olma',
     			'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio repudiandae esse rem vel impedit et repellat perferendis, alias nulla eaque, omnis repellendus autem commodi qui, magnam eligendi voluptate placeat officia.',
     			'quantity' =>10,
     			'price' =>2000,
     			'image' =>'temp/images/product-3.jpg'
     		])->categories()->attach(1);

     		Product::create([
     			'name' =>'Juices',
     			'slug' =>'juices',
     			'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quis, consectetur necessitatibus recusandae doloremque ad inventore suscipit, vel exercitationem pariatur asperiores nisi accusantium, similique accusamus facere odit fugit expedita a.',
     			'quantity' =>15,
     			'price' =>13000,
     			'image' =>'temp/images/product-2.jpg'
     		])->categories()->attach(2);

     		Product::create([
     			'name' =>'Dried',
     			'slug' =>'dried',
     			'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores doloribus distinctio voluptatum aut. Magni, sint neque placeat alias quidem recusandae, temporibus dolorum nisi at est molestiae porro! Eos recusandae, hic!',
     			'quantity' =>32,
     			'price' =>37000,
     			'image' =>'temp/images/product-1.jpg'
     		])->categories()->attach(3);

            for ($i=1; $i < 5; $i++) { 
                Product::create([
                    'name' =>'Max-'.$i,
                    'slug' =>'max-'.$i,
                    'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores doloribus distinctio voluptatum aut. Magni, sint neque placeat alias quidem recusandae, temporibus dolorum nisi at est molestiae porro! Eos recusandae, hic!',
                    'quantity' =>22+$i,
                    'price' =>24000+$i,
                    'image' =>'temp/images/product-4.jpg'
                ])->categories()->attach(4);
            }
        
    }
}
