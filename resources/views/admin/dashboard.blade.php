@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <div class="dashboard-wrapper pt-5 poppins-normal h6 text-white">
            <!-- Shortcut Section Top -->
            <div class="row justify-content-center">
                <!-- Struktur Shortcut -->
                <div class="col-3 p-3" style="height: 200px">
                    <div class="card w-100 h-100 bg-success">
                        <div class="card-body">
                            Struktur Organisasi (Nanti tampilkan jumlah anggota, divisi, selengkapnya)
                        </div>
                    </div>
                </div>

                <!-- Peserta Shortcut -->
                <div class="col-3 p-3" style="height: 200px">
                    <div class="card w-100 h-100 bg-info">
                        <div class="card-body">
                            Jumlah Peserta di semua proker periode ini
                        </div>
                    </div>
                </div>

                <!-- Galeri Shortcut -->
                <div class="col-3 p-3" style="height: 200px">
                    <div class="card w-100 h-100 bg-secondary">
                        <div class="card-body">
                            Galeri KSM
                        </div>
                    </div>
                </div>

                <!-- Bursa Shortcut -->
                <div class="col-3 p-3" style="height: 200px">
                    <div class="card w-100 h-100 bg-danger">
                        <div class="card-body">
                            Bursa Soal KSM
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shortcut Section Bottom -->
            <div class="row justify-content-center">
                <!-- Acara Shortcut -->
                <div class="col-8 p-3" style="height: 500px">
                    <div class="card w-100 h-100 bg-primary">
                        <div class="card-body">
                            Tabel Daftar Target Acara (nama, jumlah pendaftar, target pendaftar, status)
                        </div>
                    </div>
                </div>

                <!-- Info Shortcut -->
                <div class="col-4 p-3" style="height: 500px">
                    <div class="card w-100 h-100 bg-dark">
                        <div class="card-body">
                            Informasi KSM (Visi, Misi, dll)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('#nav-dashboard').addClass('active');
    </script>
@endsection