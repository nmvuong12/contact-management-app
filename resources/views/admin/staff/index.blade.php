<x-app-layout>
    <x-slot name="header">
        <h2 class="py-3 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bạn đang là Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Form tìm kiếm -->
            <form method="GET" action="{{ route('admin.staff') }}" class="mb-6">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <input type="text" name="name" value="{{ request('name') }}"
                               placeholder="Tên giảng viên"
                               class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500">
                    </div>
                    <div>
                        <input type="text" name="nameDepartment" value="{{ request('nameDepartment') }}"
                               placeholder="Tên đơn vị"
                               class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500">
                    </div>
                    <div>
                        <button type="submit"
                                class="px-4 py-2 bg-blue-500 text-black rounded-lg hover:bg-blue-600 transition">
                            Tìm kiếm
                        </button>

                        <a href="{{ route('admin.staff') }}"
                           class="px-4 py-2 bg-blue-500 text-black rounded-lg hover:bg-blue-600 transition">
                            Xóa bộ lọc
                        </a>
                    </div>
                </div>
            </form>
        </div>

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
                            <a href="{{ route('admin.staff.create') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                                Thêm mới
                            </a>
                        </x-primary-button>
                    </div>

                    <!-- Table -->
                    <table class="w-full bg-white border border-gray-200 rounded-lg shadow-md">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 text-left text-sm font-semibold text-gray-700 border-b">ID</th>
                                <th class="py-2 px-4 text-left text-sm font-semibold text-gray-700 border-b">Tên giảng viên</th>
                                <th class="py-2 px-4 text-left text-sm font-semibold text-gray-700 border-b">Chức danh</th>
                                <th class="py-2 px-4 text-left text-sm font-semibold text-gray-700 border-b">Đơn vị công tác</th>
                                <th class="py-2 px-4 text-left text-sm font-semibold text-gray-700 border-b">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffs as $staff)
                                <tr class="hover:bg-gray-100">
                                    <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $staff->id }}</td>
                                    <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $staff->name }}</td>
                                    
                                    <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $staff->title }}</td>
                                    <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $staff->department->name }}</td>                                    
                                    <td class="py-2 px-4 border-b text-sm">
                                        <!-- Show Button -->
                                        <a href="{{ route('admin.staff.show', $staff->id) }}"
                                           class="text-yellow-600 hover:text-yellow-800 px-2 py-1 rounded-md">
                                            Chi tiết
                                        </a>

                                        <!-- Edit Button -->
                                        <a href="{{ route('admin.staff.edit', $staff->id) }}"
                                           class="text-yellow-600 hover:text-yellow-800 px-2 py-1 rounded-md">
                                            Chỉnh sửa
                                        </a>

                                        <!-- Delete Button -->
                                        <button data-modal-target="authentication-modal-{{ $staff->id }}" data-modal-toggle="authentication-modal-{{ $staff->id }}" class="text-red-600 hover:text-red-800 px-2 py-1 rounded-md" type="button">
                                            Xóa
                                        </button>
                                    </td>
                                </tr>

                                <!-- Modal HTML structure -->
                                <div id="authentication-modal-{{ $staff->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Xác nhận xóa
                                                </h3>
                                                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal-{{ $staff->id }}">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5">
                                                <form class="space-y-4" action="{{ route('admin.staff.delete', $staff->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <p><strong>Bạn có chắc chắn xóa giảng viên: </strong>{{$staff->name}}</p>
                                                    <p><strong>Thuộc đơn vị: </strong>{{ $staff->department->name }} ({{$staff->department->code}})</p>
                                                    <button type="submit" class="text-red-600 hover:text-red-800 px-2 py-1 rounded-md">
                                                        Xác nhận
                                                    </button>
                                                </form>
                                                <a href="{{ route('admin.staff') }}" class="inline-block bg-blue-600 text-black px-4 py-2 rounded-md hover:bg-blue-700">
                                                    Hủy bỏ
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </tbody>
                    </table>

                    <!-- Hiển thị phân trang -->
                    <div class="mt-6">
                        {{ $staffs->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const modalToggles = document.querySelectorAll('[data-modal-toggle^="authentication-modal"]');
            
            modalToggles.forEach(toggle => {
                const modalId = toggle.getAttribute('data-modal-target');
                const modal = document.getElementById(modalId);
                const modalHideButton = modal.querySelector('[data-modal-hide]');

                // Hiển thị modal khi nhấn nút
                toggle.addEventListener("click", function () {
                    modal.classList.remove("hidden");
                });

                // Đóng modal khi nhấn nút đóng
                modalHideButton.addEventListener("click", function () {
                    modal.classList.add("hidden");
                });
            });
        });
    </script>
</x-app-layout>
