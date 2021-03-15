<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    
<style>
    body {
        font-size: 13px;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        -webkit-text-size-adjust: 100%;
    }

    table {
        border-collapse: separate;
        border-spacing: 50px 1px;

    }

    .my-5 {
        margin-top   : 2.5rem !important;
        margin-bottom: 2.5rem !important;
    }

    .text-white {
        color: #fff !important;
    }

    .text-center {
        text-align: center;
    }

    .corner-ungu {
        border-radius: 5px;
        border: 2px solid #350b40;
        padding: 10px; 
    }

    .corner-merah {
        border-radius: 5px;
        border: 2px solid #e40017;
        padding: 10px; 
    }

    .coner-abu {
        border-radius: 5px;
        border: 2px solid #9fb8ad;
        padding: 10px; 
    }

    .coner-hijau {
        border-radius: 5px;
        border: 2px solid #73AD21;
        padding: 10px; 
    }
</style>
</head>
<body>
    <div>
        <h1 class="text-center" style="font-weight: bold; font-size:30px">Data Pendaftaran</h1>
        <div class="corner-merah">
            <p>*<b>Wajib</b> untuk didownload/disimpan untuk keperluan validasi data</p>
            <p><b>ID PENDAFTARAN : </b> {{ $data->id_pendaftaran }} </p>
            <p><b>JENIS PENDAFTARAN : </b> {{ $data->jenis_pendaftaran }} </p>
            <p><b>WAKTU PENDAFTARAN:</b> {{ $data->created_at }} </p>
        </div>
        <div class="card my-5 coner-hijau">
            <h2 class="text-center" style="font-weight: bold; font-size:30px">Data Peserta</h2>
                @foreach ($data->peserta as $item)
                    <ul style="list-style-type:none;">
                        <table>
                            <tr>
                                <td>
                                    <p><b>Nama Lengkap</b> : {{ $item->nama }} </p>
                                    <p><b>NISN</b> : {{ $item->nisn == null ? 'Tidak terisi' : $item->nisn }}</p>
                                    <p><b>NIK</b> : {{ $item->nik == null ? 'Tidak terisi' : $item->nik }}</p>
                                    <p><b>Tempat</b>, Tanggal lahir : {{ $item->ttl }}</p>
                                    <p><b>Agama</b> : {{ $item->agama }}</p>
                                </td>
                                <td>
                                    <p><b>Jenis Kelamin</b> : {{ $item->jenis_kelamin == 'L' ?  'Laki - Laki' : 'Perempuan' }}</p>
                                    <p><b>Berkubutuahan Khusus</b> : {{ $item->berkebutuhan_khusus }}</p>
                                    <p><b>Nomer HP</b> : {{ $item->nmr_hp == null ? ' - ' : $item->nmr_hp }}</p>
                                    <p><b>Nomer Telepon</b> :{{ $item->nmr_tlp == null ? ' - ' : $item->nmr_tlp }} </p>
                                    <p><b>Email :</b> {{ $item->email == null ? ' - ' : $item->email }}</p>
                                </td>
                            </tr>
                        </table>
                        <p><b>Alamat Lengkap</b> : {{ $item->alamat_lengkap }}</p>
                        <table>
                            <tr>
                                <td>
                                    <p><b>Status Tempat Tinggal</b> : {{ $item->type_tempat_tinggal }}</p>
                                    <p><b>Moda Transportasi</b> : {{ $item->mode_transportasi }} </p>
                                    <p><b>Nomer HP</b> : {{ $item->nmr_hp == null ? ' - ' : $item->nmr_hp }}</p>
                                    <p><b>Nomer Telepon</b> :{{ $item->nmr_tlp == null ? ' - ' : $item->nmr_tlp }} </p>
                                    <p><b>Email :</b> {{ $item->email == null ? ' - ' : $item->email }}</p>
                                </td>
                                <td>
                                    <p><b>Penerima KPS/PKH/KIP</b> : {{ $item->RincianPeserta->bantuan->jenis_bantuan }} </p>
                                    <p><b>NO KPS/PKH/KIP</b> : {{ $item->RincianPeserta->bantuan->nomer_bantuan }} </p>
                                    <p><b>Kewarganegaraan</b> : {{ $item->RincianPeserta->kewarganegaraan }}</p>
                                    <p><b>Diusulkan PIP</b> : {{ $item->RincianPeserta->bantuan->status_pip == '1' ? 'Iya' : 'Tidak' }} </p>
                                    <p><b>Alasan Layak Diusulkan PIP</b> : {{ $item->RincianPeserta->bantuan->alasan_pip }} </p>
                                </td>
                            </tr>
                        </table>
                    </ul>
                @endforeach
        </div>
        <div class="card my-5 coner-abu">
            <h3 class="text-center" style="font-weight: bold; font-size:30px">Data Orang Tua</h3>
            <table>
                <tr>
                    @foreach ($data->ayah as $item)
                    <td>
                        <h2>Data Ayah</h2>
                        <p>Nama Ayah : {{ $item->nama_ayah }}</p>
                        <p>Tempat, Tanggal Lahir : {{ $item->ttl }}</p>
                        <p>Pendidikan : {{ $item->pendidikan }} </p>
                        <p>Pekerjaan : {{ $item->pekerjaan }} </p>
                        <p>Penghasilan bulanan : {{ $item->penghasilan }} </p>
                        <p>Berkebutuhan Khusus : {{ $item->kebutuhan_khusus }} </p>
                        <p>Nomer HP : {{ $item->nmr_hp == null ? ' - ' : $item->nmr_hp }}</p>
                        <p>Nomer Telepon : {{ $item->nmr_tlp == null ? ' - ' : $item->nmr_tlp }}</p>
                    </td>
                    @endforeach
                    @foreach ($data->ibu as $item)
                    <td>
                        <h2>Data Ibu</h2>
                        <p>Nama Ibu : {{ $item->nama_ibu }}</p>
                        <p>Tempat, Tanggal Lahir : {{ $item->ttl }}</p>
                        <p>Pendidikan : {{ $item->pendidikan }} </p>
                        <p>Pekerjaan : {{ $item->pekerjaan }} </p>
                        <p>Penghasilan bulanan : {{ $item->penghasilan }} </p>
                        <p>Berkebutuhan Khusus : {{ $item->kebutuhan_khusus }} </p>
                        <p>Nomer HP : {{ $item->nmr_hp == null ? ' - ' : $item->nmr_hp }}</p>
                        <p>Nomer Telepon : {{ $item->nmr_tlp == null ? ' - ' : $item->nmr_tlp }}</p>
                    </td>
                    @endforeach 
                </tr>
            </table> 
            @foreach ($data->wali as $item)    
                <ul style="list-style-type:none;">
                    <h2>Data Wali</h2>
                    <p>Nama Wali : {{ $item->nama_wali }}</p>
                    <p>Tempat, Tanggal Lahir : {{ $item->ttl }}</p>
                    <p>Pendidikan : {{ $item->pendidikan }} </p>
                    <p>Pekerjaan : {{ $item->pekerjaan }} </p>
                    <p>Penghasilan bulanan : {{ $item->penghasilan }} </p>
                    <p>Nomer HP : {{ $item->nmr_hp == null ? ' - ' : $item->nmr_hp }}</p>
                    <p>Nomer Telepon : {{ $item->nmr_tlp == null ? ' - ' : $item->nmr_tlp }}</p>
                </ul>
            @endforeach
        </div>
        <br>
        <div class="card my-5 corner-ungu">
            <h3 class="text-center" style="font-weight: bold; font-size:30px">Data Periodik</h3>
                @foreach ($data->peserta as $item)
                    <ul class="my-3" style="list-style-type:none;">
                        <p>Tinggi Badan : {{ $item->RincianPeserta->tinggi_badan}} CM</p>
                        <p>Berat Badan : {{ $item->RincianPeserta->berat_badan }} KG</p>
                        <p>Jarak Sekolah : {{ $item->RincianPeserta->jarak_sekolah }} KM</p>
                        <p>Waktu Tempuh : {{ $item->RincianPeserta->waktu_tempuh }}</p>
                        <p>Jumlah Saudara : {{ $item->RincianPeserta->jml_saudara }}</p>
                    </ul>
                    <h2>Data Pretasi</h2>
                    @forelse ($item->prestasi as $prestasi)
                        <ul class="my-3" style="list-style-type: circle">
                            <li>Jenis Prestasi : {{ $prestasi->jenis_prestasi }}</li>
                            <li>Tingkat Prestasi : {{ $prestasi->tingakt_prestasi }}</li>
                            <li>Nama Prestasi : {{ $prestasi->nama_prestasi }}</li>
                            <li>Penyelenggara : {{ $prestasi->penyelenggara }}</li>
                            <li>Tahun : {{ $prestasi->tahun }}</li>
                        </ul>
                    @empty
                        <ul class="my-3" style="list-style-type: circle">
                            <h3>Tidak Mempunyai History Prestasi</h3>
                        </ul>
                    @endforelse
                    <h2>Data Beasiswa</h2>
                    @forelse ($item->beasiswa as $beasiswa)
                        <ul class="my-3" style="list-style-type: circle">
                            <li>Jenis Beasiswa : {{ $beasiswa->jenis_beasiswa }}</li>
                            <li>Keterangan Beasiswa : {{ $beasiswa->keterangan }}</li>
                            <li>Tahun Mulai : {{ $beasiswa->tahun_mulai }}</li>
                            <li>Tahun Selesai : {{ $beasiswa->tahun_selesai }}</li>
                        </ul>
                    @empty
                        <ul class="my-3" style="list-style-type: circle">
                            <h3> Tidak Mempunyai History Beasiswa</h3>
                        </ul>
                    @endforelse
                @endforeach   
        </div>
    </div>
</body>
</html>