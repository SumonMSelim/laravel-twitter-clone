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
                        <form action="" method="post">
                            @csrf

                            <div class="px-3">

                                <div class="mb-2">
                                    <label class="block font-bold mb-2 text-grey-darker text-sm" for="first_name">
                                        First name
                                        <input
                                            class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full mt-2"
                                            value="{{ $user->first_name }}"
                                            name="first_name"
                                            id="first_name"
                                            type="text"
                                            placeholder="First Name"
                                            required
                                        />
                                    </label>
                                </div>

                                <div class="mb-2">
                                    <label class="block font-bold mb-2 text-grey-darker text-sm" for="last_name">
                                        Last name
                                        <input
                                            class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full mt-2"
                                            value="{{ $user->last_name }}"
                                            name="last_name"
                                            id="last_name"
                                            type="text"
                                            placeholder="First Name"
                                            required
                                        />
                                    </label>
                                </div>

                                <div class="mb-2">
                                    <label class="block font-bold mb-2 text-grey-darker text-sm" for="bio">
                                        Bio
                                        <input
                                            class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full mt-2"
                                            value="{{ $user->bio }}"
                                            name="bio"
                                            id="bio"
                                            type="text"
                                            placeholder="Bio"
                                            required
                                        />
                                    </label>
                                </div>

                                <div class="mb-2">
                                    <label class="block font-bold mb-2 text-grey-darker text-sm" for="location">
                                        Location
                                        <input
                                            class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full mt-2"
                                            value="{{ $user->location }}"
                                            name="location"
                                            id="location"
                                            type="text"
                                            placeholder="Location"
                                            required
                                        />
                                    </label>
                                </div>

                                <div class="mb-2">
                                    <label class="block font-bold mb-2 text-grey-darker text-sm" for="birthday">
                                        Date of Birth
                                        <input
                                            class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full mt-2"
                                            value="{{ $user->date_of_birth->format('Y-m-d') }}"
                                            name="date_of_birth"
                                            id="date_of_birth"
                                            type="date"
                                            placeholder="Date of Birth"
                                            required
                                        />
                                    </label>
                                </div>

                                <div class="mb-2">
                                    <button class="bg-blue-400 hover:bg-blue-600 px-4 py-2 rounded-full text-sm text-white">
                                        Save
                                    </button>
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
