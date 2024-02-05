<nav class="flex justify-between items-center py-7 px-20 pl-10">
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
