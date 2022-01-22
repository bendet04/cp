<div>
    <script type="text/javascript" src="{{asset('js/fSlider.js')}}"></script>
    <link href="{{asset('css/fSlider.css?date=20200321')}}" rel="stylesheet"/>

    <script>
        $(document).ready(function () {
            sliderName2 = $('.multi4Slider2').fSlider({
                arrowPrevClass: '', // provided for easy styling of arrows
                arrowNextClass: '', // provided for easy styling of arrows

                numOfNextSlides: [1, 1, 1, 1],
                responsive: true,
                loop: false,
                centerMode: true,
                responsiveBreakPoint: [0, 480, 800, 1000],
                slidesToShow: [1, 1, 1, 1],
                showSiblingsHowMuch: [0.05, 0.1, 0.1, 0.1],
                dots: true,
                centerPadding: '0%'
            });

        });
    </script>

    <div class="">
        <div class="multi4Slider2">
            <div class="sliderItem animationall">
                <div class="sliderPad animationall">
                    <a href="#">
                        <div class="homeproductdiv displayd640 borderradius5"
                             style="background:url({{asset('storage/images/banner/banner_1.png')}}) no-repeat center center;background-size:cover;">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="homepart1a">
    <div class="container2">
        <center>
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tablehomepart1a">
                <tr>
                    <td class="tdhomepart1a">
                        <div class="homepart1a_point">
                            <div class="homepart1a_img">
                                <img src="{{asset('storage/images/content/phpzaf1o__resized.png')}}"/>
                            </div>
                            <div class="homepart1a_txt pagetitle7b">Kualitas Cetak Terjamin</div>
                        </div>
                    </td>
                    <td class="tdhomepart1a">
                        <div class="homepart1a_point">
                            <div class="homepart1a_img">
                                <img src="{{asset('storage/images/content/php_qv_6a_resized.png')}}"/>
                            </div>
                            <div class="homepart1a_txt pagetitle7b">Pelayanan Yang Memuaskan</div>
                        </div>
                    </td>
                    <td class="tdhomepart1a">
                        <div class="homepart1a_point">
                            <div class="homepart1a_img">
                                <img src="{{asset('storage/images/content/phpyc3gj__resized.png')}}"/>
                            </div>
                            <div class="homepart1a_txt pagetitle7b">Percetakan Dengan Harga Kompetitif</div>
                        </div>
                    </td>
                    <td class="tdhomepart1a">
                        <div class="homepart1a_point">
                            <div class="homepart1a_img">
                                <img src="{{asset('storage/images/content/phphdf1cz_resized.png')}}"/>
                            </div>
                            <div class="homepart1a_txt pagetitle7b">Pengiriman Cepat & Aman</div>
                        </div>
                    </td>
                    <td class="tdhomepart1a">
                        <div class="homepart1a_point">
                            <div class="homepart1a_img">
                                <img src="{{asset('storage/images/content/phpha_xe2_resized.png')}}"/>
                            </div>
                            <div class="homepart1a_txt pagetitle7b">Bantuan Design Grafis</div>
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
</div>
@if(!empty($news))
<div class="homepart2">
    <div class="container2">
        <div class="homepart2head">
            <div class="pagetitle2b padbot30">Artikel</div>
        </div>
        <div class="homepart2body marginfit10px">
            <div class="padbot40">
                @foreach($news as $berita)
                <div class="producttd">
                    <div class="producttdpad">
                        <a href="news-detail/{{$berita->id}}">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5"
                                    style="background:url({{asset('storage/'.$berita->image)}}) no-repeat center center;background-size:cover;">
                                </div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">{{$berita->name}}</div>
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

@include('livewire.client')