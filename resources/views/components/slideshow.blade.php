<div
    id="{{ $swiper }}"
    class="swiper swiper-container"
>
    <div class="swiper-wrapper">

        @foreach ($comics as $c)
            <div class="swiper-slide">
                <div
                    class="slider-bgimage"
                    style="background-image: url({{ asset($c->comic->image) }})"
                ></div>

                <div class="slider-poster">
                    <div class="slider-poster-placeholder">
                        <img
                            src="{{ asset($c->comic->image) }}"
                            alt="Komik {{ $c->comic->title }}"
                        >
                    </div>
                </div>

                <div class="slider-detail">
                    <h2 class="slider-detail-title line-3">{{ $c->comic->title }}</h2>

                    <p class="slider-detail-description line-3">
                        {{ $c->comic->description }}
                    </p>

                    <div class="slider-button">
                        <a
                            @class([
                                'button',
                                'primary' => $c->comic->firstChapter,
                                'disabled' => !$c->comic->firstChapter,
                            ])
                            href="/baca/{{ $c->comic->firstChapter?->slug }}"
                        >Baca Sekarang</a>
                        <a
                            href="/detail/{{ $c->comic->slug }}"
                            class="button secondary"
                        >Detail</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="swiper-nav">
        <div
            id="{{ $swiper }}-prev"
            class="button swiper-nav-button button-action"
        >
            <i class="fas fa-chevron-left"></i>
        </div>
        <div
            id="{{ $swiper }}-next"
            class="button swiper-nav-button button-action"
        >
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
</div>
