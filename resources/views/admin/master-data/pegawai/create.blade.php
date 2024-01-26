<x-module.admin>
    <x-template.button.back-button url="admin/master-data/pegawai" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Pegawai
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/pegawai') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIP</label>
                            <input type="text" name="nip" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="text" name="email" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">PASSWORD</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">USERNAME</label>
                            <input type="text" name="username" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button class="float-right btn btn-primary">
                            simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.admin>
