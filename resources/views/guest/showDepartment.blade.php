<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $department->name }} - Chi tiết đơn vị
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Phần thông tin đơn vị (Bên trái) -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Thông tin đơn vị</h3>
                    <!-- <p><strong>Mã đơn vị:</strong> {{ $department->id }}</p> -->
                    <p><strong>Tên đơn vị:</strong> {{ $department->name }}</p>
                    <p><strong>Mã đơn vị:</strong> {{ $department->code }}</p>
                    <p><strong>Số điện thoại:</strong> {{ $department->phone }}</p>
                    <p><strong>Email:</strong> {{ $department->email }}</p>
                    <p><strong>Địa chỉ:</strong> {{ $department->address }}</p>
                    
                </div>

                <!-- Phần danh sách cán bộ (Bên phải) -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <!-- Form tìm kiếm -->
                <form method="GET" action="{{route('guest.searchStaff')}}" class="mb-6">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <input type="text" name="name" value="{{ request('name') }}"
                                    placeholder="Tìm theo tên cán bộ"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500">
                                <input type="hidden" name="codeDepartment" value="{{ $department->id }}">
                            </div>
                            <div>
                                <button type="submit"
                                        class="px-4 py-2 bg-blue-500 text-black rounded-lg hover:bg-blue-600 transition">
                                    Tìm kiếm
                                </button>
                                
                                <a href="{{ route('guest.showDepartment', $department->id) }}" 
                                class="px-4 py-2 bg-blue-500 text-black rounded-lg hover:bg-blue-600 transition">
                                    Xóa bộ lọc
                                </a>
                            </div>
                        </div>
                    </form>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Danh sách cán bộ</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($staffMembers as $staff)
                            <div class="bg-gray-100 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                                <h4 class="font-semibold text-gray-800">{{ $staff->name }}</h4>
                                <p class="text-gray-600">{{ $staff->position }}</p>
                                <p class="text-gray-500 text-sm">{{ $staff->email }}</p>
                                <a href="{{route('guest.showStaff', $staff->id)}}" 
                                   class="mt-4 inline-block text-blue-500 hover:text-blue-700 font-medium">
                                    Xem chi tiết
                                </a>
                            </div>
                        @endforeach
                    </div>
                    
                    @if ($staffMembers->isEmpty())
                        <p class="text-gray-500 text-center mt-4">Chưa có cán bộ nào thuộc đơn vị này.</p>
                    @endif
                    <!-- Hiển thị phân trang -->
                    <div class="mt-6">
                        {{ $staffMembers->links() }}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Nút quay lại trang danh sách các đơn vị -->
    <div class="mt-6 text-center relative">
    <a href="{{ route('guest.index') }}" 
       class="inline-block bg-green text-black px-4 py-2 rounded-lg hover:bg-green z-10">
        Quay lại danh sách đơn vị
    </a>
</div>

</x-app-layout>
