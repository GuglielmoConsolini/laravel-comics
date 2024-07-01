<header>

    <div class="logo-box">
        <img id="logo-img" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" />
        <span id="logo-text">Laravel Comics</span>
        <span>Attualmente sei in: {{ Route::currentRouteName() }}</span>
    </div>

    <nav>
        <a href="{{ route("home") }}">HOME</a>
        <a href="{{ route("about") }}">ABOUT</a>
        <a href="{{ route("fumetti") }}">FUMETTI</a>
    </nav>

</header>