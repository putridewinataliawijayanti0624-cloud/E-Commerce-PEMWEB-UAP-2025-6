<x-guest-layout>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-orange-500 to-orange-800 px-4 py-10">

    <div class="bg-white/90 backdrop-blur-md shadow-2xl rounded-2xl p-8 w-full max-w-md border border-white/40">

        <!-- Logo -->
        <div class="flex justify-center mb-8">
            <img src="/images/urbanshoes.png" class="w-28 drop-shadow-md" alt="">
        </div>

        <h2 class="text-3xl font-extrabold text-center text-gray-800 tracking-wide mb-8">
            Daftar Akun Baru
        </h2>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" value="Nama" />
                <x-text-input id="name" type="text" name="name"
                    class="w-full mt-1 rounded-xl bg-gray-100 border-0 focus:ring-orange-500"
                    :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div>
                <x-input-label for="email" value="Email" />
                <x-text-input id="email" type="email" name="email"
                    class="w-full mt-1 rounded-xl bg-gray-100 border-0 focus:ring-orange-500"
                    :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" value="Password" />
                <x-text-input id="password" type="password" name="password"
                    class="w-full mt-1 rounded-xl bg-gray-100 border-0 focus:ring-orange-500"
                    required autocomplete="new-password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm -->
            <div>
                <x-input-label for="password_confirmation" value="Konfirmasi Password" />
                <x-text-input id="password_confirmation" type="password" name="password_confirmation"
                    class="w-full mt-1 rounded-xl bg-gray-100 border-0 focus:ring-orange-500"
                    required autocomplete="new-password"/>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <button class="w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white font-bold py-3 rounded-xl
                hover:from-orange-600 hover:to-orange-700 transition duration-300 shadow-md hover:shadow-lg">
                Register
            </button>
        </form>

        <p class="text-center text-gray-700 text-sm mt-8">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="font-semibold text-orange-600 hover:underline">
                Login di sini
            </a>
        </p>

    </div>
</div>

</x-guest-layout>
