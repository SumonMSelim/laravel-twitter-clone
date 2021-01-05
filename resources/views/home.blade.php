@extends('layouts.master')

@section('main')
    <div class="border border-t-0 flex-1 h-auto">
        <!--middle wall-->
        <div class="bg-white sticky top-0">
            <div class="flex">
                <div class="flex-1 m-2">
                    <h2 class="font-semibold px-4 py-2 text-gray-900 text-xl">
                        Home
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
            <!--middle creat tweet-->
            <div class="flex">
                <div class="m-2 w-10 py-1">
                    <img
                        class="inline-block h-10 w-10 rounded-full"
                        src="https://pbs.twimg.com/profile_images/1132551469511598080/xc_Giiqo_400x400.jpg"
                        alt=""
                    />
                </div>
                <div class="flex-1 px-2 pt-2 mt-2">
                <textarea
                    class="bg-transparent focus:outline-none font-medium text-gray-400 text-lg w-full"
                    rows="2"
                    cols="50"
                    placeholder="What's happening?"
                ></textarea>
                </div>
            </div>
            <!--middle creat tweet below icons-->
            <div class="flex">
                <div class="w-10"></div>

                <div class="w-64 px-2">
                    <div class="flex items-center">
                        <div class="flex-1 text-center px-1 py-1 m-2">
                            <a
                                href="#"
                                class="flex font-medium group hover:bg-blue-100 items-center leading-6 mt-1 px-2 py-2 rounded-full text-base text-blue-400"
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
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                                    ></path>
                                </svg>
                            </a>
                        </div>

                        <div class="flex-1 text-center py-2 m-2">
                            <a
                                href="#"
                                class="flex font-medium group hover:bg-blue-100 items-center leading-6 mt-1 px-2 py-2 rounded-full text-base text-blue-400"
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
                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"
                                    ></path>
                                    <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="flex-1 text-center py-2 m-2">
                            <a
                                href="#"
                                class="flex font-medium group hover:bg-blue-100 items-center leading-6 mt-1 px-2 py-2 rounded-full text-base text-blue-400"
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
                                        d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                                    ></path>
                                </svg>
                            </a>
                        </div>

                        <div class="flex-1 text-center py-2 m-2">
                            <a
                                href="#"
                                class="flex font-medium group hover:bg-blue-100 items-center leading-6 mt-1 px-2 py-2 rounded-full text-base text-blue-400"
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
                                        d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex-1">
                    <button
                        class="bg-blue-400 mt-5 hover:bg-blue-600 text-white font-bold py-2 px-8 rounded-full mr-8 float-right"
                    >
                        Tweet
                    </button>
                </div>
            </div>

            <hr class="border-4"/>

            <div></div>

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
        </div>
    </div>
@stop
