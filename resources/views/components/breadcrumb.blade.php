<ul class="breadcrumb-list mb-3">
    <li class="breadcrumb">
        <a href="/">Home</a>
    </li>

    @foreach ($subCategories as $category)
        <li @class(['breadcrumb', 'disabled' => !$category->link])>
            <a href="{{ $category->link }}">
                {{ $category->name }}
            </a>
        </li>
    @endforeach
</ul>
