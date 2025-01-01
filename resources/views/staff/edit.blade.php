<x-app-layout>
    <section class="bg-gray-50 py-8 px-4 sm:py-12 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6 sm:p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">{{ __('Cập nhật thông tin cá nhân') }}</h2>

            <form method="post" action="{{ route('staff.update', $staff->id) }}" class="space-y-6">
                @csrf
                @method('patch')

                <!-- Họ và tên -->
                <div>
                    <x-input-label for="name" :value="__('Họ và tên')" />
                    <x-text-input 
                        id="name" 
                        name="name" 
                        type="text" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        :value="old('name', $staff->name)" 
                        required 
                        autofocus 
                        autocomplete="name" 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <!-- Chức danh -->
                <div>
                    <x-input-label for="title" :value="__('Chức danh')" />
                    <x-text-input 
                        id="title" 
                        name="title" 
                        type="text" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        :value="old('title', $staff->title)" 
                        required 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                </div>

                <!-- Học hàm -->
                <div>
                    <x-input-label for="academic_rank" :value="__('Học hàm')" />
                    <x-text-input 
                        id="academic_rank" 
                        name="academic_rank" 
                        type="text" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        :value="old('academic_rank', $staff->academic_rank)" 
                        required 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('academic_rank')" />
                </div>

                <!-- Học vị -->
                <div>
                    <x-input-label for="degree" :value="__('Học vị')" />
                    <x-text-input 
                        id="degree" 
                        name="degree" 
                        type="text" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        :value="old('degree', $staff->degree)" 
                        required 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('degree')" />
                </div>

                <!-- Số điện thoại -->
                <div>
                    <x-input-label for="phone" :value="__('Số điện thoại')" />
                    <x-text-input 
                        id="phone" 
                        name="phone" 
                        type="text" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        :value="old('phone', $staff->phone)" 
                        required 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                </div>

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input 
                        id="email" 
                        name="email" 
                        type="email" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        :value="old('email', $staff->email)" 
                        required 
                        autocomplete="username" 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <!-- Nút lưu -->
                <div class="flex items-center justify-between">
                    <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500">
                        {{ __('Lưu thay đổi') }}
                    </x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 3000)"
                            class="text-sm text-green-600"
                        >
                            {{ __('Đã lưu.') }}
                        </p>
                    @endif
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
