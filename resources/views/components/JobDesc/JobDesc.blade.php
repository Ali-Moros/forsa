@props(['listing'])



<div class="h-16 flex justify-evenly items-center bg-primaryColor">
    <h2 class="font-semiBold text-lg tracking-wider text-white">
        إكتشف عالم الفرص
    </h2>

</div>
<div class="p-10">
    <div class="border border-solid rounded-lg border-grayBorder pt-10 pb-16">
        <div class="flex flex-col justify-center items-center gap-3  ">
            <button class="  left-16 top-5 flex justify-center items-center gap-2">
                <p class="text-lg">حفظ</p>
                <box-icon class="cursor-pointer" name="bookmark" color="#0e2f56" size="md"></box-icon>
            </button>

            <p class="   font-bold">
                تاريخ النشر: <span class="font-semibold">2024/2/2</span>
            </p>
            <img src={{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/forsa.png') }}
                class="w-12" />
            <p class="font-bold text-lg">مجال</p>
            <div class="relative">
                <input dir="rtl" type="tel" name="phone" placeholder="09XXXXXXX"
                    class="h-16 w-[600px] border border-solid rounded-lg border-sky-600 pr-3" />
                <button type="submit"
                    class="text-sky-600 font-bold px-4 py-2 text-sm border border-solid rounded-lg border-sky-600">
                    إتصل بنا
                </button>
            </div>
        </div>
        <div dir="rtl" class="pr-20 pl-40 mt-10">
            <p class="font-bold mt-2">
                المسمى الوظيفي:<span class="font-medium">{{ $listing->title }}</span>
            </p>
            <p class="font-bold">الشركة: <span class="font-medium">{{ $listing->company }}</span></p>
            <p class="font-bold">
                الموقع: <span class="font-medium">{{ $listing->location }}</span>
            </p>
            <p class="font-bold">
                نوع الوظيفة: <span class="font-medium">دوام كامل</span>
            </p>
            <p class="font-bold pl-40">
                وصف الوظيفة:
                <span class="font-medium">
                    <br />{{ $listing->description }}</span>
            </p>
        </div>
        <div class="flex justify-center items-center mt-20">
            <div
                class="font-bold bg-primaryColor text-white hover:bg-primaryHover transition duration-300 px-10 py-3 rounded-lg">
                <a href="#">قدم الآن</a>
            </div>
        </div>

        {{-- <form method="POST" action="/listings/{{ $listing->id }}">
            @csrf
            @method('DELETE')
            <div class="flex justify-center items-center mt-3">
                <div
                    class="font-bold bg-primaryColor text-white hover:bg-primaryHover transition duration-300 px-5 py-3 rounded-lg">
                    <button type ="submit">حذف</button>
                </div>
            </div>
        </form> --}}
    </div>
</div>
</div>
</div>
