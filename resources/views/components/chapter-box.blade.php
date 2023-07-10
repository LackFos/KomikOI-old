<div class="chapterbox">
    <div class="chapterbox-top">
        <h2 class="chapterbox-heading mt-2">Chapter Yuan Zun</h2>
        <div class="sort mt-2">
            Urutkan : <span id="sort-button">Terakhir</span>
        </div>
    </div>

    <input id="chapterbox-input" class="chapterbox-input" type="text" autocomplete=off
        placeholder="Masukkan Nomor Chapter" />

    <ul class="chapterbox-list">
        @foreach ($chapters as $chapter)
            <li class="chapter">
                <a href="/baca/{{ $chapter->slug }}" class="chapter-link" data-chapterNumber="{{ $chapter->number }}">
                    <span>Chapter {{ $chapter->number }}</span>
                    <span>{{ $chapter->created_at->diffForHumans() }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
