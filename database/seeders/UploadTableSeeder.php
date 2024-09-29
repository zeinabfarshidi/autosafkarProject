<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Upload;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UploadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Upload::count())
            $this->data();
    }

    private function data()
    {
        $faker = Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            Upload::create([
                'src' => $faker->imageUrl,
                'mime_type' => $faker->mimeType(),
                'size' => $i . 'MG',
            ]);
        }
    }
}
