@extends('layout')
@section('content')
    <div dir="rtl"
        class="mt-20 w-3/5 mx-auto h-[37rem] border border-solid rounded-lg border-grayBorder bg-white flex justify-center items-center overflow-hidden">
        <div class="w-3/5 h-full pt-10 pb-16 bg-primaryColor flex justify-center items-center">
            <div>
                <div class="mb-10 text-white">
                    <h1 class="text-2xl font-bold mb-2">مرحبا بك مجددا !</h1>
                    <p class="font-light text-xl">
                        ليس لديك حساب بعد؟

                        <a href="/register" class="underline decoration-solid">أنشئ حساب
                        </a>
                    </p>
                </div>
                <form method="POST" action="/users/authenticate">
                    @csrf
                    <div>
                        <label for="eamil " class="font-light text-md text-white">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email"
                            class="border border-solid rounded-lg py-2 px-2 w-full block mt-2 mb-1" />
                        @error('email')
                            <p class="text-red-500 text-xs mb-5">{{ $message }}</p>
                        @enderror
                        <label for="password" class="font-light text-md text-white">كلمة المرور</label>
                        <input type="password" id="password" name="password"
                            class="border border-solid rounded-lg py-2 px-2 w-full block mt-2 mb-5" />
                        {{-- @error('password')
                            <p class="text-red-500 text-xs mb-5"">الرجاء إدخال كلمة المرور!</p>
                        @enderror --}}

                    </div>
                    <div class="flex flex-col justify-center items-center mb-3">
                        <button type="submit" class="bg-blue-500 text-primaryColor rounded-lg py-2 w-full font-bold">
                            تسجيل الدخول
                        </button>
                        <p class="mt-3 text-white">أو</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <button
                            class="px-4 py-2 w-full bg-white border flex gap-2 border-slate-200 dark:border-slate-700 rounded-lg text-slate-700 dark:text-slate-200 hover:text-slate-900 dark:hover:text-slate-300 hover:shadow transition duration-150 justify-center items-center">
                            <img class="w-6 h-6" src="https://www.svgrepo.com/show/475656/google-color.svg" loading="lazy"
                                alt="google logo" />
                            <span class="font-light">Continue with Google</span>
                        </button>
                        <button
                            class="px-4 py-2 w-full bg-[#1675EC] flex gap-2 rounded-lg text-white dark:text-slate-200 hover:text-slate-200 dark:hover:text-slate-300 hover:shadow transition duration-150 justify-center items-center">
                            <img class="w-6 h-6" src="https://www.svgrepo.com/show/452196/facebook-1.svg" loading="lazy"
                                alt="google logo" />
                            <span class="font-light">Continue with Facebook</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-3/5 h-full pt-10 pb-16">
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-6xl font-bold text-primaryColor mb-5">فُرصة</h1>
                <img src="{{ asset('images/login.png') }}" class="w-[300px]" />
            </div>
        </div>
    </div>
@endsection
