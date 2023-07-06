<div class="detail-item">
    <h2 class="detail-item-heading">{{ $heading }} :</h2>

    @if (isset($toPage))
        <a href="{{ $toPage }}">
            {{ $text }}
        </a>
    @else
        {{ $text }}
    @endif
</div>
