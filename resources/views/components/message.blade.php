@if (session()->has('message'))
    <div x-data='{show:true}' x-init= 'setTimeout(() => show = false, 3000)' class=" transition duration-300">
        <div x-show='show' role="alert"
            class="alert alert-success flex justify-center  items-center w-1/2 	fixed right-[25%] top-20  z-10 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>


            <span class='font-bold '> {{ session('message') }}</span>

        </div>

    </div>
@endif






{{-- 
@if (session()->has('message'))
    <div x-data='{show:true}' x-init= 'setTimeout(() => show = false, 3000)' x-show='show' role="alert"
        class="alert alert-success flex justify-center  items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>

        <span class='font-bold'> {{ session('message') }}</span>
    </div>
@endif
 --}}
