@extends('layout-admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="#modaltambahrd" data-toggle="modal" type="button" class="btn btn-info">Tambah Baru</a><br><br>
            <table class="table table-paginate" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">Nomer</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Mulai Pendaftaran</th>
                        <th scope="col">Selesai Pendaftaran</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Status</th>
                        <th scope="col" style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($acara as $a)

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>
</script>

<!-- begin::Modal -->
<div class="modal fade" id="modaltambahrd" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Kegiatan</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Waktu Awal</label>
                                    <input type="time" class="form-control" id="waktu_awal" name="waktu_awal" required>
                                </div>
                                <div class="form-group col-6">
                                    <label>Waktu Akhir</label>
                                    <input type="time" class="form-control" id="waktu_akhir" name="waktu_akhir" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <input type="text" class="form-control" id="content" name="content">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection