@extends('layouts/master-admin')

@section('title', 'Profil Sekolah')

@section('content-title', 'Profil Sekolah')

@section('warna-divider', 'costume-warna-border-dark')

@section('css')
<link rel="stylesheet" href="{{ asset('plugin/dataTables/datatables.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/dataTables/datatables.js') }}"></script>
<script src="{{ asset('halaman/admin/profil/profil.js') }}"></script>
@endsection

@section('content')

{{-- Profile Sekolah  --}}
<div class="container">
    <div class="card card-primary collapsed-card ">
        <div class="card-header">
            <h3 class="card-title">Profil</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <a id="edit-profil" href="#" class="btn btn-primary mb-4" data-toggle="modal"
                        data-target="#modal-profil">Edit Profil</a>
                    <div class="card">
                        <div class="card-body">
                            <textarea readonly name="" id="" cols="135" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Profile Sekolah  --}}

{{-- Visi dan Misi  --}}
<div class="container">
    <div class="card card-primary collapsed-card ">
        <div class="card-header">
            <h3 class="card-title">Visi dan Misi</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <a id="edit-visi-misi" href="#" class="btn btn-primary mb-4" data-toggle="modal"
                        data-target="#modal-visi-misi">Edit Visi Misi</a>
                    <div class="card">
                        <div class="card-body">
                            <textarea readonly name="" id="" cols="135" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Visi dan Misi  --}}

{{-- Fasilitas --}}
<div class="container">
    <div class="card card-primary collapsed-card ">
        <div class="card-header">
            <h3 class="card-title">Fasilitas</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">         
            <a id="tambah-fasilitas" href="#" class="btn btn-primary mb-4" data-toggle="modal"
                data-target="#modal-fasilitas">Tambah Fasilitas</a>
            <div class="table-responsive">
                <table class="table table-hover text-nowrap" id="fasilitas">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Nama</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sarana</td>
                            <td>Meja</td>
                            <td>80 Unit</td>
                            <td>
                                <a href="javascript:;" class="btn btn-xs btn-primary">Edit Data</a>
                                <a href="javascript:;" class="btn btn-xs btn-danger">Hapus Data</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- End Fasilitas --}}

{{-- Prestasi --}}
<div class="container">
    <div class="card card-primary collapsed-card ">
        <div class="card-header">
            <h3 class="card-title">Prestasi</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <a id="tambah-prestasi" href="#" class="btn btn-primary mb-4" data-toggle="modal"
                data-target="#modal-prestasi">Tambah Prestasi</a>
            <div class="table-responsive">
                <table class="table table-hover text-nowrap" id="prestasi">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Peringkat</th>
                            <th>Lomba</th>
                            <th>Penyelenggara</th>
                            <th>Waktu</th>
                            <th>Jenis</th>
                            <th>Oleh</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>JUARA 1</td>
                            <td>Tartil Al-Qur'an</td>
                            <td>Kec. Tambaksari</td>
                            <td>2013-06-04</td>
                            <td>Tartil Al-Qur'an</td>
                            <td>Rifkiyanti Nuriyah</td>
                            <td>
                                <a href="javascript:;" class="btn btn-xs btn-primary">Edit Data</a>
                                <a href="javascript:;" class="btn btn-xs btn-danger">Hapus Data</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- End Prestasi --}}

{{-- Modal-Profile --}}
<div class="modal fade" id="modal-profil" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 1000px !important">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="form-profil">
                <div class="modal-body">
                    <div class="col-7">
                        <textarea id="summernote"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="tombol-submit-profil" class="btn btn-primary"></button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Modal Profile --}}

{{-- Modal Visi Misi --}}
<div class="modal fade" id="modal-visi-misi" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 1000px !important">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Visi Misi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" id="form-visi-misi">
                <div class="modal-body">
                    <div class="col-7">
                        <textarea id="summernote"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="tombol-submit-visi-misi" class="btn btn-primary"></button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Modal Visi Misi --}}

{{-- Modal Fasilitas --}}
<div class="modal fade" id="modal-fasilitas" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="form-fasilitas">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Jenis</span>
                        </div>
                        <select required name="jenis_fasilitas" class="form-control">
                            <option value="" selected>-- Silahkan Dipilih --</option>
                            <option value="Sarana">Sarana</option>
                            <option value="Prasarana">Prasarana</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nama</span>
                        </div>
                        <input required name="nama_fasilitas" id="nama_fasilitas" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Jumlah Unit</span>
                        </div>
                        <input required name="jumlah_fasilitas" id="jumlah_fasilitas" type="number" min="1"
                            class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="tombol-submit-fasilitas" class="btn btn-primary"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Fasilitas --}}

{{-- Modal Prestasi --}}
<div class="modal fade" id="modal-prestasi" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="form-prestasi">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Peringkat</span>
                        </div>
                        <select required name="peringkat_prestasi" class="form-control">
                            <option value="" selected>-- Silahkan Dipilih --</option>
                            <option value="Juara 1">Juara 1</option>
                            <option value="Juara 2">Juara 2</option>
                            <option value="Juara 3">Juara 3</option>
                            <option value="Harapan 1">Harapan 1</option>
                            <option value="Harapan 2">Harapan 2</option>
                            <option value="Harapan 3">Harapan 3</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Lomba</span>
                        </div>
                        <input required name="nama_lomba" id="nama_lomba" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Penyelenggara</span>
                        </div>
                        <input required name="penyelenggara_lomba" id="penyelenggara_lomba" type="text"
                            class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Waktu</span>
                        </div>
                        <input required name="waktu_lomba" id="waktu_lomba" type="date" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Jenis</span>
                        </div>
                        <select required name="jenis_lomba" class="form-control">
                            <option value="" selected>-- Silahkan Dipilih --</option>
                            <option value="Adzan">Adzan</option>
                            <option value="Cerdas Cermat">Cerdas Cermat</option>
                            <option value="Khitobah">Khitobah</option>
                            <option value="Pildacil">Pildacil</option>
                            <option value="Puisi">Puisi</option>
                            <option value="Tahfid">Tahfid</option>
                            <option value="Tartil">Tartil</option>
                            <option value="Wudhu">Wudhu</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Penyelenggara</span>
                        </div>
                        <input required name="peraih_prestasi" id="peraih_prestasi" type="text" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="tombol-submit" class="btn btn-primary"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Prestasi --}}

@endsection
