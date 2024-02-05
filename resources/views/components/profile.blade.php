<div class="h-16 flex justify-evenly items-center bg-primaryColor">
    <h2 class="font-semiBold text-lg tracking-wider text-white">
        إكتشف عالم الفرص
    </h2>

</div>
<div class="p-10">
    <div class="border border-solid rounded-lg border-grayBorder pt-10 pb-16">

        <div dir="rtl" class="pr-20 pl-40 mt-10 flex flex-col justify-center items-center">
            <div class="flex flex-col justify-center">



                <img src="{{ asset('images/user.png') }}" class="w-24		" />


            </div>
            <div class="flex flex-col justify-center items-start gap-6 divide-y">
                <p class="font-bold mt-2">
                    اسم المستخدم: <span class="font-medium text-lg">{{ auth()->user()->name }}</span>
                </p>

                <p class="font-bold">
                    البريد الألكتروني: <span class="font-medium text-lg"> {{ auth()->user()->email }}</span>
                </p>
                <p class="font-bold">
                    رقم الهاتف: <span class="font-medium text-lg ">0927932467</span>
                </p>
                <p class="font-bold">
                    العنوان:
                    <span class="font-medium">
                        <br />{{ auth()->user()->location }}</span>
                </p>
            </div>
        </div>



    </div>
</div>
</div>
</div>
