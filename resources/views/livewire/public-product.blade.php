@if(!empty($products))
<div class="homepart2">
    <div class="container2">
        <div class="homepart2head">
            <div class="pagetitle2b padbot30">Layanan Cetak</div>
        </div>
        <div class="homepart2body marginfit10px">
            <div class="padbot40">
                @foreach($product_categories as $category)
                <div class="homepart3head">
                    <div class="pagetitle2b padbot10">{{$category->name}}</div>
                </div>
                    @foreach($category->products as $product)
                        <div class="producttd padbot30">
                            <div class="producttdpad">
                                <a href="/produk-detail/{{$product->id}}">
                                    <div class="productborder borderradius5">
                                        <div class="productimgdiv topborderrad5"
                                            style="background:url({{asset('storage/'.$product->image)}}) no-repeat center center;background-size:cover;">
                                        </div>
                                        <div class="producttxtdiv">
                                            <div class="vm">
                                                <div class="page_title7">{{$product->name}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                   
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif