<div id="{{ $swiper }}" class="swiper swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="slider-bgimage" style="background-image: url({{ asset('/storage/yuan-zun.webp') }})"></div>

            <div class="slider-poster">
                <div class="slider-poster-placeholder">
                    <img src="{{ asset('/storage/yuan-zun.webp') }}" alt="">
                </div>
            </div>

            <div class="slider-detail">
                <h2 class="slider-detail-title line-3">Yuan Zun</h2>

                <p class="slider-detail-description line-3">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, enim
                    est accusantium praesentium esse, veniam nesciunt eaque hic excepturi eligendi iste facilis animi.
                    Impedit, labore!
                </p>

                <div class="slider-button">
                    <a class="button primary" href="#">Baca Sekarang</a>
                    <a href="#" class="button secondary">Detail</a>
                </div>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="slider-bgimage"
                style="background-image: url({{ asset('/storage/im-godfather-in-another-world.webp') }})"></div>

            <div class="slider-poster">
                <div class="slider-poster-placeholder">
                    <img src="{{ asset('/storage/im-godfather-in-another-world.webp') }}" alt="">
                </div>
            </div>

            <div class="slider-detail">
                <h2 class="slider-detail-title line-3">Im Godfather in Another World</h2>

                <p class="slider-detail-description line-3">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, enim
                    est accusantium praesentium esse, veniam nesciunt eaque hic excepturi eligendi iste facilis animi.
                    Impedit, labore!
                </p>

                <div class="slider-button">
                    <a class="button primary" href="#">Baca Sekarang</a>
                    <a href="#" class="button secondary">Detail</a>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-nav">
        <div id="{{ $swiper }}-prev" class="button swiper-nav-button button-action">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div id="{{ $swiper }}-next" class="button swiper-nav-button button-action">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>

</div>
