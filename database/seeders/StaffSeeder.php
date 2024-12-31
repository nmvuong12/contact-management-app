<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('vi_VN'); // Sử dụng Faker cho ngôn ngữ tiếng Việt

        // Giả sử bạn có bảng departments đã được tạo và có dữ liệu
        $departmentIds = Department::pluck('id')->toArray(); // Lấy tất cả department_id từ bảng departments

        // Tạo 20 nhân viên
        for ($i = 0; $i < 100; $i++) {
            Staff::create([
                'name' => $faker->name, // Tên nhân viên
                'title' => $faker->jobTitle, // Chức danh (nullable)
                'academic_rank' => $faker->word, // Học hàm (nullable)
                'degree' => $faker->word, // Học vị (nullable)
                'phone' => $faker->phoneNumber, // Số điện thoại (nullable)
                'email' => $faker->email, // Email (nullable)
                'department_id' => $faker->randomElement($departmentIds), // Khóa ngoại liên kết với bảng departments
            ]);
        }
    }
}
