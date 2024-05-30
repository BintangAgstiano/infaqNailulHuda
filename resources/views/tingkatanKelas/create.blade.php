@extends('template.master')

@section('content')

        </div> <!-- Page Header Close --> <!-- Start::row-1 -->
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">Tambah Tingkatan Kelas</div>
                <a href="{{ url('pemasukanview') }}" class="btn btn-primary btn-wave">Table Tingkatan Kelas</a>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="mb-3">
                        <label for="kelas" class="form-label fs-14 text-dark">Kelas</label>
                        <input type="text" class="form-control" id="kelas" placeholder="" name="kelas"
                            value="{{ old('kelas') }}">
                        @error('kelas')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label fs-14 text-dark">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="" name="jurusan"
                            value="{{ old('jurusan') }}">
                        @error('jurusan')
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
