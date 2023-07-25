@extends('index', ['hasHeader' => true, 'hasFooter' => false])

@section('page')
    <script>
        document.querySelector("body").style.background = '#16151d';
    </script>

    <main class="baca container no-select">
        <article>
            <h1 class="chapter-title">{{ $chapterTitle }}</h1>

            <x-breadcrumb :subCategories="$breadcrumb" />

            <p class="chapter-description">
                Baca komik {{ $chapterTitle }} Bahasa Indonesia secara gratis di KomikOI.
                Temukan juga berbagai koleksi komik seru lainnya di KomikOI.
            </p>

            <div class="chapter-navigation">
                <a
                    href="/baca/{{ $chapter->prev?->slug }}"
                    @class([
                        'button',
                        'secondary' => $chapter->prev,
                        'disabled' => !$chapter->prev,
                    ])
                >&lt; Chapter Sebelumnya</a>

                <a
                    href="/detail/{{ $comic->slug }}"
                    class="button secondary"
                >Daftar Chapter</a>

                <a
                    href="/baca/{{ $chapter->next?->slug }}"
                    @class([
                        'button',
                        'secondary' => $chapter->next,
                        'disabled' => !$chapter->next,
                    ])
                >Chapter Selanjutnya &gt;</a>
            </div>
        </article>

        <span class="chapter-banner hide">Berikut ini merupakan isi dari komik {{ $chapterTitle }} Bahasa Indonesia.</span>

        <section class="content">
            @foreach ($contents as $content)
                <img
                    class="content-image"
                    src="{{ asset($content->url) }}"
                    alt="Komik {{ $comic->title }}"
                >
            @endforeach

            <div
                id="content-end"
                class="content-end"
            >
                @if ($chapter->next)
                    <div id="end-indicator"></div>
                    <span class="loader mb-2"></span>
                    <div class="loader-text">
                        Sedang memuat Chapter Selanjutnya, Jika proses ini lama silahkan tekan button dibawah
                    </div>
                    <a
                        id="next-chapter"
                        href="/baca/{{ $chapter->next?->slug }}"
                        class="button secondary"
                    >Chapter Selanjutnya &gt;</a>
                @else
                    Ini adalah Chapter Terakhir
                @endif
            </div>
        </section>
    </main>
@endsection
