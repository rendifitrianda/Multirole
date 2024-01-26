<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Models\Admin\MasterData\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.master-data.pegawai.index', $data);
    }

 
    public function create()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.master-data.pegawai.create');
    }

    public function store()
    {

        // return request()->all();
        $pegawai = new Pegawai;

        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->username = request('username');
        $pegawai->email = request('email');
        $pegawai->password = bcrypt(request('password'));
        $pegawai->save();

        return redirect('admin/master-data/pegawai');
    }

    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.show', $data);
    }


    public function edit(Pegawai $pegawai)
    {

        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.edit', $data);
    }


    public function update(Pegawai $pegawai)
    {
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->email = request('email');
        $pegawai->username = request('username');
        $pegawai->password = bcrypt(request('password'));
        $pegawai->update();

        return redirect('admin/master-data/pegawai');
    }

    public function delete(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect('admin/master-data/pegawai');
    }

}
