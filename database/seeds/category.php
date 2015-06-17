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
            ['id'=>1,'name' => 'Категорія1','title' => '---'],
            ['id'=>2,'name' => 'Категорія2','title' => '---'],
            ['id'=>3,'name' => 'Категорія3','title' => '---'],
        ];
        DB::table('category')->insert($category);
    }
}
