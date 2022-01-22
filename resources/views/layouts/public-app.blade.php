<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <title>Percetakan Harfeey Mediantara</title>
    <meta name="title" content="Percetakan Harfeey Mediantara" />
    <meta name="description" content="Percetakan Harfeey Mediantara." />
    <link REL="SHORTCUT ICON" href="{{asset('storage/images/favicon.png')}}">

    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, min-width=320, user-scalable=no">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="1 days">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="msnbot" content="index,follow">
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{asset('css/reset.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/index.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/index_mobile.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/index_viewport.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('js/superfish-master/dist/css/superfish.css')}}" media="screen">


    <script src="{{asset('js/jquery-1.9.1.js')}}"></script>
    <script src="{{asset('js/jquery-ui-1.10.2.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <script src="{{asset('js/WOW-master_dist/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.watermark.js')}}"></script>
    <script src="{{asset('js/bxslider/jquery.bxslider.min.js')}}"></script>
    <link href="{{asset('js/bxslider/jquery.bxslider2.css?date=20170428')}}" rel="stylesheet" />
    <script src="{{asset('js/superfish-master/dist/js/hoverIntent.js')}}"></script>
    <script src="{{asset('js/superfish-master/dist/js/superfish.js')}}"></script>

    <script type="text/javascript">
        function close_overlay() {
            $(".ok,.err").fadeOut(0);
            $(".overlay").fadeOut(0);
        }

        function check_enter(e) {
            if (e.keyCode == 13) {
                redirect_search();
                return false;
            }
        }

        function redirect_search() {
            var txtsearch = document.getElementById('txtsearch').value;
            document.location.href = "search.php?search=" + txtsearch;
        }

        function menu_product_hard_show() {
            if (document.getElementById("menu_product_hard")) {
                document.getElementById("menu_product_hard").style.visibility = "visible";
            }
        }

        function menu_product_hard_hide() {
            if (document.getElementById("menu_product_hard")) {
                document.getElementById("menu_product_hard").style.visibility = "hidden";
            }
        }
        $(function () {
            $(".txtsearch").watermark("Cari Produk", "watermark");
            $("#email_subscribe").watermark("Masukkan email anda", "watermark");
        });

        function scrollWin(page) {
            var topmin = 0;
            if (page == "indexcontactid") topmin = 115;
            else topmin = 87
            $('html,body').animate({
                scrollTop: ($("#" + page).offset().top) - topmin
            }, 500);

            return true;
        }
    </script>
    <script src="{{asset('js/activeheader.js?date=20200321')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            var menu_icon_flag = 0;
            var start_project_icon_flag = 0;

            //initiate posisi awal
            $("#menu_slide").animate({
                left: "-425"
            }, 0, function () {
                // Animation complete.
                $("#menu_slide").fadeOut(0);
            });


            //icon menu click
            $(".menuiconclick").click(function () {
                if (menu_icon_flag == 0) {
                    $("#menu_slide").fadeIn(200);
                    $("#menuslidebackpart").fadeTo(500, 0.3);
                    $("#menu_slide").animate({
                        left: "0"
                    }, 500, function () {
                        menu_icon_flag = 1;
                        // Animation complete.
                    });
                }
            });

            //icon menu close click
            $("#menuslidebackpart").click(function () {
                $("#menu_slide").animate({
                    left: "-=425"
                }, 500, function () {
                    menu_icon_flag = 0;
                    // Animation complete.
                });
                $("#menu_slide").fadeOut(200);
                $("#menuslidebackpart").fadeOut(500);
            });

            $("#menu_icon_close").click(function () {
                $("#menu_slide").fadeOut(300);
                $("#menuslidebackpart").fadeOut(300);
                $("#menu_slide").animate({
                    left: "-=425"
                }, 300, function () {
                    menu_icon_flag = 0;
                    // Animation complete.
                });
            });
        });
    </script>
