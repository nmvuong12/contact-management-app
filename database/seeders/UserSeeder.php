<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Staff;

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
        $staffIds = Staff::pluck('id')->toArray(); 
        
        // Tạo 30 người dùng
        for ($i = 0; $i < 30; $i++) {
            // Xác định role ngẫu nhiên
            $role = $faker->randomElement(['staff', 'guest', 'admin']);
            $staffId =null;
            $staffName = $faker->name;
            // Nếu role là staff, lấy một staff_id ngẫu nhiên từ bảng staff
            if ($role === 'staff' && count($staffIds) > 0)
            {
                $staffId = $faker->randomElement($staffIds);
                $staff = Staff::findOrFail($staffId);
                $staffName = $staff->name;
                $staffIds = array_diff($staffIds, [$staffId]);
            }
            User::create([
                'name' => $staffName, // Tên người dùng
                'email' => $faker->unique()->email, // Email duy nhất
                'password' => Hash::make('123456'), // Mật khẩu đã được mã hóa
                'staff_id' => $staffId, // Chỉ gán staff_id nếu role là staff
                'role' => $role, // Vai trò ngẫu nhiên
            ]);
        }
    }
}
