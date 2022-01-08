<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


    <title>LUPRINTZ Jasa Digital Printing & Percetakan 24 Jam Di Bekasi</title>
    <meta name="title" content="LUPRINTZ Jasa Digital Printing & Percetakan 24 Jam Di Bekasi"/>
    <meta name="description"
          content="LUPRINTZ menjawab kebutuhan Digital Printing Anda dan menjamin kualitas cetak Anda adalah yang terbaik. Kami menawarkan Jasa Percetakan Digital 24 Jam termurah di Bekasi Barat seperti cetak stiker, kalender, spanduk, brosur, dan lain-lain."/>

    <!-- <link rel="canonical" href="https://www.luprintz.com"/> -->
    <link REL="SHORTCUT ICON" href="{{asset('storage/images/favicon.png')}}">

    <!--<meta name="viewport" content="width=1240, user-scalable=yes" />-->
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, min-width=320, user-scalable=no">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="1 days">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="msnbot" content="index,follow">
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{asset('css/reset.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/index.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/index_mobile.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/index_viewport.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/jquery-ui.css')}}"/>
    <link rel="stylesheet" href="{{asset('js/superfish-master/dist/css/superfish.css')}}" media="screen">
    <!--<link rel="stylesheet" href="js/owlcarousel/dist/assets/owl.carousel.css">
	<link rel="stylesheet" href="js/owlcarousel/dist/assets/owl.theme.default.css">-->

    <!--<link rel="stylesheet" href="dist/stylesheets/superslides.css">-->

    <script src="{{asset('js/jquery-1.9.1.js')}}"></script>
    <script src="{{asset('js/jquery-ui-1.10.2.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}"/>
    <script src="{{asset('js/WOW-master_dist/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.watermark.js')}}"></script>
    <script src="{{asset('js/bxslider/jquery.bxslider.min.js')}}"></script>
    <link href="{{asset('js/bxslider/jquery.bxslider2.css?date=20170428')}}" rel="stylesheet"/>
    <!--<link href="js/bxslider/jquery.bxslider3.css?date=20170428" rel="stylesheet" />-->
    <!--<link href="js/bxslider/jquery.bxslider3b.css?date=20170428" rel="stylesheet" />-->
    <script src="{{asset('js/superfish-master/dist/js/hoverIntent.js')}}"></script>
    <script src="{{asset('js/superfish-master/dist/js/superfish.js')}}"></script>
    <!--<script src="js/owlcarousel/dist/owl.carousel.min.js"></script>-->

    <!--<link href="js/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
    <script src="js/facebox/facebox.js" type="text/javascript"></script> -->
    <script type="text/javascript">
        /*jQuery(document).ready(function($) {
         $('a[rel*=facebox]').facebox({
         loading_image : '/loading.gif',
         close_image   : '/closelabel.gif'
         })
         $(".overlay,.ok,.err").show(200);
         $(".ok,.err").fadeOut(3000);
         $(".overlay").fadeOut(3000);
         })*/
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

    <!--<script>
		(function($){ //create closure so we can safely use $ as alias for jQuery

			$(document).ready(function(){

				// initialise plugin
				var example = $('#menuheader,#menuheader2').superfish({
					//add options here if required
					delay:300,
					speed: 'normal',
					speedOut: 100,
					cssArrows: false
				});

			});

		})(jQuery);
	</script>-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-63860127-23"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-63860127-23');
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
                    }
            );

            /*$("#start_project_slide").animate({
             right: "-=700"
             }, 0, function() {
             // Animation complete.
             $("#start_project_slide").fadeOut(0);
             }
             );*/

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
                            }
                    );
                }
            });

            //icon menu close click
            $("#menuslidebackpart").click(function () {
                $("#menu_slide").animate({
                            left: "-=425"
                        }, 500, function () {
                            menu_icon_flag = 0;
                            // Animation complete.
                        }
                );
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
                        }
                );
            });

            //icon start project click
            /*$("#start_project_icon").click(function() {
             if(start_project_icon_flag==0){
             $("#start_project_slide").fadeIn(0);
             $("#start_project_slide").animate({
             right: "+=700"
             }, 500, function() {
             start_project_icon_flag=1;
             // Animation complete.
             }
             );
             }
             });

             //icon start project close click
             $("#close_icon2").click(function() {
             $("#start_project_slide").animate({
             right: "-=700"
             }, 500, function() {
             start_project_icon_flag=0;
             // Animation complete.
             }
             );
             $("#start_project_slide").fadeOut(0);
             });
             */
        });
    </script>
</head>


<body>
<!---->

