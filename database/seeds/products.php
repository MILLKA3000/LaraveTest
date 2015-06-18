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
            ['id'=>1,'time'=>5,'pictureurl'=>'http://www.vseosushi.ru/images/stories/recipes_photos/sushi-roll-salmon.jpg','category_id'=>1,'name' => 'Роли','title' => 'Роли','price' => 200,'discount'=>10,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),],
            ['id'=>2,'time'=>20,'pictureurl'=>'','category_id'=>3,'name' => 'Відбивна','title' => 'Відбивна','price' => 100,'discount'=>0,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),],
            ['id'=>3,'time'=>15,'pictureurl'=>'http://www.ayzdorov.ru/images/novosti/riba.jpg','category_id'=>4,'name' => 'Риба смажена','title' => 'Риба смажена','price' => 150,'discount'=>5,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),],
            ['id'=>4,'time'=>10,'pictureurl'=>'http://yum-yum-yum.ru/wp-content/uploads/2013/06/dovodim-kartofel-do-gotovnosti.jpg','category_id'=>3,'name' => 'Картопля','title' => 'Картопля запечена на дровах','price' => 150,'discount'=>5,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),],
            ['id'=>5,'time'=>10,'pictureurl'=>'','category_id'=>3,'name' => 'Гречка по Українськи','title' => 'Подяється з смаженою цибулею, та тушкованою телятиною','price' => 150,'discount'=>5,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),],
            ['id'=>6,'time'=>10,'pictureurl'=>'http://kambuz.net/wp-content/uploads/%D0%9F%D0%B0%D0%BF%D0%B5%D1%80%D0%BE%D0%BD%D0%B8.png','category_id'=>5,'name' => 'Папероні від шефа','title' => 'Піцца від шефа','price' => 150,'discount'=>5,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),],
            ['id'=>7,'time'=>10,'pictureurl'=>'','category_id'=>1,'name' => 'Роли','title' => 'Роли','price' => 200,'discount'=>10,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),],
            ['id'=>8,'time'=>12,'pictureurl'=>'','category_id'=>3,'name' => 'Відбивна','title' => 'Відбивна','price' => 100,'discount'=>0,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),],
            ['id'=>9,'time'=>16,'pictureurl'=>'','category_id'=>4,'name' => 'Риба смажена','title' => 'Риба смажена','price' => 150,'discount'=>5,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),],
            ['id'=>10,'time'=>18,'pictureurl'=>'','category_id'=>2,'name' => 'Картопля','title' => 'Картопля запечена на дровах','price' => 150,'discount'=>5,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),],
            ['id'=>11,'time'=>20,'pictureurl'=>'http://kushaem-vkusno.com/uploads/grechka/recept-recept-varenaya-grechka-skachat_8154.jpg','category_id'=>3,'name' => 'Гречка по Українськи','title' => 'Подяється з смаженою цибулею, та тушкованою телятиною','price' => 150,'discount'=>5,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),],
            ['id'=>12,'time'=>35,'pictureurl'=>'http://kambuz.net/wp-content/uploads/%D0%9F%D0%B0%D0%BF%D0%B5%D1%80%D0%BE%D0%BD%D0%B8.png','category_id'=>5,'name' => 'Папероні від шефа','title' => 'Піцца від шефа','price' => 150,'discount'=>5,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=> \Carbon\Carbon::now()->toDateTimeString()]
        ];
        DB::table('products')->insert($products);
    }
}
