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
        // $faker = Faker::create('vi_VN'); // Sử dụng Faker cho ngôn ngữ tiếng Việt

        // for ($i = 0; $i < 30; $i++) {
        //     Department::create([
        //         'name' => $faker->company, // Tên công ty
        //         'code' => $faker->unique()->bothify('???-####'), // Mã công ty, ví dụ: ABC-1234
        //         'phone' => $faker->phoneNumber, // Số điện thoại
        //         'email' => $faker->email, // Email
        //         'website' => $faker->url, // Website
        //         'address' => $faker->address, // Địa chỉ
        //     ]);
        // }

        $departments = [
            [
                'name' => 'Khoa Công nghệ thông tin',
                'code' => 'IT-001',
                'phone' => '024-38680001',
                'email' => 'contact@it.hust.edu.vn',
                'website' => 'https://it.hust.edu.vn',
                'address' => 'Phòng 101, Tòa nhà A, Đại học Bách khoa Hà Nội',
            ],
            [
                'name' => 'Khoa Điện',
                'code' => 'EE-002',
                'phone' => '024-38680002',
                'email' => 'contact@ee.hust.edu.vn',
                'website' => 'https://ee.hust.edu.vn',
                'address' => 'Phòng 102, Tòa nhà B, Đại học Bách khoa Hà Nội',
            ],
            [
                'name' => 'Khoa Vật lý',
                'code' => 'PHYS-003',
                'phone' => '024-37547671',
                'email' => 'contact@phys.vnu.edu.vn',
                'website' => 'https://phys.vnu.edu.vn',
                'address' => 'Phòng 201, Tòa nhà C, Đại học Quốc gia Hà Nội',
            ],
            [
                'name' => 'Khoa Hóa học',
                'code' => 'CHEM-004',
                'phone' => '024-37547672',
                'email' => 'contact@chem.vnu.edu.vn',
                'website' => 'https://chem.vnu.edu.vn',
                'address' => 'Phòng 202, Tòa nhà D, Đại học Quốc gia Hà Nội',
            ],
            [
                'name' => 'Khoa Quản trị kinh doanh',
                'code' => 'QTKD-005',
                'phone' => '024-36280281',
                'email' => 'contact@qtkd.neu.edu.vn',
                'website' => 'https://qtkd.neu.edu.vn',
                'address' => 'Phòng 301, Tòa nhà E, Đại học Kinh tế Quốc dân',
            ],
            [
                'name' => 'Khoa Kinh tế',
                'code' => 'ECO-006',
                'phone' => '024-36280282',
                'email' => 'contact@eco.neu.edu.vn',
                'website' => 'https://eco.neu.edu.vn',
                'address' => 'Phòng 302, Tòa nhà F, Đại học Kinh tế Quốc dân',
            ],
            [
                'name' => 'Khoa Tài chính',
                'code' => 'FIN-007',
                'phone' => '024-36280283',
                'email' => 'contact@fin.neu.edu.vn',
                'website' => 'https://fin.neu.edu.vn',
                'address' => 'Phòng 303, Tòa nhà G, Đại học Kinh tế Quốc dân',
            ],
            [
                'name' => 'Khoa Marketing',
                'code' => 'MKT-008',
                'phone' => '024-36280284',
                'email' => 'contact@mkt.neu.edu.vn',
                'website' => 'https://mkt.neu.edu.vn',
                'address' => 'Phòng 304, Tòa nhà H, Đại học Kinh tế Quốc dân',
            ],
            [
                'name' => 'Khoa Quản lý công',
                'code' => 'PM-009',
                'phone' => '024-36280285',
                'email' => 'contact@pm.neu.edu.vn',
                'website' => 'https://pm.neu.edu.vn',
                'address' => 'Phòng 305, Tòa nhà I, Đại học Kinh tế Quốc dân',
            ],
            [
                'name' => 'Khoa Luật',
                'code' => 'LAW-010',
                'phone' => '024-37547673',
                'email' => 'contact@law.vnu.edu.vn',
                'website' => 'https://law.vnu.edu.vn',
                'address' => 'Phòng 401, Tòa nhà J, Đại học Quốc gia Hà Nội',
            ],
            [
                'name' => 'Khoa Xã hội học',
                'code' => 'SOC-011',
                'phone' => '024-37547674',
                'email' => 'contact@soc.vnu.edu.vn',
                'website' => 'https://soc.vnu.edu.vn',
                'address' => 'Phòng 402, Tòa nhà K, Đại học Quốc gia Hà Nội',
            ],
            [
                'name' => 'Khoa Chính trị học',
                'code' => 'POL-012',
                'phone' => '024-37547675',
                'email' => 'contact@pol.vnu.edu.vn',
                'website' => 'https://pol.vnu.edu.vn',
                'address' => 'Phòng 403, Tòa nhà L, Đại học Quốc gia Hà Nội',
            ],
            [
                'name' => 'Khoa Tâm lý học',
                'code' => 'PSY-013',
                'phone' => '024-37547676',
                'email' => 'contact@psy.vnu.edu.vn',
                'website' => 'https://psy.vnu.edu.vn',
                'address' => 'Phòng 404, Tòa nhà M, Đại học Quốc gia Hà Nội',
            ],
            [
                'name' => 'Khoa Ngữ văn',
                'code' => 'LIT-014',
                'phone' => '024-37547677',
                'email' => 'contact@lit.vnu.edu.vn',
                'website' => 'https://lit.vnu.edu.vn',
                'address' => 'Phòng 405, Tòa nhà N, Đại học Quốc gia Hà Nội',
            ],
            [
                'name' => 'Khoa Lịch sử',
                'code' => 'HIS-015',
                'phone' => '024-37547678',
                'email' => 'contact@his.vnu.edu.vn',
                'website' => 'https://his.vnu.edu.vn',
                'address' => 'Phòng 406, Tòa nhà O, Đại học Quốc gia Hà Nội',
            ],
            [
                'name' => 'Khoa Ngoại ngữ',
                'code' => 'LANG-016',
                'phone' => '024-37547679',
                'email' => 'contact@lang.vnu.edu.vn',
                'website' => 'https://lang.vnu.edu.vn',
                'address' => 'Phòng 407, Tòa nhà P, Đại học Quốc gia Hà Nội',
            ],
            [
                'name' => 'Khoa Quản lý nguồn nhân lực',
                'code' => 'HRM-017',
                'phone' => '024-36280286',
                'email' => 'contact@hrm.neu.edu.vn',
                'website' => 'https://hrm.neu.edu.vn',
                'address' => 'Phòng 308, Tòa nhà Q, Đại học Kinh tế Quốc dân',
            ],
            [
                'name' => 'Khoa Cơ khí',
                'code' => 'ME-018',
                'phone' => '024-37547680',
                'email' => 'contact@me.hust.edu.vn',
                'website' => 'https://me.hust.edu.vn',
                'address' => 'Phòng 509, Tòa nhà R, Đại học Bách khoa Hà Nội',
            ],
            [
                'name' => 'Khoa Xây dựng',
                'code' => 'CE-019',
                'phone' => '024-37547681',
                'email' => 'contact@ce.hust.edu.vn',
                'website' => 'https://ce.hust.edu.vn',
                'address' => 'Phòng 510, Tòa nhà S, Đại học Bách khoa Hà Nội',
            ],
            [
                'name' => 'Khoa Môi trường',
                'code' => 'ENV-020',
                'phone' => '024-37547682',
                'email' => 'contact@env.hust.edu.vn',
                'website' => 'https://env.hust.edu.vn',
                'address' => 'Phòng 511, Tòa nhà T, Đại học Bách khoa Hà Nội',
            ],
        ];
        
        foreach ($departments as $department) {
            Department::create($department);
        }
        
    }
}