<!--<script>
function close_popup_quickbuy(){
    document.getElementById('popupindex_qb').style.display='none';
    document.getElementById('menuslidebackpart_qb').style.display='none';
}
function quickbuy_open(id){
    document.getElementById('popupindex_qb').style.display='block';
    document.getElementById('menuslidebackpart_qb').style.display='block';
    document.getElementById('iframe_qb').src="team_detail.php?id="+id;
}
</script>
<div class="">
<div class="menuslidebackpart" id="menuslidebackpart_qb" onclick="close_popup_quickbuy()" style="display:none"></div>
<div class="posfixed" id="posfixed_qb">
    <div class="popupindex_qb" id="popupindex_qb" style="display:none">
        <div class="posrel100"><div class='posabs' style="width:100%;text-align:right;"><img src="{{asset('storage/images/close_btn3.png')}}" style="cursor:pointer;" onclick="close_popup_quickbuy()" /></div></div>
        <iframe id="iframe_qb" src="team_detail.php?id=" width="100%" style="height:calc(100vh - 200px);" frameborder="0"></iframe>
    </div>
</div>
</div>-->

<div class="">
    <div class="wa_float_icon">
        <div class="displayd"><a href="https://wa.me/6285899991818" target="_blank"><img
                src="{{asset('storage/images/wa_float_long.png')}}"/></a></div>
        <div class="displaym"><a href="https://wa.me/6285899991818" target="_blank"><img src="{{asset('storage/images/wa_float.png')}}"/></a>
        </div>
    </div>
</div>


<div class="menu_slide" id="menu_slide">
    <div class="menuheaderpoint">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="menu_slide_header_table">
            <tr>
                <td align="left">
                    <a href="home"><img src="{{asset('storage/images/logo.png')}}" style="max-height:50px"/></a>
                </td>
                <td align="right" style="vertical-align:top">
                    <img src="{{asset('storage/images/menu_icon_m2b.png')}}" class="menu_icon_img" id="menu_icon_close"/>
                </td>
            </tr>
        </table>
    </div>

    <div class="menuheadercontent">
        <!--<div style="padding:0px 20px 10px 20px">
        <form name="form2" id="form2" method="get" action="/product">
            <div class="header_search_boxm" align="left">
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                        <td>
                            <input type="hidden" name="search_flag" id="search_flag" value="1" />
                            <input type="text" id="txtsearch" class="txtsearch search_inputm" name="txtsearch"/>
                        </td>
                        <td width="31">
                            <input type="image" class="search_img_m" src="{{asset('storage/images/search.png')}}" />
                        </td>
                    </tr>
                </table>
            </div>
        </form>
        </div>-->

        <script>
            function togglemenuslideproduct() {
                $(function () {
                    $("#menuslideproduct_id").slideToggle(500);
                });
            }
        </script>

        <div class="menu_point_dis">
            <form name="formsearch2" id="formsearch2" method="get" action="/product">
                <div class="header_search_box borderradius5" align="left">
                    <input type="text" id="txtsearch2" class=" txtsearch search_input" name="txtsearch2"/><!--
            -->
                    <div class="btnsearch borderradius5 animation" onclick="searchclick2()">
                        <div class="vm">
                            <!--<img src="{{asset('storage/images/search.png')}}" class="search_img" onclick="searchclick()" />-->
                            Cari
                        </div>
                    </div>

                    <script>
                        function searchclick2() {
                            var txtsearch = document.getElementById("txtsearch2").value;

                            datalink = "product?txtsearch=" + encodeURI(txtsearch);//alert(datalink);
                            document.location.href = datalink;
                        }
                        function txtsearchenter2(e) {
                            if (e.keyCode === 13) {
                                e.preventDefault(); // Ensure it is only this code that run
                                searchclick2();
                            }
                        }
                    </script>
                </div>
            </form>
        </div>

        <span class=""><a class="a_menutop" href="home">
            <div class="menu_point animation">Beranda</div>
        </a></span>
        <!--<span class=""><a class="a_menutop" href="socialmedia"><div class="menu_point animation">Social Media</div></a></span>-->
        <span class=""><a class="a_menutop" href="category/stationary">
            <div class="menu_point animation">Stationary</div>
        </a></span>

        <span class=""><a class="a_menutop" href="category/promotion">
            <div class="menu_point animation">Promotion</div>
        </a></span>

        <span class=""><a class="a_menutop" href="category/signage-display">
            <div class="menu_point animation">Signage & Display</div>
        </a></span>

        <span class=""><a class="a_menutop" href="category/offset">
            <div class="menu_point animation">Offset</div>
        </a></span>

        <span class=""><a class="a_menutop" href="category/others">
            <div class="menu_point animation">Others</div>
        </a></span>

        <br/><br/>

        <span class=""><a class="a_menutop" href="client">
            <div class="menu_point animation">Klien Kami</div>
        </a></span>
        <span class=""><a class="a_menutop" href="promo">
            <div class="menu_point animation">Promosi</div>
        </a></span>
        <span class=""><a class="a_menutop" href="news">
            <div class="menu_point animation">Artikel</div>
        </a></span>
        <span class=""><a class="a_menutop" href="about">
            <div class="menu_point animation">Tentang Kami</div>
        </a></span>
        <!--<div id='menuslideproduct_id' style="display:none">
                </div>-->


        <span class=""><a class="a_menutop" href="contact">
            <div class="menu_point animation">Hubungi Kami</div>
        </a></span>

        <div class="menu_point_dis">
            <a href="https://www.facebook.com" target="_blank">
                <div class="socmed_point2m borderradius5 animation">
                    <div class=""><img src="{{asset('storage/images/facebook_icon2.png')}}"/></div>
                </div>
            </a>
            <a href="https://instagram.com/luprintzdigital?igshid=n700f21pfeai" target="_blank">
                <div class="socmed_point2m borderradius5 animation">
                    <div class=""><img src="{{asset('storage/images/instagram_icon2.png')}}"/></div>
                </div>
            </a>
            <a href="https://www.twitter.com" target="_blank">
                <div class="socmed_point2m borderradius5 animation">
                    <div class=""><img src="{{asset('storage/images/twitter_icon2.png')}}"/></div>
                </div>
            </a>
            <a href="https://www.linkedin.com" target="_blank">
                <div class="socmed_point2m borderradius5 animation">
                    <div class=""><img src="{{asset('storage/images/linkedin_icon2.png')}}"/></div>
                </div>
            </a>
            <a href="https://wa.me/6285899991818" target="_blank">
                <div class="socmed_point2m borderradius5 animation">
                    <div class=""><img src="{{asset('storage/images/wa_icon2.png')}}"/></div>
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
                }
                else {
                    $("#socmedphonetxt2").fadeIn(300);
                }
            });
        }
    </script>
    <div class="menufooterpoint">
        <!--<div class="padbot25">
            <a href="https://www.facebook.com" target="_blank"><div class="socmed_point2m borderradius5 animation"><div class="verticalmiddle"><img src="{{asset('storage/images/facebook_icon.png')}}" /></div></div></a>
            <a href="https://instagram.com/luprintzdigital?igshid=n700f21pfeai" target="_blank"><div class="socmed_point2m borderradius5 animation"><div class="verticalmiddle"><img src="{{asset('storage/images/instagram_icon.png')}}" /></div></div></a>
            <a href="" target="_blank"><div class="socmed_point2m animation"><div class="verticalmiddle"><img src="{{asset('storage/images/youtube_icon.png')}}" /></div></div></a>
               <div style="clear:both"></div>
        </div>-->
    </div>
