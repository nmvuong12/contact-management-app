<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Phần thông tin đơn vị (Bên trái) -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Quản lý đơn vị</h2>
                    <a href="{{route('admin.department')}}" 
                        class="mt-4 inline-block text-blue-500 hover:text-blue-700 font-medium">
                        <p><strong>Đi tới →</strong></p>
                    </a>                 
                </div>

                <!-- Phần danh sách cán bộ (Bên phải) -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Quản lý cán bộ</h2>
                    <a href="#" 
                        class="mt-4 inline-block text-blue-500 hover:text-blue-700 font-medium">
                        <p><strong>Đi tới →</strong></p>
                    </a>                 
                </div>
            </div>
            
        </div>
    </div>
</div>
</x-app-layout>
