<div class="chapterbox">
    <h2 class="chapterbox-heading">Chapter Yuan Zun</h2>
    <input id="chapterbox-input" class="chapterbox-input" type="text" autocomplete=off
        placeholder="Masukkan Nomor Chapter" />

    <ul class="chapterbox-list">
        @foreach ($chapters as $chapter)
            <li class="chapter">
                <a href="/baca/{{ $chapter->slug }}" class="chapter-link" data-chapterNumber="{{ $chapter->number }}">
                    <span>Chapter {{ $chapter->number }}</span>
                    <span>{{ $chapter->created_at->format('d/m/Y') }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