</div>
<div class="menuslidebackpart" id="menuslidebackpart"></div>

<!--<script>
    function framecontactdownload(id,language){
        document.getElementById("framecontactdownloadid").src="framecontactdownload.php?id="+id+"&language="+language;
        document.getElementById('popupindex2').style.display='block';document.getElementById('menuslidebackpart2').style.display='block';
    }
</script>

<div class="menuslidebackpart" id="menuslidebackpart2" onclick="document.getElementById('popupindex2').style.display='none';document.getElementById('menuslidebackpart2').style.display='none';"></div>
<div class="popupindex2" id="popupindex2">
    <div class="popuppad2">
        <div class="posrel100"><div class='posabs' style="width:100%;text-align:right;"><img src="{{asset('storage/images/close_btn2.png')}}" style="cursor:pointer;position:relative;top:-33px;right:10px;" onclick="document.getElementById('popupindex2').style.display='none';document.getElementById('menuslidebackpart2').style.display='none';" /></div></div>
        <iframe id="framecontactdownloadid" name="framecontactdownloadid" class="framecontactdownload" frameborder="0" width="100%" src=""></iframe>
    </div>
</div>-->

<script>
    $(document).ready(function () {
        var last_option_id = 0;
        $('.headermenubtntrigger').click(function () {
            var id = $(this).data('value');

            if (last_option_id == id) {
                $("#headeroption_" + id).slideUp(300);
                last_option_id = 0;
            }
            else {
                $(".headeroption").slideUp(0);
                $("#headeroption_" + id).slideDown(300);
                last_option_id = id;
            }
        });
    });
</script>
<script>
    function searchbtnclick() {
        document.getElementById("searchbtn").style.display = "none";
        document.getElementById("header_search_box_id").style.display = "block";
        document.getElementById("txtsearch").focus();
    }
</script>

<div class="menudisplayd">
    <div class="header  animationall" id="menuid">
        <div class="headertop">
            <div class="container2">
                <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tableheadertop">
                    <tr>
                        <td class="tdheadertop tdheadertop1">
                            <span class="headertoppoint"><img src="{{asset('storage/images/phone_icon.png')}}"/> <span class="headertoptext">6285899991818</span></span>
                            <span class="headertoppoint"><img src="{{asset('storage/images/pin_icon.png')}}"/> <span class="headertoptext">Jl. Pekayon Raya No. 45C, Pekayon Jaya, Bekasi</span></span>
                        </td>
                        <td class="tdheadertop tdheadertop2">
                            <span class="headertoppoint"><img src="{{asset('storage/images/hour_icon.png')}}"/> <span class="headertoptext">Senin - Sabtu | 09.00 - 18.00</span></span>
                                <span>
                                	<a href="https://www.facebook.com" target="_blank" class="a_headersocmed"><img
                                            src="{{asset('storage/images/facebook_icon.png')}}"/></a>
                                    <a href="https://www.twitter.com" target="_blank" class="a_headersocmed"><img
                                            src="{{asset('storage/images/twitter_icon.png')}}"/></a>
                                    <a href="https://instagram.com/luprintzdigital?igshid=n700f21pfeai" target="_blank"
                                       class="a_headersocmed"><img src="{{asset('storage/images/instagram_icon.png')}}"/></a>
                                    <a href="https://www.linkedin.com" target="_blank" class="a_headersocmed"><img
                                            src="{{asset('storage/images/linkedin_icon.png')}}"/></a>
                                    <!--<a href="" target="_blank" class="a_headersocmed"><img src="{{asset('storage/images/gplus_icon.png')}}" /></a>-->
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
                        <a href="home"><img src="{{asset('storage/images/logo.png')}}" class="logo"/></a>
                    </td>
                    <td class="tdheader tdheader2">
                        <form name="formsearch" id="formsearch" method="get" action="/product">
                            <div class="header_search_box borderradius5" align="left">
                                <input type="text" id="txtsearch" class=" txtsearch search_input" name="txtsearch"/><!--
                                -->
                                <div class="btnsearch borderradius5 animation" onclick="searchclick()">
                                    <div class="vm">
                                        <!--<img src="{{asset('storage/images/search.png')}}" class="search_img" onclick="searchclick()" />-->
                                        Cari
                                    </div>
                                </div>

                                <script>
                                    function searchclick() {
                                        var txtsearch = document.getElementById("txtsearch").value;

                                        datalink = "product?txtsearch=" + encodeURI(txtsearch);//alert(datalink);
                                        document.location.href = datalink;
                                    }
                                    function txtsearchenter(e) {
                                        if (e.keyCode === 13) {
                                            e.preventDefault(); // Ensure it is only this code that run
                                            searchclick();
                                        }
                                    }
                                </script>
                            </div>
                        </form>
                    </td>
                    <td class="tdheader tdheader4">
                        <a href="contact">
                            <div class="headercontactbtn borderradius5 animationall">
                                <div class='vm'>Hubungi Kami</div>
                            </div>
                        </a>
                    </td>
                    <!--<td class="tdheader tdheader5">
                                                    <ul class="sf-menu" id="">
                            <li class="current">
                                <span class="lang_t">
                                    <img src="{{asset('storage/images/world_icon.png')}}" class="lang_t_img1" />
                                    <span class="lang_t_t1">ID</span>
                                    <img src="{{asset('storage/images/arrow_down.png')}}" class="lang_t_img2" />
                                </span>
                                <ul style="">
                                    <li style="margin-left:22px">
                                        <div class="menupop menupoplang">

                                            <a href="id/"><div class="headerddmenu headerddmenu2 animation"><div class="vm">ID</div></div></a>
                                            <a href="en/"><div class="headerddmenu headerddmenu2 animation"><div class="vm">EN</div></div></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>-->
                </tr>
            </table>
        </div>
        <div class="headerbottom">
            <div class="container2">
                <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tableheaderbottom">
                    <tr>
                        <td class="tdheaderbottom tdheaderbottom1">
                            <a href="home" class="a_menupoint"><span class="menupoint">Home</span></a>
                            <!--<a href="socialmedia" class="a_menupoint"><span class="menupoint">Social Media</span></a>-->
                            <a href="category/stationary" class="a_menupoint"><span class="menupoint">Stationary</span></a>
                            <a href="category/promotion" class="a_menupoint"><span
                                    class="menupoint">Promotion</span></a>
                            <a href="category/signage-display" class="a_menupoint"><span class="menupoint">Signage & Display</span></a>
                            <a href="category/offset" class="a_menupoint"><span class="menupoint">Offset</span></a>
                            <a href="category/others" class="a_menupoint"><span class="menupoint">Others</span></a>
                        </td>
                        <td class="tdheaderbottom tdheaderbottom2">
                            <a href="client" class="a_menupoint"><span class="menupoint">Klien Kami</span></a>
                            <a href="promo" class="a_menupoint"><span class="menupoint">Promosi</span></a>
                            <a href="news" class="a_menupoint"><span class="menupoint">Artikel</span></a>
                            <a href="about" class="a_menupoint"><span class="menupoint">Tentang Kami</span></a>
                        </td>
                    </tr>
                </table>
            </div>
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
                        <a href="home"><img src="{{asset('storage/images/logo.png')}}" style="max-width:120px" class="headermlogo"/></a>
                    </td>
                    <td class="tdheaderm tdheaderm3">
                        <!--<select class="mselecthead" name="langselectm" id="langselectm" onchange="document.location.href=this.value">
                        	<option value="">ID</option>
                            <option value="/en/">English</option>
                            <option value="/id/">Indonesia</option>
                        </select>
                        -->&nbsp;
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div style="height:79px"></div>
</div>


