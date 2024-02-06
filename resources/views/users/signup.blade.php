@extends('layout')
@section('content')
    <div dir="rtl"
        class="mt-3 w-3/5 mx-auto h-[40rem] border border-solid rounded-lg border-grayBorder bg-white flex justify-center items-center overflow-hidden">
        <div class="w-3/5 h-full pt-10 pb-16">
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-6xl font-bold text-primaryColor mb-5">فُرصة</h1>
                <img src="{{ asset('images/signup.png') }}" class="w-[300px]" />
            </div>
        </div>
        <div class="w-3/5 h-full pt-10 pb-16 px-20 bg-primaryColor flex justify-center items-center relative">

            <a href='/' class="absolute top-5 left-5 flex items-center gap-1">
                <p class="text-white mb-1">رجوع</p>
                <box-icon color='#fff' name='arrow-back'></box-icon>
            </a>
            <div>

                <div class="mb-10 text-white">
                    <h1 class="text-2xl font-bold mb-2">مرحبا بك !</h1>
                    <p class="font-light text-xl">
                        لديك حساب بالفعل ؟
                        <!-- <a href="/" class="underline decoration-solid"> سجل الدخول </a> -->
                        <a href="/login" class="underline decoration-solid">سجل الدخول
                        </a>
                    </p>
                </div>
                <form method="POST" action="/users">
                    @csrf
                    <div>
                        <label for="username " class="font-light text-md text-white">إسم المستخدم</label>
                        <input type="text" id="username" name="name"
                            class="border border-solid rounded-lg py-1 px-2 w-full block mt-2 " />
                        @error('name')
                            <p class="text-red-500 text-xs mb-5">الرجاء إدخال إسم المستخدم!</p>
                        @enderror
                        <label for="eamil " class="font-light text-md text-white">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email"
                            class="border border-solid rounded-lg py-1 px-2 w-full block mt-2" />

                        @error('email')
                            <p class="text-red-500 text-xs mb-5">الرجاء إدخال البريد الإلكتروني!</p>
                        @enderror
                        <label for="password" class="font-light text-md text-white">كلمة المرور</label>
                        <input type="password" id="password" name="password" autocomplete="new-password"
                            class="border border-solid rounded-lg py-1 px-2 w-full block mt-2 " />
                        @error('password')
                            <p class="text-red-500 text-xs mb-5"">الرجاء إدخال كلمة المرور!</p>
                        @enderror

                        <label for="password2-con" class="font-light text-md text-white">التأكيد على كلمة المرور</label>
                        <input type="password" id="password-con" name="password_confirmation"
                            class="border border-solid rounded-lg py-1 px-2 w-full block mt-2 " />
                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mb-5">كلمة المرور غير متطابقة!</p>
                        @enderror
                    </div>

                    <div class="mt-5">
                        <input class="cursor-pointer ml-3" type="checkbox" id="terms" name="terms" value="terms" />
                        <label for="terms" class="text-white">قد قرأت ووافقت على سياسة الخصوصية وشروط الخدمة.</label>

                        @error('password')
                            <p class="text-red-500 text-xs mt-1">الرجاءالموافقة للإكمال التسجيل !</p>
                        @enderror
                    </div>
                    <div class="flex flex-col justify-center items-center mb-3 mt-6">
                        <a href="/signup">
                            <button class="bg-blue-500 text-primaryColor rounded-lg py-2 w-full font-bold">
                        </a>
                        أنشئ حساب
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
