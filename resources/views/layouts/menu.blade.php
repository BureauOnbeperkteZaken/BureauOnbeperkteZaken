<a href="#main" class="hidden-until-focus">{{ __('accessibility.skip_to_content') }}</a>
<input type="checkbox" id="nav-enable" />
<label for="nav-enable"></label>
<nav>
    {{-- Comments are necessary in order to keep the elements together, html likes being quirky 🤪 --}}
    <a href="{{ url('/') }}" class="current">Home</a><!--
 --><a href="{{ url('/projecten') }}">Projecten</a><!--
 --><a href="{{ url('/over-ons') }}">Over Ons</a><!--
 --><a href="{{ url('/achtergronden') }}">Achtergronden</a><!--
 --><a href="{{ url('/jarenplan') }}">Meerjarenplan</a><!--
 --><a href="{{ url('/samenwerkingen') }}">Samenwerkingen</a><!--
 --><a href="{{ url('/contact') }}">Contact</a>
</nav>
