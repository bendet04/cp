<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h4>kategori Berita</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label>Nama</label>
                                <input class="form-control" wire:model="name" placeholder="Nama">
                                <span class="text-danger">@error('name')
                                    {{ $message }}
                                    @enderror</span>
                            </div>

                            <div class="form-group mb-3">
                                <label>Deskripsi</label>
                                <textarea wire:model="description" rows="4" cols="67"></textarea>
                                <span class="text-danger">@error('description')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="text-right mb-3">
                                <button type="button" class="btn btn-primary" wire:click="save">Simpan</button>
                            </div>
                        </div>
                        @if(!empty($image_name))
                        <div class="col-6">
                            <img src="{{asset('storage/'.$image_name)}}" class="center" width="300" height="300" /></a>
                        </div>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Deskripsi</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($category))
                                @foreach($category as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value['name'] }}</td>
                                    <td>{{ $value['description'] }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"
                                            wire:click="edit({{$value['id']}})">Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"
                                            wire:click="delete({{$value['id']}})">Hapus</button>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>