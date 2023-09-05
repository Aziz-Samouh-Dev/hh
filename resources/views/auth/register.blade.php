@section('title', 'Register')

<x-guest-layout>
    <div class="max-w-md w-full space-y-8">
        <div class="text-center">
            <h2 class="mt-6 text-3xl font-bold text-gray-900">
                Welcome
            </h2>
            <p class="mt-2 text-sm text-gray-500">Please sign in to your account</p>
        </div>

        <ul class="grid w-full gap-6 md:grid-cols-2">
            <li>
                <a href="{{ route('register.seller') }}"
                    class="inline-flex items-center justify-start w-full p-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer hover:border-green-600">
                    <div class="grid gap-3 ">
                        <div class="grid w-full text-lg font-semibold">Seller</div>
                        <div class="w-full grid ">
                            <div class="flex items-center gap-1">
                                <i class="fa-solid fa-circle-check text-sm text-green-600 p-1"></i>
                                <p class="text-sm font-simple"> Lorem facere. </p>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('register.buyer') }}"
                    class="inline-flex items-center justify-start w-full p-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer hover:border-green-600">
                    <div class="grid gap-3 ">
                        <div class="grid w-full text-lg font-semibold">Buyer</div>
                        <div class="w-full grid ">
                            <div class="flex items-center gap-1">
                                <i class="fa-solid fa-circle-check text-sm text-green-600 p-1"></i>
                                <p class="text-sm font-simple"> Lorem facere. </p>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>

    </div>
</x-guest-layout>
