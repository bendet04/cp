@if(!empty($books))
<div class="homepart2">
    <div class="container2">
        <div class="homepart2head">
            <div class="pagetitle2b padbot30">Cari Buku</div>
        </div>
        <div class="homepart2head">
            <input class="" wire:model="judul" placeholder="Judul">
            <input class="" wire:model="isbn" placeholder="ISBN">
            <input class="" wire:model="kategori" placeholder="Kategori">
            <input class="" wire:model="tahun" placeholder="Tahun">
            <input class="" wire:model="penulis" placeholder="Penulis">
        </div>
        <br>
        <br>
        <div class="homepart2body marginfit10px">
            <div class="padbot40">
                @foreach($books as $book)
                <div class="producttd padbot30">
                    <div class="producttdpad">
                        <a href="/buku-detail/{{$book->id}}">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5" style="background:url({{asset('storage/'.$book->foto)}}) no-repeat center center;background-size:cover;">
                                </div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">{{$book->judul}}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif