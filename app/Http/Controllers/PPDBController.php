<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
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
            'nisn'              => 'required_if:statusPendaftaran,Pindahan|numeric|digits_between:1,15',
            'nik'               => 'required|numeric|digits_between:1,20',
            'tanggallahir'      => 'required|date_format:Y-m-d',
            'tempatlahir'       => 'required|string|max:35',
            'agama'             => 'required|alpha|max:8',
            'kebutuhan_khusus'  => 'required|string|max:20',
            'asal_sekolah'      => 'required|string|max:50',
            'jumlah_saudara'    => 'required|string|digits_between:1,4',
            'hobi'              => 'required|string|alpha|max:8',
            'hobi_lainnya'      => 'required_if:hobi,Lainnya|string|max:40',
            'cita_cita'         => 'required|string|max:21',
            'cita_lainnya'      => 'required_if:cita_cita,Lainnya|string|max:40',
            'alamat'            => 'required|string|max:70',
            'rt'                => 'required|numeric|digits_between:1,3',
            'rw'                => 'required|numeric|digits_between:1,3',
            'dusun'             => 'max:20',
            'kecamatan'         => 'required|string|max:25',
            'kelurahan'         => 'required|string|max:25',
            'kodepos'           => 'required|string|max:5',
            'tempat_tinggal'    => 'required|string|between:3,17',
            'tempat_tinggal_lainnya' => 'required_if:tempat_tinggal,Lainnya|string|max:18',
            'moda_transportasi'   => 'required|string|between:4,19',
            'transportasi_lainnya' => 'required_if:moda_transportasi,Lainnya|string|max:30',
            'nmr_hp_peserta'    => 'numeric|max:12',
            'nmr_tlp_peserta'   => 'numeric|max:15',
            'email_peserta'     => 'email|max:50',
            'status_kps'        => 'required|alpha|between:2,5',
            'jenis_bantuan'     => 'required_if:status_kps,1|max:3',
            'nomer_bantuan'     => 'required_if:status_kps,1|alpha_num|max:30',
            'status_warga'      => 'required|max:3',
            'negara_asal'       => 'required_if:status_warga,WNA|string|max:30',
            'status_pip'        => 'required|string|between:2,5',
            'alasan_pip'        => 'required_if:status_pip,1|string|max:37',
            //Data Pribadi End
            
            //Data Ayah
            'nama_ayah'         => 'required|string|max:100',
            'tempat_lahir_ayah' => 'required|string|max:35',
            'tanggal_lahir_ayah'=> 'required|date_format:dd-mm-yyyy',
            'pekerjaan_ayah'    => 'required|string|max:20',
            'pendidikan_ayah'   => 'required|string|max:13',
            'penghasilan_ayah'  => 'required|string',
            'nohp_ayah'         => 'numeric|digits_between:0,13',
            'notlp_ayah'        => 'numeric|digits_between:0,13',
            'kebutuhan_khusus_ayah' => 'required|string|max:20',
            //Data Ayah End

            //Data Ibu
            'nama_ibu'         => 'required|string|max:100',
            'tempat_lahir_ibu' => 'required|string|max:35',
            'tanggal_lahir_ibu'=> 'required|date_format:dd-mm-yyyy',
            'pekerjaan_ibu'    => 'required|string|max:20',
            'pendidikan_ibu'   => 'required|string|max:13',
            'penghasilan_ibu'  => 'required|string',
            'nohp_ibu'         => 'numeric|digits_between:0,13',
            'notlp_ibu'        => 'numeric|digits_between:0,13',
            'kebutuhan_khusus_ibu' => 'required|string|max:20',
            //Data Ibu End

            //Data Wali
            'nama_wali'         => 'required|string|max:100',
            'tempat_lahir_wali' => 'required|string|max:35',
            'tanggal_lahir_wali'=> 'required|date_format:dd-mm-yyyy',
            'pekerjaan_wali'    => 'required|string|max:20',
            'pendidikan_wali'   => 'required|string|max:13',
            'penghasilan_wali'  => 'required|string',
            'nohp_wali'         => 'numeric',
            'notlp_wali'        => 'numeric',
            //Data Wali End
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput($request->all());
        }

        $hobi = $request->hobi != 'Lainnya'?: $request->hobi_lainnya;
        $cita = $request->cita_cita != 'Lainnya' ?: $request->cita_lainnya;
        $typeTempatTinggal = $request->tempat_tinggal != 'Lainnya'?: $request->tempat_tinggal_lainnya;
        $modeTransportasi  = $request->moda_transportasi != 'Lainnya'?: $request->transportasi_lainnya;

        $idPendaftaran    = Generate::uuid4();
        $idPeserta        = Generate::uuid4();
        $idAyah           = Generate::uuid4();
        $idIbu            = Generate::uuid4();
        $idWali           = Generate::uuid4();
        $idRincianPeserta = Generate::uuid4();
        $idBeasiswa       = Generate::uuid4();
        $idPrestasi       = Generate::uuid4();

        $dataPendaftaran = array (
            'id_pendaftaran'    => $idPendaftaran,
            'id_peserta'        => $idPeserta,
            'id_ayah'           => $idAyah,
            'id_ibu'            => $idIbu,
            'id_wali'           => $idWali,
            'jenis_pendaftaran' => $request->statusPendaftaran,
            'asal_sekolah'      => $request->asal_sekolah,
            'status_paud'       => $request->status_paud,
            'status_tk'         => $request->status_tk,
            'hobi'              => $hobi,
            'cita'              => $cita,
            'status_pendaftaran'=> 0,
        );

        $dataPeserta = array (
            'id_peserta'         => $idPeserta,
            'id_rincian_peserta' => $idRincianPeserta,
            'id_beasiswa'        => $idBeasiswa,
            'id_prestasi'        => $idPrestasi,
            'nama'               => $request->namalengkap,
            'jenis_kelamin'      => $request->jenis_kelamin,
            'nisn'               => $request->nisn,
            'nik'                => $request->nik,
            'ttl'                => $request->tempatlahir.', '.$request->tanggallahir,
            'agama'              => $request->agama,
            'berkebutuhan_khusus'=> $request->kebutuhan_khusus,
            'alamat_lengkap'     => $request->alamat.', RT '.$request->rt.'/RW '.$request->rw.',Dusun. '.$request->dusun.', Kel. '.$request->kelurahan.', Kec. '.$request->kecamatan.', '.$request->kodepos,
            'type_tempat_tinggal'=> $typeTempatTinggal,
            'mode_transportasi'  => $modeTransportasi,  
            'nmr_hp'             => $request->nmr_hp_peserta,
            'nmr_tlp'            => $request->nmr_tlp_peserta,
            'email'              => $request->email_peserta,
        ); 

        $dataAyah = array (
            'id_ayah'          => $idAyah,
            'nama_ayah'        => $request->nama_ayah,
            'ttl'              => $request->tempat_lahir_ayah.', '.$request->tanggal_lahir_ayah,
            'pendidikan'       => $request->pendidikan_ayah,
            'pekerjaan'        => $request->pekerjaan_ayah,
            'penghasilan'      => $request->penghasilan_ayah,
            'kebutuhan_khusus' => $request->kebutuhan_khusus_ayah,
            'nmr_hp'           => $request->nohp_ayah,
            'nmr_tlp'          => $request->notlp_ayah
        );

        $dataIbu = array (
            'id_ibu'           => $idIbu,
            'nama_ibu'         => $request->nama_ibu,
            'ttl'              => $request->tempat_lahir_ibu.', '.$request->tanggal_lahir_ibu,
            'pendidikan'       => $request->pendidikan_ibu,
            'pekerjaan'        => $request->pekerjaan_ibu,
            'penghasilan'      => $request->penghasilan_ibu,
            'kebutuhan_khusus' => $request->kebutuhan_khusus_ibu,
            'nmr_hp'           => $request->nohp_ibu,
            'nmr_tlp'          => $request->notlp_ibu
        );

        $dataWali = array (
            'id_wali'          => $idWali,
            'nama_wali'        => $request->nama_wali,
            'ttl'              => $request->tempat_lahir_wali.', '.$request->tanggal_lahir_wali,
            'pendidikan'       => $request->pendidikan_wali,
            'pekerjaan'        => $request->pekerjaan_wali,
            'penghasilan'      => $request->penghasilan_wali,
            'nmr_hp'           => $request->nohp_wali,
            'nmr_tlp'          => $request->notlp_wali
        );

        $createPendaftaran = new Pendaftaran;
        $createPendaftaran->create($dataPendaftaran);
        $createPendaftaran->peserta()->createMany($dataPeserta);
        $createPendaftaran->ayah()->createMany($dataAyah);
    }


    public function FunctionName(Request $request){
        
        if($request->field1 && $request->field2 && $request->field3 && $request->field4){
            // code validasi
        }
        
    }
}
