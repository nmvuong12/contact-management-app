<x-app-layout>
    <section class="bg-gray-50 py-8 px-4 sm:py-12 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6 sm:p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">{{ __('Thêm đơn vị') }}</h2>

            <form method="post" action="{{route('admin.staff.update', $staff->id)}}" class="space-y-6">
                @csrf
                @method('patch')
                <!-- tên -->
                <div>
                    <x-input-label for="name" :value="__('Họ và tên')" />
                    <x-text-input 
                        id="name" 
                        name="name" 
                        type="text" 
                        :value="old('name', $staff->name)" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        required 
                        autofocus 
                        autocomplete="name" 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                <div>
                    <x-input-label for="title" :value="__('Chức danh')" />
                    <x-text-input 
                        id="title" 
                        name="title" 
                        type="text" 
                        :value="old('title', $staff->title)" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        required 
                        autofocus 
                        autocomplete="title" 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                </div>
                <div>
                    <x-input-label for="academic_rank" :value="__('Học hàm')" />
                    <x-text-input 
                        id="academic_rank" 
                        name="academic_rank" 
                        type="text" 
                        :value="old('academic_rank', $staff->academic_rank)" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        required 
                        autofocus 
                        autocomplete="academic_rank" 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('academic_rank')" />
                </div>
                <div>
                    <x-input-label for="degree" :value="__('Học vị')" />
                    <x-text-input 
                        id="degree" 
                        name="degree" 
                        type="text" 
                        :value="old('degree', $staff->degree)" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        required 
                        autofocus 
                        autocomplete="degree" 
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
                        :value="old('phone', $staff->phone)" 
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
                        :value="old('email', $staff->email)" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        required 
                        autocomplete="email" 
                    />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
                <!-- Đơn vị công tác -->
                <div>
                    <x-input-label for="department_id" :value="__('Đơn vị công tác')" />
                    <select 
                        id="department_id" 
                        name="department_id" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                        required
                    >
                        <option value="{{ $staff->department_id }}">
                            {{ $staff->department->name }} ({{ $staff->department->code }})
                        </option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">
                                {{ $department->name }} ({{ $department->code }})
                            </option>
                        @endforeach
                    </select>
                    <x-input-error class="mt-2" :messages="$errors->get('department_id')" />
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
