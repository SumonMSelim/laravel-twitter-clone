<form action="{{ route('settings.username') }}" method="post">
    @csrf

    <div class="px-3">

        <div class="mb-2">
            <label class="block font-bold mb-2 text-grey-darker text-sm" for="username">
                Username
                <input
                    class="appearance-none border focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full mt-2"
                    value="{{ $user->username }}"
                    name="username"
                    id="username"
                    type="text"
                    placeholder="Set an username"
                    required
                />
            </label>
        </div>

        <div class="mb-2">
            <button class="bg-blue-400 hover:bg-blue-600 px-4 py-2 rounded-full text-sm text-white">
                Update Username
            </button>
        </div>
    </div>
</form>
