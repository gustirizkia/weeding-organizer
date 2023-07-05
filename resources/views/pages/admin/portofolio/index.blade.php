@extends('pages.admin.layout-admin')

@section('title')
    Portofolio
@endsection

@push('addStyle')
    <style>
        .bukti_bayar{
            height: 16px;
        }
    </style>
@endpush

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-end my-3">
                <div class="col-md-6 text-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                </div>
            </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{route('portofolio.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Data</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                      <label for="">Photo</label>
                      <input type="file" class="form-control" name="photo" required>
              </div>
              <div class="mb-3">
                  <label for="">Deskripsi</label>
                  <input type="text" class="form-control" name="deskripsi" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Image</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $index => $item)
                            <tr>
                                <th scope="row">{{$index+1}}</th>
                                <td>{{$item->deskripsi}}</td>
                                <td>
                                    <img src="{{asset("storage/$item->photo")}}" width="100" alt="">
                                </td>
                                <td>
                                    <form action="{{route('portofolio.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                        <div class="btn btn-danger btn-sm ms-2 delete_confirm">Hapus</div>
                                    </form>
                                </td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
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
