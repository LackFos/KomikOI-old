<ul class="breadcrumb-list mb-3">
    <li class="breadcrumb">
        <a href="/">Home</a>
    </li>
    @foreach ($subCategories as $category)
        <li @class(['breadcrumb', 'disabled' => !$category->link])><span>{{ $category->name }}</span></li>
    @endforeach
</ul>