<div>
    <script type="text/javascript" src="{{asset('js/fSlider.js')}}"></script>
    <link href="{{asset('css/fSlider.css?date=20200321')}}" rel="stylesheet"/>

    <script>
        $(document).ready(function () {
            sliderName2 = $('.multi4Slider2').fSlider({
                arrowPrevClass: 'fArrow-prev2', // provided for easy styling of arrows
                arrowNextClass: 'fArrow-next2', // provided for easy styling of arrows
                /*autoplay: false,
                 autoplaySpeed: 3000, // in ms
                 adaptiveHeightOnResize: false,
                 loop: true,
                 callbacks: {
                 beforeGoToSlide: function(){},
                 noLoopAfterEndSlideClickArrow: function(){},
                 afterchangeSlide: function(){}
                 }, // can pass a function
                 customizeDots: false, // can use thumbnails
                 centerMode: true, // slidesToShow should always be 1 if centerMode is set true
                 centerPadding: '0.2%', // center mode padding applied to current slide, pass in any style among '20%', '40' & '40px'
                 showSiblingsHowMuch: 1.5, // 0.5 = show 50% width of the sibling slide, if value > 1, > 1 slides will be on each side of the center slide
                 dots: false,
                 drag: true,
                 dynamicHeight: true, // if this is set false, default slider item vertical-align: middle
                 setHeight: false, // setHeight to crop sliderItems which are too long
                 widthHeightRatio: 0, // if setHeight is set true, you must provide this value
                 defaultCurrentSlide: 0, // start from 0
                 easing: 'easeOutExpo', // pass any jQuery easing
                 numOfNextSlides: [1, 1], // for responsive, please pass an array, for non-responsive, pass either integer or array
                 pauseOnHover: true,
                 responsiveBreakPoint: [0, 960], // must include 0
                 responsive: false,
                 showArrows: true,
                 slidesToShow: [1, 1], // for responsive, please pass an array, for non-responsive, pass either integer or array
                 speed: 500 // in ms
                 */

                numOfNextSlides: [1, 1, 1, 1],
                responsive: true,
                loop: true,
                centerMode: true,
                responsiveBreakPoint: [0, 480, 800, 1000],
                slidesToShow: [1, 1, 1, 1],
                showSiblingsHowMuch: [0.05, 0.1, 0.1, 0.1],
                dots: true,
                centerPadding: '0%'
            });

            //sliderName.fSlider('destroy'); or $('.multi4Slider').fSlider('destroy');

            // return sliding movement direction: 'prev' or 'next'
            //sliderName.fSlider('returnSlideDir'); or $('.multi4Slider').fSlider('returnSlideDir');

            //$('.multi4Slider').fSlider('goToSlide', targetSlideIndex); // targetSlideIndex [integer]

        });
    </script>

    <div class="">
        <div class="multi4Slider2">
            <div class="sliderItem animationall">
                <div class="sliderPad animationall">
                    <a href="#">
                        <div class="homeproductdiv displayd640 borderradius5"
                             style="background:url({{asset('storage/images/banner/php_cvl88_resized.png')}}) no-repeat center center;background-size:cover;">
                        </div>
                        <div class="homeproductdiv2 displaym640 borderradius5"
                             style="background:url({{asset('storage/images/banner/phplhdpk__resized.png')}}) no-repeat center center;background-size:cover;">
                        </div>
                    </a>
                </div>
            </div>
            <div class="sliderItem animationall">
                <div class="sliderPad animationall">
                    <a href="https://www.luprintz.com/socialmedia">
                        <div class="homeproductdiv displayd640 borderradius5"
                             style="background:url({{asset('storage/images/banner/phpsvy1ha_resized.png')}}) no-repeat center center;background-size:cover;">
                        </div>
                        <div class="homeproductdiv2 displaym640 borderradius5"
                             style="background:url({{asset('storage/images/banner/phpi3_pxy_resized.png')}}) no-repeat center center;background-size:cover;">
                        </div>
                    </a>
                </div>
            </div>
            <div class="sliderItem animationall">
                <div class="sliderPad animationall">
                    <a href="#">
                        <div class="homeproductdiv displayd640 borderradius5"
                             style="background:url({{asset('storage/images/banner/phpy_pl3v_resized.png')}}) no-repeat center center;background-size:cover;">
                        </div>
                        <div class="homeproductdiv2 displaym640 borderradius5"
                             style="background:url({{asset('storage/images/banner/phpw7copd_resized.png')}}) no-repeat center center;background-size:cover;">
                        </div>
                    </a>
                </div>
            </div>
            <div class="sliderItem animationall">
                <div class="sliderPad animationall">
                    <a href="#">
                        <div class="homeproductdiv displayd640 borderradius5"
                             style="background:url({{asset('storage/images/banner/phpobiz5__resized.png')}}) no-repeat center center;background-size:cover;">
                        </div>
                        <div class="homeproductdiv2 displaym640 borderradius5"
                             style="background:url({{asset('storage/images/banner/phpuo6lj5_resized.png')}}) no-repeat center center;background-size:cover;">
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
                            <div class="homepart1a_txt pagetitle7b">Pelayanan Digital Printing Yang Memuaskan</div>
                        </div>
                    </td>
                    <td class="tdhomepart1a">
                        <div class="homepart1a_point">
                            <div class="homepart1a_img">
                                <img src="{{asset('storage/images/content/phpyc3gj__resized.png')}}"/>
                            </div>
                            <div class="homepart1a_txt pagetitle7b">Percetakan Murah Dengan Harga Kompetitif</div>
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

