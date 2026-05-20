<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg overflow-hidden">
            <div class="modal-header bg-success text-white border-0 py-3">
                <div>
                    <h5 class="modal-title mb-0" id="uploadModalLabel">
                        <i class="bi bi-cloud-arrow-up-fill me-2"></i>Upload New File
                    </h5>
                    <p class="small mb-0 opacity-75">Add a resource to the digital archive</p>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('library.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body bg-light">
                    <p class="small text-muted mb-3"><i class="bi bi-info-circle me-1"></i> Fill in the details below. Fields marked with <span class="text-danger">*</span> are required.</p>

                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-header bg-white border-bottom py-2">
                            <span class="small fw-semibold text-success"><i class="bi bi-card-text me-1"></i> Basic Information</span>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="title" class="form-label small fw-semibold">Title <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i class="bi bi-bookmark text-success"></i></span>
                                        <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control" placeholder="Document title" required>
                                    </div>
                                    @error('title')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="author" class="form-label small fw-semibold">Author <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i class="bi bi-person text-success"></i></span>
                                        <input type="text" id="author" name="author" value="{{ old('author') }}" class="form-control" placeholder="Author name" required>
                                    </div>
                                    @error('author')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="category" class="form-label small fw-semibold">Category <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i class="bi bi-folder text-success"></i></span>
                                        <select id="category" name="category" class="form-select" required>
                                            <option value="">Select category</option>
                                            @foreach($categories as $cat)
                                                <option value="{{ $cat }}" {{ old('category') === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('category')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="keywords" class="form-label small fw-semibold">Keywords</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i class="bi bi-tags text-success"></i></span>
                                        <input type="text" id="keywords" name="keywords" value="{{ old('keywords') }}" class="form-control" placeholder="history, ebla, research">
                                    </div>
                                    <div class="form-text">Separate with commas</div>
                                    @error('keywords')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label small fw-semibold">Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="3" placeholder="Short summary of the file…">{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-bottom py-2">
                            <span class="small fw-semibold text-success"><i class="bi bi-file-earmark-arrow-up me-1"></i> Files</span>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="cover_image" class="form-label small fw-semibold">Cover Image</label>
                                    <input type="file" id="cover_image" name="cover_image" class="form-control" accept="image/png,image/jpeg">
                                    <div class="form-text">Optional — PNG or JPEG</div>
                                    @error('cover_image')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="file" class="form-label small fw-semibold">Main File <span class="text-danger">*</span></label>
                                    <input type="file" id="file" name="file" class="form-control" accept=".pdf,.png,.jpg,.jpeg,.mp3,.wav" required>
                                    <div class="form-text">PDF, images, or audio — max 20MB</div>
                                    @error('file')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-white border-top">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-cloud-upload me-1"></i> Upload to Library
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@if($errors->any())
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new bootstrap.Modal(document.getElementById('uploadModal')).show();
        });
    </script>
    @endpush
@endif
