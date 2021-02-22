@extends('layouts/master')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/guest/pendaftaran/pendaftaran.styles.css') }}">
@endsection

@section('title', 'Pendaftaran Siswa Baru')

@section('content')

<div class="shadow p-3 bg-white rounded">
    <div class="registration-section">
        <section class="registration-section-title">
            <h1>Form Pendaftaran Siswa</h1>
        </section>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jenis_pendaftaran">Jenis Pendaftaran</label>
                    <select required id="inputState" class="form-control">
                        <option selected>Siswa Baru</option>
                        <option>Pindahan</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal_masuk_sekolah">Tanggal Masuk Sekolah</label>
                    <input required type="date" class="form-control" id="tanggal_masuk_sekolah"
                        placeholder="Tanggal Masuk Sekolah">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="namalengkap">NIS</label>
                    <input type="text" class="form-control" id="nis" placeholder="NIS">
                </div>
                <div class="form-group col-md-4">
                    <label for="namalengkap">No Seri SKHUN</label>
                    <input type="text" class="form-control" id="no_skhun" placeholder="Nomer SKHUN">
                </div>
                <div class="form-group col-md-4">
                    <label for="namalengkap">No Peserta Ujian</label>
                    <input type="text" class="form-control" id="no_ujian" placeholder="Nomer Ujian">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="hobi">Hobi</label>
                    <select required id="inputState" class="form-control">
                        <option selected>Olah Raga</option>
                        <option>Kesenian</option>
                        <option>Membaca</option>
                        <option>Menulis</option>
                        <option>Travelin</option>
                        <option>Lainnya</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="cita_cita">Cita - Cita</label>
                    <select required id="inputState" class="form-control">
                        <option selected>PNS</option>
                        <option>TNI / POLRI</option>
                        <option>Guru / Dosen</option>
                        <option>Dokter</option>
                        <option>Politikus</option>
                        <option>Wiraswasta</option>
                        <option>Seni / Lukis / Artis / Sejenis</option>
                        <option>Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                    <label for="namalenkgap">Nama Lengkap</label>
                    <input required type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap">
                </div>
                <div class="form-group col-2">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <select required id="inputState" class="form-control">
                        <option selected>Laki - laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nisn">NISN</label>
                    <input required type="number" class="form-control" id="nisn" placeholder="NISN">
                </div>
                <div class="form-group col-md-6">
                    <label for="nik">NIK</label>
                    <input required type="number" class="form-control" id="nik" placeholder="NIK">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tanggallahir">Tanggal Lahir</label>
                    <input required type="date" class="form-control" id="tanggallahir" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group col-md-6">
                    <label for="tempatlahir">Tempat Lahir</label>
                    <input required type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="agama">Agama</label>
                    <select required id="inputState" class="form-control">
                        <option selected>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Buddha</option>
                        <option>Konghucu</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="kebutuhan_khusus">Berkebutuhan Khusus</label>
                    <select required id="inputState" class="form-control">
                        <option selected>Tidak</option>
                        <option>Tuna Netra</option>
                        <option>Tuna Rungu</option>
                        <option>Grahita Ringan</option>
                        <option>Grahita Sedang</option>
                        <option>Daksa Ringan</option>
                        <option>Daksa Sedang</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="inputAddress">Alamat</label>
                    <input required type="text" class="form-control" id="alamat" placeholder="Alamat">
                </div>
                <div class="form-group col-md-3">
                    <label for="kodepos">Zip</label>
                    <input required type="text" class="form-control" id="kodepos" placeholder="Kode Pos">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Asal Sekolah</label>
                <input required type="text" class="form-control" id="asalsekolah" placeholder="Asal Sekolah">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input required type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select required id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
              
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>

</div>
@endsection