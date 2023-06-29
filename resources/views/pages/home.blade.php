@extends('index')

@section('page')
    <main class="container no-select">
        <section class="section slider">
            <x-slideshow />
        </section>

        <section class="section">
            <x-kontenx heading="Terpopuler Hari Ini" swiper="anjay" />
        </section>
    </main>
@endsection
