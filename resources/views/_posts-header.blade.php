<header class="max-w-xl mt-20 ml-auto text-right">
    <div>
            <h1 class="text-4xl">
                FAB.LAZ <span class="text-white bg-black font-bold  pl-6">BLOG</span>
            </h1>

            <h2 class="inline-flex mt-10">By Stefano Lazzari</h2>

            <p class="text-sm mt-14 text-justify">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet laboriosam reprehenderit quasi perspiciatis earum corporis, amet ad illum consequatur repudiandae facere rem velit qui aspernatur alias consectetur modi. Minus, deleniti!
            </p>


            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">


                <!--  Category -->
            <div class="relative lg:inline-flex  bg-gray-100">

            <x-dropdown>
                <x-slot name="trigger">
                        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-36 text-left flex lg:inline-flex">
                            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

                            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                                height="22" viewBox="0 0 22 22">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                                </g>
                            </svg>
                        </button>
                </x-slot>


                    <a href="/" 
                        class="block text-left px-3 text-sm leadind-6 hover:bg-green-900 focus:bg-green-900 hover:text-white focus:text-white"
                        >All
                    </a>

                    @foreach ($categories as $category)
                        <a href="/categories/{{ $category->slug }}" 
                        class="block text-left px-3 text-sm leadind-6 hover:bg-green-900 
                        focus:bg-green-900 hover:text-white focus:text-white
                        {{ isset($currentCategory) && $currentCategory->id == $category->id ? 'bg-yellow-200 text-black' : ''  }}
                        "
                        >{{ ucwords($category->name) }}
                        </a>
                    @endforeach
            </x-dropdown>

            </div>

                <!-- Other Filters -->
                <div class="relative flex lg:inline-flex items-center bg-gray-100">
                    <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                        <option value="category" disabled selected>Other Filters
                        </option>
                        <option value="foo">Foo
                        </option>
                        <option value="bar">Bar
                        </option>
                    </select>

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>

                <!-- Search -->
                <div class="relative flex lg:inline-flex items-center bg-gray-100  px-3 py-2">
                    <form method="GET" action="#">
                        <input type="text" name="search" placeholder="Find something"
                               class="bg-transparent placeholder-black font-semibold text-sm">
                    </form>
                </div>
            </div>
    </div>
            
        </header>
