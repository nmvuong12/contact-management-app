<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('vi_VN'); // Sử dụng Faker cho ngôn ngữ tiếng Việt

        for ($i = 0; $i < 30; $i++) {
            Department::create([
                'name' => $faker->company, // Tên công ty
                'code' => $faker->unique()->bothify('???-####'), // Mã công ty, ví dụ: ABC-1234
                'phone' => $faker->phoneNumber, // Số điện thoại
                'email' => $faker->email, // Email
                'website' => $faker->url, // Website
                'address' => $faker->address, // Địa chỉ
            ]);
        }
    }
}
