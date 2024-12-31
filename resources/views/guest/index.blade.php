<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bạn đang đăng nhập với vai trò là Khách') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
