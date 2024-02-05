<div class="h-16 flex justify-evenly items-center bg-primaryColor">
    <h2 class="font-semiBold text-lg tracking-wider text-white">
        إكتشف عالم الفرص
    </h2>

</div>
<div class="p-10">
    <div class="border border-solid rounded-lg border-grayBorder pt-10 pb-16">
        <div class="flex flex-col justify-center items-center gap-3  ">



            <img src="{{ asset('images/user.png') }}" class="w-12" />
            <p class="font-bold text-lg">{{ auth()->user()->name }}</p>

        </div>
        <div dir="rtl" class="pr-20 pl-40 mt-10">
            <p class="font-bold mt-2">
                اسم المستخدم<span class="font-medium">{{ auth()->user()->name }}</span>
            </p>

            <p class="font-bold">
                البريد الألكتروني: <span class="font-medium">{{ auth()->user()->email }}</span>
            </p>
            <p class="font-bold">
                رقم الهاتف<span class="font-medium">0927932467</span>
            </p>
            <p class="font-bold pl-40">
                العنوان
                <span class="font-medium">
                    <br />{{ auth()->user()->location }}</span>
            </p>
        </div>
        <div class="flex justify-center items-center mt-20">
            <div
                class="font-bold bg-primaryColor text-white hover:bg-primaryHover transition duration-300 px-10 py-3 rounded-lg">
                <a href="#">تعديل</a>
            </div>
        </div>


    </div>
</div>
</div>
</div>
