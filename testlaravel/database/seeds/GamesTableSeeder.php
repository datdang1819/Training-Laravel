<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('games')->truncate();
        DB::table('games')->insert([
            [
                'id'=>1,
                'name'=>'Detroit:Become Humand',
                'price'=>60,
                'images'=>'https://i.gadgets360cdn.com/large/detroit_become_human_demo_cover_1524576037809.jpg',
            ],
            [
                'id'=>2,
                'name'=>'Gow Of War',
                'price'=>60,
                'images'=>'https://d1pqlgpcx1bu0k.cloudfront.net/static/img/GOW-OG-image.jpg',
            ],
            [
                'id'=>3,
                'name'=>'Monster Hunter: World',
                'price'=>60,
                'images'=>'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901',
            ],
            [
                'id'=>4,
                'name'=>'RedDead Redemtion',
                'price'=>60,
                'images'=>'https://i.gadgets360cdn.com/large/detroit_become_human_demo_cover_1524576037809.jpg',
            ],
            [
                'id'=>5,
                'name'=>'Gow Of War',
                'price'=>60,
                'images'=>'https://d1pqlgpcx1bu0k.cloudfront.net/static/img/GOW-OG-image.jpg',
            ],
            [
                'id'=>6,
                'name'=>'Monster Hunter: World',
                'price'=>60,
                'images'=>'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901',
            ],
            [
                'id'=>7,
                'name'=>'Detroit:Become Humand',
                'price'=>60,
                'images'=>'https://i.gadgets360cdn.com/large/detroit_become_human_demo_cover_1524576037809.jpg',
            ],
            [
                'id'=>8,
                'name'=>'Gow Of War',
                'price'=>60,
                'images'=>'https://d1pqlgpcx1bu0k.cloudfront.net/static/img/GOW-OG-image.jpg',
            ],
            [
                'id'=>9,
                'name'=>'Monster Hunter: World',
                'price'=>60,
                'images'=>'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901',
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
