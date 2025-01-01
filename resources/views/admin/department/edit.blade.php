<x-app-layout>
    <section class="bg-gray-50 py-8 px-4 sm:py-12 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6 sm:p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">{{ __('Cập nhật đơn vị') }}</h2>

            <form method="post" action="{{route('admin.department.update', $department->id)}}" class="space-y-6">
                @csrf
                @method('patch')
                <!-- tên -->
                <div>
                    <x-input-label for="name" :value="__('Tên đơn vị')" />
                    <x-text-input 
                        id="name" 
                        name="name" 
                        type="text" 
                        :value="old('name', $department->name)"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        required 
                        autofocus 
                        autocomplete="name" 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                <div>
                    <x-input-label for="code" :value="__('Mã đơn vị')" />
                    <x-text-input 
                        id="code" 
                        name="code" 
                        type="text" 
                        :value="old('code', $department->code)"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        required 
                        autofocus 
                        autocomplete="code" 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('code')" />
                </div>

                <!-- Số điện thoại -->
                <div>
                    <x-input-label for="phone" :value="__('Số điện thoại')" />
                    <x-text-input 
                        id="phone" 
                        name="phone" 
                        type="text" 
                        :value="old('phone', $department->phone)"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
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
                        :value="old('email', $department->email)"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        required 
                        autocomplete="email" 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
                <div>
                    <x-input-label for="website" :value="__('Website')" />
                    <x-text-input 
                        id="website" 
                        name="website" 
                        type="text" 
                        :value="old('website', $department->website)"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        required 
                        autocomplete="website" 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('website')" />
                </div>
                <div>
                    <x-input-label for="address" :value="__('Địa chỉ')" />
                    <x-text-input 
                        id="address" 
                        name="address" 
                        type="text"
                        :value="old('address', $department->address)" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        required 
                        autocomplete="address" 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('address')" />
                </div>

                <!-- Nút lưu -->
                <div class="flex items-center justify-between">
                        <a href="{{ route('admin.department') }}" class="inline-block bg-blue-600 text-black px-4 py-2 rounded-md hover:bg-blue-700">
                            <-- Về danh sách
                        </a>
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
