<div dir="rtl" class=" pr-20 w-full h-full border border-solid rounded-lg border-grayBorder pt-10 pb-16 ">
    <div>
        <div class="">
            <div class="flex justify-center items-center">
                <h1 class="text-3xl font-bold">نشر وظيفة</h1>
            </div>
            <div class="pr-11 mt-10">
                <form action="/listings" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="title" class="block font-bold text-lg mb-2">العنوان
                        </label>

                        <input type="text" id="title" name="title" value="{{ old('title') }}"
                            class="border-2 border-solid rounded-lg border-grayBorder py-1 px-2 w-[500px] mb-3" />
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">هذا الحقل مطلوب!</p>
                        @enderror


                        <label for="company" class="block font-bold text-lg">إسم المؤسسة
                        </label>

                        <input type="text" id="company" name="company" value="{{ old('company') }}"
                            class="border-2 border-solid rounded-lg border-grayBorder py-1 px-2 w-[500px] mb-3" />
                        @error('company')
                            <p class="text-red-500 text-xs mt-1">هذا الحقل مطلوب!</p>
                        @enderror


                        <label for="tags" class="block font-bold text-lg">كلمات مفتاحية
                        </label>

                        <input type="text" id="tags" name="tags" value="{{ old('title') }}"
                            class="border-2 border-solid rounded-lg border-grayBorder py-1 px-2 w-[500px] mb-3" />



                        <label for="description" class="block font-bold text-lg mb-2 mt-6">الوصف
                        </label>

                        <textarea id="description" name="description" value="{{ old('title') }}"
                            class="border-2 border-solid rounded-lg border-grayBorder py-1 px-2 w-[500px]">
          </textarea>

                        @error('description')
                            <p class="text-red-500 text-xs mt-1">هذا الحقل مطلوب!</p>
                        @enderror
                        <label for="location" class="block font-bold text-lg mb-2 mt-6">الموقع
                        </label>

                        <select id="location" name="location"
                            class="border-2 border-solid rounded-lg border-grayBorder px-2">
                            <option name="benghazi" value="benghazi">بنغازي</option>
                            <option name="tripoli" value="tripoli">طرابلس</option>
                            <option name="misrata" value="misrata">مصراتة</option>
                            <option name="sabha" value="sabha">سبها</option>
                        </select>

                        <div class="flex gap-32">
                            <div>
                                <label for="job-type" class="block font-bold text-lg mb-2 mt-6">نوع الوظيفة
                                </label>

                                <select id="job-type" name="shift"
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
                                        <input class="accent-primaryColor cursor-pointer" type="checkbox" id="night"
                                            name="night" value="night" />
                                        <label for="night">مسائية</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for=logo class="mb-4">قم برفع شعار المؤسسة </label>
                                <input type="file" id='logo' name='logo'
                                    class="file-input w-full max-w-xs" />
                                @error('logo')
                                    <p class="text-red-500 text-xs mt-1">هذا الحقل مطلوب!</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <input class="accent-primaryColor cursor-pointer" type="checkbox" id="terms"
                            name="terms" value="terms" />
                        <label for="terms">قد قرأت ووافقت على سياسة الخصوصية وشروط الخدمة.</label>
                    </div>

                    <div class="w-full flex justify-center items-center mt-5">
                        <button type="submit"
                            class="font-bold bg-primaryColor text-white hover:bg-primaryHover transition duration-300 px-20 py-3 rounded-lg">
                            نشر
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
