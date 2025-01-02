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
                'name' => 'Đại học Bách khoa Hà Nội',
                'code' => 'BKHN-001',
                'phone' => '024-38680000',
                'email' => 'contact@hust.edu.vn',
                'website' => 'https://hust.edu.vn',
                'address' => 'Số 1, Đại Cồ Việt, Hà Nội',
            ],
            [
                'name' => 'Đại học Quốc gia Hà Nội',
                'code' => 'VNU-002',
                'phone' => '024-37547670',
                'email' => 'contact@vnu.edu.vn',
                'website' => 'https://vnu.edu.vn',
                'address' => '144 Xuân Thủy, Cầu Giấy, Hà Nội',
            ],
            [
                'name' => 'Đại học Kinh tế Quốc dân',
                'code' => 'KTQD-003',
                'phone' => '024-36280280',
                'email' => 'contact@neu.edu.vn',
                'website' => 'https://neu.edu.vn',
                'address' => '207 Giải Phóng, Hai Bà Trưng, Hà Nội',
            ],
            [
                'name' => 'Đại học Ngoại thương',
                'code' => 'FTU-004',
                'phone' => '024-32595158',
                'email' => 'contact@ftu.edu.vn',
                'website' => 'https://ftu.edu.vn',
                'address' => '91 Chùa Láng, Đống Đa, Hà Nội',
            ],
            [
                'name' => 'Đại học Sư phạm Hà Nội',
                'code' => 'SPHN-005',
                'phone' => '024-37547823',
                'email' => 'contact@hnue.edu.vn',
                'website' => 'https://hnue.edu.vn',
                'address' => '136 Xuân Thủy, Cầu Giấy, Hà Nội',
            ],
            [
                'name' => 'Đại học Công nghệ TP.HCM',
                'code' => 'HUTECH-006',
                'phone' => '028-54456789',
                'email' => 'contact@hutech.edu.vn',
                'website' => 'https://hutech.edu.vn',
                'address' => '475A Điện Biên Phủ, Bình Thạnh, TP.HCM',
            ],
            [
                'name' => 'Đại học Quốc gia TP.HCM',
                'code' => 'VNUHCM-007',
                'phone' => '028-37242160',
                'email' => 'contact@vnuhcm.edu.vn',
                'website' => 'https://vnuhcm.edu.vn',
                'address' => 'Khu phố 6, Thủ Đức, TP.HCM',
            ],
            [
                'name' => 'Đại học Kinh tế TP.HCM',
                'code' => 'UEH-008',
                'phone' => '028-38295299',
                'email' => 'contact@ueh.edu.vn',
                'website' => 'https://ueh.edu.vn',
                'address' => '59C Nguyễn Đình Chiểu, Quận 3, TP.HCM',
            ],
            [
                'name' => 'Đại học Cần Thơ',
                'code' => 'CTU-009',
                'phone' => '0292-3832663',
                'email' => 'contact@ctu.edu.vn',
                'website' => 'https://ctu.edu.vn',
                'address' => 'Khu II, đường 3/2, Ninh Kiều, Cần Thơ',
            ],
            [
                'name' => 'Đại học Đà Nẵng',
                'code' => 'UDN-010',
                'phone' => '0236-3822020',
                'email' => 'contact@ud.edu.vn',
                'website' => 'https://ud.edu.vn',
                'address' => '41 Lê Duẩn, Hải Châu, Đà Nẵng',
            ],
            [
                'name' => 'Đại học Thái Nguyên',
                'code' => 'DTN-011',
                'phone' => '0208-3852668',
                'email' => 'contact@tnu.edu.vn',
                'website' => 'https://tnu.edu.vn',
                'address' => 'Quyết Thắng, TP. Thái Nguyên',
            ],
            [
                'name' => 'Đại học Huế',
                'code' => 'HUEUNI-012',
                'phone' => '0234-3823444',
                'email' => 'contact@hueuni.edu.vn',
                'website' => 'https://hueuni.edu.vn',
                'address' => '03 Lê Lợi, TP. Huế',
            ],
            [
                'name' => 'Đại học Vinh',
                'code' => 'VINHUNI-013',
                'phone' => '0238-3855453',
                'email' => 'contact@vinhuni.edu.vn',
                'website' => 'https://vinhuni.edu.vn',
                'address' => '182 Lê Duẩn, TP. Vinh, Nghệ An',
            ],
            [
                'name' => 'Đại học Tây Nguyên',
                'code' => 'TTU-014',
                'phone' => '0262-3850905',
                'email' => 'contact@ttu.edu.vn',
                'website' => 'https://ttu.edu.vn',
                'address' => '567 Lê Duẩn, TP. Buôn Ma Thuột, Đắk Lắk',
            ],
            [
                'name' => 'Đại học Hải Phòng',
                'code' => 'HPU-015',
                'phone' => '0225-3864510',
                'email' => 'contact@hpu.edu.vn',
                'website' => 'https://hpu.edu.vn',
                'address' => '171 Phan Đăng Lưu, Kiến An, Hải Phòng',
            ],
            [
                'name' => 'Đại học Mở TP.HCM',
                'code' => 'OU-016',
                'phone' => '028-39302146',
                'email' => 'contact@ou.edu.vn',
                'website' => 'https://ou.edu.vn',
                'address' => '97 Võ Văn Tần, Quận 3, TP.HCM',
            ],
            [
                'name' => 'Đại học Công nghiệp Hà Nội',
                'code' => 'HAUI-017',
                'phone' => '024-37655555',
                'email' => 'contact@haui.edu.vn',
                'website' => 'https://haui.edu.vn',
                'address' => 'Minh Khai, Bắc Từ Liêm, Hà Nội',
            ],
            [
                'name' => 'Đại học Giao thông Vận tải',
                'code' => 'UTC-018',
                'phone' => '024-37684610',
                'email' => 'contact@utc.edu.vn',
                'website' => 'https://utc.edu.vn',
                'address' => 'Số 3, Cầu Giấy, Hà Nội',
            ],
            [
                'name' => 'Đại học Thủy Lợi',
                'code' => 'TLU-019',
                'phone' => '024-38522201',
                'email' => 'contact@tlu.edu.vn',
                'website' => 'https://tlu.edu.vn',
                'address' => '175 Tây Sơn, Đống Đa, Hà Nội',
            ],
            [
                'name' => 'Đại học Luật TP.HCM',
                'code' => 'UL-020',
                'phone' => '028-38724732',
                'email' => 'contact@hcmul.edu.vn',
                'website' => 'https://hcmul.edu.vn',
                'address' => '2 Nguyễn Tất Thành, Quận 4, TP.HCM',
            ],
        ];

        // Thực hiện seeding
        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
