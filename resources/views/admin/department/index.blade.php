<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Danh sách đơn vị</h3>
                    <div class="mb-4 flex justify-between items-center">
                        <a href="{{ route('admin.index') }}" class="inline-block bg-blue-600 text-black px-4 py-2 rounded-md hover:bg-blue-700">
                            <-- Về trang chủ
                        </a>
                        <x-primary-button>
                            <a href="{{ route('admin.department.create') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                                Thêm mới
                            </a>
                        </x-primary-button>
                    </div>

                    <!-- Table -->
                    <table class="w-full bg-white border border-gray-200 rounded-lg shadow-md">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 text-left text-sm font-semibold text-gray-700 border-b">ID</th>
                                <th class="py-2 px-4 text-left text-sm font-semibold text-gray-700 border-b">Tên đơn vị</th>
                                <th class="py-2 px-4 text-left text-sm font-semibold text-gray-700 border-b">Mã đơn vị</th>
                                <th class="py-2 px-4 text-left text-sm font-semibold text-gray-700 border-b">Số điện thoại</th>
                                <th class="py-2 px-4 text-left text-sm font-semibold text-gray-700 border-b">Email</th>
                                <th class="py-2 px-4 text-left text-sm font-semibold text-gray-700 border-b">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $department)
                                <tr class="hover:bg-gray-100">
                                    <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $department->id }}</td>
                                    <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $department->name }}</td>
                                    <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $department->code }}</td>
                                    <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $department->phone }}</td>
                                    <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $department->email }}</td>
                                    <td class="py-2 px-4 border-b text-sm">
                                        <!-- Show Button -->
                                        <button @click="openDetailModal({{ $department }})" class="text-blue-600 hover:text-blue-800 px-2 py-1 rounded-md">Chi tiết</button>
                                        
                                        <!-- Edit Button -->
                                        <a href="{{route('admin.department.edit', $department->id)}}" class="text-yellow-600 hover:text-yellow-800 px-2 py-1 rounded-md">Chỉnh sửa</a>
                                        
                                        <!-- Delete Button -->
                                        <button @click="openDeleteModal({{ $department->id }})" class="text-red-600 hover:text-red-800 px-2 py-1 rounded-md">Xóa</button>
                                    </td>
                                    </td>
                                </tr>
                                
                            @endforeach 
                            
                        </tbody>
                    </table>
                    <!-- Hiển thị phân trang -->
                    <div class="mt-6">
                        {{ $departments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
