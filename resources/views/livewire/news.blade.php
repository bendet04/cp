<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h4>Berita</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label>Judul Berita</label>
                                <input class="form-control" wire:model="name" placeholder="Nama">
                                <span class="text-danger">@error('name')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Kategori</label>
                                <select class="form-control" wire:model="category">
                                    <option value="">Pilih</option>
                                    @if($categories)
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                                <span class="text-danger">@error('category')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Foto</label>
                                <input type="file" wire:model="image" name="image" class="form-control"
                                    placeholder="Foto">
                                @if($editing)<small class="form-text text-muted">Kosongkan jika tidak
                                    dirubah.</small>@endif
                                <span class="text-danger">@error('image_name')
                                    {{ $message }}
                                    @enderror</span>

                            </div>
                            <div class="form-group mb-3">
                                <label>Deskripsi</label>
                                <div wire:ignore>
                                    <textarea wire:model.defer="description" class="form-control" id="description"
                                        name="description">{!! $description !!}</textarea>
                                </div>

                                <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
                                <script>
                                    const editor = CKEDITOR.replace('description');
                                    editor.on('change', function (event) {
                                        @this.set('description', event.editor.getData());
                                    })

                                    window.addEventListener('edit-desc', event => {
                                        editor.setData(event.detail.desc)
                                    });
                                    window.addEventListener('delete-desc', event => {
                                        editor.setData()
                                    });
                                </script>
                                <span class="text-danger">@error('description')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="text-right mb-3 mt-3">
                                <button type="button" class="btn btn-primary" wire:click="save">Simpan</button>
                            </div>
                        </div>
                        @if(!empty($image_name))
                        <div class="col-6">
                        </br></br></br></br></br>
                            <img src="{{asset('storage/'.$image_name)}}" class="rounded mx-auto d-block" width="300" height="300" /></a>
                        </div>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul berita</th>
                                    <th>Kategori</th>
                                    <th>Foto</th>
                                    <th>Deskripsi</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($news))
                                @foreach($news as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value['name'] }}</td>
                                    <td>{{ $value['category']['name'] }}</td>
                                    <td>{{ $value['image'] }}</td>
                                    <td>{{ strlen($value['description']) > 50 ? substr($value['description'],0,30)."..." : $value['description']; }}</td>
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