{{-- <form action="/">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="Search Laravel Gigs..." />
        <div class="absolute top-2 right-2">
            <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
                Search
            </button>
        </div>
    </div>
</form> --}}

<div class=" h-32 flex justify-evenly  items-center bg-primaryColor">
    <h2 class="font-semiBold text-lg tracking-wider text-white">إكتشف عالم الفرص</h2>
    <div class="w-7/12 rounded border-0 p-3 relative">
        <form action="/listings">
            <input dir="rtl" type="search" name="search" class=" w-full	py-2.5 pr-4 rounded-full "
                placeholder="إبحث عن الوظيفة" />
            <button type="submit"
                class=" bg-primaryColor text-white px-4 py-1 rounded-full text-sm absolute left-5 top-5 hover:bg-primaryHover transition duration-300 ">إبحث</button>
        </form>
    </div>

</div>
