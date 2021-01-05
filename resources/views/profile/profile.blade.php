@extends('layouts.master')

@section('main')
    <div class="border border-t-0 flex-1 h-auto">
        <!--middle wall-->
        <div class="bg-white sticky top-0">
            <div class="flex">
                <div class="flex-1 m-2">
                    <h2 class="font-semibold px-4 py-2 text-gray-900 text-xl">
                        Rafiqul Islam Suvo
                    </h2>
                </div>
                <div class="flex-1 px-4 py-2">
                    <a
                        href=""
                        class="float-right font-medium hover:bg-blue-800 hover:text-blue-300 rounded-full text-2xl text-gray-900"
                    >
                        <svg
                            class="m-2 h-6 w-6"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <g>
                                <path
                                    d="M22.772 10.506l-5.618-2.192-2.16-6.5c-.102-.307-.39-.514-.712-.514s-.61.207-.712.513l-2.16 6.5-5.62 2.192c-.287.112-.477.39-.477.7s.19.585.478.698l5.62 2.192 2.16 6.5c.102.306.39.513.712.513s.61-.207.712-.513l2.16-6.5 5.62-2.192c.287-.112.477-.39.477-.7s-.19-.585-.478-.697zm-6.49 2.32c-.208.08-.37.25-.44.46l-1.56 4.695-1.56-4.693c-.07-.21-.23-.38-.438-.462l-4.155-1.62 4.154-1.622c.208-.08.37-.25.44-.462l1.56-4.693 1.56 4.694c.07.212.23.382.438.463l4.155 1.62-4.155 1.622zM6.663 3.812h-1.88V2.05c0-.414-.337-.75-.75-.75s-.75.336-.75.75v1.762H1.5c-.414 0-.75.336-.75.75s.336.75.75.75h1.782v1.762c0 .414.336.75.75.75s.75-.336.75-.75V5.312h1.88c.415 0 .75-.336.75-.75s-.335-.75-.75-.75zm2.535 15.622h-1.1v-1.016c0-.414-.335-.75-.75-.75s-.75.336-.75.75v1.016H5.57c-.414 0-.75.336-.75.75s.336.75.75.75H6.6v1.016c0 .414.335.75.75.75s.75-.336.75-.75v-1.016h1.098c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"
                                ></path>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <hr class=""/>
        </div>
        <div>
            <!-- profile-intro -->
            <!-- cover-img -->
            <div>
                <img
                    src="https://pbs.twimg.com/profile_banners/1132551096520413185/1558858695/600x200"
                    alt=""
                    class="h-48 w-full"
                />
            </div>
            <div class="flex items-center justify-between">
                <div class="-mt-16 flex ml-3">
                    <!-- profile-img -->
                    <img
                        src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                        alt=""
                        class="border-4 border-white h-32 rounded-full w-32"
                    />
                </div>
                <div
                    x-data="{ 'isDialogOpen': false }"
                    @keydown.escape="isDialogOpen = false"
                >
                    <a href="#" class="mr-2">
                        <button
                            @click="isDialogOpen = true"
                            class="bg-transparent border border-blue-400 capitalize focus:outline-none font-semibold hover:bg-blue-100 hover:bg-opacity-40 px-4 py-2 rounded-full text-blue-400"
                        >
                            edit profile
                        </button>
                    </a>
                    <!-- overlay -->
                    <div
                        class="overflow-auto"
                        style="background-color: rgba(0, 0, 0, 0.5); display: none;"
                        x-show="isDialogOpen"
                        :class="{ 'absolute inset-0 z-10 flex items-center justify-center': isDialogOpen }"
                    >
                        <!-- dialog -->
                        <div
                            class="bg-white m-4 shadow-2xl sm:m-8 w-2/4"
                            x-show="isDialogOpen"
                            @click.away="isDialogOpen = false"
                            @scroll.window="isDialogOpen = false"
                            style="display: none;"
                        >
                            <div class="border-b flex items-center p-2 text-xl">
                                <button
                                    type="button"
                                    @click="isDialogOpen = false"
                                    class="hover:bg-blue-300 hover:bg-opacity-20 text-blue-500 rounded-full text-2xl focus:outline-none"
                                >
                                    <svg
                                        class="m-2 h-6 w-6"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"
                                        ></path>
                                    </svg>
                                </button>
                                <div class="ml-16 mr-96">
                                    <h2 class="font-bold">Edit Profile</h2>
                                </div>
                                <div class="">
                                    <button
                                        class="bg-blue-400 hover:bg-blue-600 px-4 py-2 rounded-full text-sm text-white"
                                    >
                                        save
                                    </button>
                                </div>
                            </div>
                            <div class="h-96 overflow-y-scroll">
                                <div>
                                    <div>
                                        <label class="custom-file-upload cursor-pointer">
                                            <input type="file"/>
                                            <img
                                                src="https://pbs.twimg.com/profile_banners/1132551096520413185/1558858695/600x200"
                                                alt=""
                                                class="h-48 w-full"
                                            />
                                        </label>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="-mt-16 flex ml-3">
                                            <!-- profile-img -->
                                            <label class="custom-file-upload cursor-pointer">
                                                <input type="file"/>
                                                <img
                                                    src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                                                    alt=""
                                                    class="border-4 border-white h-32 rounded-full w-32"
                                                />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <form action="#">
                                            <div class="px-3">
                                                <div class="mb-2">
                                                    <label
                                                        class="block font-bold mb-2 text-grey-darker text-sm"
                                                        for="username"
                                                    >Name
                                                        <input
                                                            class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full mt-2"
                                                            value="Rafiqul islam suvo"
                                                            id="username"
                                                            type="text"
                                                            placeholder="Name"
                                                        />
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <label
                                                        class="block font-bold mb-2 text-grey-darker text-sm"
                                                        for="username"
                                                    >Bio
                                                        <input
                                                            class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full mt-2"
                                                            value="Frontend developer"
                                                            id="username"
                                                            type="text"
                                                            placeholder="Bio"
                                                        />
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <label
                                                        class="block font-bold mb-2 text-grey-darker text-sm"
                                                        for="username"
                                                    >Location
                                                        <input
                                                            class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full mt-2"
                                                            value="Kawla,Dhaka,Bangladesh"
                                                            id="username"
                                                            type="text"
                                                            placeholder="Location"
                                                        />
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <label
                                                        class="block font-bold mb-2 text-grey-darker text-sm"
                                                        for="username"
                                                    >Birthday
                                                        <input
                                                            class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full mt-2"
                                                            value="1996/02/07"
                                                            id="username"
                                                            type="date"
                                                        />
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /dialog -->
                    </div>
                    <!-- /overlay -->
                </div>
            </div>
            <div class="ml-3.5">
                <div class="capitalize font-extrabold text-gray-900 text-lg">
                    <h1>rafiqul islam suvo</h1>
                </div>
                <div class="text-gray-600 tracking-wide"><p>@meXuvo</p></div>
            </div>
            <div class="mt-2 mx-3 text-gray-800 text-sm">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
                    nulla unde, velit voluptatem iusto qui! Lorem ipsum dolor sit
                    amet.
                </p>
            </div>
            <div class="mt-5">
              <span class="text-gray-500"
              ><svg
                      viewBox="0 0 24 24"
                      class="h-auto inline-block mx-2 w-5"
                      fill="currentColor"
                      stroke=""
                  >
                  <g>
                    <path
                        d="M12 14.315c-2.088 0-3.787-1.698-3.787-3.786S9.913 6.74 12 6.74s3.787 1.7 3.787 3.787-1.7 3.785-3.787 3.785zm0-6.073c-1.26 0-2.287 1.026-2.287 2.287S10.74 12.814 12 12.814s2.287-1.025 2.287-2.286S13.26 8.24 12 8.24z"
                    ></path>
                    <path
                        d="M20.692 10.69C20.692 5.9 16.792 2 12 2s-8.692 3.9-8.692 8.69c0 1.902.603 3.708 1.743 5.223l.003-.002.007.015c1.628 2.07 6.278 5.757 6.475 5.912.138.11.302.163.465.163.163 0 .327-.053.465-.162.197-.155 4.847-3.84 6.475-5.912l.007-.014.002.002c1.14-1.516 1.742-3.32 1.742-5.223zM12 20.29c-1.224-.99-4.52-3.715-5.756-5.285-.94-1.25-1.436-2.742-1.436-4.312C4.808 6.727 8.035 3.5 12 3.5s7.192 3.226 7.192 7.19c0 1.57-.497 3.062-1.436 4.313-1.236 1.57-4.532 4.294-5.756 5.285z"
                    ></path>
                  </g></svg
                  ><span class="font-medium text-gray-500 text-sm"
                  ><span class="">Dhaka,Bangladesh</span></span
                  ></span
              >

                <span class="text-gray-500"
                ><svg
                        viewBox="0 0 24 24"
                        class="h-auto inline-block mx-2 w-5"
                        fill="currentColor"
                        stroke=""
                    >
                  <g>
                    <path
                        d="M7.75 11.083c-.414 0-.75-.336-.75-.75C7 7.393 9.243 5 12 5c.414 0 .75.336.75.75s-.336.75-.75.75c-1.93 0-3.5 1.72-3.5 3.833 0 .414-.336.75-.75.75z"
                    ></path>
                    <path
                        d="M20.75 10.333c0-5.01-3.925-9.083-8.75-9.083s-8.75 4.074-8.75 9.083c0 4.605 3.32 8.412 7.605 8.997l-1.7 1.83c-.137.145-.173.357-.093.54.08.182.26.3.46.3h4.957c.198 0 .378-.118.457-.3.08-.183.044-.395-.092-.54l-1.7-1.83c4.285-.585 7.605-4.392 7.605-8.997zM12 17.917c-3.998 0-7.25-3.402-7.25-7.584S8.002 2.75 12 2.75s7.25 3.4 7.25 7.583-3.252 7.584-7.25 7.584z"
                    ></path>
                  </g></svg
                    ><span class="font-medium text-gray-500 text-sm"
                    ><span class="">Born 7 Feb, 1996</span></span
                    ></span
                >
                <span class="text-gray-500"
                ><svg
                        viewBox="0 0 24 24"
                        class="h-auto inline-block mx-2 w-5"
                        fill="currentColor"
                        stroke=""
                    >
                  <g>
                    <path
                        d="M19.708 2H4.292C3.028 2 2 3.028 2 4.292v15.416C2 20.972 3.028 22 4.292 22h15.416C20.972 22 22 20.972 22 19.708V4.292C22 3.028 20.972 2 19.708 2zm.792 17.708c0 .437-.355.792-.792.792H4.292c-.437 0-.792-.355-.792-.792V6.418c0-.437.354-.79.79-.792h15.42c.436 0 .79.355.79.79V19.71z"
                    ></path>
                    <circle cx="7.032" cy="8.75" r="1.285"></circle>
                    <circle cx="7.032" cy="13.156" r="1.285"></circle>
                    <circle cx="16.968" cy="8.75" r="1.285"></circle>
                    <circle cx="16.968" cy="13.156" r="1.285"></circle>
                    <circle cx="12" cy="8.75" r="1.285"></circle>
                    <circle cx="12" cy="13.156" r="1.285"></circle>
                    <circle cx="7.032" cy="17.486" r="1.285"></circle>
                    <circle cx="12" cy="17.486" r="1.285"></circle>
                  </g>
                </svg>
                <span class="font-medium text-gray-500 text-sm"
                ><span class="">Joined May 2019</span></span
                >
              </span>
            </div>
            <!-- followers -->
            <div class="mt-1">
              <span class="text-gray-900 ml-3">
                200
                <span class="capitalize font-medium text-gray-500 text-sm"
                ><span class="">followes</span></span
                >
              </span>
                <span class="text-gray-900 ml-3">
                150
                <span class="capitalize font-medium text-gray-500 text-sm"
                ><span class="">following</span></span
                >
              </span>
            </div>
            <!-- profile-intro end -->
            <!-- timeline-tabs -->
            <div>
                <div>
                    <ul
                        class="border-b capitalize flex font-bold text-gray-600 tracking-wide"
                    >
                        <li
                            class="border-b-2 border-blue-400 px-5 py-3 text-blue-400"
                        >
                            <a href="#" class="">tweets</a>
                        </li>
                        <li
                            class="border-b-2 border-transparent hover:border-blue-400 hover:text-blue-400 px-5 py-3"
                        >
                            <a href="#">tweets &amp; replies</a>
                        </li>
                        <li
                            class="border-b-2 border-transparent hover:border-blue-400 hover:text-blue-400 px-5 py-3"
                        >
                            <a href="#">media</a>
                        </li>
                        <li
                            class="border-b-2 border-transparent hover:border-blue-400 hover:text-blue-400 pb-5 pt-3 px-5 py-3"
                        >
                            <a href="#">like</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--first tweet start-->
            <div class="hover:bg-gray-100">
                <div class="flex flex-shrink-0 p-4 pb-0">
                    <a href="#" class="flex-shrink-0 group block">
                        <div class="flex items-center">
                            <div>
                                <img
                                    class="inline-block h-10 w-10 rounded-full"
                                    src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="ml-3">
                                <p class="font-medium leading-6 text-base text-gray-900">
                                    Rafiqul Islam
                                    <span
                                        class="duration-150 ease-in-out font-medium leading-5 text-gray-500 text-sm transition"
                                    >
                          @meXuvo . 16 April
                        </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="pl-16">
                    <p
                        class="flex-shrink font-medium text-base text-gray-900 width-auto"
                    >
                        Day 07 of the challenge
                        <span class="text-blue-400">#100DaysOfCode</span> I was
                        wondering what I can do with
                        <span class="text-blue-400">#tailwindcss</span>, so just
                        started building Twitter UI using Tailwind and so far it looks
                        so promising. I will post my code after completion. [07/100]
                        <span class="text-blue-400"> #WomenWhoCode #CodeNewbie</span>
                    </p>

                    <div class="flex">
                        <div class="w-full">
                            <div class="flex items-center">
                                <div class="flex-1 text-center">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-6 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class=""/>
            </div>

            <!--second tweet-->

            <div class="hover:bg-gray-100">
                <div class="flex flex-shrink-0 p-4 pb-0">
                    <a href="#" class="flex-shrink-0 group block">
                        <div class="flex items-center">
                            <div>
                                <img
                                    class="inline-block h-10 w-10 rounded-full"
                                    src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="ml-3">
                                <p class="font-medium leading-6 text-base text-gray-900">
                                    Rafiqul Islam
                                    <span
                                        class="duration-150 ease-in-out font-medium leading-5 text-gray-500 text-sm transition"
                                    >
                          @meXuvo . 16 April
                        </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="pl-16">
                    <p
                        class="flex-shrink font-medium text-base text-gray-900 width-auto"
                    >
                        Day 07 of the challenge
                        <span class="text-blue-400">#100DaysOfCode</span> I was
                        wondering what I can do with
                        <span class="text-blue-400">#tailwindcss</span>, so just
                        started building Twitter UI using Tailwind and so far it looks
                        so promising. I will post my code after completion. [07/100]
                        <span class="text-blue-400"> #WomenWhoCode #CodeNewbie</span>
                    </p>

                    <div class="flex">
                        <div class="w-full">
                            <div class="flex items-center">
                                <div class="flex-1 text-center">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-6 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class=""/>
            </div>

            <!--third tweet-->

            <div class="hover:bg-gray-100">
                <div class="flex flex-shrink-0 p-4 pb-0">
                    <a href="#" class="flex-shrink-0 group block">
                        <div class="flex items-center">
                            <div>
                                <img
                                    class="inline-block h-10 w-10 rounded-full"
                                    src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="ml-3">
                                <p class="font-medium leading-6 text-base text-gray-900">
                                    Rafiqul Islam
                                    <span
                                        class="duration-150 ease-in-out font-medium leading-5 text-gray-500 text-sm transition"
                                    >
                          @meXuvo . 16 April
                        </span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="pl-16">
                    <p
                        class="flex-shrink font-medium text-base text-gray-900 width-auto"
                    >
                        Day 07 of the challenge
                        <span class="text-blue-400">#100DaysOfCode</span> I was
                        wondering what I can do with
                        <span class="text-blue-400">#tailwindcss</span>, so just
                        started building Twitter UI using Tailwind and so far it looks
                        so promising. I will post my code after completion. [07/100]
                        <span class="text-blue-400"> #WomenWhoCode #CodeNewbie</span>
                    </p>

                    <div class="flex">
                        <div class="w-full">
                            <div class="flex items-center">
                                <div class="flex-1 text-center">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-6 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex-1 text-center py-2 m-2">
                                    <a
                                        href="#"
                                        class="flex font-medium group hover:bg-blue-100 hover:text-blue-400 items-center leading-6 mt-1 px-3 py-2 rounded-full text-base text-gray-500 w-12"
                                    >
                                        <svg
                                            class="text-center h-7 w-6"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class=""/>
            </div>
            <!--who to follow-->
            <!-- row-1 -->
            <div class="border-t-8">
                <div>
                    <h1
                        class="border-b capitalize font-bold pl-3 py-2 text-gray-900 text-xl"
                    >
                        who to follow
                    </h1>
                </div>
                <div class="hover:bg-gray-100">
                    <div class="flex p-4 pb-0">
                        <a href="#" class="block flex-shrink-0 group">
                            <div class="flex">
                                <div>
                                    <img
                                        class="inline-block h-10 w-10 rounded-full"
                                        src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                                        alt=""
                                    />
                                </div>
                                <div class="flex items-center ml-3 mr-60">
                                    <p
                                        class="font-medium leading-6 text-base text-gray-900"
                                    >
                                        Rafiqul Islam
                                        <span
                                            class="duration-150 ease-in-out font-medium leading-5 text-gray-500 text-sm transition"
                                        >
                            @meXuvo . 16 April
                          </span>
                                    </p>
                                </div>

                                <button
                                    class="bg-transparent border border-blue-400 font-semibold hover:bg-blue-100 hover:bg-opacity-40 px-4 py-2 rounded-full text-blue-400"
                                >
                                    Follow
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="pl-16">
                        <p
                            class="flex-shrink font-medium text-base text-gray-900 width-auto"
                        >
                            Day 07 of the challenge
                            <span class="text-blue-400">#100DaysOfCode</span> I was
                            wondering what I can do with
                            <span class="text-blue-400">#tailwindcss</span>, so just
                            started building Twitter UI using Tailwind and so far it
                            looks so promising. I will post my code after completion.
                            [07/100]
                            <span class="text-blue-400">
                      #WomenWhoCode #CodeNewbie</span
                            >
                        </p>
                    </div>
                    <hr class=""/>
                </div>
            </div>
            <!-- row-2 -->
            <div>
                <div class="hover:bg-gray-100">
                    <div class="flex p-4 pb-0">
                        <a href="#" class="block flex-shrink-0 group">
                            <div class="flex">
                                <div>
                                    <img
                                        class="inline-block h-10 w-10 rounded-full"
                                        src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                                        alt=""
                                    />
                                </div>
                                <div class="flex items-center ml-3 mr-60">
                                    <p
                                        class="font-medium leading-6 text-base text-gray-900"
                                    >
                                        Rafiqul Islam
                                        <span
                                            class="duration-150 ease-in-out font-medium leading-5 text-gray-500 text-sm transition"
                                        >
                            @meXuvo . 16 April
                          </span>
                                    </p>
                                </div>

                                <button
                                    class="bg-transparent border border-blue-400 font-semibold hover:bg-blue-100 hover:bg-opacity-40 px-4 py-2 rounded-full text-blue-400"
                                >
                                    Follow
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="pl-16">
                        <p
                            class="flex-shrink font-medium text-base text-gray-900 width-auto"
                        >
                            Day 07 of the challenge
                            <span class="text-blue-400">#100DaysOfCode</span> I was
                            wondering what I can do with
                            <span class="text-blue-400">#tailwindcss</span>, so just
                            started building Twitter UI using Tailwind and so far it
                            looks so promising. I will post my code after completion.
                            [07/100]
                            <span class="text-blue-400">
                      #WomenWhoCode #CodeNewbie</span
                            >
                        </p>
                    </div>
                    <hr class=""/>
                </div>
            </div>
            <!-- row-3 -->
            <div>
                <div class="hover:bg-gray-100">
                    <div class="flex p-4 pb-0">
                        <a href="#" class="block flex-shrink-0 group">
                            <div class="flex">
                                <div>
                                    <img
                                        class="inline-block h-10 w-10 rounded-full"
                                        src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                                        alt=""
                                    />
                                </div>
                                <div class="flex items-center ml-3 mr-60">
                                    <p
                                        class="font-medium leading-6 text-base text-gray-900"
                                    >
                                        Rafiqul Islam
                                        <span
                                            class="duration-150 ease-in-out font-medium leading-5 text-gray-500 text-sm transition"
                                        >
                            @meXuvo . 16 April
                          </span>
                                    </p>
                                </div>

                                <button
                                    class="bg-transparent border border-blue-400 font-semibold hover:bg-blue-100 hover:bg-opacity-40 px-4 py-2 rounded-full text-blue-400"
                                >
                                    Follow
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="pl-16">
                        <p
                            class="flex-shrink font-medium text-base text-gray-900 width-auto"
                        >
                            Day 07 of the challenge
                            <span class="text-blue-400">#100DaysOfCode</span> I was
                            wondering what I can do with
                            <span class="text-blue-400">#tailwindcss</span>, so just
                            started building Twitter UI using Tailwind and so far it
                            looks so promising. I will post my code after completion.
                            [07/100]
                            <span class="text-blue-400">
                      #WomenWhoCode #CodeNewbie</span
                            >
                        </p>
                    </div>
                    <hr class=""/>
                </div>
            </div>
            <!-- row-4 -->
            <div>
                <div class="hover:bg-gray-100">
                    <div class="flex p-4 pb-0">
                        <a href="#" class="block flex-shrink-0 group">
                            <div class="flex">
                                <div>
                                    <img
                                        class="inline-block h-10 w-10 rounded-full"
                                        src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                                        alt=""
                                    />
                                </div>
                                <div class="flex items-center ml-3 mr-60">
                                    <p
                                        class="font-medium leading-6 text-base text-gray-900"
                                    >
                                        Rafiqul Islam
                                        <span
                                            class="duration-150 ease-in-out font-medium leading-5 text-gray-500 text-sm transition"
                                        >
                            @meXuvo . 16 April
                          </span>
                                    </p>
                                </div>

                                <button
                                    class="bg-transparent border border-blue-400 font-semibold hover:bg-blue-100 hover:bg-opacity-40 px-4 py-2 rounded-full text-blue-400"
                                >
                                    Follow
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="pl-16">
                        <p
                            class="flex-shrink font-medium text-base text-gray-900 width-auto"
                        >
                            Day 07 of the challenge
                            <span class="text-blue-400">#100DaysOfCode</span> I was
                            wondering what I can do with
                            <span class="text-blue-400">#tailwindcss</span>, so just
                            started building Twitter UI using Tailwind and so far it
                            looks so promising. I will post my code after completion.
                            [07/100]
                            <span class="text-blue-400">
                      #WomenWhoCode #CodeNewbie</span
                            >
                        </p>
                    </div>
                    <hr class=""/>
                </div>
            </div>
            <!--who to follow end-->
        </div>
    </div>
@stop
