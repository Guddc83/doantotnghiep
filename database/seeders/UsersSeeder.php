<?php

namespace Database\Seeders;

use App\Http\Controllers\client\CategoryController;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  @return void
     */
    public function run(): void
    {
        $faker = faker::create();

        for ($i = 0; $i < 10; $i++) { // Tạo 10 bản ghi ngẫu nhiên
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'phone' => $faker->phoneNumber,
                'gender' => $faker->randomElement(['male', 'female']),
                'address' => $faker->address,
                'avartar' => $faker->imageUrl(), // URL ảnh ngẫu nhiên
                'status' => $faker->numberBetween(0, 1),
                'remember_token' => null,
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => now(),
            ]);
        }
    }
}
