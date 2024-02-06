@auth
    <nav class="flex justify-between items-center py-7 px-20 pl-10" dir="ltr">
        <div class="flex justify-between items-center gap-7">
            <div class="dropdown dropdown-hover">

                <img src="{{ asset('images/user.png') }}" class="w-12" tabindex="0" role="button" />
                <x-jobListing.dropDownCard />

            </div>
            <a href="#"><box-icon name="globe" color="#5d706d" size="md"></box-icon></a>
        </div>
        <ul class="flex justify-between items-center gap-20 text-lg text-grayText font-bold">
            <li>
                <div class="text-primaryColor hover:border-primaryColor hover:border-b-2 hover:pb-1 hover: duration-100">
                    <a href='/listings/aplly'>نشر وظيفة</a>
                </div>
            </li>
            <li>
                <a href="#"
                    class="text-primaryColor hover:border-primaryColor hover:border-b-2 hover:pb-1 hover: duration-100">شركات</a>
            </li>
            <li>
                <div class="text-primaryColor hover:border-primaryColor hover:border-b-2 hover:pb-1 hover: duration-100">
                    <a href="/listings">تصفح الوظائف</a>
                </div>
            </li>
        </ul>
        <a href="/">
            <h1 class="text-4xl font-bold text-primaryColor">فُرصة</h1>
        </a>
    </nav>
    {{-- //////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////// --}}

    {{-- //////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////// --}}
@else
    <nav class="flex justify-between items-center py-10 px-20">

        <div>
            <h1 class="text-6xl font-bold pr-12 text-primaryColor font-cairo">
                فُرصة
            </h1>
        </div>
        <div class="flex list-none font-cairo">
            <li class="pl-20">
                <a href="#hero"
                    class="text-primaryColor hover:border-primaryColor hover:border-b-2 hover:pb-1 hover: duration-100">الرئيسية</a>
            </li>
            <li class="pl-20">
                <a href="#contact-us"
                    class="text-primaryColor hover:border-primaryColor hover:border-b-2 hover:pb-1 hover: duration-100">تواصل
                    معنا</a>
            </li>
            <li class="">
                <a href="#about-us"
                    class="text-primaryColor hover:border-primaryColor hover:border-b-2 hover:pb-1 hover: duration-100">من
                    نحن</a>
            </li>
        </div>
        <div class="flex list-none justify-between items-center font-cairo">

            <a href="/register">


                <button
                    class="px-4 py-2 font-semibold rounded text-secondaryColor bg-primaryColor hover:bg-sky-950 hover: text-primarycolor">انشاء
                    حساب</button>
            </a>
            <a href="/login">
                <button
                    class="  px-4 py-2 mr-3 font-semibold border rounded-md hover:border-primaryColor hover: duration-500 bg-secondaryColor text-primaryColor">تسجيل
                    الدخول</button>
            </a>
        </div>
    </nav>
@endauth
