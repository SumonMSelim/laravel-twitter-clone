@extends('layouts.auth')

@section('content')
    <div class="bg-white flex flex-col mb-4 pb-8 pt-6 px-8 rounded w-2/5">
        <div class="capitalize flex font-bold justify-center mb-5 text-2xl">
            <h1>Register</h1>
        </div>

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-2">
                <label
                    class="block font-bold mb-2 text-grey-darker text-sm"
                    for="first_name"
                >
                    <input
                        class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full"
                        id="first_name"
                        name="first_name"
                        type="text"
                        placeholder="First Name"
                    />
                </label>
            </div>

            <div class="mb-2">
                <label
                    class="block text-grey-darker text-sm font-bold mb-2"
                    for="last_name"
                >
                    <input
                        class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full"
                        id="last_name"
                        name="last_name"
                        type="text"
                        placeholder="Last Name"
                    />
                </label>
            </div>

            <div class="mb-2">
                <label
                    class="block text-grey-darker text-sm font-bold mb-2"
                    for="email"
                >
                    <input
                        class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full"
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Email"
                    />
                </label>
            </div>

            <div class="mb-2">
                <label
                    class="block text-grey-darker text-sm font-bold mb-2"
                    for="phone_number"
                >
                    <input
                        class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full"
                        id="phone_number"
                        name="phone_number"
                        type="text"
                        placeholder="Phone Number"
                    />
                </label>
            </div>

            <div class="mb-2">
                <label
                    class="block text-grey-darker text-sm font-bold mb-2"
                    for="password"
                >
                    <input
                        class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full"
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password"
                    />
                </label>
            </div>

            <div class="mb-2">
                <label
                    class="block text-grey-darker text-sm font-bold mb-2"
                    for="password_confirmation"
                >
                    <input
                        class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full"
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Confirm Password"
                    />
                </label>
            </div>

            <div class="items-center justify-between">
                <button
                    class="bg-blue bg-blue-300 font-bold hover:bg-blue-400 hover:bg-blue-dark mb-5 px-4 py-2 rounded-full text-white w-full"
                    type="submit"
                >
                    Register
                </button>
            </div>
        </form>
    </div>
@stop
