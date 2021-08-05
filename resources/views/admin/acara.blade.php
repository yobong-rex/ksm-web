@extends('layout.admin')

@section('content')
<div class="container-fluid">
@if(session('status'))
            <div class="alert alert-success" id="status">
                {{session('status')}}
            </div>
@endif
    <div class="row">
        <div class="col-md-10">
            <button href="" data-toggle="modal" type="button" class="btn btn-info" data-target="#modaltambahrd">Tambah Baru</button><br><br>
        </div>
    </div>
    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Acara KSM</h4>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                            <th scope="col">Nomer</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Mulai Pendaftaran</th>
                                            <th scope="col">Selesai Pendaftaran</th>
                                            <th scope="col">Tanggal Acara</th>
                                            <th scope="col">Tipe</th>
                                            <th scope="col">Status Pendaftaran</th>
                                            <th scope="col">Status Acara</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($nomer = 1);
                                            @foreach($acara as $a)
                                                <tr>
                                                    @php($tipe = 'Eksternal');
                                                    @php($pendaftaran = 'Close');
                                                    @php($status = 'Progress');
                                                    <?php
                                                    if($a->eksternal == 0){
                                                        $tipe ="Internal";
                                                    }
                                                    if($a->daftar == 1){
                                                        $pendaftaran="Open";
                                                    }
                                                    if($a->selesai == 1){
                                                        $status = "Finish";
                                                    }
                                                    ?>
                                                    <td>{{$nomer}}</td>
                                                    <td>{{$a->nama}}</td>
                                                    <?php
                                                        $tanggal_mulai = date('d/m/Y H:i', strtotime($a->tanggal_mulai));
                                                        $tanggal_akhir = date('d/m/Y H:i', strtotime($a->tanggal_akhir));
                                                    ?>
                                                    <td>{{$tanggal_mulai}}</td>
                                                    <td>{{$tanggal_akhir}}</td>
                                                    <td>{{$a->tanggal_acara}}</td>
                                                    <td>{{$tipe}}</td>
                                                    <td>{{$pendaftaran}}</td>
                                                    <td>{{$status}}</td>
                                                    <td>{{$a->deskripsi}}</td>
                                                    <td><button type="button" value="{{$a->id}}" onclick="ubah('{{$a->id}}')" data-toggle="modal" data-target="#modaledit">Ubah</button> <button type="button" value="{{$a->id}}" class="btn-delete" id_acara="{{$a->id}}" nama_acara="{{$a->nama}}" data-toggle="modal" data-target="#modalHapus">Hapus</button><a href="/admin/acara/excel/{{$a->id}}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a></td>
                                                </tr>
                                                @php($nomer++);
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

</div>
</script>

<!-- begin::Modal Tambah -->
    <div class="modal fade" id="modaltambahrd" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="/admin/acara/tambah">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Acara</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">
                             <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Mulai Pendaftaran</label>
                                <input type="datetime-local" class="form-control" id="" name="tanggal-mulai" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Selesai Pendaftaran</label>
                                <input type="datetime-local" class="form-control" id="" name="tanggal-selesai" required>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Awal Acara</label>
                                    <input type="date" class="form-control" id="" name="waktu_awal" required>
                                </div>
                                <div class="form-group col-6">
                                    <label>Akhir Acara</label>
                                    <input type="date" class="form-control" id="" name="waktu_akhir" required>
                                </div>
                            </div>
                            
                           <div class="form-group">
                                <label>Tipe</label> <br>
                                <input type="radio"  id="" name="tipe" value='1' checked> <label>Eksternal</label>
                                <input type="radio"  id="" name="tipe" value='0'> <label>Internal</label>
                            </div>
                            
                            <div class="form-group">
                                <label>Link Poster</label>
                                <input type="text" class="form-control" id="" name="poster">
                            </div>
                            <div class="form-group">
                                <label>Link Grup WA</label>
                                <input type="text" class="form-control" id="" name="link_grup">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label> <br>
                                <textarea rows="4" cols="50" name="deskripsi" required> </textarea>
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

