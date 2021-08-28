@extends('layout.admin')

@section('content')
    <div class="row">
    @if(session('status'))
            <div class="alert alert-danger" id="status">
                {{session('status')}}
            </div>
    @endif
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card=body">
                    <form action="/admin/peserta/ambil" method='post'>
                    @csrf
                        <select name="id" id="nama_acara">
                            <option value="" selected disabled>-- Pilih Acara --</option>
                            @foreach ($acara as $a)
                                <option value="{{$a->id}}">{{$a->nama}}</option>
                            @endforeach
                        </select>
                        <button type="submit" name='' class="a">Tampilkan</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" id="title"></h4>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Nomer</th>
                                    <th>Nama</th>
                                    <th>NRP</th>
                                    <th>Email</th>
                                    <th>Jurusan</th>
                                    <th>No Hp</th>
                                    <th>Waktu Daftar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="list">
                                <?php
                                    if($peserta != null){
                                        $nomer = 1;
                                        foreach ($peserta as $p){
                                            echo'<tr>
                                                    <td>'.$nomer.'</td>
                                                    <td>'.$p->nama.'</td>
                                                    <td>'.$p->nrp.'</td>
                                                    <td>'.$p->email.'</td>
                                                    <td>'.$p->jurusan.'</td>
                                                    <td>'.$p->no_hp.'</td>
                                                    <td>'.date("d/m/Y H:i", strtotime($p->waktu)).'</td>
                                                    <td><button id="'.$p->id.'" nama_peserta="'.$p->nama.'"  class="btn btn-danger btn-hapus" data-toggle="modal" data-target="#modalhapus">Hapus</button></td>
                                                </tr>';
                                        $nomer++;
                                        }
                                    }
                                ?>
                                   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="modalhapus" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="/admin/peserta/hapus">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Konfirmasi</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        yakin menghapus peserta <span id='nama-peserta'></span>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" value='' name='id_hapus' id='submit-hapus' class="btn btn-info">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).on('click', '.btn-hapus', function(){
            var nama = $(this).attr('nama_peserta');
            var id = $(this).attr("id");
            $('#nama-peserta').html(nama);
            $('#submit-hapus').val(id);
        });
    </script>
@endsection

@section('javascript')
    <script>
        $('#nav-peserta').addClass('active');
    </script>
@endsection