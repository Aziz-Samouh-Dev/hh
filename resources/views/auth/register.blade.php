@section('title', 'Register')

<x-guest-layout>
    <div class="max-w-md w-full space-y-8">
        <div class="text-center">
            <h2 class="mt-6 text-3xl font-bold text-gray-900">
                Welcome
            </h2>
            <p class="mt-2 text-sm text-gray-500">Please sign in to your account</p>
        </div>
        <form class="space-y-6" method="POST" action="{{ route('register') }}">
            @csrf

            <ul class="grid w-full gap-6 md:grid-cols-2">
                <li>
                    <input type="radio" id="seller" name="type" value="seller" class="hidden peer" required>
                    <label for="seller"
                    class="inline-flex items-center justify-center w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 hover:text-green-600">
                    <div class="block">
                        <div class="w-full text-lg font-semibold">Seller</div>
                    </div>
                </label>
                </li>
                <li>
                    <input type="radio" id="buyer" name="type" value="buyer" class="hidden peer" required>
                    <label for="buyer"
                        class="inline-flex items-center justify-center w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-600 peer-checked:text-green-600 hover:text-green-600">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Buyer</div>
                        </div>
                    </label>
                </li>
            </ul>

{{-- 
            <!-- Name -->
            <div class="content-center">
                <label for="name" :value="__('Name')"
                    class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Name</label>
                <input
                    class="w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                    id="name" type="text" name="name" :value="old('name')" required autofocus
                    autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="content-center">
                <label for="email" :value="__('Email')"
                    class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Email</label>
                <input
                    class="w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                    id="email" type="email" name="email" :value="old('email')" required
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="content-center">
                <label for="password" :value="__('Password')"
                    class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Password</label>
                <input
                    class="w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                    type="password" name="password" id="password" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="content-center">
                <label for="password_confirmation" :value="__('Confirm Password')"
                    class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Confirm Password</label>
                <input
                    class="w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                    type="password" name="password_confirmation" id="password_confirmation" required
                    autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>



            <div>
                <button type="submit"
                    class="w-full flex justify-center bg-green-700 hover:bg-green-600 text-gray-100 p-4 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer">
                    {{ __('Register') }}
                </button>
            </div>
            <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                <a class="text-indigo-400 hover:text-blue-500 no-underline hover:underline cursor-pointer transition ease-in duration-300"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </p> --}}
        </form>

    </div>
</x-guest-layout>
