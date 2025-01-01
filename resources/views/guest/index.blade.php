<x-app-layout>
    <x-slot name="header">
        <h2 class="py-6 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bạn đang đăng nhập với vai trò là Khách') }}
        </h2>
        <!-- Form tìm kiếm -->
        <form method="GET" action="{{route('guest.index')}}" class="mb-6">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <input type="text" name="name" value="{{ request('name') }}"
                               placeholder="Tìm theo tên đơn vị"
                               class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500">
                    </div>
                    <div>
                        <input type="text" name="code" value="{{ request('code') }}"
                               placeholder="Tìm theo mã đơn vị"
                               class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500">
                    </div>
                    <div>
                        <button type="submit"
                                class="px-4 py-2 bg-blue-500 text-black rounded-lg hover:bg-blue-600 transition">
                            Tìm kiếm
                        </button>
                        
                        <a href="{{ route('guest.index') }}" 
                        class="px-4 py-2 bg-blue-500 text-black rounded-lg hover:bg-blue-600 transition">
                            Xóa bộ lọc
                        </a>
                    </div>
                </div>
            </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Danh sách đơn vị</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($departments as $department)
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">
                                {{ $department->name }}
                            </h3>
                            <h5 class="text-lg font-semibold text-gray-800">
                                Mã đơn vị: {{ $department->code }}
                            </h5>
                            <p class="text-gray-600 text-sm mt-2">
                                Đây là đơn vị số {{ $department->id }}.
                            </p>
                            <a href="{{route('guest.showDepartment', $department->id)}}" 
                               class="inline-block mt-4 text-blue-500 hover:text-blue-700 font-medium">
                                Xem chi tiết →
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <p class="text-gray-500 text-center">Không có đơn vị nào được tìm thấy.</p>
                    </div>
                @endforelse
            </div>
            <!-- Hiển thị phân trang -->
            <div class="mt-6">
                {{ $departments->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
