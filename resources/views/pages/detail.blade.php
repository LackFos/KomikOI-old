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
                    <h1 class="detail-title mb-3">Komik Yuan Zun</h1>

                    <div class="detail-button">
                        <a href="#" class="button primary">
                            Baca Sekarang
                        </a>

                        <div class="button secondary button-action">
                            <i class="far fa-bookmark"></i>
                        </div>
                    </div>

                    <x-genre-menu :genres="collect([
                        (object) ['name' => 'Aksi', 'slug' => 'aksi'],
                        (object) ['name' => 'Fantasi', 'slug' => 'fantasi'],
                        (object) ['name' => 'Kultivasi', 'slug' => 'kultivasi'],
                    ])" />

                    <p class="detail-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus recusandae saepe nostrum ipsa,
                        tenetur quidem. Quae adipisci vitae in harum ea aperiam iure, quisquam reprehenderit possimus. Ipsum
                        voluptates porro quo alias nisi, enim inventore beatae sapiente voluptatum. Et in fuga a asperiores
                        quibusdam amet ea tempore, quam quia qui totam?
                    </p>
                </div>

                <div class="detail-info-misc">
                    <x-detail-item heading="Tipe" text="Manhua" toPage="tipe/manhua" />
                    <x-detail-item heading="Status" text="Ongoing" />
                    <x-detail-item heading="Author" text="-" />
                    <x-detail-item heading="Dibaca" text="1.987 Kali" />
                </div>

                <div id="more-button" class="more-button">
                    Lihat Semua
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </section>

        <section class="section detail-chapterbox">
            <x-chapter-box />
        </section>
    </main>
@endsection
