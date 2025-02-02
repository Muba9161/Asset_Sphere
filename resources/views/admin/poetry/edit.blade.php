@extends('admin.layout.main')

@section('page-title', $isEdit ? 'Edit Poetry' : 'View Poetry')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">{{ $isEdit ? 'Edit Poetry' : 'View Poetry' }}</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $isEdit ? 'Edit Poetry' : 'View Poetry' }}</h3>
                </div>

                <div class="card-body">
                    @if ($isEdit)
                        <form method="POST" action="{{ route('admin.poetrys.update', $poetry->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                    @endif

                    <div class="form-row">
                        <!-- Input Fields Section -->
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label mt-0" for="description">Poetry</label>
                                    @if ($isEdit)
                                        <input type="text" class="form-control" id="description" name="description"
                                            value="{{ old('description', $poetry->description) }}">
                                    @else
                                        <p class="form-control">{{ $poetry->description }}</p>
                                    @endif
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($isEdit)
                        <center><button class="btn btn-primary" type="submit">Update Poetry</button></center>
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
