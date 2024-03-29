<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Pegawai
            </div>
            <a href="{{ url('admin/master-data/pegawai/create') }}" class="float-right btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <div class="thead">
                    <th>No</th>
                    <th width="100px">Aksi</th>
                    <th>Email</th>
                    <th>Nama</th>
                </div>
                <tbody>
                    @foreach ($list_pegawai as $pegawai)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/master-data/pegawai/show"
                                        id="{{ $pegawai->id }}" />
                                    <x-template.button.edit-button url="admin/master-data/pegawai/edit"
                                        id="{{ $pegawai->id }}" />
                                    <x-template.button.delete-button url="admin/master-data/pegawai/delete"
                                        id="{{ $pegawai->id }}" />

                                </div>
                            </td>
                            <td>{{ $pegawai->email }}</td>
                            <td>{{ $pegawai->nama }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>
