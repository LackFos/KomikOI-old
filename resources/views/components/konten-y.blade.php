<div class="konteny">
    <div class="konteny-atas">
        @if ($superHeading)
            <h1 class="konteny-heading">{{ $superHeading }}</h1>
        @endif

        @if ($heading)
            <h2 class="konteny-heading">{{ $heading }}</h2>
        @endif

        @if ($toPage)
            <a href="/{{ $toPage }}" class="konteny-topage"> Semua ></a>
        @endif
    </div>

    <div class="konteny-bawah">
        <div class="konteny-card">
            <a href="#" class="konteny-poster">
                <img src={{ asset('storage/yuan-zun.webp') }} alt="">
            </a>

            <div class="detail">
                <h3 class="detail-title line-1">
                    <a href="#">Yuan Zun</a>
                </h3>

                <ul class="genre-list line-1">
                    <li class="genre">
                        <a href="#">Aksi</a>
                    </li>
                    <li class="genre">
                        <a href="#">Fantasi</a>
                    </li>
                    <li class="genre">
                        <a href="#">Misteri</a>
                    </li>
                </ul>

                <ul class="chapter-list">
                    <li class="chapter">
                        <a href="#">
                            Chapter 3
                        </a>
                    </li>
                    <li class="chapter">
                        <a href="#">
                            Chapter 2
                        </a>
                    </li>
                    <li class="chapter">
                        <a href="#">
                            Chapter 1
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