</head>
<body>
    <div class="">
        <div class="wa_float_icon">
            <div class="displayd"><a href="https://wa.me/6287773000454" target="_blank"><img
                        src="{{asset('storage/images/wa_float_long.png')}}" /></a></div>
            <div class="displaym"><a href="https://wa.me/6287773000454" target="_blank"><img
                        src="{{asset('storage/images/wa_float.png')}}" /></a>
            </div>
        </div>
    </div>

    <div class="menu_slide" id="menu_slide">
        <div class="menuheaderpoint">
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="menu_slide_header_table">
                <tr>
                    <td align="left">
                        <a href="/"><img src="{{asset('storage/images/logo.png')}}" style="max-height:50px" /></a>
                    </td>
                    <td align="right" style="vertical-align:top">
                        <img src="{{asset('storage/images/menu_icon_m2b.png')}}" class="menu_icon_img"
                            id="menu_icon_close" />
                    </td>
                </tr>
            </table>
        </div>

        <div class="menuheadercontent">
            <script>
                function togglemenuslideproduct() {
                    $(function () {
                        $("#menuslideproduct_id").slideToggle(500);
                    });
                }
            </script>

            <span class=""><a class="a_menutop" href="/">
                    <div class="menu_point animation">Beranda</div>
                </a></span>

            <span class=""><a class="a_menutop" href="/produk">
                    <div class="menu_point animation">Layanan Cetak</div>
                </a></span>

            <span class=""><a class="a_menutop" href="/profil">
                    <div class="menu_point animation">Tentang Kami</div>
                </a></span>

            <div class="menu_point_dis">
                <a href="https://www.facebook.com/percetakan.hrafeeymediantara.3" target="_blank">
                    <div class="socmed_point2m borderradius5 animation">
                        <div class=""><img src="{{asset('storage/images/facebook_icon2.png')}}" /></div>
                    </div>
                </a>
                <a href="https://www.instagram.com/harfeey_mediantara_official/" target="_blank">
                    <div class="socmed_point2m borderradius5 animation">
                        <div class=""><img src="{{asset('storage/images/instagram_icon2.png')}}" /></div>
                    </div>
                </a>
                <a href="https://wa.me/6287773000454" target="_blank">
                    <div class="socmed_point2m borderradius5 animation">
                        <div class=""><img src="{{asset('storage/images/wa_icon2.png')}}" /></div>
                    </div>
                </a>
            </div>

            <div style="height:23px"></div>

        </div>


        <script>
            function socmedphonetxttoggle2() {
                var status = document.getElementById("socmedphonetxt2").style.display;
                jQuery(document).ready(function ($) {
                    if (status == "block") {
                        $("#socmedphonetxt2").fadeOut(300);
                    } else {
                        $("#socmedphonetxt2").fadeIn(300);
                    }
                });
            }
        </script>
        <div class="menufooterpoint">
        </div>
    </div>
    <div class="menuslidebackpart" id="menuslidebackpart"></div>

    <script>
        $(document).ready(function () {
            var last_option_id = 0;
            $('.headermenubtntrigger').click(function () {
                var id = $(this).data('value');

                if (last_option_id == id) {
                    $("#headeroption_" + id).slideUp(300);
                    last_option_id = 0;
                } else {
                    $(".headeroption").slideUp(0);
                    $("#headeroption_" + id).slideDown(300);
                    last_option_id = id;
                }
            });
        });
    </script>
   
    <div class="menudisplayd">
        <div class="header  animationall" id="menuid">
            <div class="headertop">
                <div class="container2">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tableheadertop">
                        <tr>
                            <td class="tdheadertop tdheadertop1">
                                <span class="headertoppoint"><img src="{{asset('storage/images/phone_icon.png')}}" />
                                    <span class="headertoptext">6287773000454</span></span>
                                <a target="_blank"
                                    href="https://www.google.com/maps/place/PT.+ESA+HARFEEY+MEDIANTARA/@-7.7684707,110.4244043,15z/data=!4m5!3m4!1s0x0:0x59e3d8ef6fd8e6dc!8m2!3d-7.7684707!4d110.4244043"
                                    <span class="headertoppoint"><img src="{{asset('storage/images/pin_icon.png')}}" />
                                    <span class="headertoptext"> Jl. Nangka III No. 44C Pugeran, Maguwoharjo Kec. Depok
                                        Kab. Sleman – DIY</span></span> </a>
                            </td>
                            <td class="tdheadertop tdheadertop2">
                                <span class="headertoppoint"><img src="{{asset('storage/images/hour_icon.png')}}" />
                                    <span class="headertoptext">Senin - Sabtu | 08.00 - 16.00</span></span>
                                <span>
                                    <a href="https://www.facebook.com/percetakan.hrafeeymediantara.3" target="_blank"
                                        class="a_headersocmed"><img
                                            src="{{asset('storage/images/facebook_icon.png')}}" /></a>
                                    <a href="https://www.instagram.com/harfeey_mediantara_official/" target="_blank"
                                        class="a_headersocmed"><img
                                            src="{{asset('storage/images/instagram_icon.png')}}" /></a>
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="container2">
                <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tableheader">
                    <tr>
                        <td class="tdheader tdheader1">
                            <a href="/"><img src="{{asset('storage/images/logo.png')}}" class="logo" /></a>
                        </td>
                        <td class="tdheader tdheader2">
                                <a href="/" class="a_menupoint center"><span class="menupoint">Beranda</span></a>
                                <a href="/produk" class="a_menupoint"><span class="menupoint">Layanan Cetak</span></a>
                                <a href="/profil" class="a_menupoint"><span class="menupoint">Tentang Kami</span></a>
                        </td>
                        <td class="tdheader tdheader2">
                            <div class="footer_socmed">
                                <a href="https://www.facebook.com/percetakan.hrafeeymediantara.3" target="_blank"
                                    class="a_footersocmed"><img
                                        src="{{asset('storage/images/facebook_icon2.png')}}" /></a>
                                <a href="https://www.instagram.com/harfeey_mediantara_official/" target="_blank"
                                    class="a_footersocmed"><img
                                        src="{{asset('storage/images/instagram_icon2.png')}}" /></a>
                                <a href="https://wa.me/6287773000454" target="_blank" class="a_footersocmed"><img
                                        src="{{asset('storage/images/wa_icon2.png')}}" /></a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="activefixedheader" id="activefixedheader"></div>
    </div>

    <div class="menudisplaym">
        <div class="headerm">
            <div class="container">
                <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tableheaderm">
                    <tr>
                        <td class="tdheaderm tdheaderm2">
                            <a>
                                <div class="menu_icon menuiconclick" id="menu_icon">
                                    <div class="vm" align="center">
                                        <img src="{{asset('storage/images/menu_icon_m2b.png')}}" class="menu_icon_img">
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td class="tdheaderm tdheaderm1">
                            <a href="/"><img src="{{asset('storage/images/logo.png')}}" style="max-width:120px"
                                    class="headermlogo" /></a>
                        </td>
                        <td class="tdheaderm tdheaderm3">
                            &nbsp;
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="height:79px"></div>
    </div>

    @yield('content')

    @if(!empty($products))
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
                            <a href="product/brosur">
                                <div class="productborder borderradius5">
                                    <div class="productimgdiv topborderrad5"
                                        style="background:url({{asset('storage/'.$berita->image)}}) no-repeat center center;background-size:cover;">
                                    </div>
                                    <div class="producttxtdiv">
                                        <div class="vm">
                                            <div class="page_title7">{{$berita->category->name}}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div style="text-align:center"><a href="product"><input type="button"
                            class="btn1 animationall borderradius5" value="Lihat Semua Artikel" /></a></div>
            </div>
        </div>
    </div>
    @endif

    <div class="homepart5">
        <div class="container2">
            <div class="padbot45">
                <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tablehomepart5">
                    <tr>
                        <td class="tdhomepart5 tdhomepart5_2">
                            <center>
                            <div class="footer_socmed">
                                <a href="https://www.facebook.com/percetakan.hrafeeymediantara.3" target="_blank"
                                    class="a_footersocmed"><img
                                        src="{{asset('storage/images/facebook_icon2.png')}}" /></a>
                                <a href="https://www.instagram.com/harfeey_mediantara_official/" target="_blank"
                                    class="a_footersocmed"><img
                                        src="{{asset('storage/images/instagram_icon2.png')}}" /></a>
                                <a href="https://wa.me/6287773000454" target="_blank" class="a_footersocmed"><img
                                        src="{{asset('storage/images/wa_icon2.png')}}" /></a>
    </center>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="webfooterpart1">
                <div class="wf1_border borderradius5">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="table_wf1">
                        <tr>
                            <td class="td_wf1 td_wf1_1">
                                <div class="wf1_pad">
                                    <div class="wf1_p1 padbot10">
                                        <img src="{{asset('storage/images/pin_icon2.png')}}" /> <span
                                            class="pagetitle4b">Location</span>
                                    </div>
                                    <a target="_blank"
                                        href="https://www.google.com/maps/place/PT.+ESA+HARFEEY+MEDIANTARA/@-7.7684707,110.4244043,15z/data=!4m5!3m4!1s0x0:0x59e3d8ef6fd8e6dc!8m2!3d-7.7684707!4d110.4244043"
                                        <div class="wf1_p2 pagedescription1"> Jl. Nangka III No. 44C Pugeran,
                                        Maguwoharjo Kec. Depok Kab. Sleman – DIY
                                </div>
                                </a>
                </div>
                </td>
                <td class="td_wf1 td_wf1_2">
                    <div class="wf1_pad">
                        <div class="wf1_p1 padbot10">
                            <img src="{{asset('storage/images/phone_icon2.png')}}" /> <span class="pagetitle4b">Call
                                Us</span>
                        </div>
                        <div class="wf1_p2 pagedescription1">
                            Senin - Sabtu | 08.00 - 16.00<br />

                            <div class="wf1_label">Phone.</div>
                            (0274) 2801021<br />

                            <div class="wf1_label">Mobile.</div>
                            +6287773000454
                        </div>
                    </div>
                </td>
                <td class="td_wf1 td_wf1_3">
                    <div class="wf1_pad">
                        <div class="wf1_p1 padbot10">
                            <img src="{{asset('storage/images/mail_icon.png')}}" /> <span class="pagetitle4b">Mail
                                Us</span>
                        </div>
                        <div class="wf1_p2 pagedescription1">
                            <div class="wf1_label">Email.</div>
                            <a href="mailto:percetakanharfeey@gmail.com">percetakanharfeey@gmail.com</a><br />

                        </div>
                    </div>
                </td>
                </tr>
                </table>
            </div>
        </div>
    </div>
    </div>

    <div class="container2">
        <div class="webfooterpart2">
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tableheaderbottom">
                <tr>
                    <td class="tdheaderbottom tdheaderbottom3">
                        <a href="/" class="a_menupoint center"><span class="menupoint">Beranda</span></a>
                        <a href="/produk" class="a_menupoint"><span class="menupoint">Layanan Cetak</span></a>
                        <a href="/profil" class="a_menupoint"><span class="menupoint">Tentang Kami</span></a>
                    </td>

                </tr>
            </table>
        </div>
    </div>
    <div class="">
        <div class="container2">
            <div class="pagedescription1 colorgrey padbot45">Harfeey adalah sebuah jasa percetakan yang melayani berbagai kebutuhan cetak anda seperti buku novel, buku modul, buku kenangan, brosur, pamflet, stiker, sertifikat, cetak foto, spanduk  
                dll.
                Kami memberikan kualitas cetak yang terjamin dengan harga yang kompetitif sehingga membantu anda lebih
                efisien dalam mencetak keperluan anda.
            </div>

            <div class="copyright">&copy;2021. Harfeey. All Rights Reserved
            </div>
        </div>
    </div>

</body>

</html>