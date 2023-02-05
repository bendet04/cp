<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h4>Buku</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label>Judul</label>
                                <input class="form-control" wire:model="judul" placeholder="Judul">
                                <span class="text-danger">@error('judul')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Penulis</label>
                                <input class="form-control" wire:model="penulis" placeholder="penulis">
                                <span class="text-danger">@error('penulis')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>ISBN</label>
                                <input class="form-control" wire:model="isbn" placeholder="isbn">
                                <span class="text-danger">@error('isbn')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Grade</label>
                                <input class="form-control" wire:model="grade" placeholder="Grade">
                                <span class="text-danger">@error('grade')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Dimensi</label>
                                <input class="form-control" wire:model="dimensi" placeholder="dimensi">
                                <span class="text-danger">@error('dimensi')
                                    {{ $message }}
                                    @enderror</span>
                            </div>

                            <div class="form-group mb-3">
                                <label>Status</label>
                                <select class="form-control" wire:model="status">
                                    <option value="">Pilih</option>
                                    <option value="Terbit">Terbit</option>
                                    <option value="Akan Terbit">Akan Terbit</option>
                                </select>
                                <span class="text-danger">@error('status')
                                    {{ $message }}
                                    @enderror</span>
                            </div>


                            <div class="form-group mb-3">
                                <label>Sinopsis</label>
                                <div wire:ignore>
                                    <textarea wire:model.defer="sinopsis" class="form-control" id="sinopsis" name="sinopsis">{!! $sinopsis !!}</textarea>
                                </div>

                                <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
                                <script>
                                    const editor_sinopsis = CKEDITOR.replace('sinopsis');
                                    editor_sinopsis.on('change', function(event) {
                                        @this.set('sinopsis', event.editor.getData());
                                    })

                                    window.addEventListener('edit-sinopsis', event => {
                                        editor_sinopsis.setData(event.detail.sinopsis)
                                    });

                                    window.addEventListener('delete-sinopsis', event => {
                                        editor_sinopsis.setData()
                                    });
                                </script>
                                <span class="text-danger">@error('sinopsis')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Foto</label>
                                <input type="file" wire:model="foto" name="foto" class="form-control" placeholder="Foto">
                                @if($editing)<small class="form-text text-muted">Kosongkan jika tidak
                                    dirubah.</small>@endif
                                <span class="text-danger">@error('nama_foto')
                                    {{ $message }}
                                    @enderror</span>

                            </div>

                            <div class="text-right mb-3 mt-3">
                                <button type="button" class="btn btn-primary" wire:click="save">Simpan</button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label>Penerbit</label>
                                <input class="form-control" wire:model="penerbit" placeholder="Penerbit">
                                <span class="text-danger">@error('penerbit')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Tahun Terbit</label>
                                <input class="form-control" wire:model="tahun_terbit" placeholder="Tahun Terbit">
                                <span class="text-danger">@error('tahun_terbit')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Harga</label>
                                <input class="form-control" wire:model="harga" placeholder="Harga">
                                <span class="text-danger">@error('harga')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Halaman</label>
                                <input class="form-control" wire:model="halaman" placeholder="Halaman">
                                <span class="text-danger">@error('halaman')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Bahasa</label>
                                <input class="form-control" wire:model="bahasa" placeholder="Bahasa">
                                <span class="text-danger">@error('bahasa')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Penyunting</label>
                                <input class="form-control" wire:model="penyunting" placeholder="Penyunting">
                                <span class="text-danger">@error('penyunting')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Deskripsi</label>
                                <div wire:ignore>
                                    <textarea wire:model.defer="deskripsi" class="form-control" id="deskripsi" name="deskripsi">{!! $deskripsi !!}</textarea>
                                </div>
                                <script>
                                    const editor = CKEDITOR.replace('deskripsi');
                                    editor.on('change', function(event) {
                                        @this.set('deskripsi', event.editor.getData());
                                    })

                                    window.addEventListener('edit-deskripsi', event => {
                                        editor.setData(event.detail.deskripsi)
                                    });

                                    window.addEventListener('delete-deskripsi', event => {
                                        editor.setData()
                                    });
                                </script>
                                <span class="text-danger">@error('deskripsi')
                                    {{ $message }}
                                    @enderror</span>
                            </div>
                            @if(!empty($nama_foto))
                            <div>
                                </br></br></br></br></br>
                                <img src="{{asset('storage/'.$nama_foto)}}" class="rounded mx-auto d-block" width="300" height="300" /></a>
                            </div>
                            @endif
                        </div>

                    </div>

                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>ISBN</th>
                                    <th>Grade</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Harga</th>
                                    <th>Halaman</th>
                                    <th>Bahasa</th>
                                    <th>Penyunting</th>
                                    <th>Dimensi</th>
                                    <th>Status</th>
                                    <th>Foto</th>
                                    <th>Sinopsis</th>
                                    <th>Deskripsi</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($books))
                                @foreach($books as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value['judul'] }}</td>
                                    <td>{{ $value['penulis'] }}</td>
                                    <td>{{ $value['isbn'] }}</td>
                                    <td>{{ $value['grade'] }}</td>
                                    <td>{{ $value['penerbit'] }}</td>
                                    <td>{{ $value['tahun_terbit'] }}</td>
                                    <td>{{ $value['harga'] }}</td>
                                    <td>{{ $value['halaman'] }}</td>
                                    <td>{{ $value['bahasa'] }}</td>
                                    <td>{{ $value['penyunting'] }}</td>
                                    <td>{{ $value['dimensi'] }}</td>
                                    <td>{{ $value['status'] }}</td>
                                    <td>{{ $value['foto'] }}</td>
                                    <td>{{ strlen($value['sinopsis']) > 50 ? substr($value['sinopsis'],0,30)."..." : $value['sinopsis']; }}</td>
                                    <td>{{ strlen($value['deskripsi']) > 50 ? substr($value['deskripsi'],0,30)."..." : $value['deskripsi']; }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" wire:click="edit({{$value['id']}})">Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" wire:click="delete({{$value['id']}})">Hapus</button>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{ $books->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>