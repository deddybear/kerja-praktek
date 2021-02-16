<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Akun;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid as Generate;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function __construct() {
        $this->middleware('guest');
    }

    protected $redirectTo = RouteServiceProvider::HOME;

    protected function validator(array $data) {
        return Validator::make($data, [
            'namalengkap'     => ['required', 'string', 'between:5,50'],
            'username'        => ['required', 'between:5,15', 'string', 'unique:tbl_akun,username'],
            'email'           => ['required', 'email', 'max:40'],
            'password'        => ['required', 'between:8,17', 'string', 'confirmed']
        ]);
    }

    protected function create(array $data)
    {
        return Akun::create([
            'id_akun' => Generate::uuid4(),
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'nama' => $data['namalengkap'],
            'email' => $data['email'],
        ]);
    }
}
