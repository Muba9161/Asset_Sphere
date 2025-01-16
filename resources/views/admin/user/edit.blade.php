@extends('admin.layout.main')

@section('admin-page-title', ucfirst($mode ?? 'create') . ' User')

@section('admin-main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">{{ ucfirst($mode ?? 'create') }} User</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ ucfirst($mode ?? 'create') }} User</h3>
                </div>
                <div class="card-body">
                    @if ($mode == 'edit' || $mode == 'create')
                        <form method="POST"
                            action="{{ $mode == 'create' ? route('admin.users.store') : route('admin.users.update', $user->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @if ($mode == 'edit')
                                @method('PUT')
                            @endif
                    @endif

                    <div class="form-row">

                        <div class="col-xl-4 mb-3">
                            @if ($mode == 'edit' || $mode == 'create')
                                <label class="form-label mt-0" for="image">Avatar</label>
                                <input type="file" class="dropify" name="avatar" data-bs-height="180"
                                    data-default-file="{{ $mode == 'edit' && isset($user) && $user->avatar ? asset($user->avatar) : '' }}" />
                                @error('avatar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            @else
                                <div class="text-center">
                                    <img class="img-responsive br-5" style="height: 180px;"
                                        src="{{ asset($user->avatar ?? 'assets/profile.svg') }}" alt="User Image">
                                </div>
                            @endif
                        </div>

                        <div class="col-xl-8">
                            <div class="row">
                                @if ($mode == 'edit' || $mode == 'create')
                                    <x-inputs.input-field class="col-xl-6 mb-3" label="Full Name" name="name"
                                        type="text" :value="old('name', $mode == 'edit' ? $user->name : '')" />
                                @else
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label mt-0" for="name">Full Name</label>
                                        <p class="form-control">{{ $user->name }}</p>
                                    </div>
                                @endif

                                @if ($mode == 'edit' || $mode == 'create')
                                    <x-inputs.input-field class="col-xl-6 mb-3" label="Email" name="email" type="email"
                                        :value="old('email', $mode == 'edit' ? $user->email : '')" />
                                @else
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label mt-0" for="email">Email</label>
                                        <p class="form-control">{{ $user->email }}</p>
                                    </div>
                                @endif

                                <div class="col-xl-6 mb-3">
                                    <label class="form-label mt-0" for="role">User Role</label>
                                    @if ($mode == 'edit' || $mode == 'create')
                                        <select class="form-control select2 form-select" id="role" name="role">
                                            <option value="" disabled selected hidden>Select User Role</option>
                                            <option value="1"
                                                {{ old('role', $mode == 'edit' ? $user->user_role : '') == 1 ? 'selected' : '' }}>
                                                Administrator</option>
                                            <option value="2"
                                                {{ old('role', $mode == 'edit' ? $user->user_role : '') == 2 ? 'selected' : '' }}>
                                                Editor</option>
                                            <option value="3"
                                                {{ old('role', $mode == 'edit' ? $user->user_role : '') == 3 ? 'selected' : '' }}>
                                                Viewer</option>
                                        </select>
                                    @else
                                        <p class="form-control">
                                            @switch($user->user_role)
                                                @case(1)
                                                    Administrator
                                                @break

                                                @case(2)
                                                    Editor
                                                @break

                                                @case(3)
                                                    Viewer
                                                @break
                                            @endswitch
                                        </p>
                                    @endif
                                    @error('role')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            @if ($mode == 'edit' || $mode == 'create')
                                <div class="row">
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label mt-0">New Password</label>
                                        <div class="input-group" id="Password-toggle1">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="form-control @error('password') is-invalid @enderror"
                                                type="password" name="password" placeholder="New Password"
                                                autocomplete="new-password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 mb-3">
                                        <label class="form-label mt-0">Confirm Password</label>
                                        <div class="input-group" id="Password-toggle2">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                                type="password" name="password_confirmation" placeholder="Confirm Password"
                                                autocomplete="new-password">
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    @if ($mode == 'edit')
                                        <div class="text-center col-xl-12 mb-3">
                                            <small class="text-muted">Leave blank to keep the current password.</small>
                                        </div>
                                    @endif
                                </div>
                            @endif

                        </div>
                    </div>

                    @if ($mode == 'edit' || $mode == 'create')
                        <center><x-buttons.simple-button class="btn btn-primary"
                                type="submit">{{ $mode == 'edit' ? 'Update' : 'Create' }}
                                User</x-buttons.simple-button></center>
                    @endif

                    @if ($mode == 'edit' || $mode == 'create')
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection

@section('custom-script')
    <!-- INPUT MASK JS-->
    <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- FORMVALIDATION JS -->
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset('../assets/js/show-password.min.js') }}"></script>

    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('../assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('../assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!-- SELECT2 JS -->
    <script src="{{ asset('../assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('../assets/js/select2.js') }}"></script>
@endsection
