@extends('layouts/master')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/guest/pendaftaran/pendaftaran.styles.css') }}">
@endsection

@section('script')
<script src="{{ asset('halaman/guest/pendaftaran/pendaftaran.js') }}"></script>
@endsection
@section('title', 'Pendaftaran Siswa Baru')

@section('content')
<div class="shadow p-3 bg-white rounded">
    <div class="registration-section">
        <section class="registration-section-title">
            <h1>Form Pendaftaran Siswa</h1>
        </section>
        <form id="form">
        <div class="card">
            <div class="card-header">
                <h2>Registrasi Peserta Didik</h2>
            </div>
            <div class="card-body">
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
                        <select required id="hobi" class="form-control">
                            <option selected>Olah Raga</option>
                            <option>Kesenian</option>
                            <option>Membaca</option>
                            <option>Menulis</option>
                            <option>Travelin</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div id="tambahan_hobi" class="form-group col-md-6" style="display: none">
                        <label for="hobi">Hobi Lainnya</label>
                        <input type="text" class="form-control" id="form_tambahan_hobi" placeholder="Mohon diisi Hobi anda" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cita_cita">Cita - Cita</label>
                        <select required id="cita_cita" class="form-control">
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
                    <div id="tambahan_cita_cita" class="form-group col-md-6" style="display: none">
                        <label for="hobi">Cita Cita Lainnya</label>
                        <input type="text" class="form-control" id="form_tambahan_cita_cita" placeholder="Mohon diisi Hobi anda" disabled>
                    </div>
                </div>
            </div>
        </div>
    </form>
        <div class="card mt-4">
            <div class="card-header">
                <h2>Data Pribadi</h2>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="namalenkgap">Nama Lengkap</label>
                        <input required type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group col-lg-2 col-12">
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
                            <option>Laras</option>
                            <option>Tuna Wicara</option>
                            <option>Tuna Ganda</option>
                            <option>Hiper Aktif</option>
                            <option>Cerdas Istimewa</option>
                            <option>Bakat Istimewa</option>
                            <option>Kesulitan Belajar</option>
                            <option>Narkoba</option>
                            <option>Indigo</option>
                            <option>Down Sindrom</option>
                            <option>Autis</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="alamat">Alamat</label>
                        <input required type="text" class="form-control" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="rt">RT</label>
                        <input required type="text" class="form-control" id="rt" placeholder="RT">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="rw">RW</label>
                        <input required type="text" class="form-control" id="rw" placeholder="RW">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dusun">Dusun</label>
                    <input required type="text" class="form-control" id="dusun" placeholder="Dusun">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="kecamatan">Kecamatan</label>
                        <input required type="text" class="form-control" id="kecamatan" placeholder="Kecamatan">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kelurahan">Kelurahan</label>
                        <input required type="text" class="form-control" id="kelurahan" placeholder="Kelurahan">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kodepos">Kode Pos</label>
                        <input required type="text" class="form-control" id="kodepos" placeholder="Kode Pos">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tempat_tinggal">Tempat Tinggal</label>
                        <select required id="tempat_tinggal" class="form-control">
                            <option selected>Bersama Orang Tua</option>
                            <option>Wali</option>
                            <option>Kos</option>
                            <option>Asrama</option>
                            <option>Panti Asuhan</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div id="tambahan_tempat_tinggal" class="form-group col-md-6" style="display: none">
                        <label for="form_tambahan_tempat_tinggal">Cita Cita Lainnya</label>
                        <input type="text" class="form-control" id="form_tambahan_tempat_tinggal" placeholder="Mohon diisi Hobi anda" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="moda_transportasi">Moda Transportasi</label>
                        <select required id="moda_transportasi" class="form-control">
                            <option selected>Jalan Kaki</option>
                            <option>Kendaraan Pribadi</option>
                            <option>Kendaraan Umum / Angkot / Pete - pete</option>
                            <option>Jemputan Sekolah</option>
                            <option>Kereta Api</option>
                            <option>Ojek</option>
                            <option>Andong / Bendi / Sado / Becak</option>
                            <option>Perahu Penyebrangan / Rakit / Getek</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div id="tambahan_moda_transportasi" class="form-group col-md-6" style="display: none">
                        <label for="form_tambahan_tempat_tinggal">Mohon diisi</label>
                        <input required type="text" class="form-control" id="form_moda_transportasi" placeholder="Mohon diisi Hobi anda" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="no_hp">Nomor HP</label>
                        <input required type="text" class="form-control" id="nohp" placeholder="Nomor HP">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="no_tlp">Nomor Telepon</label>
                        <input required type="text" class="form-control" id="notlp" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="e-mail">E-mail</label>
                        <input required type="email" class="form-control" id="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="penerima_bantuan">Penerima KPS / PKH / KIP</label>
                        <select required id="inputState" class="form-control">
                            <option selected>Tidak</option>
                            <option>Ya</option>
                        </select>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="no_bantuan">Nomor KPS / PKH / KIP</label>
                        <input required type="text" class="form-control" id="no_bantuan"
                            placeholder="Nomor KPS / PKH / KIP">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="kewarganegaraan">Kewarganegaraan</label>
                        <select required id="inputState" class="form-control">
                            <option selected>WNI</option>
                            <option>WNA</option>
                        </select>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="wna">Asal Negara</label>
                        <input required type="text" class="form-control" id="wna" placeholder="Asal Negara">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="penerima_pip">Layak diusulkan PIP</label>
                        <select required id="inputState" class="form-control">
                            <option selected></option>
                            <option>Ya</option>
                            <option>Tidak</option>
                        </select>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="alasan_pip">Alasan Layak PIP</label>
                        <select required id="inputState" class="form-control">
                            <option selected></option>
                            <option>Pemegang KPS/ PKH / KIP</option>
                            <option>Penerima BSM 2014</option>
                            <option>Yatim Piatu / Panti Asuhan / Panti Sosial</option>
                            <option>Dampak Bencana Alam</option>
                            <option>Pernah Drop Out</option>
                            <option>Siswa Miskin / Rentan Miskin</option>
                            <option>Daerah Konflik</option>
                            <option>Keluarga Terpidana / Berada di LAPAS</option>
                            <option>Kelainan Fisik</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h2>Data Ayah Kandung</h2>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nama_ayah">Nama Ayah Kandung</label>
                        <input required type="text" class="form-control" id="nama_ayah" placeholder="Nama Ayah Kandung">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tahun_ayah">Tahun Lahir</label>
                        <input required type="date" class="form-control" id="thn_ayah" placeholder="Tahun Lahir">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="pendidikan_ayah">Pendidikan</label>
                        <select required id="inputState" class="form-control">
                            <option selected></option>
                            <option>Tidak Sekolah</option>
                            <option>Putus SD</option>
                            <option>SD Sederajat</option>
                            <option>SMP Sederajat</option>
                            <option>SMA Sederajat</option>
                            <option>D1</option>
                            <option>D2</option>
                            <option>D3</option>
                            <option>D4 / S1</option>
                            <option>S2</option>
                            <option>S3</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="pekerjaan_ayah">Pekerjaan</label>
                        <select required id="inputState" class="form-control">
                            <option selected></option>
                            <option>Tidak Bekerja</option>
                            <option>Nelayan</option>
                            <option>Petani</option>
                            <option>Peternak</option>
                            <option>PNS / TNI / POLRI</option>
                            <option>Karyawan Swasta</option>
                            <option>Pedagang Kecil</option>
                            <option>Pedagang Besar</option>
                            <option>Wiraswasta</option>
                            <option>Wirausaha</option>
                            <option>Buruh</option>
                            <option>Pensiunan</option>
                            <option>Lain - lain</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="nama_pekerjaan_ayah">Nama Pekerjaan</label>
                        <input required type="text" class="form-control" id="nama_pekerjaan_ayah" placeholder="Nama Pekerjaan">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="penghasilan_ayah">Penghasilan Bulanan</label>
                        <select required id="inputState" class="form-control">
                            <option selected></option>
                            <option>
                                < 500.000</option> <option>500.000 - 999.999
                            </option>
                            <option>1.000.000 - 1.999.999</option>
                            <option>2.000.000 - 4.999.999</option>
                            <option>5.000.000 - 20.000.000</option>
                            <option>> 20.000.000</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kebutuhan_khusus_ayah">Berkebutuhan Khusus</label>
                        <select required id="inputState" class="form-control">
                            <option selected>Tidak</option>
                            <option>Tuna Netra</option>
                            <option>Tuna Rungu</option>
                            <option>Grahita Ringan</option>
                            <option>Grahita Sedang</option>
                            <option>Daksa Ringan</option>
                            <option>Daksa Sedang</option>
                            <option>Laras</option>
                            <option>Tuna Wicara</option>
                            <option>Tuna Ganda</option>
                            <option>Hiper Aktif</option>
                            <option>Cerdas Istimewa</option>
                            <option>Bakat Istimewa</option>
                            <option>Kesulitan Belajar</option>
                            <option>Narkoba</option>
                            <option>Indigo</option>
                            <option>Down Sindrom</option>
                            <option>Autis</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h2>Data Ibu Kandung</h2>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nama_ibu">Nama Ibu Kandung</label>
                        <input required type="text" class="form-control" id="nama_ibu" placeholder="Nama Ibu Kandung">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tahun_ibu">Tahun Lahir</label>
                        <input required type="date" class="form-control" id="thn_ibu" placeholder="Tahun Lahir">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="pendidikan_ibu">Pendidikan</label>
                        <select required id="inputState" class="form-control">
                            <option selected></option>
                            <option>Tidak Sekolah</option>
                            <option>Putus SD</option>
                            <option>SD Sederajat</option>
                            <option>SMP Sederajat</option>
                            <option>SMA Sederajat</option>
                            <option>D1</option>
                            <option>D2</option>
                            <option>D3</option>
                            <option>D4 / S1</option>
                            <option>S2</option>
                            <option>S3</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="pekerjaan_ibu">Pekerjaan</label>
                        <select required id="inputState" class="form-control">
                            <option selected></option>
                            <option>Tidak Bekerja</option>
                            <option>Nelayan</option>
                            <option>Petani</option>
                            <option>Peternak</option>
                            <option>PNS / TNI / POLRI</option>
                            <option>Karyawan Swasta</option>
                            <option>Pedagang Kecil</option>
                            <option>Pedagang Besar</option>
                            <option>Wiraswasta</option>
                            <option>Wirausaha</option>
                            <option>Buruh</option>
                            <option>Pensiunan</option>
                            <option>Lain - lain</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="nama_pekerjaan_ibu">Nama Pekerjaan</label>
                        <input required type="text" class="form-control" id="nama_pekerjaan_ibu" placeholder="Nama Pekerjaan">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="penghasilan_ibu">Penghasilan Bulanan</label>
                        <select required id="inputState" class="form-control">
                            <option selected></option>
                            <option>
                                < 500.000</option> <option>500.000 - 999.999
                            </option>
                            <option>1.000.000 - 1.999.999</option>
                            <option>2.000.000 - 4.999.999</option>
                            <option>5.000.000 - 20.000.000</option>
                            <option>> 20.000.000</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kebutuhan_khusus_ibu">Berkebutuhan Khusus</label>
                        <select required id="inputState" class="form-control">
                            <option selected>Tidak</option>
                            <option>Tuna Netra</option>
                            <option>Tuna Rungu</option>
                            <option>Grahita Ringan</option>
                            <option>Grahita Sedang</option>
                            <option>Daksa Ringan</option>
                            <option>Daksa Sedang</option>
                            <option>Laras</option>
                            <option>Tuna Wicara</option>
                            <option>Tuna Ganda</option>
                            <option>Hiper Aktif</option>
                            <option>Cerdas Istimewa</option>
                            <option>Bakat Istimewa</option>
                            <option>Kesulitan Belajar</option>
                            <option>Narkoba</option>
                            <option>Indigo</option>
                            <option>Down Sindrom</option>
                            <option>Autis</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h2>Data Wali</h2>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nama_wali">Nama Wali</label>
                        <input required type="text" class="form-control" id="nama_wali" placeholder="Nama Wali">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tahun_wali">Tahun Lahir</label>
                        <input required type="date" class="form-control" id="thn_wali" placeholder="Tahun Lahir">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="pendidikan_wali">Pendidikan</label>
                        <select required id="inputState" class="form-control">
                            <option selected></option>
                            <option>Tidak Sekolah</option>
                            <option>Putus SD</option>
                            <option>SD Sederajat</option>
                            <option>SMP Sederajat</option>
                            <option>SMA Sederajat</option>
                            <option>D1</option>
                            <option>D2</option>
                            <option>D3</option>
                            <option>D4 / S1</option>
                            <option>S2</option>
                            <option>S3</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="pekerjaan_wali">Pekerjaan</label>
                        <select required id="inputState" class="form-control">
                            <option selected></option>
                            <option>Tidak Bekerja</option>
                            <option>Nelayan</option>
                            <option>Petani</option>
                            <option>Peternak</option>
                            <option>PNS / TNI / POLRI</option>
                            <option>Karyawan Swasta</option>
                            <option>Pedagang Kecil</option>
                            <option>Pedagang Besar</option>
                            <option>Wiraswasta</option>
                            <option>Wirausaha</option>
                            <option>Buruh</option>
                            <option>Pensiunan</option>
                            <option>Lain - lain</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="nama_pekerjaan_wali">Nama Pekerjaan</label>
                        <input required type="text" class="form-control" id="nama_pekerjaan_wali" placeholder="Nama Pekerjaan">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="penghasilan_wali">Penghasilan Bulanan</label>
                        <select required id="inputState" class="form-control">
                            <option selected></option>
                            <option>
                                < 500.000</option> <option>500.000 - 999.999
                            </option>
                            <option>1.000.000 - 1.999.999</option>
                            <option>2.000.000 - 4.999.999</option>
                            <option>5.000.000 - 20.000.000</option>
                            <option>> 20.000.000</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h2>Data Periodik</h2>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tinggi_badan">Tinggi Badan</label>
                        <div class="input-group mb-3">
                            <input required type="number" min="0" class="form-control" id="tinggi_badan"
                                placeholder="Tinggi Badan">
                            <div class="input-group-append">
                                <span class="input-group-text" id="tinggi_badan">cm</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="berat_badan">Berat Badan</label>
                        <div class="input-group mb-3">
                            <input required type="number" min="0" class="form-control" id="berat_badan"
                                placeholder="Berat Badan">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon3">kg</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jarak_tempuh">Jarak tempat tinggal ke sekolah</label>
                        <select required id="inputState" class="form-control">
                            <option selected>
                                < 1 KM</option> <option>> 1 KM
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jarak_tempuh_angka">Jarak Tempuh (Nilai Angka)</label>
                        <div class="input-group mb-3">
                            <input required type="number" min="0" class="form-control" id="jarak_tempuh_angka"
                                placeholder="Jarak Tempuh">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon3">km</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="waktu_tempuh_jam">Waktu Tempuh</label>
                        <div class="input-group mb-3">
                            <input required type="number" min="0" class="form-control" id="waktu_tempuh_jam"
                                placeholder="Waktu Tempuh">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon3">jam</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="waktu_tempuh_menit"> <br> </label>
                        <div class="input-group mb-3">
                            <input required type="number" min="0" max="59" class="form-control" id="waktu_tempuh_menit"
                                placeholder="Waktu Tempuh">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon3">menit</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="jumlah_saudara">Jumlah Saudara Kandung</label>
                        <input required type="number" min="0" class="form-control" id="jumlah_saudara"
                            placeholder="Jumlah Saudara Kandung">
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h2>Prestasi</h2>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-ms-2">
                        <label for="jenis_prestasi">Jenis</label>
                        <select required id="inputState" class="form-control">
                            <option selected>Sains</option>
                            <option>Seni</option>
                            <option>Olahraga</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group col-ms-2">
                        <label for="tingkat_prestasi">Tingkat</label>
                        <select required id="inputState" class="form-control">
                            <option selected>Sekolah</option>
                            <option>Kecamatan</option>
                            <option>Kabupaten</option>
                            <option>Provinsi</option>
                            <option>Nasional</option>
                            <option>Internasional</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="nama_prestasi">Nama Prestasi</label>
                        <input required type="text" class="form-control" id="nama_prestasi" placeholder="Nama Prestasi">
                    </div>
                    <div class="form-group col-ms-2">
                        <label for="tahun_prestasi">Tahun</label>
                        <input required type="date" class="form-control" id="tahun_prestasi" placeholder="Tahun">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="nama_penyelenggara">Nama Penyelenggara</label>
                        <input required type="text" class="form-control" id="nama_penyelenggara"
                            placeholder="Nama Penyelenggara">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col mb-3">Tambah Prestasi</button>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h2>Beasiswa</h2>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="jenis_beasiswa">Jenis</label>
                        <select required id="inputState" class="form-control">
                            <option selected>Anak Berprestasi</option>
                            <option>Anak Miskin</option>
                            <option>Pendidikan</option>
                            <option>Unggulan</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="keterangan_beasiswa">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan_beasiswa" placeholder="Keterangan">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tahun_mulai_beasiswa">Tahun Mulai</label>
                        <input required type="date" class="form-control" id="tahun_mulai_beasiswa"
                            placeholder="Tahun Mulai">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tahun_akhir_beasiswa">Tahun Selesai</label>
                        <input required type="date" class="form-control" id="tahun_akhir_beasiswa"
                            placeholder="Tahun Selesai">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col mb-3">Tambah Beasiswa</button>
            </div>
        </div>
        <div class="form-group mt-4">
            <label for="inputAddress">Asal Sekolah</label>
            <input required type="text" class="form-control" id="asalsekolah" placeholder="Asal Sekolah">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>

</div>
@endsection