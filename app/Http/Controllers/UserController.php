<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);

        //tambah data user dengan Eloquent Model 
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];
        // UserModel::insert($data); // tambahkan data ke tabel user 

        // //coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data ke tabel m_user
        // return view('user', ['data' => $user]);

        //tambah data user dengan Eloquent Model 
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];

        // UserModel::where('username', 'customer-1')->update($data); // update data ke tabel m_user

        //  //coba akses model UserModel
        //  $user = UserModel::all(); // ambil semua data ke tabel m_user
        //  return view('user', ['data' => $user]);

        // JOBSHEET 4 

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama' => 'Manager 2',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data); 

        // $user = UserModel::all(); 
        // return view('user', ['data' => $user]);\

        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data); 

        $user = UserModel::all(); 
        return view('user', ['data' => $user]);
    }
}