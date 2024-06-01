@extends('template.master')

@section('content')

        </div> <!-- Page Header Close --> <!-- Start::row-1 -->
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">Tambah User</div>
                <a href="{{ url('userview') }}" class="btn btn-primary btn-wave">Table User</a>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label fs-14 text-dark">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="" name="username"
                            value="{{ old('username') }}">
                        @error('username')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-14 text-dark">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="" name="email"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fs-14 text-dark">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="" name="password"
                            value="{{ old('password') }}">
                        @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                   
                  
                   
                    
                    <button class="btn btn-primary  btn-wafe" type="submit">
                        <span>Submit</span>
                    </button>
                </form>
           
    
        @push('scripts')
            {{-- Sweet alert --}}
            <link rel="stylesheet" href="/noa-assets/assets/libs/sweetalert2/sweetalert2.min.css">
    
            {{-- Sweet alert --}}
            <script src="/noa-assets/assets/libs/sweetalert2/sweetalert2.min.js"></script>
            <script src="{{ asset('assets/js/member/add.js') }}"></script>
        @endpush
    
        @push('scripts')
            @if (session('success'))
                <script>
                    Swal.fire({
                        title: "{{ session('success') }}",
                        text: "{{ session('success_message') }}",
                        icon: "success"
                    });
                </script>
            @endif
    
            @if (session('error'))
                <script>
                    Swal.fire({
                        title: "{{ session('error') }}",
                        text: "{{ session('error_message') }}",
                        icon: "error"
                    });
                </script>
            @endif
        @endpush
    
    </div>
</div>
   @endsection
