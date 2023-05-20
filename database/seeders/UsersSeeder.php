<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => "etudiant",
            'last_name' => "etudiant",
            'email' => "etud@etud.com",
            'fillier' => "fillier 1",
            'paye' => "maroc",
            'phone' => "0707028520",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('etudiant');

        User::create([
            'first_name' => "encien",
            'last_name' => "encien",
            'email' => "encien@encien.com",
            'salair' => "4000",
            'paye' => "france",
            'phone' => "0707028520",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('encien');

        User::create([
            'first_name' => "admin",
            'last_name' => "admin",
            'email' => "admin@admin.com",
            'paye' => "maroc",
            'phone' => "0707028520",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('admin');

        User::create([
            'first_name' => "recruteur",
            'last_name' => "recruteur",
            'email' => "recruteur@recruteur.com",
            'company_name' => "ifiag",
            'paye' => "maroc",
            'phone' => "060000000",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('recruteur');
    }
}
