<!-- Modal -->
<div wire:live.self class="modal fade"  id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
            </div>

            <div class="modal-body">
            
                <div class="col-12">
                    <div class="form-group">
                        <label class="floating-label">Nama Produk</label>
                        <input class="form-control" wire:model="name" placeholder="Nama">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="floating-label">Kategori</label>
                        <input type="text" wire:model.defer="category" class="form-control"
                            placeholder="Kategori">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="floating-label">Harga</label>
                        <input type="text" wire:model.defer="price" class="form-control" 
                            placeholder="Harga">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="floating-label">Foto</label>
                        <input type="file" wire:model.defer="image" class="form-control" 
                            placeholder="Tanggal Akhir">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="floating-label">Deskripsi</label>
                        <textarea  wire:model.defer="description"  rows="4" cols="50"></textarea>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-primary" wire:click="save">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Batal</button>
            </div>

        </div>

    </div>

</div>