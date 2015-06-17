<?php

use Illuminate\Database\Seeder;

class prodtoindigrient extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producttoindigrients')->delete();
        $prodtoindigrients = [
            ['id'=>1,'product_id' => 1,'indigrient_id' => 1,'weight' => 150,'title'=>'Щось тут'],
            ['id'=>2,'product_id' => 1,'indigrient_id' => 2,'weight' => 50,'title'=>'Щось тут'],
            ['id'=>3,'product_id' => 3,'indigrient_id' => 3,'weight' => 100,'title'=>'Щось тут'],
            ['id'=>4,'product_id' => 4,'indigrient_id' => 8,'weight' => 300,'title'=>'Щось тут'],
            ['id'=>5,'product_id' => 5,'indigrient_id' => 9,'weight' => 300,'title'=>'Щось тут'],
            ['id'=>6,'product_id' => 6,'indigrient_id' => 4,'weight' => 100,'title'=>'Щось тут'],
            ['id'=>7,'product_id' => 6,'indigrient_id' => 5,'weight' => 100,'title'=>'Щось тут'],
            ['id'=>8,'product_id' => 6,'indigrient_id' => 6,'weight' => 100,'title'=>'Щось тут'],
            ['id'=>9,'product_id' => 6,'indigrient_id' => 7,'weight' => 100,'title'=>'Щось тут'],
            ['id'=>10,'product_id' => 7,'indigrient_id' => 1,'weight' => 150,'title'=>'Щось тут'],
            ['id'=>11,'product_id' => 7,'indigrient_id' => 2,'weight' => 50,'title'=>'Щось тут'],
            ['id'=>12,'product_id' => 7,'indigrient_id' => 3,'weight' => 100,'title'=>'Щось тут'],
            ['id'=>13,'product_id' => 8,'indigrient_id' => 8,'weight' => 300,'title'=>'Щось тут'],
            ['id'=>14,'product_id' => 8,'indigrient_id' => 9,'weight' => 300,'title'=>'Щось тут'],
            ['id'=>15,'product_id' => 9,'indigrient_id' => 4,'weight' => 100,'title'=>'Щось тут'],
            ['id'=>16,'product_id' => 10,'indigrient_id' => 5,'weight' => 100,'title'=>'Щось тут'],
            ['id'=>17,'product_id' => 11,'indigrient_id' => 11,'weight' => 100,'title'=>'Щось тут'],
            ['id'=>18,'product_id' => 12,'indigrient_id' => 12,'weight' => 100,'title'=>'Щось тут']

        ];
        DB::table('producttoindigrients')->insert($prodtoindigrients);
    }
}
