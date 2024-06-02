@extends('template.master')

@section('content')

    </div> <!-- Page Header Close --> <!-- Start::row-1 -->
    <div class="card custom-card">
        <div class="card-header justify-content-between">
            <div class="card-title">Edit Pengeluaran</div>
            <a href="{{ url('pengeluaranview') }}" class="btn btn-primary btn-wave">Table Pengeluaran</a>
        </div>
        <div class="card-body">
            <form action="{{route('updatePengeluaran',$data->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nominal" class="form-label fs-14 text-dark">Nominal</label>
                    <input type="text" value="{{'Rp. '.number_format($data->nominal, 0 ,",", ".")}}" class="text-danger form-control showNom" id="nominal" placeholder="" name="nominal"
                        value="{{ old('nominal') }}">
                    @error('nominal')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label fs-14 text-dark">Keterangan</label>
                    <input type="text" value="{{$data->keterangan}}" value="{{ old('keterangan') }}" class="form-control" id="keterangan" name="keterangan">
                    @error('keterangan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label fs-14 text-dark">Tanggal</label>
                    <input type="date" value="{{$data->tanggal}}" class="form-control" id="date" placeholder="" name="tanggal"
                        value="{{ old('date') }}">
                    @error('tanggal')
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

    {{-- <script>
        const nominal = document.querySelector('#nominal')
        nominal.addEventListener('input', (e) => {
            nominal.value = formatRupiah(e.target.value,'Rp. ')
        })
    </script> --}}

@endsection