<div class="homepart2">
    <div class="container2">
        <div class="homepart2head">
            <div class="pagetitle2b padbot30">Produk Cetak Pilihan</div>
        </div>
        <div class="homepart2body marginfit10px">
            <div class="padbot40">
                <div class="producttd">
                    <div class="producttdpad">
                        <a href="product/brosur">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5"
                                     style="background:url({{asset('storage/images/product/phpihbp_w_resized.png')}}) no-repeat center center;background-size:cover;"></div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">Brosur</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="producttd">
                    <div class="producttdpad">
                        <a href="product/poster">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5"
                                     style="background:url({{asset('storage/images/product/phpzu2p34_resized.png')}}) no-repeat center center;background-size:cover;"></div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">Poster</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="producttd">
                    <div class="producttdpad">
                        <a href="product/digital-a3-">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5"
                                     style="background:url({{asset('storage/images/product/phpejozph_resized.png')}}) no-repeat center center;background-size:cover;"></div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">Digital A3+</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="producttd">
                    <div class="producttdpad">
                        <a href="product/banner-indoor">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5"
                                     style="background:url({{asset('storage/images/product/phpoumy2i_resized.png')}}) no-repeat center center;background-size:cover;"></div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">Banner Indoor</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="producttd">
                    <div class="producttdpad">
                        <a href="product/kartu-nama">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5"
                                     style="background:url({{asset('storage/images/product/php2boaa__resized.png')}}) no-repeat center center;background-size:cover;"></div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">Kartu Nama</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="producttd">
                    <div class="producttdpad">
                        <a href="product/roll-up-banner">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5"
                                     style="background:url({{asset('storage/images/product/phpjp0g4f_resized.png')}}) no-repeat center center;background-size:cover;"></div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">Roll Up Banner</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="producttd">
                    <div class="producttdpad">
                        <a href="product/tripod-banner">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5"
                                     style="background:url({{asset('storage/images/product/php4228ka_resized.png')}}) no-repeat center center;background-size:cover;"></div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">Tripod Banner</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="producttd">
                    <div class="producttdpad">
                        <a href="product/kalender">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5"
                                     style="background:url({{asset('storage/images/product/phplbx0ll_resized.png')}}) no-repeat center center;background-size:cover;"></div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">Kalender</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="producttd">
                    <div class="producttdpad">
                        <a href="product/x-banner">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5"
                                     style="background:url({{asset('storage/images/product/phpk_1__resized.png')}}) no-repeat center center;background-size:cover;"></div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">X Banner</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="producttd">
                    <div class="producttdpad">
                        <a href="product/flyer">
                            <div class="productborder borderradius5">
                                <div class="productimgdiv topborderrad5"
                                     style="background:url({{asset('storage/images/product/phpzqz4k7_resized.png')}}) no-repeat center center;background-size:cover;"></div>
                                <div class="producttxtdiv">
                                    <div class="vm">
                                        <div class="page_title7">Flyer</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div style="text-align:center"><a href="product"><input type="button"
                                                                    class="btn1 animationall borderradius5"
                                                                    value="Lihat Semua Produk"/></a></div>
        </div>
    </div>
</div>

