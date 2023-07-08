@if ($heading)
    <h2 class="genre-menu-heading">{{ $heading }}</h2>
@endif

<ul id="genre-list" class="genre-menu-list">
    @if ($hasCategory)
        <li class="genre-menu">
            <a href="/baru-diliris" class="genre-menu-button button a">
                Baru Diliris
            </a>
        </li>

        <li class="genre-menu">
            <a href="/update-terbaru" class="genre-menu-button button b">
                Update Terbaru
            </a>
        </li>

        <li class="genre-menu">
            <a href="/trending" class="genre-menu-button button c">
                Trending
            </a>
        </li>
    @endif

    @foreach ($genres as $genre)
        <li class="genre-menu">
            <a href="/genre/{{ $genre->slug }}" class="genre-menu-button button gray">
                {{ $genre->name }}
            </a>
        </li>
    @endforeach

    @if ($hasMoreButton)
        <li class="genre-menu genre-button-more">
            <i class="fas fa-chevron-right"></i>
        </li>
    @endif
</ul>
