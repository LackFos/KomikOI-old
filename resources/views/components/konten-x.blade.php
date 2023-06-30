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

                <div class="swiper-slide">
                    <a href="/detail/yuan-zun" class="kontenx-poster">
                        <div class="kontenx-poster-placeholder">
                            <img src="{{ asset('/storage/yuan-zun.webp') }}" alt="">
                        </div>
                        <h3 class="kontenx-title line-3">Yuan Zun</h3>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="/detail/im-godfather-in-another-world" class="kontenx-poster">
                        <div class="kontenx-poster-placeholder">
                            <img src="{{ asset('/storage/im-godfather-in-another-world.webp') }}" alt="">
                        </div>
                        <h3 class="kontenx-title line-3">Im Godfather in Another World</h3>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
