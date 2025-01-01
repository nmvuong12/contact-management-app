<!-- resources/views/staff/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Chi tiết đơn vị: {{ $department->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Thông tin chi tiết</h3>
                    <p><strong>ID:</strong> {{ $department->id }}</p>
                    <p><strong>Tên đơn vị:</strong> {{ $department->name }}</p>
                    <p><strong>Mã đơn vị:</strong> {{ $department->code }}</p>
                    <p><strong>Số điện thoại:</strong> {{ $department->phone }}</p>
                    <p><strong>Email:</strong> {{ $department->email }}</p>
                    <p><strong>Website:</strong> {{ $department->website }}</p>
                    <p><strong>Địa chỉ:</strong> {{ $department->address }}</p>
                    
                    <!-- Nút quay lại danh sách cán bộ -->
                    <div class="mt-6 text-center">
                        <a href="{{ url()->previous() }}" 
                        class="inline-block bg-green text-black px-4 py-2 rounded-lg hover:bg-green z-10">
                            Quay lại danh sách đơn vị
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
