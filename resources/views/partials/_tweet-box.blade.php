@auth()
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
@endauth
