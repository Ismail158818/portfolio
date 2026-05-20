@extends('layouts.app')

@section('content')
@php
    $coverFor = function ($item) {
        if ($item->cover_path) {
            return asset('storage/'.$item->cover_path);
        }
        if ($item->file_type === 'image' && $item->path) {
            return asset('storage/'.$item->path);
        }
        return null;
    };
@endphp

<div class="card border-success border-opacity-25 bg-white shadow-sm text-center mb-4">
    <div class="card-body py-4">
        <h1 class="h3 text-success mb-2">{{ config('app.name', 'Ebla Digital Library') }}</h1>
        <p class="text-muted mb-0">Explore shared academic resources from our community.</p>
        @auth
            @if(in_array(auth()->user()->role, ['Admin', 'Uploader']))
                <button type="button" class="btn btn-warning fw-semibold mt-3 rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    <i class="bi bi-cloud-upload me-1"></i> Upload File
                </button>
            @endif
        @endauth
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <form method="GET" class="row g-2 align-items-end">
            <div class="col-12 col-md-3">
                <label class="form-label small" for="search">Search</label>
                <input id="search" name="search" value="{{ request('search') }}" type="text" class="form-control form-control-sm" placeholder="Title, author, keywords">
            </div>
            <div class="col-6 col-md-3">
                <label class="form-label small" for="category">Category</label>
                <select id="category" name="category" class="form-select form-select-sm">
                    <option value="">All</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ request('category') === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 col-md-2">
                <label class="form-label small" for="author">Author</label>
                <input id="author" name="author" value="{{ request('author') }}" type="text" class="form-control form-control-sm" placeholder="Author">
            </div>
            <div class="col-6 col-md-2">
                <button type="submit" class="btn btn-success btn-sm w-100">Filter</button>
            </div>
        </form>
        @if(request('keyword'))
            <div class="mt-3 d-flex flex-wrap align-items-center gap-2">
                <span class="small text-muted">Browsing by keyword:</span>
                <span class="badge rounded-pill text-bg-success">
                    <i class="bi bi-tag-fill me-1"></i>{{ request('keyword') }}
                </span>
                <a href="{{ route('home', request()->except(['keyword', 'page'])) }}" class="btn btn-outline-secondary btn-sm py-0">
                    <i class="bi bi-x-lg me-1"></i>Clear keyword
                </a>
            </div>
        @endif
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 g-3">
    @forelse($items as $item)
        @php $coverUrl = $coverFor($item); @endphp
        <div class="col">
        <div class="card shadow-sm border-0 overflow-hidden h-100">
            <div class="row g-0 align-items-stretch h-100">
                <div class="col-4 col-sm-3 col-md-3 h-100">
                    @if($coverUrl)
                        <div class="bg-light h-100 d-flex align-items-center justify-content-center rounded-start overflow-hidden p-2">
                            <img src="{{ $coverUrl }}" alt="{{ $item->title }}" class="img-fluid h-100 object-fit-contain">
                        </div>
                    @else
                        <div class="bg-success-subtle text-success h-100 d-flex align-items-center justify-content-center rounded-start">
                            <i class="bi bi-file-earmark fs-2"></i>
                        </div>
                    @endif
                </div>
                <div class="col">
                    <div class="card-body h-100 d-flex flex-column">
                        <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                            <h5 class="card-title mb-0">{{ $item->title }}</h5>
                            <span class="badge text-bg-warning text-dark">{{ $item->category ?? 'General' }}</span>
                        </div>
                        <p class="card-text small mb-1"><i class="bi bi-person me-1 text-success"></i><strong>Author:</strong> {{ $item->author ?: 'Unknown' }}</p>
                        @if($item->keywords)
                            <div class="mb-2">
                                @include('library.partials.keyword-tags', ['keywords' => $item->keywords])
                            </div>
                        @endif
                        <p class="text-muted small mb-3">
                            <i class="bi bi-clock me-1"></i>{{ $item->created_at?->diffForHumans() ?? 'Recently added' }}
                        </p>
                        <div class="mt-auto d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-outline-success btn-sm rounded-circle p-2 lh-1 d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#viewModal-{{ $item->id }}" title="View" aria-label="View">
                                <i class="bi bi-eye"></i>
                            </button>
                            @auth
                                <a href="{{ route('library.download', $item) }}" class="btn btn-success btn-sm rounded-circle p-2 lh-1 d-inline-flex align-items-center justify-content-center" title="Download" aria-label="Download"><i class="bi bi-download"></i></a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-success btn-sm rounded-circle p-2 lh-1 d-inline-flex align-items-center justify-content-center" title="Download" aria-label="Download"><i class="bi bi-download"></i></a>
                            @endauth
                            @if(auth()->check() && auth()->user()->role == 'Admin')
                                <button type="button" class="btn btn-outline-danger btn-sm rounded-circle p-2 lh-1 d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteItemModal-{{ $item->id }}" title="Delete" aria-label="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @empty
        <div class="col-12"><div class="alert alert-info mb-0">No files match your filters.</div></div>
    @endforelse
