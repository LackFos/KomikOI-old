<div class="kontenx">
    <div class="kontenx-top">
        <h2>{{ $heading }}</h2>

        <div class="swiper-nav">
            <div id="{{ $swiper }}-prev" class="swiper-nav-button button button-action">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div id="{{ $swiper }}-next" class="swiper-nav-button button button-action">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>

    <div class="kontenx-bottom">
        <div id={{ $swiper }} class="swiper swiper-container">
            <div class="swiper-wrapper">

                @foreach ($comics as $comic)
                    <div class="swiper-slide">
                        <a href="/detail/{{ $comic->slug }}" class="kontenx-poster">
                            <div class="kontenx-poster-placeholder">
                                <img src="{{ asset($comic->image) }}" alt="Komik {{ $comic->title }}">
                            </div>
                            <h3 class="kontenx-title line-3">{{ $comic->title }}</h3>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
