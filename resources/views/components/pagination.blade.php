<ul class="pagination">
    @if (!$onFirstPage)
        <li>
            <a
                class="button gray"
                href="?page=1"
            > « </a>
        </li>

        <li>
            <a
                class="button gray"
                href="{{ $prevPage }}"
            > ‹ </a>
        </li>
    @endif

    @if (isset($urls))
        @foreach ($urls as $url)
            <li>
                <a
                    @class([
                        'button',
                        'primary' => $url == $currentPage,
                        'gray' => $url != $currentPage,
                    ])
                    href="?page={{ $url }}"
                >
                    {{ $url }}
                </a>
            <li>
        @endforeach
    @endif

    @if (!$onLastPage)
        <li>
            <a
                class="button gray"
                href="{{ $nextPage }}"
            > › </a>
        </li>

        <li>
            <a
                class="button gray"
                href="?page={{ $lastPage }}"
            > » </a>
        </li>
    @endif
</ul>
