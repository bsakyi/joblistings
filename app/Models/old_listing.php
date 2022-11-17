<?php 
   namespace App\Models;

   class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Obcaecati, hic temporibus quos fuga et recusandae aperiam 
                inventore nostrum quo ad harum reiciendis error architecto 
                ratione nam? Architecto ratione corrupti amet.'
            ],
    
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Obcaecati, hic temporibus quos fuga et recusandae aperiam 
                inventore nostrum quo ad harum reiciendis error architecto 
                ratione nam? Architecto ratione corrupti amet.'
            ],        
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
           if($listing['id'] == $id) {
            return $listing;
           } 
        }
    }
   }