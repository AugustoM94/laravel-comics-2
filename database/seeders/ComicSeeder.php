<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db.comics');
        foreach ($comics as $value) {
            $new_comic = new Comic();
            $new_comic->title = $value['title'];
            $new_comic->description = $value['description'];
            $new_comic->image = $value['thumb'];
            $new_comic->price = $value['price'];
            $new_comic->sale_date = $value['sale_date'];
            $new_comic->series = $value['series'];
            $new_comic->type = $value['type'];
            $new_comic->save();
        }
    }
}
