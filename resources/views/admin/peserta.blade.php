@extends('layout.admin')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card=body">
                    <select name="" id="nama_acara">
                        <option value="" selected disabled>-- Pilih Acara --</option>
                        @foreach ($acara as $a)
                            <option value="{{$a->id}}">{{$a->nama}}</option>
                        @endforeach
                    </select>
                    <button type="button" onclick="tampil()">Tampilkan</button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" id="title"></h4>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                
                                </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
@section('Javascript')
<script>
    function tampil(){
        var id = $('nama_acara').val();
        $.ajax({
				type: 'POST',
				url:'{{ route("ambilpeserta") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
					'id': id
				},
				success: function(data){
					
				}
				});
    }

</script>
@endsection
