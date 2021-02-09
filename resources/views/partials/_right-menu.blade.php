<div class="w-96">
    <div class="sticky top-0">
        <div class="h-screen overflow-y-scroll">
            <!--right menu-->
            <div class="flex justify-center">
                <div class="p-5 pb-0 relative w-full">
                    <button type="submit" class="absolute ml-4 mr-4 mt-3">
                        <svg
                            class="h-4 w-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            version="1.1"
                            id="Capa_1"
                            x="0px"
                            y="0px"
                            viewBox="0 0 56.966 56.966"
                            style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve"
                            width="512px"
                            height="512px"
                        >
                      <path
                          d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"
                      ></path>
                    </svg>
                    </button>

                    <input
                        type="search"
                        name="search"
                        placeholder="Search Twitter"
                        class="focus:outline-none focus:ring-1 focus:ring-blue-400 h-10 pr-5 px-10 rounded rounded-full shadow text-sm w-full"
                    />
                </div>
            </div>

            <div class="bg-gray-100 m-4 overflow-hidden rounded-lg shadow-lg">
                <div class="flex">
                    <div class="flex-1 m-2">
                        <h2
                            class="font-semibold px-4 py-2 text-gray-900 text-xl w-48"
                        >
                            Who to follow
                        </h2>
                    </div>
                </div>

                <hr class=""/>

                <!--first person who to follow-->

                <div class="flex flex-shrink-0">
                    <div class="flex-1 ">
                        <div class="flex items-center w-48">
                            <div>
                                <img
                                    class="inline-block h-10 w-auto rounded-full ml-4 mt-2"
                                    src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="ml-3 mt-3">
                                <p
                                    class="font-medium leading-6 text-base text-gray-900"
                                >
                                    Rafiqul Islam
                                </p>
                                <p
                                    class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150"
                                >
                                    @meXuvo
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 px-4 py-2 m-2">
                        <a href="" class=" float-right">
                            <button
                                class="bg-transparent border border-blue-400 font-semibold hover:bg-blue-100 hover:bg-opacity-40 px-4 py-2 rounded-full text-blue-400"
                            >
                                Follow
                            </button>
                        </a>
                    </div>
                </div>
                <hr class=""/>

                <!--second person who to follow-->

                <div class="flex flex-shrink-0">
                    <div class="flex-1 ">
                        <div class="flex items-center w-48">
                            <div>
                                <img
                                    class="inline-block h-10 w-auto rounded-full ml-4 mt-2"
                                    src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="ml-3 mt-3">
                                <p
                                    class="font-medium leading-6 text-base text-gray-900 text-white"
                                >
                                    Rafiqul Islam
                                </p>
                                <p
                                    class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150"
                                >
                                    @meXuvo
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 px-4 py-2 m-2">
                        <a href="" class=" float-right">
                            <button
                                class="bg-transparent border border-blue-400 font-semibold hover:bg-blue-100 hover:bg-opacity-40 px-4 py-2 rounded-full text-blue-400"
                            >
                                Follow
                            </button>
                        </a>
                    </div>
                </div>

                <hr class=""/>

                <!--show more-->

                <div class="flex">
                    <div class="flex-1 p-4">
                        <h2 class="px-4 ml-2 w-48 font-bold text-blue-400">
                            Show more
                        </h2>
                    </div>
                </div>
            </div>

            <div class="flow-root inline m-6">
                <div class="flex-2">
                    <p class="text-sm leading-6 font-medium text-gray-600">
                        © {{ date('Y') }} {{ config('app.name') }}
                    </p>


                    <a href="{{ route('locale', 'en') }}"
                       class="@if(app()->getLocale() === 'en')) text-grey-400 @else text-blue-400 @endif"
                    >English</a>
                    |
                    <a href="{{ route('locale', 'bn') }}"
                       class="@if(app()->getLocale() === 'bn')) text-grey-400 @else text-blue-400 @endif"
                    >বাংলা</a>
                </div>
            </div>
        </div>
        <div></div>
    </div>
</div>
