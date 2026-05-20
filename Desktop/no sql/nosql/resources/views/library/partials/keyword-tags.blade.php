@php
    $keywordList = is_string($keywords ?? null)
        ? array_filter(array_map('trim', explode(',', $keywords)))
        : [];
    $activeKeyword = strtolower(trim((string) request('keyword', '')));
@endphp
@foreach($keywordList as $keyword)
    @php $isActive = $activeKeyword !== '' && strtolower($keyword) === $activeKeyword; @endphp
    <a href="{{ $isActive
        ? route('home', request()->except(['keyword', 'page']))
        : route('home', array_merge(request()->only(['category', 'author']), ['keyword' => $keyword])) }}"
       class="badge rounded-pill border border-success-subtle me-1 mb-1 text-decoration-none {{ $isActive ? 'text-bg-success' : 'text-bg-success-subtle text-success link-success link-underline-opacity-0 link-underline-opacity-100-hover' }}"
       title="Show all items with this keyword">
        <i class="bi bi-tag-fill me-1 opacity-75"></i>{{ $keyword }}
    </a>
@endforeach
