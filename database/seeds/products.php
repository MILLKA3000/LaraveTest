<?php

use Illuminate\Database\Seeder;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $products = [
            ['id'=>1,'category_id'=>1,'name' => 'Роли','title' => 'Роли','price' => 200,'discount'=>10],
            ['id'=>2,'category_id'=>2,'name' => 'Відбивна','title' => 'Відбивна','price' => 100,'discount'=>0],
            ['id'=>3,'category_id'=>2,'name' => 'Риба смажена','title' => 'Риба смажена','price' => 150,'discount'=>5],
            ['id'=>4,'category_id'=>3,'name' => 'Картопля','title' => 'Картопля запечена на дровах','price' => 150,'discount'=>5],
            ['id'=>5,'category_id'=>3,'name' => 'Гречка по Українськи','title' => 'Подяється з смаженою цибулею, та тушкованою телятиною','price' => 150,'discount'=>5],
            ['id'=>6,'category_id'=>3,'name' => 'Папероні від шефа','title' => 'Піцца від шефа','price' => 150,'discount'=>5],
            ['id'=>7,'category_id'=>1,'name' => 'Роли','title' => 'Роли','price' => 200,'discount'=>10],
            ['id'=>8,'category_id'=>1,'name' => 'Відбивна','title' => 'Відбивна','price' => 100,'discount'=>0],
            ['id'=>9,'category_id'=>2,'name' => 'Риба смажена','title' => 'Риба смажена','price' => 150,'discount'=>5],
            ['id'=>10,'category_id'=>3,'name' => 'Картопля','title' => 'Картопля запечена на дровах','price' => 150,'discount'=>5],
            ['id'=>11,'category_id'=>3,'name' => 'Гречка по Українськи','title' => 'Подяється з смаженою цибулею, та тушкованою телятиною','price' => 150,'discount'=>5],
            ['id'=>12,'category_id'=>3,'name' => 'Папероні від шефа','title' => 'Піцца від шефа','price' => 150,'discount'=>5]
        ];
        DB::table('products')->insert($products);
    }
}