<div class="homepart3">
    <div class="container2">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tablehomepart3">
            <tr>
                <td class="tdhomepart3 tdhomepart3_1">
                    <div class="pagetitle2b padbot15 maxwidth350"><h1>Percetakan Digital Printing Terbaik di Bekasi</h1>
                    </div>
                    <div class="pagedescription1 padbot15"><p>Sebagai salah satu tempat percetakan digital printing di
                        bekasi, Luprintz menjamin kualitas cetak anda adalah prioritas utama kami. Kami siap melayani
                        berbagai jenis kebutuhan cetak anda selama 24 jam. selain itu, kami juga mengedepankan pelayanan
                        terbaik serta harga yang kompetitif. Kami terus mengevaluasi diri dapat memberikan layanan yang
                        terbaik untuk anda. <a href="https://www.luprintz.com/">Percetakan digital printing</a>,
                        Luprintz solusinya.</p></div>

                    <div class="pagedescription1 homepart3value padbot30">
                        <ul>
                            <li>Kualitas cetak terjamin</li>
                            <li>Pelayanan digital printing memuaskan</li>
                            <li>Percetakan Murah Dengan Harga Kompetitif</li>
                            <li>Pengiriman aman dan cepat</li>
                            <li>Bantuan desain grafis</li>
                        </ul>
                    </div>

                    <div style=""><a href="about"><input type="button" class="btn2 animationall borderradius5"
                                                         value="More About Us"/></a></div>
                </td>
                <td class="tdhomepart3 tdhomepart3_2">
                    <img src="{{asset('storage/images/content/phpj_oewo_resized.png')}}" class="borderradius5" style="max-width:100%"/>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="container2">
    <div class="homepart4  ">
        <div class="homepart4_height shadow borderradius5">
            <div class="marginfit7px">
                <div class="pagetitle2b padbot15" style="text-align:center">Klien Kami</div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/phppamgxj_resized.png')}}"/>
                    </div>
                </div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/phpvgi406_resized.jpg')}}""/>
                    </div>
                </div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/phpk3ixio_resized.png')}}"/>
                    </div>
                </div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/phpui_uj_resized.png')}}"/>
                    </div>
                </div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/phphbxapq_resized.png')}}"/>
                    </div>
                </div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/php29h2m9_resized.png')}}"/>
                    </div>
                </div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/phpfmffgm_resized.png')}}"/>
                    </div>
                </div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/phpbexsj8_resized.png')}}"/>
                    </div>
                </div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/phpcf_9_h_resized.png')}}"/>
                    </div>
                </div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/phpgmbyfk_resized.png')}}"/>
                    </div>
                </div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/phpmazlm6_resized.png')}}"/>
                    </div>
                </div>
                <div class="homepart4point">
                    <div class="vm">
                        <img src="{{asset('storage/images/exhibitor/phpmds_y2_resized.png')}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="padbot100">
</div>
<div class="lightwidgetpadbot">
</div>

<div class="homepart6" style="padding-top:40px">
    <div class="container" style="text-align:center">
        <div class="colorblue padbot10"><a href="https://instagram.com/luprintzdigital?igshid=n700f21pfeai"
                                           target="_blank" class="colorblue"><img src="{{asset('storage/images/instagram_icon3.png')}}"
                                                                                  style="vertical-align:middle"/>
            @luprintzdigital</a></div>
        <div class="pagetitle2b padbot40">Ikuti kami di Instagram</div>

        <div>
            <!-- LightWidget WIDGET -->
            <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
            <iframe src="https://cdn.lightwidget.com/widgets/c8a1811505d3517492274442393ff619.html" scrolling="no"
                    allowtransparency="true" class="lightwidget-widget"
                    style="width:100%;border:0;overflow:hidden;"></iframe>
        </div>
    </div>
</div>

<div class="homepart5a">&nbsp;</div>


