<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiPendaftaran extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
    
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
            'email_peserta'     => 'required|email|max:70',
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
        ];
    }

    public function messages() {
        return [
            'statusPendaftaran.required' => 'Mohon untuk di isi terlebih dahulu',
            'status_paud.required'       => 'Mohon untuk di isi terlebih dahulu',
            'namalengkap.required'       => 'Mohon untuk di isi terlebih dahulu',
            ''

        ];
    }
}
