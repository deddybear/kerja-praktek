<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use App\Models\BeasiswaPeserta as Beasiswa;
use App\Models\PrestasiPeserta as Prestasi;
use App\Models\Pendaftaran;
use App\Models\Peserta;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid as Generate;


class PPDBController extends Controller
{
    
    public function pendaftaranPage() {
        return view('guest/pendaftaran');
    }

    public function pengumumanPage() {
        return view('guest/pengumuman-ppdb');
    }

    public function daftarPesertaDidik(Request $request) {

        $valid = Validator::make($request->all(), [
    
            'statusPendaftaran' => 'required|string|between:8,10',
            'status_paud'       => 'required|boolean',
            'status_tk'         => 'required|boolean',

            //Data Pribadi
            'namalengkap'       => 'required|string|max:70',
            'jenis_kelamin'     => 'required|string|max:1',
            'nisn'              => 'digits_between:0,15',
            'nik'               => 'required|numeric|digits_between:1,20',
            'tanggallahir'      => 'required|date_format:d-m-Y',
            'tempatlahir'       => 'required|string|max:35',
            'agama'             => 'required|alpha|max:8',
            'kebutuhan_khusus'  => 'required|string|max:20',
            'asal_sekolah'      => 'required|string|max:50',
            'jumlah_saudara'    => 'required|numeric|digits_between:1,4',
            'hobi'              => 'required|string|alpha|max:8',
            'hobi_lainnya'      => 'required_if:hobi,Lainnya|string|max:40',
            'cita_cita'         => 'required|string|max:21',
            'cita_lainnya'      => 'required_if:cita_cita,Lainnya|string|max:40',
            'alamat'            => 'required|string|max:200',
            'tempat_tinggal'    => 'required|string|between:3,17',
            'tempat_tinggal_lainnya' => 'required_if:tempat_tinggal,Lainnya|string|max:38',
            'moda_transportasi'   => 'required|string|between:4,19',
            'transportasi_lainnya' => 'required_if:moda_transportasi,Lainnya|string|max:30',
            'nmr_hp_peserta'    => 'digits_between:0,15',
            'nmr_tlp_peserta'   => 'digits_between:0,15',
            'email_peserta'     => 'max:70',
            'status_kps'        => 'required|alpha_num|digits:1',
            'jenis_bantuan'     => 'required_if:status_kps,1|max:3',
            'nomer_bantuan'     => 'required_if:status_kps,1|numeric|digits_between:1, 30',
            'status_warga'      => 'required|string|max:3',
            'negara_asal'       => 'required_if:status_warga,WNA|max:30',
            'status_pip'        => 'required|alpha_num|digits:1',
            'alasan_pip'        => 'required_if:status_pip,1|string|max:37',
            //Data Pribadi End
            
            //Data Ayah
            'nama_ayah'             => 'required|string|max:100',
            'tempat_lahir_ayah'     => 'required|string|max:35',
            'tanggal_lahir_ayah'    => 'required|date_format:d-m-Y',
            'pekerjaan_ayah'        => 'required|string|max:50',
            'pendidikan_ayah'       => 'required|string|max:13',
            'penghasilan_ayah'      => 'required|string|max:22',
            'nohp_ayah'             => 'digits_between:0,13',
            'notlp_ayah'            => 'digits_between:0,13',
            'kebutuhan_khusus_ayah' => 'required|string|max:20',
            //Data Ayah End

            //Data Ibu
            'nama_ibu'             => 'required|string|max:100',
            'tempat_lahir_ibu'     => 'required|string|max:35',
            'tanggal_lahir_ibu'    => 'required|date_format:d-m-Y',
            'pekerjaan_ibu'        => 'required|string|max:50',
            'pendidikan_ibu'       => 'required|string|max:13',
            'penghasilan_ibu'      => 'required|string|max:22',
            'nohp_ibu'             => 'digits_between:0,13',
            'notlp_ibu'            => 'digits_between:0,13',
            'kebutuhan_khusus_ibu' => 'required|string|max:20',
            //Data Ibu End
            

            //Data Wali
            'nama_wali'         => 'required|string|max:100',
            'tempat_lahir_wali' => 'required|string|max:35',
            'tanggal_lahir_wali'=> 'required|date_format:d-m-Y',
            'pekerjaan_wali'    => 'required|string|max:50',
            'pendidikan_wali'   => 'required|string|max:13',
            'penghasilan_wali'  => 'required|string|max:22',
            'nohp_wali'         => 'digits_between:0,13',
            'notlp_wali'        => 'digits_between:0,13',
            //Data Wali End

            //Data Periodik
            'tinggi_badan'       => 'required|numeric|min:1|max:999',
            'berat_badan'        => 'required|numeric|min:1|max:999',
            'jarak_tempuh'       => 'required|numeric|min:1|max:9999',
            'satuan_jarak_tempuh'=> 'required|alpha|max:2',
            'waktu_tempuh_jam'   => 'required|numeric|max:999',
            'waktu_tempuh_menit' => 'required|numeric|max:59',
            //Data Periodik End

            //Data Prestasi
            'jenis_prestasi'    => 'sometimes|array|max:3',
            'jenis_prestasi.*'  => 'sometimes|alpha|max:8',
            'tingkat_prestasi'  => 'sometimes|array|max:3',
            'tingkat_prestasi.*'=> 'sometimes|alpha|max:13',
            'nama_prestasi'     => 'sometimes|array|max:3',
            'nama_prestasi.*'   => 'sometimes|string|max:50',
            'tahun_prestasi'    => 'sometimes|array|max:3',
            'tahun_prestasi.*'  => 'sometimes|date_format:Y',
            'penyelenggara'     => 'sometimes|array|max:3',
            'penyelenggara.*'   => 'sometimes|string|max:50',
            //Data Prestasi End

            //Data Beasiswa 
            'jenis_beasiswa'          => 'sometimes|array|max:3',
            'jenis_beasiswa.*'        => 'sometimes|string|max:17',
            'keterangan_beasiswa'     => 'sometimes|array|max:3',
            'keterangan_beasiswa.*'   => 'sometimes|string|max:50',
            'tahun_mulai_beasiswa'    => 'sometimes|array|max:3',
            'tahun_mulai_beasiswa.*'  => 'sometimes|date_format:Y',
            'tahun_selesai_beasiswa'  => 'sometimes|array|max:3',
            'tahun_selesai_beasiswa.*'=> 'sometimes|date_format:Y'
            //Data Beasiswa End
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput($request->all());
        }

        $hobi              = $request->hobi != 'Lainnya'?: $request->hobi_lainnya;
        $cita              = $request->cita_cita != 'Lainnya' ?: $request->cita_lainnya;
        $typeTempatTinggal = $request->tempat_tinggal != 'Lainnya'?: $request->tempat_tinggal_lainnya;
        $modeTransportasi  = $request->moda_transportasi != 'Lainnya'?: $request->transportasi_lainnya;
        $statusPenduduk    = $request->status_warga != 'WNA'?: $request->negara_asal;
        $idPrestasi        = $request->banyakPrestasi ? Generate::uuid4() : null;
        $idBeasiswa        = $request->banyakBeasiswa ? Generate::uuid4() : null;

        $idPendaftaran    = Generate::uuid4();
        $idPeserta        = Generate::uuid4();
        $idBantuan        = Generate::uuid4();


        $dataPendaftaran = array(
            'id_pendaftaran'    => $idPendaftaran,
            'id_peserta'        => $idPeserta,
            'id_ayah'           => Generate::uuid4(),
            'id_ibu'            => Generate::uuid4(),
            'id_wali'           => Generate::uuid4(),
            'jenis_pendaftaran' => $request->statusPendaftaran,
            'asal_sekolah'      => $request->asal_sekolah,
            'status_paud'       => $request->status_paud,
            'status_tk'         => $request->status_tk,
            'hobi'              => $hobi,
            'cita'              => $cita,
            'status_pendaftaran'=> 0,
        );

        $dataAyah = array(
            'nama_ayah'        => $request->nama_ayah,
            'ttl'              => $request->tempat_lahir_ayah.', '.$request->tanggal_lahir_ayah,
            'pendidikan'       => $request->pendidikan_ayah,
            'pekerjaan'        => $request->pekerjaan_ayah,
            'penghasilan'      => $request->penghasilan_ayah,
            'kebutuhan_khusus' => $request->kebutuhan_khusus_ayah,
            'nmr_hp'           => $request->nohp_ayah,
            'nmr_tlp'          => $request->notlp_ayah
        );

        $dataIbu = array(
            'nama_ibu'         => $request->nama_ibu,
            'ttl'              => $request->tempat_lahir_ibu.', '.$request->tanggal_lahir_ibu,
            'pendidikan'       => $request->pendidikan_ibu,
            'pekerjaan'        => $request->pekerjaan_ibu,
            'penghasilan'      => $request->penghasilan_ibu,
            'kebutuhan_khusus' => $request->kebutuhan_khusus_ibu,
            'nmr_hp'           => $request->nohp_ibu,
            'nmr_tlp'          => $request->notlp_ibu
        );

        $dataWali = array(
            'nama_wali'        => $request->nama_wali,
            'ttl'              => $request->tempat_lahir_wali.', '.$request->tanggal_lahir_wali,
            'pendidikan'       => $request->pendidikan_wali,
            'pekerjaan'        => $request->pekerjaan_wali,
            'penghasilan'      => $request->penghasilan_wali,
            'nmr_hp'           => $request->nohp_wali,
            'nmr_tlp'          => $request->notlp_wali
        );

        $dataPeserta = array(
            'id_peserta'         => $idPeserta,
            'id_rincian_peserta' => Generate::uuid4(),
            'id_beasiswa'        => $idBeasiswa,
            'id_prestasi'        => $idPrestasi,
            'nama'               => $request->namalengkap,
            'jenis_kelamin'      => $request->jenis_kelamin,
            'nisn'               => $request->nisn,
            'nik'                => $request->nik,
            'ttl'                => $request->tempatlahir.', '.$request->tanggallahir,
            'agama'              => $request->agama,
            'berkebutuhan_khusus'=> $request->kebutuhan_khusus,
            'alamat_lengkap'     => $request->alamat,
            'type_tempat_tinggal'=> $typeTempatTinggal,
            'mode_transportasi'  => $modeTransportasi,  
            'nmr_hp'             => $request->nmr_hp_peserta,
            'nmr_tlp'            => $request->nmr_tlp_peserta,
            'email'              => $request->email_peserta,
        ); 

        $dataRincianPeserta = array(
            'id_bantuan'        => $idBantuan,
            'kewarganegaraan'   => $statusPenduduk,
            'tinggi_badan'      => $request->tinggi_badan,
            'berat_badan'       => $request->berat_badan,
            'jarak_sekolah'     => $request->jarak_tempuh.$request->satuan_jarak_tempuh,
            'waktu_tempuh'      => $request->waktu_tempuh_jam.' JAM '.$request->waktu_tempuh_menit.' MENIT ',
            'jml_saudara'       => $request->jumlah_saudara
        );
        
        $dataBantuan = array(
            'id_bantuan'        => $idBantuan,
            'status_bantuan'    => $request->status_kps,
            'jenis_bantuan'     => $request->jenis_bantuan,
            'nomer_bantuan'     => $request->nomer_bantuan,
            'status_pip'        => $request->status_pip,
            'alasan_pip'        => $request->alasan_pip
        );

       


        $Pendaftaran = Pendaftaran::create($dataPendaftaran);
        $Peserta     = Peserta::create($dataPeserta);
        $Bantuan     = new Bantuan;

        if ($Pendaftaran->ayah()->create($dataAyah) && 
            $Pendaftaran->ibu()->create($dataIbu) && 
            $Pendaftaran->wali()->create($dataWali)) {
            
            
            if ($Peserta->rincianPeserta()->create($dataRincianPeserta) && $Bantuan->create($dataBantuan)) {
                if ($request->banyakPrestasi) {
                    foreach ($request->banyakPrestasi as $key => $value) {
                        $dataPrestasi = array(
                            'id_prestasi'      => $idPeserta,
                            'jenis_prestasi'   => $request->jenis_prestasi[$key],
                            'tingkat_prestasi' => $request->tingkat_prestasi[$key],
                            'nama_prestasi'    => $request->nama_prestasi[$key],
                            'penyelenggara'    => $request->penyelenggara[$key],
                            'tahun'            => $request->tahun_prestasi[$key]
                        );   

                        Prestasi::create($dataPrestasi);
                    }
                } 

                if ($request->banyakBeasiswa) {
                    foreach ($request->banyakBeasiswa as $key => $value) {
                        $dataBeasiswa = array(
                            'id_beasiswa'    => $idBeasiswa,
                            'jenis_beasiswa' => $request->jenis_beasiswa[$key],
                            'keterangan'     => $request->keterangan_beasiswa[$key],
                            'tahun_mulai'    => $request->tahun_mulai_beasiswa[$key],
                            'tahun_selesai'  => $request->tahun_selesai_beasiswa[$key]
                        );

                        Beasiswa::create($dataBeasiswa);
                    }
                } 
                //return view()->with('id', $idPendaftaran);
                return 'sukses pt2';
            }
        }
       
    }

    //TODO : Halaman Admin & Fugsional Admin
    
    public function masterPendaftaran(){
        return view('admin/data-pendaftaran');
    }
    //'nik', 'nama', 'jenis_kelamin', 'agama', 'alamat_lengkap', 'nama_ayah', 'nama_ibu', 
    public function getData(){
        return json_encode(Pendaftaran::orderBy('created_at')
        ->with('ayah:id_ayah,nama_ayah', 'ibu:id_ibu,nama_ibu', 'peserta:id_peserta,nama,nik,jenis_kelamin,agama,alamat_lengkap')
        ->get());
    }

    public function changeStatusPendaftaran($id){
        return response()->json(['id' => $id]);
    }

    public function downloadDataPendaftaran($id){
        
        
        // $pdf = PDF::loadView('hai');
        // return $pdf->download('laporan-pegawai-pdf');
    }

    public function migrateDataPendaftaran($id){
        return response()->json(['id' => $id]);
    }

    public function hapuDataPendaftaran($id){
        return response()->json(['id' => $id]);
    }
}
