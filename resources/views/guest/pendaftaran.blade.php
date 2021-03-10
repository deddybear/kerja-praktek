@extends('layouts/master')

@section('css')
<link rel="stylesheet" href="{{ asset('/plugin/datepicker/css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/sweetalert2/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ asset('halaman/guest/pendaftaran/pendaftaran.styles.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugin/datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('plugin/sweetalert2/sweetalert.min.js') }}"></script>
<script src="{{ asset('plugin/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('halaman/guest/pendaftaran/pendaftaran.js') }}"></script>

@endsection
@section('title', 'Pendaftaran Siswa Baru')

@section('content')
<div class="shadow p-3 bg-white rounded">
    <div class="registration-section">
        <section class="registration-section-title">
            <h1>Form Pendaftaran Siswa</h1>
        </section>
        <form id="form" action="/daftar/siswa-baru" method="POST" >
            @csrf
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Registrasi Peserta Didik</h2>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="jenis_pendaftaran">Jenis Pendaftaran</label>
                            <select required name="statusPendaftaran" id="statusPendaftaran" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="Siswa Baru">Siswa Baru</option>
                                <option value="Pindahan">Pindahan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Apakah Pernah PAUD : </label>
                            <div class="form-check form-check-inline mx-3">
                                <input class="form-check-input" type="radio" name="status_paud" id="statusPaud1" value="1">
                                <label class="form-check-label" for="statusPaud1">Iya</label>
                            </div>
                            <div class="form-check form-check-inline mx-3">
                              <input class="form-check-input" type="radio" name="status_paud" id="statusPaud0" value="0">
                              <label class="form-check-label" for="statusPaud0">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Apakah Pernah TK : </label>
                            <div class="form-check form-check-inline mx-3">
                                <input class="form-check-input" type="radio" name="status_tk" id="statusTk1" value="1">
                                <label class="form-check-label" for="statusTk1">Iya</label>
                            </div>
                            <div class="form-check form-check-inline mx-3">
                              <input class="form-check-input" type="radio" name="status_tk" id="statusTk0" value="0">
                              <label class="form-check-label" for="statusTk0">Tidak</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            {{-- Card Data Pribadi --}}
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Data Pribadi</h2>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="namalenkgap">Nama Lengkap</label>
                            <input required type="text" class="form-control" name="namalengkap" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-lg-2 col-12">
                            <label for="jeniskelamin">Jenis Kelamin</label>
                            <select required name="jenis_kelamin" class="form-control">
                                <option value="L" selected>Laki - laki</option>
                                <option value="P" >Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div id="form-nisn" class="form-group col-md-6" style="display: none">
                            <label for="nisn">NISN</label>
                            <input required id="form-tambahan-pindahan" type="number" min="0" class="form-control" name="nisn" placeholder="NISN" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nik">NIK</label>
                            <input required type="number" min="0" class="form-control" name="nik" placeholder="NIK">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tanggallahir">Tanggal Lahir</label>
                            <input required type="date" class="form-control" name="tanggallahir" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tempatlahir">Tempat Lahir</label>
                            <input required type="text" class="form-control" name="tempatlahir" placeholder="Tempat Lahir">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="agama">Agama</label>
                            <select required name="agama" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kebutuhan_khusus">Berkebutuhan Khusus</label>
                            <select required name="kebutuhan_khusus" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="Tidak Ada">Tidak</option>
                                <option value="Tuna Netra">Tuna Netra</option>
                                <option value="Tuna Tungu">Tuna Rungu</option>
                                <option value="Tuna Grahita Ringan">Tuna Grahita Ringan</option>
                                <option value="Tuna Grahita Sedang">Tuna Grahita Sedang</option>
                                <option value="Tuna Daksa Ringan">Tuna Daksa Ringan</option>
                                <option value="Tuna Daksa Sedang">Tuna Daksa Sedang</option>
                                <option value="Tuna Laras">Tuna Laras</option>
                                <option value="Tuna Wicara">Tuna Wicara</option>
                                <option value="Tuna Ganda">Tuna Ganda</option>
                                <option value="Hiper Aktif">Hiper Aktif</option>
                                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                <option value="Bakat Istimewa">Bakat Istimewa</option>
                                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                <option value="Narkoba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Down Sindrom">Down Sindrom</option>
                                <option value="Autis">Autis</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Asal Sekolah</label>
                            <input required type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jumlah_saudara">Jumlah Saudara Kandung</label>
                            <input required type="number" min="0" class="form-control" name="jumlah_saudara" placeholder="Jumlah Saudara Kandung">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="hobi">Hobi</label>
                            <select required name="hobi" id="hobi" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="Olahraga">Olah Raga</option>
                                <option value="Kesenian">Kesenian</option>
                                <option value="Membaca">Membaca</option>
                                <option value="Menulis">Menulis</option>
                                <option value="Travelin">Travelin</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div id="tambahan_hobi" class="form-group col-md-6" style="display: none">
                            <label for="form_tambahan_hobi">Lainnya, Sebutkan</label>
                            <input type="text" class="form-control" name="hobi_lainnya" id="form_tambahan_hobi" placeholder="Hobi" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cita_cita">Cita - Cita</label>
                            <select required name="cita_cita" id="cita_cita" class="form-control">
                                <option value="" selected>--Silahkan Pilih--</option>
                                <option value="PNS">PNS</option>
                                <option value="TNI / POLRI">TNI / POLRI</option>
                                <option value="Guru / Dosen">Guru / Dosen</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Politikus">Politikus</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Seni / Lukis / Artis ">Seni / Lukis / Artis / Sejenis</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div id="tambahan_cita_cita" class="form-group col-md-6" style="display: none">
                            <label for="form_tambahan_cita_cita">Lainnya, Sebutkan</label>
                            <input type="text" class="form-control" nama="cita_lainnya" id="form_tambahan_cita_cita" placeholder="Cita - Cita" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="alamat">Alamat</label>
                            <input required type="text" class="form-control" name="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="rt">RT</label>
                            <input required type="number" min="0" max="100" class="form-control" name="rt" placeholder="RT">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="rw">RW</label>
                            <input required type="number" min="0" max="100" class="form-control" name="rw" placeholder="RW">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dusun">Dusun</label>
                        <input type="text" class="form-control" name="dusun" placeholder="Dusun">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="kecamatan">Kecamatan</label>
                            <input required type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kelurahan">Kelurahan</label>
                            <input required type="text" class="form-control" name="kelurahan" placeholder="Kelurahan">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="kodepos">Kode Pos</label>
                            <input required type="number" min="0" class="form-control" name="kodepos" placeholder="Kode Pos">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tempat_tinggal">Tempat Tinggal</label>
                            <select required name="tempat_tinggal" id="tempat_tinggal" class="form-control">
                                <option selected>--Silakan Pilih--</option>
                                <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                <option value="Wali">Wali</option>
                                <option value="Kos">Kos</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div id="tambahan_tempat_tinggal" class="form-group col-md-6" style="display: none">
                            <label for="form_tambahan_tempat_tinggal">Sebutkan</label>
                            <input type="text" class="form-control" name="tempat_tinggal_lainnya" id="form_tambahan_tempat_tinggal" placeholder="Tempat Tinggal" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="moda_transportasi">Moda Transportasi</label>
                            <select required name="moda_transportasi" id="moda_transportasi" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="Jalan Kaki">Jalan Kaki</option>
                                <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                <option value="Kendaraan Umum">Kendaraan Umum / Angkot / Pete - pete</option>
                                <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                <option value="Kereta Api">Kereta Api</option>
                                <option value="Ojek">Ojek</option>
                                <option value="Becak">Andong / Bendi / Sado / Becak</option>
                                <option value="Perahu Penyebrangan">Perahu Penyebrangan / Rakit / Getek</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div id="tambahan_moda_transportasi" class="form-group col-md-6" style="display: none">
                            <label for="form_moda_transportasi">Sebutkan</label>
                            <input required type="text" class="form-control" name="transportasi_lainnya" id="form_moda_transportasi" placeholder="Moda Transportasi" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="no_hp">Nomor HP *</label>
                            <input type="text" class="form-control" name="nmr_hp_peserta" id="nohp" placeholder="Nomor HP">
                            <span class="text-danger tulisan-cilik">Keterangan ( * ) = Silakan di isi bila ada</span>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="no_tlp">Nomor Telepon *</label>
                            <input type="text" class="form-control" name="nmr_tlp_peserta" id="notlp" placeholder="Nomor Telepon">
                            <span class="text-danger tulisan-cilik">Keterangan ( * ) = Silakan di isi bila ada</span>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="e-mail">E-mail *</label>
                            <input type="email" class="form-control" name="email_peserta" id="email" placeholder="E-mail">
                            <span class="text-danger tulisan-cilik">Keterangan ( * ) = Silakan di isi bila ada</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="penerima_bantuan">Penerima Bantuan</label>
                            <select required name="status_kps" id="status_kps" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="0">Tidak</option>
                                <option value="1">Ya</option>
                            </select>
                        </div>
                        <div id="tambahan_jenis_bantuan" class="form-group col-md-4" style="display: none">
                            <label for="jenis_bantuan">Jenis Bantuan</label>
                            <select required name="jenis_bantuan" id="jenis_bantuan" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="KPS">Kartu Perlindugnan Sosial (KPS)</option>
                                <option value="PKH">Program Keluarga Harapan</option>
                                <option value="KIP">Kartu Indonesia Pintar</option>
                            </select>
                        </div>
                        <div id="tambahan_nomor_bantuan" class="form-group col-md-5" style="display: none">
                            <label for="no_bantuan">Nomor KPS / PKH / KIP</label>
                            <input required type="number" class="form-control" name="nomer_bantuan" id="no_bantuan" placeholder="Nomor KPS / PKH / KIP" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="kewarganegaraan">Kewarganegaraan</label>
                            <select required name="status_warga" id="status_warga" class="form-control">
                                <option value="" selected>--Silakan PIlih--</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                        <div id="tambahan_status_warga" class="form-group col-md-9" style="display: none">
                            <label for="wna">Asal Negara</label>
                            <input required type="text" class="form-control" name="negara_asal" id="wna" placeholder="Asal Negara" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="penerima_pip">Layak diusulkan PIP</label>
                            <select required name="status_pip" id="status_pip" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="0">Tidak</option>
                                <option value="1">Ya</option>
                            </select>
                        </div>
                        <div id="tambahan_status_pip" class="form-group col-md-9" style="display: none">
                            <label for="alasan_pip">Alasan Layak PIP</label>
                            <select disabled name="alasan_pip" required id="jenis_alasan_pip" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="Pemegang KPS / PKH / KIP">Pemegang KPS/ PKH / KIP</option>
                                <option value="Penerima BSM 2014">Penerima BSM 2014</option>
                                <option value="Yatim Piatu">Yatim Piatu / Panti Asuhan / Panti Sosial</option>
                                <option value="Dampak Bencana Alam">Dampak Bencana Alam</option>
                                <option value="Pernah Drop Out">Pernah Drop Out</option>
                                <option value="Siswa Miskin">Siswa Miskin / Rentan Miskin</option>
                                <option value="Daerah Konflik">Daerah Konflik</option>
                                <option value="Kelurga Terpidana / Berada di Lapas">Keluarga Terpidana / Berada di LAPAS</option>
                                <option value="Kelainan Fisik">Kelainan Fisik</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Card Data Pribadi --}}

            {{-- Card Data Ayah  --}}
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Data Ayah</h2>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="nama_ayah">Nama Ayah </label>
                            <input required type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah ">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="nama_ayah">Tempat Lahir</label>
                            <input required type="text" class="form-control" name="tempat_lahir_ayah" placeholder="Nama Ayah ">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="tahun_ayah">Tanggal Lahir</label>
                            <input required type="text" class="form-control format-date" name="tanggal_lahir_ayah" placeholder="Tahun Lahir">
                        </div>
                    </div>                                       
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="pekerjaan_ayah">Pekerjaan</label>
                            <input required type="text" class="form-control" name="pekerjaan_ayah" placeholder="Perkerjaan Ayah">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="pendidikan_ayah">Pendidikan</label>
                            <select required name="pendidikan_ayah" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD">SD Sederajat</option>
                                <option value="SMP">SMP Sederajat</option>
                                <option value="SMA">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4 / S1">D4 / S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>                        
                        <div class="form-group col-md-4">
                            <label for="penghasilan_ayah">Penghasilan Bulanan</label>
                            <select required name="penghasilan_ayah" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="< 500.000">< 500.000</option> 
                                <option value="500.000 - 999.999">500.000 - 999.999</option>
                                <option value="1.000.000 - 1.999.999">1.000.000 - 1.999.999</option>
                                <option value="2.000.000 - 4.999.999">2.000.000 - 4.999.999</option>
                                <option value="5.000.000 - 20.000.000">5.000.000 - 20.000.000</option>
                                <option value="> 20.000.000">> 20.000.000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="no_hp_ayah">Nomor HP *</label>
                            <input type="number" min="0" class="form-control" name="nohp_ayah" placeholder="Nomor HP">
                            <span class="text-danger tulisan-cilik">Keterangan ( * ) = Silakan di isi bila ada</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_tlp_ayah">Nomor Telepon *</label>
                            <input type="number" min="0" class="form-control" name="notlp_ayah" placeholder="Nomor Telepon">
                            <span class="text-danger tulisan-cilik">Keterangan ( * ) = Silakan di isi bila ada</span>
                        </div>                
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kebutuhan_khusus_ayah">Berkebutuhan Khusus</label>
                            <select required name="kebutuhan_khusus_ayah" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="Tidak Ada">Tidak</option>
                                <option value="Tuna Netra">Tuna Netra</option>
                                <option value="Tuna Tungu">Tuna Rungu</option>
                                <option value="Tuna Grahita Ringan">Tuna Grahita Ringan</option>
                                <option value="Tuna Grahita Sedang">Tuna Grahita Sedang</option>
                                <option value="Tuna Daksa Ringan">Tuna Daksa Ringan</option>
                                <option value="Tuna Daksa Sedang">Tuna Daksa Sedang</option>
                                <option value="Tuna Laras">Tuna Laras</option>
                                <option value="Tuna Wicara">Tuna Wicara</option>
                                <option value="Tuna Ganda">Tuna Ganda</option>
                                <option value="Hiper Aktif">Hiper Aktif</option>
                                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                <option value="Bakat Istimewa">Bakat Istimewa</option>
                                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                <option value="Narkoba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Down Sindrom">Down Sindrom</option>
                                <option value="Autis">Autis</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Card Data Ayah  --}}

            {{-- Card Data Ibu  --}}
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Data Ibu</h2>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="nama_ibu">Nama Ibu </label>
                            <input required type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu ">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="tempat_lahir_ibu">Tempat Lahir</label>
                            <input required type="text" class="form-control" name="tempat_lahir_ibu" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="tanggal_lahir_ibu">Tanggal Lahir</label>
                            <input required type="text" class="form-control format-date" name="tanggal_lahir_ibu" placeholder="Tanggal Lahir">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="pekerjaan_ibu">Pekerjaan</label>
                            <input required type="text" class="form-control" name="pekerjaan_ibu" placeholder="Perkerjaan Ibu">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="pendidikan_ibu">Pendidikan</label>
                            <select required name="pendidikan_ibu" class="form-control">
                                <option value="" selected>--Silakan PIlih--</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD">SD Sederajat</option>
                                <option value="SMP">SMP Sederajat</option>
                                <option value="SMA">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4 / S1">D4 / S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="penghasilan_ibu">Penghasilan Bulanan</label>
                            <select required name="penghasilan_ibu" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="> 500.000">< 500.000</option> 
                                <option value="500.000 - 999.999">500.000 - 999.999</option>
                                <option value="1.000.000 - 1.999.999">1.000.000 - 1.999.999</option>
                                <option value="2.000.000 - 4.999.999">2.000.000 - 4.999.999</option>
                                <option value="5.000.000 - 20.000.000">5.000.000 - 20.000.000</option>
                                <option value="> 20.000.000">> 20.000.000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="no_hp_ibu">Nomor HP *</label>
                            <input type="number" min="0" class="form-control" name="nohp_ibu" placeholder="Nomor HP">
                            <span class="text-danger tulisan-cilik">Keterangan ( * ) = Silakan di isi bila ada</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_tlp_ibu">Nomor Telepon *</label>
                            <input type="number" min="0" class="form-control" name="notlp_ibu" placeholder="Nomor Telepon">
                            <span class="text-danger tulisan-cilik">Keterangan ( * ) = Silakan di isi bila ada</span>
                        </div>                     
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kebutuhan_khusus_ibu">Berkebutuhan Khusus</label>
                            <select required name="kebutuhan_khusus_ibu" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="Tidak Ada">Tidak</option>
                                <option value="Tuna Netra">Tuna Netra</option>
                                <option value="Tuna Tungu">Tuna Rungu</option>
                                <option value="Tuna Grahita Ringan">Tuna Grahita Ringan</option>
                                <option value="Tuna Grahita Sedang">Tuna Grahita Sedang</option>
                                <option value="Tuna Daksa Ringan">Tuna Daksa Ringan</option>
                                <option value="Tuna Daksa Sedang">Tuna Daksa Sedang</option>
                                <option value="Tuna Laras">Tuna Laras</option>
                                <option value="Tuna Wicara">Tuna Wicara</option>
                                <option value="Tuna Ganda">Tuna Ganda</option>
                                <option value="Hiper Aktif">Hiper Aktif</option>
                                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                <option value="Bakat Istimewa">Bakat Istimewa</option>
                                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                <option value="Narkoba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Down Sindrom">Down Sindrom</option>
                                <option value="Autis">Autis</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Card Data Ibu  --}}

            {{-- Card Data Wali --}}
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Data Wali</h2>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="nama_wali">Nama Wali</label>
                            <input required type="text" class="form-control" name="nama_wali" placeholder="Nama Wali">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="tempat_lahir_wali">Tempat</label>
                            <input required type="text" class="form-control" name="tempat_lahir_wali" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="tanggal_lahir_wali">Tanggal Lahir</label>
                            <input required type="text" class="form-control format-date" name="tanggal_lahir_wali" placeholder="Tanggal Lahir">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="pekerjaan_wali">Pekerjaan</label>
                            <input required type="text" class="form-control" name="pekerjaan_wali" placeholder="Perkerjaan Wali">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="pendidikan_wali">Pendidikan</label>
                            <select required name="pendidikan_wali" class="form-control">
                                <option value="" selected>--Silakan Pilih--</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Putus SD">Putus SD</option>
                                <option value="SD">SD Sederajat</option>
                                <option value="SMP">SMP Sederajat</option>
                                <option value="SMA">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4 / S1">D4 / S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="penghasilan_wali">Penghasilan Bulanan</label>
                            <select required name="penghasilan_wali" class="form-control">
                                <option value="" selected>--Silahkan Pilih--</option>
                                <option value="< 500.000">< 500.000</option> 
                                <option value="500.000 - 999.999">500.000 - 999.999</option>
                                <option value="1.000.000 - 1.999.999">1.000.000 - 1.999.999</option>
                                <option value="2.000.000 - 4.999.999">2.000.000 - 4.999.999</option>
                                <option value="5.000.000 - 20.000.000">5.000.000 - 20.000.000</option>
                                <option value="> 20.000.000">> 20.000.000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="no_hp_wali">Nomor HP *</label>
                            <input type="number" min="0" class="form-control" name="nohp_wali" placeholder="Nomor HP">
                            <span class="text-danger tulisan-cilik">Keterangan ( * ) = Silakan di isi bila ada</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_tlp_wali">Nomor Telepon *</label>
                            <input type="number" min="0" class="form-control" name="notlp_wali" placeholder="Nomor Telepon">
                            <span class="text-danger tulisan-cilik">Keterangan ( * ) = Silakan di isi bila ada</span>
                        </div>                       
                    </div>
                </div>
            </div>
            {{-- End Card Data Wali --}}
            
            {{-- Card Data Periodik --}}
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Data Periodik</h2>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tinggi_badan">Tinggi Badan</label>
                            <div class="input-group mb-3">
                                <input required type="number" min="1" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="tinggi_badan">cm</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="berat_badan">Berat Badan</label>
                            <div class="input-group mb-3">
                                <input required type="number" min="1" class="form-control" name="berat_badan" placeholder="Berat Badan">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon3">kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="jarak_tempuh_angka">Jarak Tempuh (Nilai Angka)</label>
                            <div class="input-group mb-3">
                                <input required type="number" min="0" class="form-control" name="jarak_tempuh" placeholder="Jarak Tempuh">
                            </div>            
                        </div>
                        <div class="form-group col-md-3">
                            <label for="satuan_jarak_tempuh">Satuan Jarak Tempuh</label>
                            <select required id="satuan_jarak_tempuh" class="form-control">
                                <option value="">--Silakan Pilih--</option>
                                <option value="M">M (Meter)</option>
                                <option value="KM">KM (Kilometer)</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="waktu_tempuh_jam">Waktu Tempuh</label>
                            <div class="input-group mb-3">
                                <input required type="number" min="0" class="form-control" name="waktu_tempuh_jam" placeholder="Jam">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon3">Jam</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="waktu_tempuh_menit"> <br> </label>
                            <div class="input-group mb-3">
                                <input required type="number" min="0" max="59" class="form-control" name="waktu_tempuh_menit" placeholder="Menit">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon3">Menit</span>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            {{-- End Card Data Periodik --}}

            {{-- Prestasi Card --}}
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Prestasi</h2>
                </div>
                <div class="card-body" id="field_prestasi"></div>
                <div class="card-body">
                    <a href="javascript:;" id="tambah_prestasi" class="btn btn-primary col-12 mb-3">Tambah Prestasi</a>
                </div>
            </div>
            {{-- End Prestasi Card --}}

            {{-- Beasiswa Card--}}
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Beasiswa</h2>
                </div>
                <div class="card-body" id="field_beasiswa">
                </div>
                <div class="card-body">
                    <a href="javascript:;" id="tambah_beasiswa" class="btn btn-primary col-12 mb-3">Tambah Beasiswa</a>
                </div>
            </div>
            {{-- End Beasiswa Card--}}

            <div class="form-group mt-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="status" id="setuju" required>
                    <label class="form-check-label" for="setuju">
                        Saya Setuju Bahwa data yang telah dilampirkan benar adanya
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="submit-data" onclick="return crossCheck()">Daftar</button>
        </form>
    </div>
</div>

@endsection