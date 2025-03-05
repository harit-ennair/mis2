<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Database\Factories\UserFactory;


class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $users = UserFactory::factory()->count(50)->make();

    }
}
