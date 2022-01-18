<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h4>Produk</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input class="form-control" wire:model="name" placeholder="Nama">
                                <span class="text-danger">@error('name')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group">
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
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" wire:model="price" class="form-control" placeholder="Harga">
                                <span class="text-danger">@error('price')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" wire:model="image" name="image" class="form-control" placeholder="Foto">
                                @if($editing)<small class="form-text text-muted">Kosongkan jika tidak dirubah.</small>@endif
                                <span class="text-danger">@error('image_name')
                                    {{ $message }}
                                    @enderror</span>
                                
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea wire:model="description" rows="6" cols="75"></textarea>
                                <span class="text-danger">@error('description')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="text-right mb-2">
                                <button type="button" class="btn btn-primary" wire:click="save">Simpan</button>
                            </div>
                        </div>
                        @if(!empty($image_name))
                            <div class="col-6">
                                <img src="{{asset('storage/'.$image_name)}}" class="center" width="300" height="300"/></a></div>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Foto</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($products))
                                    @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $product['name'] }}</td>
                                        <td>{{ $product['category']['name'] }}</td>
                                        <td>{{ $product['price'] }}</td>
                                        <td>{{ $product['image'] }}</td>
                                        <td>{{ $product['description'] }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary"
                                                wire:click="edit({{$product['id']}})">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger"
                                                wire:click="delete({{$product['id']}})">Hapus</button>
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
</div>
</div>