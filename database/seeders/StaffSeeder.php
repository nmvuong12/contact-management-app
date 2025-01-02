<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Staff;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN'); // Sử dụng Faker với ngôn ngữ tiếng Việt

        // Lấy tất cả department_id từ bảng departments
        $departmentIds = Department::pluck('id')->toArray();

        // Danh sách chức danh
        $titles = ['Giám đốc', 'Hiệu trưởng', 'Hiệu phó', 'Giảng viên', 'Trưởng khoa', 'Phó trưởng khoa', 'Cán bộ hành chính'];

        // Danh sách học hàm
        $academicRanks = ['Giáo sư', 'Phó giáo sư', 'Nghiên cứu viên'];

        // Danh sách học vị
        $degrees = ['Tiến sĩ', 'Thạc sĩ', 'Cử nhân'];

        // Tạo 100 nhân viên
        for ($i = 0; $i < 100; $i++) {
            Staff::create([
                'name' => $faker->lastName . ' ' . $faker->firstName, // Tên người Việt thực tế
                'title' => $faker->randomElement($titles), // Chức danh
                'academic_rank' => $faker->optional()->randomElement($academicRanks), // Học hàm (nullable)
                'degree' => $faker->randomElement($degrees), // Học vị
                'phone' => $faker->unique()->numerify('09########'), // Số điện thoại
                'email' => $faker->unique()->safeEmail, // Email
                'department_id' => $faker->randomElement($departmentIds), // Khóa ngoại
            ]);
        }
    }
}
