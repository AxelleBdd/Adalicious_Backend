<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                "plate" => "Hello World Burger",
                "description" => "Un cheeseburger classique (pain, steak, fromage, salade, sauce).",
                "image" => "🍔"
            ],
            [
                "plate" => "404 Not Found Fries",
                "description" => "Des frites maison avec une sauce mystère (choisie aléatoirement par le backend !).",
                "image" => "🍟"
            ],
            [
                "plate" => "JSON Nuggets",
                "description" => "Nuggets de poulet avec 3 sauces au choix (ketchup, mayo, barbecue).",
                "image"=> "🍗"
            ],
            [
                "plate" => "Git Pull Tacos",
                "description"=> "Un taco simple avec poulet, salade, fromage et sauce.",
                "image"=> "🌮"
            ],
            [
                "plate"=> "Front-end Salad",
                "description"=> "Une salade légère avec tomates, feta et vinaigrette maison.",
                "image"=> "🥗"
            ],
            [
                "plate"=> "Back-End Brownie",
                "description"=> "Un brownie moelleux au chocolat.",
                "image"=> "🍫"
            ],
            [
                "plate"=> "Full Stack Menu",
                "description"=> "Un combo burger, frites et boisson.",
                "image"=> "🥗"
            ],
            
            ];
        Menu::insert($menus);
    }
}