<!-- begin::Modal Edit -->
    <div class="modal fade" id="modaledit" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="/admin/acara/edit">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Acara</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">
                            <input type="hidden" id='id_acara' name="id_acara">
                             <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Mulai Pendaftaran</label>
                                <input type="datetime-local" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Selesai Pendaftaran</label>
                                <input type="datetime-local" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Awal Acara</label>
                                    <input type="date" class="form-control" id="waktu_awal" name="waktu_awal" required>
                                </div>
                                <div class="form-group col-6">
                                    <label>Akhir Acara</label>
                                    <input type="date" class="form-control" id="waktu_akhir" name="waktu_akhir" required>
                                </div>
                            </div>
                            
                           <div class="form-group">
                                <label>Tipe</label> <br>
                                <input type="radio"  id="eksternal" name="tipe" value='1' > <label>Eksternal</label>
                                <input type="radio"  id="internal" name="tipe" value='0'> <label>Internal</label>
                            </div>
                            <div class="form-group">
                                <label>Status Pendaftaran</label> <br>
                                <input type="radio"  id="open" name="pendaftaran" value='1' > <label>Open</label>
                                <input type="radio"  id="close" name="pendaftaran" value='0'> <label>Close</label>
                            </div>
                            <div class="form-group">
                                <label>Status Selesai</label> <br>
                                <input type="radio"  id="finish" name="selesai" value='1' > <label>Finish</label>
                                <input type="radio"  id="progress" name="selesai" value='0'> <label>Progress</label>
                            </div>
                            <div class="form-group">
                                <label>Link Poster</label>
                                <input type="text" class="form-control" id="poster" name="poster">
                            </div>
                            <div class="form-group">
                                <label>Link Grup WA</label>
                                <input type="text" class="form-control" id="link_grup" name="link_grup">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label> <br>
                                <textarea rows="4" cols="50" name="deskripsi" id='deskripsi' required> </textarea>
                            </div>
                            <div class="form-group">
                                <label>Galeri</label>
                                <textarea rows="4" cols="50" name="deskripsi_galeri" id="galeri" > </textarea>
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

    <!-- modal delete start -->
    <div class="modal fade" id="modalHapus" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="/admin/acara/hapus-peserta">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Konfirmasi</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        
                        Yakin ingin menghapus semua peserta dari acara <span id="acara_delete"></span> ?
                        <input type="hidden" id="id_acara_delete" name="acara_delete">
                        <input type="hidden" id="nama_acara_delete" name="nama_acara_delete">

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function ubah(id){
            var id = id;
            
            $.ajax({
				type: 'POST',
				url:'{{ route("ambil-acara") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
					'id': id
				},
				success: function(data){
					$.each(data.list, function(key,value){
                        $('#id_acara').val(data.list[key].id);
                        $('#nama').val(data.list[key].nama);
                        $('#tanggal_mulai').val(data.mulai);
                        $('#tanggal_selesai').val(data.selesai);
                        $('#waktu_awal').val(data.tanggal_awal);
                        $('#waktu_akhir').val(data.tanggal_akhir);
                        if(data.list[key].eksternal == 0){
                            $('#internal').prop("checked", true);
                        }
                        else{
                            $('#eksternal').prop("checked", true);
                        }
                        if(data.list[key].daftar == 0){
                            $('#close').prop("checked", true);
                        }
                        else{
                            $('#open').prop("checked", true);
                        }
                        if(data.list[key].selesai == 0){
                            $('#progress').prop("checked", true);
                        }
                        else{
                            $('#finish').prop("checked", true);
                        }
                        $('#poster').val(data.list[key].link_gambar);
                        $('#link_grup').val(data.list[key].link_grup);
                        $('#deskripsi').val(data.list[key].deskripsi)
                        $('#galeri').val(data.list[key].deskripsi_galeri);
                    });
				}
			});
        }

        $(document).on('click', '.btn-delete', function(){
            var id_acara = $(this).attr("id_acara");
            var nama_acara = $(this).attr("nama_acara");
            $('#acara_delete').html(nama_acara);
            $('#id_acara_delete').val(id_acara);
            $('#nama_acara_delete').val(nama_acara);
        });

    </script>
@endsection