{{-- <x-layout>
    @include('partials._search')
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class='p-10'>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="{{ asset('images/no-image.png') }}" alt="" />

                <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
                <div class="text-xl font-bold mb-4">{{ $listing->compoany }}</div>
                <x-listing-tags :tagsCsv="$listing->tags" />
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        {{ $listing->description }}

                        <a href="mailto:{{ $listing->email }}"
                            class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a href="{{ $listing->website }}" target="_blank"
                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-globe"></i> Visit
                            Website</a>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>
 --}}


<x-layout>
    {{-- @include('partials._search') --}}
    <div class="h-16 flex justify-evenly items-center bg-primaryColor">
        <h2 class="font-semiBold text-lg tracking-wider text-white">
            إكتشف عالم الفرص
        </h2>
        <div class="w-7/12 rounded border-0 p-3 relative"></div>
    </div>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> رجوع
    </a>
    <div class="mx-4">
        <x-card class='p-10'>
            <div class="p-10">
                <div class="w-full h-full border border-solid rounded-lg border-grayBorder pt-10 pb-16">
                    <div class="flex flex-col justify-center items-center gap-3 relative">
                        <button class="absolute left-16 top-5 flex justify-center items-center gap-2">
                            <p class="text-lg">حفظ</p>
                            <box-icon class="cursor-pointer" name="bookmark" color="#0e2f56" size="md"></box-icon>
                        </button>

                        <p class="absolute right-16 top-5 font-bold">
                            تاريخ النشر: <span class="font-semibold">2024/2/2</span>
                        </p>
                        <img :src="'/src/assets/photos/companyLogo.png'" class="w-12" />
                        <p class="font-bold text-lg">مجال</p>
                        <div class="relative">
                            <input dir="rtl" type="tel" name="phone" placeholder="09XXXXXXX"
                                class="h-16 w-[600px] border border-solid rounded-lg border-sky-600 pr-3" />
                            <button type="submit"
                                class="text-sky-600 font-bold px-4 py-2 text-sm absolute left-5 top-[23%] border border-solid rounded-lg border-sky-600">
                                إتصل بنا
                            </button>
                        </div>
                    </div>
                    <div dir="rtl" class="flex flex-col gap-10 pr-20 pl-40 mt-10">
                        <p class="font-bold">
                            المسمى الوظيفي:<span class="font-semibold">{{ $listing->title }}</span>
                        </p>
                        <p class="font-bold">الشركة: <span class="font-semibold">مجال</span></p>
                        <p class="font-bold">
                            الموقع: <span class="font-semibold">{{ $listing->location }}</span>
                        </p>
                        <p class="font-bold">
                            نوع الوظيفة: <span class="font-semibold">دوام كامل</span>
                        </p>
                        <p class="font-bold pl-40">
                            وصف الوظيفة:
                            <span class="font-semibold">
                                <br />{{ $listing->description }}</span>
                        </p>
                    </div>
                    <div class="flex justify-center items-center mt-20">
                        <div
                            class="font-bold bg-primaryColor text-white hover:bg-primaryHover transition duration-300 px-10 py-3 rounded-lg">
                            <router-link to="/jobs/job/apply">قدم الآن</router-link>

                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>
