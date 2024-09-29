<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Ticket::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i < 10; $i++){
            Ticket::create([
                'ticket_type_id'=>$i,
                'subject'=>$faker->text,
                'base_question'=>$faker->text,
                'status'=>$faker->text,
            ]);
        }
    }
}
