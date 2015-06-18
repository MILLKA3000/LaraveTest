<?php

use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->delete();
        $category = [
            ['id'=>1,'name' => 'Холодні закуски','active' => 1],
            ['id'=>2,'name' => 'Гарніри','active' => 1],
            ['id'=>3,'name' => 'Гарячі страви','active' => 1],
            ['id'=>4,'name' => 'Рибні страви','active' => 1],
            ['id'=>5,'name' => 'Піци','active' => 1],
            ['id'=>6,'name' => 'Випивка','active' => 0],
        ];
        DB::table('category')->insert($category);
    }
}
