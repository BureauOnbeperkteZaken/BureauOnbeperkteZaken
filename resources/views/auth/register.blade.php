<x-page.fullwidth :cards="true">
    <div class="paragraph">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="post" action="{{route('paneladd_user')}}">

            @csrf
            <label for="name"><h4>Naam</h4></label>
            <input placeholder="Vul hier de naam in." dusk="name" id="name" class="block mt-1 w-full" type="text" name="name" required value="{{old('name')}}" />
            <label for="email"><h4>Email</h4></label>
            <input placeholder="Vul hier de email in." dusk="email" id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email')}}" required />
            <label for="password"><h4>Wachtwoord</h4></label>
            <input placeholder="Vul hier het wachtwoord in." dusk="password" id="password" class="block mt-1 w-full" type="password" name="password" value="{{old('password')}}" required />
            <br/>
            <button dusk='register' class="ml-4">
                {{ __('Log in') }}
            </button>
        </form>
    </div>
</x-page.fullwidth>
