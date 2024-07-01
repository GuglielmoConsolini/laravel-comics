<header>

    <div class="logo-box">
        <img id="logo-img" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" />
        <span id="logo-text">Laravel Comics</span>
        <span>Attualmente sei in: {{ Route::currentRouteName() }}</span>
    </div>

    <nav>
        <a href="{{ route("home") }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">HOME</a>
        <a href="{{ route("about") }}"class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">ABOUT</a>
        <a href="{{ route("fumetti") }}"class="{{ Route::currentRouteName() == 'fumetti' ? 'active' : '' }}">FUMETTI</a>
    </nav>

</header>