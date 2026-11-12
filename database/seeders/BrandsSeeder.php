<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    public function run(): void
    {
        Brand::insert([
            [
                'name' => 'Nike',
                'country' => 'Verenigde Staten',
                'description' => 'Grootste sportmerk ter wereld, bekend van de Air Max en Air Jordan.',
            ],
            [
                'name' => 'Adidas',
                'country' => 'Duitsland',
                'description' => 'Duits sportmerk met de drie strepen, bekend van de Superstar en Samba.',
            ],
            [
                'name' => 'New Balance',
                'country' => 'Verenigde Staten',
                'description' => 'Amerikaans merk dat veel sneakers nog in de VS en Engeland maakt.',
            ],
            [
                'name' => 'Asics',
                'country' => 'Japan',
                'description' => 'Japans hardloopmerk, de naam komt van Anima Sana In Corpore Sano.',
            ],
            [
                'name' => 'Puma',
                'country' => 'Duitsland',
                'description' => null,
            ],
            [
                'name' => 'Veja',
                'country' => 'Frankrijk',
                'description' => 'Frans merk dat duurzame sneakers maakt van biologisch katoen en wild rubber.',
            ],
        ]);
    }
}
