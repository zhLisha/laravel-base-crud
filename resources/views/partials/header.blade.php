<header>
    <nav class="container">
        <ul class="flex ">
            <li class="{{ Route::current()->getName() === 'home' ? 'current' : ''}}">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="{{ Route::current()->getName() === 'comics.index' ? 'current' : ''}}">
                <a href="{{route('comics.index')}}">Comics</a>
            </li>
            <li class="{{ Route::current()->getName() === 'comics.create' ? 'current' : ''}}">
                <a href="{{route('comics.create')}}">Crea il tuo fumetto</a>
            </li>
        </ul>
    </nav>
</header>