<?php

use Illuminate\Database\Seeder;

class indigrients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('indigrients')->delete();
        $indigrients = [
            ['id'=>1,'category_indigrient_id'=>'5','name' => 'Кабачок','title' => 'Кабачок Український','pictureurl' => ''],
            ['id'=>2,'category_indigrient_id'=>'1','name' => 'Рибка','title' => 'Риба Морожена','pictureurl' => ''],
            ['id'=>3,'category_indigrient_id'=>'5','name' => 'Кукурудза','title' => 'Кукурудза','pictureurl' => ''],
            ['id'=>4,'category_indigrient_id'=>'6','name' => 'Сир Російський 72%','title' => 'Сир Російський 72%','pictureurl' => ''],
            ['id'=>5,'category_indigrient_id'=>'5','name' => 'Помідор','title' => 'Помідор','pictureurl' => ''],
            ['id'=>6,'category_indigrient_id'=>'2','name' => 'Шинка','title' => 'Шинка','pictureurl' => ''],
            ['id'=>7,'category_indigrient_id'=>'5','name' => 'Гриби','title' => 'Гриби','pictureurl' => ''],
            ['id'=>8,'category_indigrient_id'=>'5','name' => 'Картопля','title' => 'Картопля','pictureurl' => ''],
            ['id'=>9,'category_indigrient_id'=>'4','name' => 'Гречка','title' => 'Гречка','pictureurl' => ''],
            ['id'=>10,'category_indigrient_id'=>'7','name' => 'Майонез','title' => 'Майонез','pictureurl' => ''],
            ['id'=>11,'category_indigrient_id'=>'5','name' => 'Огірок','title' => 'Огірок','pictureurl' => ''],
            ['id'=>12,'category_indigrient_id'=>'2','name' => 'Ковбаска','title' => 'Ковбаска','pictureurl' => '']
        ];
        DB::table('indigrients')->insert($indigrients);
    }
}
