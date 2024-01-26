<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Module
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/module') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">APP</label>
                            <input type="text" name="app" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">name</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Title</label>
                            <input type="text" name="title" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Sub title</label>
                            <input type="text" name="subtitle" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Url</label>
                            <input type="text" name="url" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Color</label>
                            <input type="text" name="color" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tag</label>
                            <input type="text" name="tag" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Menu</label>
                            <input type="text" name="menu" id="" class="form-control">
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
