<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Listing::factory(6)->create();

        // Listing::create( [
            
        //     'title' => 'Laravel Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'email' => 'user@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Obcaecati, hic temporibus quos fuga et recusandae aperiam 
        //     inventore nostrum quo ad harum reiciendis error architecto 
        //     ratione nam? Architecto ratione corrupti amet.'
        // ]);

        // Listing::create( [
            
        //     'title' => 'Fullstack Developer Developer',
        //     'tags' => 'laravel, javascript, react, node',
        //     'company' => 'Acme Corp',
        //     'email' => 'user@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Obcaecati, hic temporibus quos fuga et recusandae aperiam 
        //     inventore nostrum quo ad harum reiciendis error architecto 
        //     ratione nam? Architecto ratione corrupti amet.'
        // ]);
    }
}