<div class="homepart5">
    <div class="container2">
        <div class="padbot45">
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tablehomepart5">
                <tr>
                    <td class="tdhomepart5 tdhomepart5_1">
                        <div class="pagetitle7 padbot20">Get interesting updates and special offer</div>

                        <form name="form_subscribe2" id="form_subscribe2" method="post" action="">
                            <div class="header_search_box borderradius5" align="left">
                                <input type="hidden" name="search_flag" id="search_flag" value="1"/>
                                <input type="text" id="email_subscribe"
                                       class=" txtsearch search_input search_input_subscribe" name="email_subscribe"/><!--
                                --><input type="submit" class="emailsubscribebtn btnsearch borderradius5 animation"
                                          name="emailsubscribebtn" id="emailsubscribebtn" value="BERLANGGANAN"/>
                            </div>
                        </form>
                    </td>
                    <td class="tdhomepart5 tdhomepart5_2">
                        <div class="footer_socmed">
                            <a href="https://www.facebook.com" target="_blank" class="a_footersocmed"><img
                                    src="{{asset('storage/images/facebook_icon2.png')}}"/></a>
                            <a href="https://www.twitter.com" target="_blank" class="a_footersocmed"><img
                                    src="{{asset('storage/images/twitter_icon2.png')}}"/></a>
                            <a href="https://instagram.com/luprintzdigital?igshid=n700f21pfeai" target="_blank"
                               class="a_footersocmed"><img src="{{asset('storage/images/instagram_icon2.png')}}"/></a>
                            <a href="https://www.linkedin.com" target="_blank" class="a_footersocmed"><img
                                    src="{{asset('storage/images/linkedin_icon2.png')}}"/></a>
                            <a href="https://wa.me/6285899991818" target="_blank" class="a_footersocmed"><img
                                    src="{{asset('storage/images/wa_icon2.png')}}"/></a>
                            <!--<a href="" target="_blank" class="a_footersocmed"><img src="{{asset('storage/images/gplus_icon.png')}}" /></a>-->
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
                                    <img src="{{asset('storage/images/pin_icon2.png')}}"/> <span class="pagetitle4b">Location</span>
                                </div>
                                <div class="wf1_p2 pagedescription1">Jl. Pekayon Raya No. 45C, Pekayon Jaya, Bekasi
                                </div>
                            </div>
                        </td>
                        <td class="td_wf1 td_wf1_2">
                            <div class="wf1_pad">
                                <div class="wf1_p1 padbot10">
                                    <img src="{{asset('storage/images/phone_icon2.png')}}"/> <span class="pagetitle4b">Call Us</span>
                                </div>
                                <div class="wf1_p2 pagedescription1">
                                    Senin - Sabtu | 09.00 - 18.00<br/>

                                    <div class="wf1_label">Phone.</div>
                                    (021) 82748265<br/>

                                    <div class="wf1_label">Mobile.</div>
                                    6285899991818
                                </div>
                            </div>
                        </td>
                        <td class="td_wf1 td_wf1_3">
                            <div class="wf1_pad">
                                <div class="wf1_p1 padbot10">
                                    <img src="{{asset('storage/images/mail_icon.png')}}"/> <span class="pagetitle4b">Mail Us</span>
                                </div>
                                <div class="wf1_p2 pagedescription1">
                                    <div class="wf1_label">Email.</div>
                                    <a href="mailto:cetakandigital@gmail.com">cetakandigital@gmail.com</a><br/>

                                    <div class="wf1_label">&nbsp;</div>
                                    <a href="mailto:info@luprintz.com">info@luprintz.com</a><br/>
                                    <!--www.luprintz.com-->
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
                <td class="tdheaderbottom tdheaderbottom1">
                    <a href="home" class="a_menupoint"><span class="menupoint">Home</span></a>
                    <a href="category/stationary" class="a_menupoint"><span class="menupoint">Stationary</span></a>
                    <a href="category/promotion" class="a_menupoint"><span class="menupoint">Promotion</span></a>
                    <a href="category/signage-display" class="a_menupoint"><span
                            class="menupoint">Signage & Display</span></a>
                    <a href="category/offset" class="a_menupoint"><span class="menupoint">Offset</span></a>
                    <a href="category/others" class="a_menupoint"><span class="menupoint">Others</span></a>
                </td>
                <td class="tdheaderbottom tdheaderbottom2">
                    <a href="client" class="a_menupoint"><span class="menupoint">Klien Kami</span></a>
                    <a href="promo" class="a_menupoint"><span class="menupoint">Promosi</span></a>
                    <a href="news" class="a_menupoint"><span class="menupoint">Artikel</span></a>
                    <a href="about" class="a_menupoint"><span class="menupoint">Tentang Kami</span></a>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="">
    <div class="container2">
        <div class="pagedescription1 colorgrey padbot45">Luprintz adalah sebuah jasa percetakan digital (Digital
            Printing) yang melayani berbagai kebutuhan cetak anda seperti stationary, promosi, signange, display dll.
            Kami memberikan kualitas cetak yang terjamin dengan harga yang kompetitif sehingga membantu anda lebih
            efisien dalam mencetak keperluan anda.
        </div>

        <div class="copyright">&copy;2021. Luprintz. All Rights Reserved | Jasa Digital Printing & Percetakan 24 Jam Di
            Bekasi
        </div>
    </div>
</div>


<!-- Default Statcounter code for Luprintz.com
https://www.luprintz.com -->
<script type="text/javascript">
    var sc_project = 12349926;
    var sc_invisible = 1;
    var sc_security = "aa956da7";
    var sc_https = 1;
</script>
<script type="text/javascript"
        src="https://www.statcounter.com/counter/counter.js"
        async></script>
<noscript>
    <div class="statcounter"><a title="Web Analytics"
                                href="https://statcounter.com/" target="_blank"><img
            class="statcounter"
            src="https://c.statcounter.com/12349926/0/aa956da7/1/"
            alt="Web Analytics"></a></div>
</noscript>
<!-- End of Statcounter Code -->
</body>
</html>