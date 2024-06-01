@extends('template.master')

@section('content')
    <div class="card custom-card mt-3">
        <div class="card-header justify-content-between">
            <div class="card-title">
                <a href="{{ url('/tingkatankelas') }}" class="btn btn-primary btn-wave">Tambah Tingkatan Kelas</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card custom-card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-pemasukan" class="table table-bordered text-nowrap w-100 dataTable no-footer"
                            aria-describedby="datatable-basic_info">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col">Kelas</th>
              
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="task-list-table">
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="fs-13 fw-normal">
                                            {{ $loop->iteration }}
                                        <td class="fs-13 fw-normal ">{{ $item['nama_kelas'] }}</td>

                                        </td>
                                        <td>
                                            <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                    href={{ url('/tingkatankelasedit/'.$item['id'] ) }} data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit"
                                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a> 
                                                        <a aria-label="anchor"
                                                    href={{ url('tingkatankelasdelete/'.$item['id']) }} data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete"
                                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-outline-secondary"><i
                                                        class="ri-delete-bin-5-line"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-block d-sm-flex align-items-center">
                        <div> TOTAL TINGKATAN KELAS: </div>
                        <div class="mt-2 mt-sm-0" style="margin-left: 5px">
                            <div class="">{{ count($data) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        {{-- Datatable --}}
        <link rel="stylesheet" href={{ asset('/noa-assets/assets/libs/datatables/1.12.1/css/dataTables.bootstrap5.min.css') }}>
        <link rel="stylesheet"
            href={{ asset('/noa-assets/assets/libs/datatables/responsive/2.3.0/css/responsive.bootstrap.min.css') }}>
        <link rel="stylesheet"
            href={{ asset('/noa-assets/assets/libs/datatables/buttons/2.2.3/css/buttons.bootstrap5.min.css') }}>
        {{-- Sweet alert --}}
        <link rel="stylesheet" href={{ asset('/noa-assets/assets/libs/sweetalert2/sweetalert2.min.css') }}>


        {{-- Datatable --}}
        <script src="/noa-assets/assets/libs/datatables/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="/noa-assets/assets/libs/datatables/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="/noa-assets/assets/libs/datatables/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
        <script src="/noa-assets/assets/libs/datatables/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="/noa-assets/assets/libs/datatables/buttons/2.2.3/js/buttons.print.min.js"></script>
        <script src="/noa-assets/assets/libs/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
        <script src="/noa-assets/assets/libs/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="/noa-assets/assets/libs/datatables/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="/noa-assets/assets/libs/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

        {{-- Sweet alert --}}
        <script src={{ asset('/noa-assets/assets/libs/sweetalert2/sweetalert2.min.js') }}></script>

        {{-- <script src="{{ asset('pemasukan/index.js') }}"></script> --}}
        <script>
            $("#table-pemasukan").DataTable()
        </script>
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
@endsection
