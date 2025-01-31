@extends('admin.layout.main')

@section('page-title', $isEdit ? 'Edit Loader' : 'View Loader')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">{{ $isEdit ? 'Edit Loader' : 'View Loader' }}</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $isEdit ? 'Edit Loader' : 'View Loader' }}</h3>
                </div>

                <div class="card-body">
                    @if ($isEdit)
                        <form method="POST" action="{{ route('admin.loaders.update', $loader->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                    @endif

                    <div class="form-row">
                        <!-- Input Fields Section -->
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="image_link">Image_Link</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="image_link" name="image_link"
                                            value="{{ old('image_link', $loader->image_link) }}">
                                    @else
                                        <p class="form-control">{{ $loader->image_link }}</p>
                                    @endif
                                    @error('image_link')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="name">Full Name</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name', $loader->name) }}">
                                    @else
                                        <p class="form-control">{{ $loader->name }}</p>
                                    @endif
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="html">HTML Code</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="html" name="html"
                                            value="{{ old('html', $loader->html) }}">
                                    @else
                                        <p class="form-control">{{ $loader->html }}</p>
                                    @endif
                                    @error('html')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="css">CSS Code</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="css" name="css"
                                            value="{{ old('css', $loader->css) }}">
                                    @else
                                        <p class="form-control">{{ $loader->css }}</p>
                                    @endif
                                    @error('css')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="js">JS Code</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="js" name="js"
                                            value="{{ old('js', $loader->js) }}">
                                    @else
                                        <p class="form-control">{{ $loader->js }}</p>
                                    @endif
                                    @error('js')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($isEdit)
                        <center><button class="btn btn-primary" type="submit">Update Loader</button></center>
                    @endif

                    @if ($isEdit)
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection

@section('custom-script')
    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('../assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('../assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!-- INPUT MASK JS-->
    <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- FORMVALIDATION JS -->
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
@endsection
