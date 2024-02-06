@props(['listing'])

<div class="max-w-xl  max-h-80 border border-solid rounded-lg border-grayBorder bg-cardFill py-5 px-3 relative ">
    <div dir="rtl" class="grid grid-cols-3 gap-x-6">
        <div class="flex flex-col justify-center items-center gap-2">
            <p class="text-grayText font-bold">{{ $listing->company }}</p>

            <img src={{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/forsa.png') }}
                class="w-12 cursor-pointer" />
        </div>
        <p class="mt-7 text-xl font-bold">{{ $listing->title }}</p>
        <div class="flex flex-col justify-center items-center gap-5">
            <div class="flex gap-2">
                <p class="text-sm">{{ date('d-m-Y', strtotime($listing->created_at)) }}</p>
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
        <p dir="rtl" class="text-right pr-4 pl-2 pb-5 mb-8">
            {{ $listing->description }}
        </p>
        <a href="/listings/{{ $listing->id }}"
            class="text-grayText border border-solid border-grayBorder
            rounded-full px-10 py-1 bg-white hover:bg-btnHoverFill hover:border-borderHover transition duration-300
            self-center absolute bottom-5">
            <p>التفاصيل</p>

        </a>
    </div>
</div>
