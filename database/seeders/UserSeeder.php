<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('vi_VN'); // Sử dụng Faker cho ngôn ngữ tiếng Việt

        // Lấy tất cả department_id từ bảng staff (khóa ngoại staff_id)
        $staffIds = DB::table('staff')->pluck('id')->toArray(); 

        // Tạo 20 người dùng
        for ($i = 0; $i < 30; $i++) {
            User::create([
                'name' => $faker->name, // Tên người dùng
                'email' => $faker->unique()->email, // Email duy nhất
                'password' => Hash::make('123456'), // Mật khẩu đã được mã hóa
                'staff_id' => $faker->randomElement($staffIds), // Chọn ngẫu nhiên staff_id từ bảng staff
                'role' => $faker->randomElement(['admin', 'staff', 'guest']), // Vai trò ngẫu nhiên
            ]);
        }
    }
}
