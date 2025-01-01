<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Thông tin
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Phần thông tin đơn vị -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Thông tin đơn vị</h3>
                    <p><strong>Tên đơn vị:</strong> {{ $department->name }}</p>
                    <p><strong>Mã đơn vị:</strong> {{ $department->code }}</p>
                    <p><strong>Số điện thoại:</strong> {{ $department->phone }}</p>
                    <p><strong>Email:</strong> {{ $department->email }}</p>
                    <p><strong>Địa chỉ:</strong> {{ $department->address }}</p>                    
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Thông tin của bạn</h3>
                    <div class="p-6 text-gray-900">
                        <p><strong>Họ và tên:</strong> {{ $staff->name }}</p>
                        <p><strong>Chức danh:</strong> {{ $staff->title }}</p>
                        <p><strong>Học hàm:</strong> {{ $staff->academic_rank }}</p>
                        <p><strong>Học vị:</strong> {{ $staff->degree }}</p>
                        <p><strong>Số điện thoại:</strong> {{ $staff->phone }}</p>
                        <p><strong>Email:</strong> {{ $staff->email }}</p>
                        <a href="{{route('staff.edit', $staff->id)}}" 
                               class="inline-block mt-4 text-blue-500 hover:text-blue-700 font-medium">
                                Chỉnh sửa →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
