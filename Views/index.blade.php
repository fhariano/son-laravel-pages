<h1>{{ __('Page::pages.pages') }}</h1>
<ul>
    @foreach ($pages as $page)
        <li>{{ $page->title }}</li>
    @endforeach
</ul>
