<div id="contact-us" class=" h-full pt-12 w-full">
    <h1 class="font-cairo font-light text-4xl text-center text-primaryColor">
        تواصل معنا
    </h1>

    <div class="">





        <div class="flex justify-between w-full h-full">
            <form class="w-[700px]" action="/" method="post">


                <div class="flex items-start justify-between pr-32 pt-20">
                    <label class="font-cairo text-primaryColor text-xl" for="">
                        البريد الإلكتروني
                    </label>
                    <input type="text" class="input-field" />
                </div>
                <div class="flex items-start justify-between pr-32 pt-20">
                    <label class="font-cairo text-primaryColor text-xl" for="">
                        الأسم الكامل
                    </label>
                    <input type="text" class="input-field" />
                </div>
                <div class="flex items-start justify-between pr-32 pt-20">
                    <label class="font-cairo text-primaryColor text-xl" for="">
                        الرسالة
                    </label>
                    <textarea class="input-field textarea-message"></textarea>
                </div>


                <div class="flex justify-center items-center mt-5">
                    <button
                        class="px-4 py-2 font-semibold rounded bg-primaryColor hover:bg-primaryHover text-white border ">ارسال</button>

                </div>
            </form>

            <div class="ml-4">
                <img class="w-[500px]" src="{{ asset('images/bro4.jpg') }}" alt="">
            </div>
        </div>





    </div>
    <div>
        <h1 class="font-cairo font-bold text-3xl text-primaryColor text-center">
            او يمكنك التواصل معنا على:
        </h1>
    </div>
    <div class="flex text-center items-center justify-center pb-12">
        <div class="flex justify-center items-center gap-1">

            <a href="#">
                <img class="w-12 h-12" src="{{ asset('images/svgs/Facebook.svg') }}" alt="">
            </a>
            <a href="#">
                <img class="w-12 h-12" src="{{ asset('images/svgs/google.svg') }}" alt="">
            </a>
            <a href="#">
                <img class="w-12 h-12" src="{{ asset('images/svgs/Instagram.svg') }}" alt="">
            </a>
            <a href="#">
                <img class="w-12 h-12" src="{{ asset('images/svgs/Linkedin.svg') }}" alt="">
            </a>
            <a href="#">
                <img class="w-12 h-12" src="{{ asset('images/svgs/Twitter.svg') }}" alt="">
            </a>
            <a href="#">
                <img class="w-12 h-12" src="{{ asset('images/svgs/Youtube.svg') }}" alt="">
            </a>


        </div>
    </div>
</div>
