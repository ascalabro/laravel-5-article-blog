<?php
use Illuminate\Database\Seeder;
use App\News as News; // to use Eloquent Model

class TagTableSeeder extends Seeder {
    public function run() {
        // clear table
//        \App\Tag::truncate();
        // add 1st row
        \App\Tag::create( [
            'name' => 'news'
        ] );
        // add 2nd row
        \App\Tag::create( [
            'name' => 'vacation' ,
        ] );
        \App\Tag::create( [
            'name' => 'united states' ,
        ] );
        \App\Tag::create( [
            'name' => 'science' ,
        ] );
        \App\Tag::create( [
            'name' => 'math' ,
        ] );
    }
}