@extends('index', ['hasHeader' => true, 'hasFooter' => true])

@section('page')
    <main class="container archive no-select">
        <section class="section">
            <x-breadcrumb :subCategories="$breadcrumb" />

            <x-konten-y
                superHeading="{{ $heading }}"
                :comics="$comics"
            />

            {{-- {{ $paginasi->links() }} --}}
        </section>

        <section class="section genres">
            <x-genre-menu
                :genres="$genres"
                heading="Genres"
                hasCategory=true
            />
        </section>
    </main>
@endsection
