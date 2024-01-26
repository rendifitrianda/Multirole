<x-module.admin>
    <x-template.button.back-button url="admin/master-data/module" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Data module
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/module/update', $module->id) }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIP</label>
                            <input type="text" name="nip" value="{{ $module->nip }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" value="{{ $module->nama }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="text" name="email" value="{{ $module->email }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">PASSWORD</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="float-right btn btn-primary">
                            simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.admin>
