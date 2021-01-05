@extends('layouts.auth')

@section('content')
    <div class="bg-white flex flex-col mb-4 pb-8 pt-6 px-8 rounded w-2/5">
        <div class="capitalize flex font-bold justify-center mb-5 text-2xl">
            <h1>Register</h1>
        </div>

        <div class="mb-2">
            <label
                class="block font-bold mb-2 text-grey-darker text-sm"
                for="username"
            >
                <input
                    class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full"
                    id="username"
                    type="text"
                    placeholder="First Name"
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
                    id="lastName"
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
                    type="email"
                    placeholder="Email"
                />
            </label>
        </div>
        <div class="mb-2">
            <label
                class="block text-grey-darker text-sm font-bold mb-2"
                for="phone"
            >
                <input
                    class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full"
                    id="phone"
                    type="number"
                    placeholder="phone"
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
                    type="password"
                    placeholder="password"
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
                    type="password"
                    placeholder="confirm password"
                />
            </label>
        </div>
        <div class="items-center justify-between">
            <button
                class="bg-blue bg-blue-300 font-bold hover:bg-blue-400 hover:bg-blue-dark mb-5 px-4 py-2 rounded-full text-white w-full"
                type="button"
            >
                Sign up
            </button>
        </div>
    </div>
@stop
