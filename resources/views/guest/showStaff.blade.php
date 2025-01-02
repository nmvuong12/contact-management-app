<!-- resources/views/staff/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Chi tiết cán bộ: {{ $staff->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Thông tin chi tiết</h3>
                    <p><strong>Họ và tên:</strong> {{ $staff->name }}</p>
                    <p><strong>Chức danh:</strong> {{ $staff->title }}</p>
                    <p><strong>Học hàm:</strong> {{ $staff->academic_rank }}</p>
                    <p><strong>Học vị:</strong> {{ $staff->degree }}</p>
                    <p><strong>Số điện thoại:</strong> {{ $staff->phone }}</p>
                    <p><strong>Email:</strong> {{ $staff->email }}</p>
                    
                    <!-- Nút quay lại danh sách cán bộ -->
                    <div class="mt-6 text-center">
                        <a href="{{ url()->previous() }}" 
                        class="inline-block bg-green text-black px-4 py-2 rounded-lg hover:bg-green z-10">
                            Quay lại danh sách cán bộ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
