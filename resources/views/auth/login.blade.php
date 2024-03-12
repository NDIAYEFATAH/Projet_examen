{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}

{{--</x-guest-layout>--}}

<style>
    @import url("https://fonts.googleapis.com/css2?family=Muli&display=swap");

    :root {
        --highlight-color: lightblue;
    }

    * {
        box-sizing: border-box;
    }

    body {
        align-items: center;
        background-color: steelblue;
        color: #fff;
        display: flex;
        flex-direction: column;
        font-family: "Muli", sans-serif;
        height: 100vh;
        justify-content: center;
        margin: 0;
        overflow: hidden;
    }

    .container {
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 5px;
        padding: 20px 40px;
    }

    .container h1 {
        margin-bottom: 30px;
        text-align: center;
    }

    .container a {
        color: var(--highlight-color);
        text-decoration: none;
    }

    .btn {
        background-color: var(--highlight-color);
        border: 0;
        border-radius: 5px;
        cursor: pointer;
        display: inline-block;
        font: inherit;
        font-size: 1.2rem;
        padding: 15px;
        width: 100%;
    }

    .btn:focus {
        outline: 0;
    }

    .btn:active {
        transform: scale(0.98);
    }

    .text {
        margin-top: 30px;
    }

    .form-control {
        margin: 20px 0 40px;
        position: relative;
        width: 300px;
    }

    .form-control input {
        background-color: transparent;
        border: 0;
        border-bottom: 2px #fff solid;
        color: #fff;
        display: block;
        font-size: 1.2rem;
        padding: 15px 0;
        width: 100%;
    }

    .form-control input::placeholder {
        color: transparent;
    }

    .form-control input:focus,
    .form-control input:valid {
        border-bottom-color: var(--highlight-color);
        outline: 0;
    }

    .form-control label {
        left: 0;
        position: absolute;
        top: 15px;
    }

    .form-control label span {
        display: inline-block;
        font-size: 1.2rem;
        min-width: 5px;
        transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .form-control input:focus + label span,
    .form-control input:valid + label span {
        color: var(--highlight-color);
        transform: translateY(-30px);
    }

</style>
<div class="container">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h1>T-BANK</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-control">
            <input type="email" name="email" required placeholder="email" id="email" value="{{ old('email') }}" />
            <label for="email">Email</label>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-control">
            <input type="password" name="password" required placeholder="password" id="password" />
            <label for="password">Password</label>
            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button class="btn" type="submit">Login</button>
        <p class="text">
            Don't have an account
            <a href="#">Register</a>
        </p>
    </form>
</div>

<script>
    const labels = document.querySelectorAll(".form-control label");
    const delayUnit = 50;

    labels.forEach((label) => {
        label.innerHTML = label.innerText
            .split("")
            .map(
                (char, idx) =>
                    `<span style="transition-delay: ${idx * delayUnit}ms">${char}</span>`
            )
            .join("");
    });

</script>

