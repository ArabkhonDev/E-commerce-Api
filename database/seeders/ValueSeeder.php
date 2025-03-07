<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            'name'=> [
                'en'=> 'red',
                'uz'=> 'qizil',
                'ru'=>'красний'
            ],
            'attribute_id'=> 1
        ]);
        Value::create([
            'name'=> [
                'en'=> 'black',
                'uz'=> 'qora',
                'ru'=>'черный'
            ],
            'attribute_id'=> 1
        ]);
        Value::create([
            'name'=> [
                'en'=> 'yellow',
                'uz'=> 'sariq',
                'ru'=>'желтый'
            ],
            'attribute_id'=> 1
        ]);
        Value::create([
            'name'=> [
                'en'=> 'L',
                'uz'=> 'L',
                'ru'=>'Л'
            ],
            'attribute_id'=> 2
        ]);
        Value::create([
            'name'=> [
                'en'=> 'M',
                'uz'=> 'M',
                'ru'=>'М'
            ],
            'attribute_id'=> 2
        ]);
        Value::create([
            'name'=> [
                'en'=> 'XL',
                'uz'=> 'XL',
                'ru'=>'ХЛ'
            ],
            'attribute_id'=> 2
        ]);
        Value::create([
            'name'=> [
                'en'=> 'iron',
                'uz'=> 'temir',
                'ru'=>'железо'
            ],
            'attribute_id'=> 3
        ]);
        Value::create([
            'name'=> [
                'en'=> 'paper',
                'uz'=> "qog'oz",
                'ru'=>'бумага'
            ],
            'attribute_id'=> 3
        ]);
        Value::create([
            'name'=> [
                'en'=> 'silk',
                'uz'=> 'ipak',
                'ru'=>'шелк'
            ],
            'attribute_id'=> 3
        ]);
        Value::create([
            'name'=> [
                'en'=> 'wood',
                'uz'=> "yog'och",
                'ru'=>'древесина'
            ],
            'attribute_id'=> 3
        ]);

    }
}
