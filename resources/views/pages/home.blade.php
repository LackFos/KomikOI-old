@extends('index')

@section('page')
    <main class="container no-select">
        <section class="section slider">
            <x-slideshow swiper="rekomendasi" />
        </section>

        <section class="section">
            <x-kontenx heading="Terpopuler Hari Ini" swiper="populer" />
        </section>

        <section class="section">
            <x-genre-menu hasMoreButton=true />
        </section>

        <section class="section">
            <x-konteny heading="Update Terbaru" toPage="update-terbaru" />
        </section>
    </main>
@endsection
