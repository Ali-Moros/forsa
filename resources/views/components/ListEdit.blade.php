@props(['listing'])


<div dir="rtl" class=" pr-20 w-full h-full border border-solid rounded-lg border-grayBorder pt-10 pb-16 ">
    <div>
        <div class="">
            <div class="flex justify-center items-center">
                <h1 class="text-3xl font-bold">تعديل وظيفة</h1>
            </div>
            <div class="pr-11 mt-10">
                <form action="/listings/{{ $listing->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col gap-4">


                        <div>
                            <label for="title" class="block font-bold  text-lg mb-2">تعديل العنوان:
                            </label>

                            <input type="text" id="title" name="title" value="{{ $listing->title }}"
                                class="bg-gray-200 focus:bg-white  border-2 border-solid rounded-lg  border-grayBorder py-1
                                     px-2 w-[300px] "
                                maxlength="25" />
                            @error('title')
                                <p class="text-red-500 text-xs mt-1">هذا الحقل مطلوب!</p>
                            @enderror
                        </div>
                        <div>
                            <label for="company" class="block font-bold text-lg mb-2" maxlength="30">تعديل إسم المؤسسة:
                            </label>

                            <input type="text" id="company" name="company" value="{{ $listing->company }}"
                                class=" bg-gray-200 focus:bg-white border-2 border-solid rounded-lg border-grayBorder py-1 px-2 w-[300px] " />
                            @error('company')
                                <p class="text-red-500 text-xs mt-1">هذا الحقل مطلوب!</p>
                            @enderror
                        </div>








                        <div>
                            <label for="description" class="block font-bold text-lg mb-2 ">تعديل الوصف:
                            </label>

                            <textarea id="description" name="description"
                                class="bg-gray-200 focus:bg-white border-2 border-solid rounded-lg border-grayBorder py-1 px-2 w-[500px] h-[100px]"
                                maxlength="400">{{ $listing->description }}</textarea>



                            @error('description')
                                <p class="text-red-500 text-xs mt-1">هذا الحقل مطلوب!</p>
                            @enderror
                        </div>

                        <div>

                            <label for="tags" class="block font-bold text-lg">تعديل الكلمات المفتاحية:
                            </label>

                            <input type="text" id="tags" name="tags" value="{{ old('title') }}"
                                class="bg-gray-200 focus:bg-white border-2 border-solid rounded-lg border-grayBorder py-1 px-2 w-[500px] mb-3" />
                        </div>
                        <div>
                            <label for="location" class="block font-bold text-lg mb-2 mt-6">الموقع:
                            </label>




                            <select id="location" name="location" value="{{ $listing->location }}"
                                class="border-2 border-solid rounded-lg border-grayBorder px-2">
                                <option name="benghazi" value="Benghazi">بنغازي</option>
                                <option name="tripoli" value="Tripoli">طرابلس</option>
                                <option name="misrata" value="Misrata">مصراتة</option>
                                <option name="newYork" value="New York">نيويورك</option>
                                <option name="paris" value="Paris">باريس</option>
                                <option name="tokyo" value="Tokyo">طوكيو</option>
                                <option name="naples" value="Naples">نابولي</option>
                                <option name="Lagos" value="Lagos">لاغوس</option>
                                <option name="Nairopy" value="Nairoby">نيروبي</option>
                                <option name="Sydny" value="Sydny">سيدني</option>
                            </select>
                        </div>
                        <div class="flex gap-32">
                            <div>
                                <label for="job-type" class="block font-bold text-lg mb-2 mt-6">نوع الوظيفة:
                                </label>

                                <select id="job-type" name="shift" value="{{ $listing->shift }}"
                                    class="border-2 border-solid rounded-lg border-grayBorder px-2">
                                    <option name="full-time" value="full-time">دوام كامل</option>
                                    <option name="part-time" value="part-time">دوام جزئي</option>
                                </select>
                            </div>
                            <div class="flex justify-center items-center gap-10">
                                <div>
                                    <h1 class="block font-bold text-lg mb-2 mt-6">نوع العمل:</h1>
                                    <div>
                                        <input class="accent-primaryColor cursor-pointer" type="checkbox" id="reguler"
                                            name="type" value="reguler" />
                                        <label for="reguler">نظامية</label>
                                    </div>
                                    <div class="mt-1">
                                        <input class="accent-primaryColor cursor-pointer" type="checkbox" id="remote"
                                            name="remote" value="remote" />
                                        <label for="remote">عن بعد</label>
                                    </div>
                                </div>
                                <div>
                                    <h1 class="block font-bold text-lg mb-2 mt-6">الفترة:</h1>
                                    <div>
                                        <input class="accent-primaryColor cursor-pointer" type="checkbox" id="morning"
                                            name="morning" value="morning" />
                                        <label for="morning">صباحية</label>
                                    </div>
                                    <div class="mt-1">
                                        <input class="accent-primaryColor cursor-pointer" type="checkbox"
                                            id="night" name="night" value="night" />
                                        <label for="night">مسائية</label>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div>
                                    <img src={{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/forsa.png') }}
                                        class="w-24" alt="company-logo" />
                                </div>
                                <label for=logo>تغيير شعار المؤسسة </label>
                                <input type="file" id='logo' name='logo'
                                    class="file-input w-full max-w-xs border border-solid rounded-lg border-grayBorder" />
                                @error('logo')
                                    <p class="text-red-500 text-xs mt-1">هذا الحقل مطلوب!</p>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="w-full flex justify-center items-center mt-10">
                        <button type="submit"
                            class="font-bold bg-primaryColor text-white hover:bg-primaryHover transition duration-300 px-20 py-3 rounded-lg">
                            حفظ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
