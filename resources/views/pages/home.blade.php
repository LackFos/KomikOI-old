@extends('index')

@section('page')
    <main class="container no-select">
        <section class="section slider">
            <x-slideshow
                :comics="$recommendedComic"
                swiper="rekomendasi"
            />
        </section>

        <section class="section">
            <x-kontenx
                :comics="$trendingComic"
                heading="Terpopuler Hari Ini"
                swiper="populer"
            />
        </section>

        <section class="section">
            <x-genre-menu
                :genres="$genres"
                hasCategory=true
                hasMoreButton=true
            />
        </section>

        <section class="section">
            <x-konteny
                :comics="$latestComic"
                heading="Update Terbaru"
                toPage="update-terbaru"
            />
        </section>
    </main>
@endsection
