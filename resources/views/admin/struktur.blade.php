@extends('layout.admin')

@section('content')
<div class="container-fluid">
    
</div>
    <div class="row">
        @if(session('status'))
            <div class="alert alert-success" id="status">
                {{session('status')}}
            </div>
        @endif

        

        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-10">
                        <button href="" data-toggle="modal" type="button" class="btn btn-info" data-target="#modaltambahrd" >Tambah Anggota</button><br><br>
                     </div>
                    <select name="" id="" class="select-divisi">
                        <option value="" selected disabled>-- Pilih Divisi --</option>
                        @foreach($divisi as $d){
                            <option value="{{$d->id}}" >{{$d->nama}}</option>
                        }
                        @endforeach
                    </select>
                    <br> <br>
                    <h4 class="header-title" id="title"></h4>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Jabatan</th>
                                    <th>NRP</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="list">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- begin::Modal Tambah -->
    <div class="modal fade" id="modaltambahrd" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="/admin/struktur/tambah" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Anggota</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">

                            <div class="form-group">
                                <label>NRP</label>
                                <input type="text" class="form-control" id="" name="nrp" required>
                            </div>
                             <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="" name="nama" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" id="" name="jurusan" required>
                            </div>
                            <div class="form-group">
                                <label>Divisi</label>
                                <select name="divisi" id="" class="slt-divisi" >
                                    <option value="" selected disabled>-- Pilih Divisi --</option>
                                    @foreach($divisi as $d){
                                        <option value="{{$d->id}}" >{{$d->nama}}</option>
                                    }
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select name="jabatan" id="select-jabatan-tambah" class="slt-jabatan">
                                    <option value="" selected disabled>-- Pilih Divisi --</option>
    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto Profil</label>
                                <input type="file" name="foto-tambah" accept="image/png, image/gif, image/jpeg">
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

    <!-- begin:: modal photo -->
    <div class="modal fade" id="modal-photo" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="modal-foto-tilte"></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-body">
                             <img src="" alt="" id="foto-anggota">
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>

    <!-- begin::Modal Edit -->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="/admin/struktur/edit" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Edit Anggota</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label>NRP</label>
                                <input type="text" class="form-control" id="nrp_edit" name="" disabled>
                                <input type="hidden" name="nrp" id="nrp_hidden">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="nama_edit" name="nama" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" id="jurusan_edit" name="jurusan" required>
                            </div>
                            <div class="form-group">
                                <label>Divisi</label>
                                <select name="divisi" id="divisi-edit" class="slt-divisi" >
                                    <option value="" selected disabled>-- Pilih Divisi --</option>
                                    @foreach($divisi as $d)
                                        <option id="{{$d->nama}}" value="{{$d->id}}" >{{$d->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select name="jabatan" id="jabatan-edit" class="slt-jabatan">
                                    <option value="" selected disabled>-- Pilih Divisi --</option>
    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto Profil</label>
                                <input type="file" name="foto-tambah" accept="image/png, image/gif, image/jpeg">
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

        <!-- begin::Modal Hapus -->
    <div class="modal fade" id="modalHapus" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="/admin/struktur/hapus">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Hapus Anggota</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">
                        Yakin ingin menghapus <span id="anggota_delete"></span> ?
                        <input type="hidden" id="nrp_anggota_delete" name="nrp_anggota_delete" value="">
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
        $(document).on('change', '.select-divisi', function(){
            var divisi = $(this).val();
            $("#list").html('');
            $.ajax({
				type: 'POST',
				url:'{{ route("ambil-struktur") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
					'divisi': divisi
				},
				success: function(data){
					$.each(data.anggota, function(key,value){
                        $("#list").append(`
                                        <tr>
                                        <td>`+ data.anggota[key].jabatan+`</td>
                                        <td>`+ data.anggota[key].nrp+`</td>
                                        <td>`+ data.anggota[key].nama+`</td>
                                        <td>`+ data.anggota[key].jurusan+`</td>
                                        <td><button type="button"  data-toggle="modal" data-target="#modal-photo" nama="`+data.anggota[key].nama+`" value='{{ asset('assets/img/foto_anggota/`+data.anggota[key].foto_profil+`') }}' class='btn btn-primery modal-foto' > Foto Profile</button></td>
                                        <td><button type="button" onclick="(ubah('`+data.anggota[key].nrp+`'))"  data-toggle="modal" data-target="#modalEdit" class='btn btn-success'> Ubah</button></td>
                                        <td><button type="button" data-toggle="modal" data-target="#modalHapus" nama="`+data.anggota[key].nama+`" value="`+data.anggota[key].nrp+`"  class='btn btn-danger btn-hapus'> Hapus</button></td>
                                        </tr>
                        `);
                    });
				}
			});
        });

        $(document).on('change', '.slt-divisi', function(){
            var divisi = $(this).val();
            $(".slt-jabatan").html('');
            $.ajax({
				type: 'POST',
				url:'{{ route("ambil-jabatan") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
                    'divisi': divisi
				},
				success: function(data){
					$.each(data.jabatan, function(key,value){
                        $(".slt-jabatan").append(`
                            <option value="`+ data.jabatan[key].id +`" >`+data.jabatan[key].nama+`</option>
                        `);
                    });
				}
			});
        })
        $(document).on('click', '.modal-foto', function(){
            var foto = $(this).val();
            var nama = $(this).attr('nama');
            $('#modal-foto-tilte').html(nama);
            $('#foto-anggota').attr('src',foto);

        });

        function ubah(nrp){
            $.ajax({
				type: 'POST',
				url:'{{ route("ambil-data-anggota") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
                    'nrp': nrp
				},
				success: function(data){
					$.each(data.anggota_persoanal, function(key,value){
                        $('#nama_edit').val(data.anggota_persoanal[key].nama);
                        $('#nrp_edit').val(data.anggota_persoanal[key].nrp);
                        $('#nrp_hidden').val(data.anggota_persoanal[key].nrp);
                        $('#jurusan_edit').val(data.anggota_persoanal[key].jurusan);
                        var jabatan = data.anggota_persoanal[key].jabatan
                        $.each(data.jabatan, function(key,value){
                            if(data.jabatan[key].nama == jabatan){
                                $('#jabatan-edit').append(`
                                <option value="`+ data.jabatan[key].id +`" selected>`+data.jabatan[key].nama+`</option>
                                `);
                            }
                            else{
                                $('#jabatan-edit').append(`
                                <option value="`+ data.jabatan[key].id +`">`+data.jabatan[key].nama+`</option>
                                `);
                            }
                        })
                        $('#' + data.anggota_persoanal[key].divisi).prop('selected',true);
                        // $('#jabatan-edit').val(data.anggota_persoanal[key].jabatan);
                    });
				}
			});
        }

        $(document).on('click', '.btn-hapus', function(){
            var nrp= $(this).val();
            var nama= $(this).attr('nama');
            $('#anggota_delete').html(nama);
            $('#nrp_anggota_delete').val(nrp);
        });
        
    </script>
@endsection

@section('javascript')
    <script>
        $('#nav-struktur').addClass('active');
    </script>
@endsection