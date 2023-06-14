<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = config('comics.comic');

        foreach($array as $element){
            $newComic = new Comic();
            $newComic->title = $element["title"];
            $newComic->description = $element['description'];
            $newComic->thumb = $element['thumb'];
            $newComic->price = $element['price'];
            $newComic->series = $element['series'];
            $newComic->sale_date = $element['sale_date'];
            $newComic->type = $element['type'];
            $newComic->artists = join(', ', $element['artists']);
            $newComic->writers = join(', ', $element['writers']);
            $newComic->save();
        }
    }
}
