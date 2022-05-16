<x-page.fullwidth :cards="true">
    <div class="paragraph">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="post" action="{{route('login')}}">

            @csrf
            <label for="email"><h4>Email</h4></label>
            <input placeholder="Vul hier de email in." dusk="email" id="email" class="block mt-1 w-full" type="email" name="email" value="old('email')" required />
            <label for="password"><h4>Wachtwoord</h4></label>
            <input placeholder="Vul hier het wachtwoord in." dusk="password" id="password" class="block mt-1 w-full" type="password" name="password" required /><br/>
            <button dusk='login' class="ml-4">
                {{ __('Log in') }}
            </button>
        </form>
    </div>
</x-page.fullwidth>
