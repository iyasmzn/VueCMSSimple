<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')->table('articles')->insert([
            'title' => 'Presiden digigit anying',
            'content' => 'Presiden digigit anying Presiden digigit anying Presiden digigit anying Presiden digigit anying',
            'author' => 'sono',
            'date' => date('Y-m-d'),
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        app('db')->table('articles')->insert([
            'title' => 'Babu menjadi abu',
            'content' => 'babu digigit anying babu digigit anying babu digigit anying babu digigit anying',
            'author' => 'sini',
            'date' => date('Y-m-d'),
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
    }
}