</div>

<div class="mt-4 d-flex justify-content-center">{{ $items->links() }}</div>

@foreach($items as $item)
    @php $coverUrl = $coverFor($item); @endphp
    <div class="modal fade" id="viewModal-{{ $item->id }}" tabindex="-1" aria-labelledby="viewModalLabel-{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="viewModalLabel-{{ $item->id }}">{{ $item->title }}</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            @if($coverUrl)
                                <div class="bg-light rounded p-2 text-center">
                                    <img src="{{ $coverUrl }}" alt="{{ $item->title }}" class="img-fluid rounded object-fit-contain w-100">
                                </div>
                            @else
                                <div class="bg-success-subtle text-success rounded d-flex align-items-center justify-content-center py-5">
                                    <i class="bi bi-file-earmark display-3"></i>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <dl class="row small mb-0">
                                <dt class="col-sm-4">Author</dt>
                                <dd class="col-sm-8">{{ $item->author ?: 'Unknown' }}</dd>
                                <dt class="col-sm-4">Category</dt>
                                <dd class="col-sm-8">{{ $item->category ?? 'General' }}</dd>
                                <dt class="col-sm-4">Keywords</dt>
                                <dd class="col-sm-8">
                                    @if($item->keywords)
                                        @include('library.partials.keyword-tags', ['keywords' => $item->keywords])
                                    @else
                                        <span class="text-muted">—</span>
                                    @endif
                                </dd>
                                @if(auth()->check() && auth()->user()->role == 'Admin')
                                    <dt class="col-sm-4">Uploaded by</dt>
                                    <dd class="col-sm-8">
                                        {{ $item->uploader?->name ?? 'Unknown' }}
                                        @if($item->uploader?->email)
                                            <span class="text-muted">({{ $item->uploader->email }})</span>
                                        @endif
                                    </dd>
                                @endif
                                <dt class="col-sm-4">Views</dt>
                                <dd class="col-sm-8">{{ $item->read_count ?? 0 }}</dd>
                                <dt class="col-sm-4">Downloads</dt>
                                <dd class="col-sm-8">{{ $item->download_count ?? 0 }}</dd>
                                <dt class="col-sm-4">Added</dt>
                                <dd class="col-sm-8">{{ $item->created_at?->format('M d, Y') ?? '—' }}</dd>
                            </dl>
                            @if($item->description)
                                <p class="small fw-semibold mt-3 mb-1">Description</p>
                                <p class="text-muted mb-0">{{ $item->description }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    @auth
                        <a href="{{ route('library.download', $item) }}" class="btn btn-success rounded-circle p-2 lh-1 d-inline-flex align-items-center justify-content-center" title="Download" aria-label="Download"><i class="bi bi-download"></i></a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success rounded-circle p-2 lh-1 d-inline-flex align-items-center justify-content-center" title="Login to download" aria-label="Login to download"><i class="bi bi-download"></i></a>
                    @endauth
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @if(auth()->check() && auth()->user()->role == 'Admin')
        <div class="modal fade" id="deleteItemModal-{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title">Delete File</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">Delete <strong>{{ $item->title }}</strong>?</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{ route('library.destroy', $item) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

@if(auth()->check() && in_array(auth()->user()->role, ['Admin', 'Uploader']))
    @include('library.partials.upload-modal')
@endif
@endsection
