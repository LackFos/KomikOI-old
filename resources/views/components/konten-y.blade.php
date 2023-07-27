<div class="konteny">
    <div class="konteny-atas">
        @if ($superHeading)
            <h1 class="konteny-heading">{{ $superHeading }}</h1>
        @endif

        @if ($heading)
            <h2 class="konteny-heading">{{ $heading }}</h2>
        @endif

        @if ($toPage)
            <a
                href="/{{ $toPage }}"
                class="konteny-topage"
            > Semua ></a>
        @endif
    </div>

    <div class="konteny-bawah">

        @foreach ($comics as $comic)
            <div class="konteny-card">
                <a
                    href="/detail/{{ $comic->slug }}"
                    class="konteny-poster"
                >
                    <img
                        src={{ asset($comic->image) }}
                        alt="Komik {{ $comic->title }}"
                    >
                </a>

                <div class="detail">
                    <h3 class="detail-title line-1">
                        <a href="/detail/{{ $comic->slug }}">{{ $comic->title }}</a>
                    </h3>

                    <ul class="genre-list line-1">
                        @foreach ($comic->genres as $genre)
                            <li class="genre">
                                <a href="/genre/{{ $genre->slug }}">{{ $genre->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <ul class="chapter-list">
                        @foreach ($comic->latestChapters as $chapter)
                            <li class="chapter">
                                <a href="/baca/{{ $chapter->slug }}">
                                    Chapter {{ $chapter->number }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach

    </div>
</div>
