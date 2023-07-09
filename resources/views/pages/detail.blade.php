@extends('index', ['hasHeader' => true, 'hasFooter' => true])

@section('page')
    <main class="container">
        <section class="section pt-4">
            <div class="detail-poster">
                <div class="detail-poster-placeholder">
                    <img src="{{ asset('/storage/comics/yuan-zun/thumbnail.webp') }}" alt="">
                </div>
            </div>

            <div class="detail-info">
                <div class="detail-info-general">
                    <h1 class="detail-title mb-3">Komik {{ $comic->title }}</h1>

                    <div class="detail-button">
                        <a href="/baca/{{ $comic->firstChapter->slug }}" class="button primary">
                            Baca Sekarang
                        </a>

                        <div class="button secondary button-action" data-comic-id={{ $comic->id }}>
                            <i class="far fa-bookmark"></i>
                        </div>
                    </div>

                    <x-genre-menu :genres="$genres" />

                    <p class="detail-description">{{ $comic->description }}</p>
                </div>

                <div class="detail-info-misc">
                    <x-detail-item heading="Tipe" text="{{ $type->name }}" toPage="/tipe/{{ $type->slug }}" />
                    <x-detail-item heading="Status" text="{{ $status->name }}" />
                    <x-detail-item heading="Author" text="{{ $author ?? '-' }}" />
                    <x-detail-item heading="Update Terakhir" text="{{ $lastUpdate }}" />
                </div>

                <div id="more-button" class="more-button">
                    Lihat Detail <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </section>

        <section class="section detail-chapterbox">
            <x-chapter-box :chapters="$chapters" />
        </section>
    </main>
@endsection
