<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Sneaker;
use Illuminate\Database\Seeder;

class SneakersSeeder extends Seeder
{
    public function run(): void
    {
        $nike = Brand::where('name', 'Nike')->first();
        $adidas = Brand::where('name', 'Adidas')->first();
        $newBalance = Brand::where('name', 'New Balance')->first();
        $asics = Brand::where('name', 'Asics')->first();
        $puma = Brand::where('name', 'Puma')->first();
        $veja = Brand::where('name', 'Veja')->first();

        Sneaker::insert([
            [
                'name' => 'Air Max 90',
                'colorway' => 'Infrared',
                'release_year' => 1990,
                'description' => 'Klassieker met zichtbare Air-unit in de hiel.',
                'brand_id' => $nike?->id,
            ],
            [
                'name' => 'Air Jordan 1',
                'colorway' => 'Chicago',
                'release_year' => 1985,
                'description' => 'De eerste signature sneaker van Michael Jordan.',
                'brand_id' => $nike?->id,
            ],
            [
                'name' => 'Dunk Low',
                'colorway' => 'Panda',
                'release_year' => 2021,
                'description' => 'Zwart-witte Dunk die overal uitverkocht was.',
                'brand_id' => $nike?->id,
            ],
            [
                'name' => 'Samba OG',
                'colorway' => 'White Black Gum',
                'release_year' => 1950,
                'description' => 'Ooit een zaalvoetbalschoen, nu een modeklassieker.',
                'brand_id' => $adidas?->id,
            ],
            [
                'name' => 'Superstar',
                'colorway' => 'White Black',
                'release_year' => 1969,
                'description' => 'Basketbalschoen met de bekende rubberen shell toe.',
                'brand_id' => $adidas?->id,
            ],
            [
                'name' => '574',
                'colorway' => 'Grey',
                'release_year' => 1988,
                'description' => 'Comfortabele alledaagse sneaker in het typische New Balance-grijs.',
                'brand_id' => $newBalance?->id,
            ],
            [
                'name' => '990v6',
                'colorway' => 'Grey',
                'release_year' => 2022,
                'description' => 'Premium hardloopsneaker, made in USA.',
                'brand_id' => $newBalance?->id,
            ],
            [
                'name' => 'Gel-Kayano 14',
                'colorway' => 'Cream Black',
                'release_year' => 2008,
                'description' => 'Hardloopschoen uit 2008 die als retro weer populair werd.',
                'brand_id' => $asics?->id,
            ],
            [
                'name' => 'Gel-1130',
                'colorway' => 'White Midnight',
                'release_year' => 2005,
                'description' => null,
                'brand_id' => $asics?->id,
            ],
            [
                'name' => 'Suede Classic',
                'colorway' => 'Black White',
                'release_year' => 1968,
                'description' => 'Suede sneaker die groot werd in de hiphop- en breakdancescene.',
                'brand_id' => $puma?->id,
            ],
            [
                'name' => 'V-10',
                'colorway' => 'White Petrol',
                'release_year' => 2017,
                'description' => 'Duurzame leren sneaker met de V op de zijkant.',
                'brand_id' => $veja?->id,
            ],
        ]);
    }
}
