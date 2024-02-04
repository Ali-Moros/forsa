@props(['listing'])

{{-- <x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->compoany }}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card> --}}

<x-card>
    <div class="max-w-lg border border-solid rounded-lg border-grayBorder bg-cardFill py-5 px-3">
        <div dir="rtl" class="grid grid-cols-3 gap-x-6">
            <div class="flex flex-col justify-center items-center gap-2">
                <div class="text-grayText font-bold">{{ $listing->compoany }}</div>

                <img :src="'/src/assets/photos/companyLogo.png'" class="w-12 cursor-pointer" />
            </div>
            <p class="mt-7 text-xl font-bold">
                <a href="/listings/{{ $listing->id }}" class="mt-7 text-xl font-bold">{{ $listing->title }}</a>
            </p>
            <div class="flex flex-col justify-center items-center gap-5">
                <div class="flex gap-2">
                    <p class="text-sm">منذ يومين</p>
                    <box-icon class="cursor-pointer" name="bookmark" color="#0e2f56"></box-icon>
                </div>
                <div class="flex gap-3">
                    <p>{{ $listing->location }}</p>
                    <box-icon name="map" color="#0e2f56"></box-icon>
                </div>
            </div>
        </div>
        <div class="w-11/12 border-b border-grayBorder mx-auto mt-5"></div>
        <div class="mt-4 flex flex-col justify-center">
            <p dir="rtl" class="text-right pr-4 pl-2 pb-5">
                نحتاج أفرادا ذو خبرة ورؤية فنية في تصميم الجرافيك, والإستعداد للعمل مع
                فريق, يفضل أن يكون ماهرا في إستخدام برنامج Adobe illustrator, Adobe
                Photoshop, Figma...
            </p>

            <a class="self-center" href="/listings/{{ $listing->id }}"><button
                    class="text-grayText border border-solid border-grayBorder rounded-full px-10 py-1 bg-white hover:bg-btnHoverFill hover:border-borderHover transition duration-300 ">التفاصيل</button></a>


        </div>
    </div>
</x-card>
