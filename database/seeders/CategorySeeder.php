<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(
            [
                "name" => [
                    "en" => "chair",
                    "uz" => "stol",
                    "ru" => "стол",
                ],
            ]
        );
        Category::create(
            [
                "name" => [
                    "en" => "pc",
                    "uz" => "stol komputer",
                    "ru" => "пк",
                ],
            ]

        );
        Category::create(
            [
                "name" =>  [
                    "en" => "phone",
                    "uz" => "telefon",
                    "ru" => "телефон",
                ],
            ]

        );
        Category::create(
            [
                "name" =>  [
                    "en" => "work",
                    "uz" => "ish",
                    "ru" => "работа",
                ],
            ]
        );
        Category::create(
            [
                "name" =>  [
                    "en" => "transport",
                    "uz" => "transport",
                    "ru" => "транспорт",
                ],
            ]

        );
        Category::create(
            [
                "name" =>   [
                    "en" => "house and appartment",
                    "uz" => "uy va kvartira",
                    "ru" => "дом и кв",
                ],
            ]

        );
    }
}
