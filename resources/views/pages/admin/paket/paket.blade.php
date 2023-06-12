@extends('pages.admin.layout-admin')

@section('title')
    Manajemen Paket
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="d-flex justify-content-between">
                    <a href="{{route('paket.create')}}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>

            <!-- Default Table -->
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pakets as $index => $item)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$item->nama_paket}}</td>
                        <td>Rp {{number_format($item->harga_paket)}}</td>
                        <td>
                            <a href="{{asset('storage/'.$item->thumbnail)}}" data-lightbox="image-{{$item->id}}" data-title="{{$item->nama_paket}}">
                                <i class="bi bi-image"></i>
                            </a>
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('paket.edit', $item->id)}}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{route('paket.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                    <div class="btn btn-danger btn-sm ms-2 delete_confirm">Hapus</div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="12"><div class="text-center">No Data</div></td>
                    </tr>
                @endforelse

            </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
@endsection

@push('addScript')
    <script>
        $('.delete_confirm').click(function(event) {
            console.log("HALLO CLICK");
            var form = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                    title: `Apakah kamu yakin untuk hapus data ini?`,
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: "Tidak"
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
