<?php

namespace App\Http\Controllers\Admin\MasterData;


use App\Models\Admin\MasterData\Module;
use App\Models\Admin\MasterData\Pegawai;
use App\Models\Admin\MasterData\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_module'] = Module::all();
        return view('admin.master-data.module.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data ['list_module'] = Module ::all();
        return view('admin.master-data.module.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $module = new Module;

        $module->app = request('app');
        $module->name = request('name');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->tag = request('tag');
        $module->menu = request('menu');
        $module-> save();

      return redirect('admin/master-data/module');
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        $data['module'] = $module;
        $data['list_Pegawai'] = Pegawai::all();
        return view('admin.master-data.module.show', $data);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        $data ['module'] = $module;
        return view('admin.master-data.module.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Module $module)
    {

        $module->app = request('app');
        $module->name = request('name');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->tag = request('tag');
        $module->menu = request('menu');
        $module-> update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Module $module)
    {
        $module->delete ();
        return redirect ('admin/master-data/module');
    }

    public function addrole()
    {
        $role = new Role;
        $role->id_pegawai = request('id_pegawai');
        $role->id_module = request('id_module');    
        $role->save();

        return back();
    }

    public function deleteRole(Role $role)
    {
        $role->delete();

        return back();
    }
   

}
