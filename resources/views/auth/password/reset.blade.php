@extends('layouts.auth')

@section('content')
    <div class="bg-white flex flex-col mb-4 pb-8 pt-6 px-8 rounded w-2/5">
        <div class="capitalize flex font-bold justify-center mb-5 text-2xl">
            <h1>{{ __('twitter.reset_password') }}</h1>
        </div>

        @include('partials._notification')

        <form action="{{ route('password.update') }}" method="post">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-2">
                <label
                    class="block font-bold mb-2 text-grey-darker text-sm"
                    for="email"
                >
                    <input
                        class="appearance-none border focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full"
                        id="email"
                        name="email"
                        type="email"
                        value="{{ $email ?? old('email') }}"
                        required
                        readonly
                    />
                </label>
            </div>

            <div class="mb-2">
                <label
                    class="block font-bold mb-2 text-grey-darker text-sm"
                    for="password"
                >
                    <input
                        class="appearance-none border focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full"
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password"
                        required
                    />
                </label>
            </div>

            <div class="mb-2">
                <label
                    class="block font-bold mb-2 text-grey-darker text-sm"
                    for="password-confirm"
                >
                    <input
                        class="appearance-none border focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full"
                        id="password-confirm"
                        name="password_confirmation"
                        type="password"
                        placeholder="Confirm Password"
                        required
                    />
                </label>
            </div>

            <div class="items-center justify-between">
                <button
                    class="capitalize bg-blue bg-blue-300 font-bold hover:bg-blue-400 hover:bg-blue-dark mb-5 px-4 py-2 rounded-full text-white w-full"
                    type="submit">
                    {{ __('twitter.reset_password') }}
                </button>
            </div>
        </form>
    </div>
@stop
