<?php

use Illuminate\Database\Seeder;

class categoryindigrient extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_indigrients')->delete();
        $category_i = [
            ['id'=>1,'name' => 'Категорія Риби','active' => 1],
            ['id'=>2,'name' => 'Категорія Мяса','active' => 1],
            ['id'=>3,'name' => 'Соленості','active' => 1],
            ['id'=>4,'name' => 'Крупи каші','active' => 1],
            ['id'=>5,'name' => 'Овочі','active' => 1],
            ['id'=>6,'name' => 'Молочні вироби','active' => 1],
            ['id'=>7,'name' => 'Майонез','active' => 1],
        ];
        DB::table('category_indigrients')->insert($category_i);
    }
}
