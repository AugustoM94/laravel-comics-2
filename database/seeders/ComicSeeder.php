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
            $newcomic = new Comic();
            $newcomic->title = $value['title'];
            $newcomic->description = $value['description'];
            $newcomic->image = $value['image'];
            $newcomic->price = $value['price'];
            $newcomic->sale_date = $value['sale_date'];
            $newcomic->series = $value['series'];
            $newcomic->type = $value['type'];
            $newcomic->save();
        }
    }
}
