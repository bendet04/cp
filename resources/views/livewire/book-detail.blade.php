<div class="productpart1">
    <div class="container2">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tableproductpart2">
            <tr>
                <td class="tdproductpart2 tdproductpart2_1">
                    <div class="main_image_div" id="main_image_div" align="center">
                        <img src="{{asset('storage/'.$book->foto)}}" class="imgproduct imgdp borderradius5" id="zoom_01" data-zoom-image="/images/product/phpzqz4k7_resized.png" />
                    </div>
                    <div style="height:10px"></div>
                    <div class="pagedescription1 padbot30">
                        {!! $book->deskripsi !!}
                    </div>
                </td>
                <td class="tdproductpart2 tdproductpart2_2 ">

                    <div class="pagetitle3b">{{$book->judul}}</div>
                    <div class="pagetitle6b padbot20">{!! $book->sinopsis !!}</div>

                    <table border="0" width="50%" class="tablebook">
                        <tr>
                            <td><i class="fa fa-user-circle" aria-hidden="true"></i>Penulis:</td>
                            <td>{!! $book->penulis !!}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user-circle" aria-hidden="true"></i>Penerbit:</td>
                            <td>{{ $book->penerbit }}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user-circle" aria-hidden="true"></i>Telah Terbit:</td>
                            <td>{{ $book->tahun_terbit }}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user-circle" aria-hidden="true"></i>ISBN:</td>
                            <td>{{ $book->isbn }}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user-circle" aria-hidden="true"></i>Halaman:</td>
                            <td>{{ $book->halaman }}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user-circle" aria-hidden="true"></i>Bahasa:</td>
                            <td>{{ $book->bahasa }}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user-circle" aria-hidden="true"></i>Dimensi:</td>
                            <td>{{ $book->dimensi }}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-user-circle" aria-hidden="true"></i>Penyunting:</td>
                            <td>{{ $book->penyunting }}</td>
                        </tr>
                    </table>

                    <div class="padbot20"></div>

                    <div class="padbot15">
                        <div class="line1"></div>
                    </div>

                    <div class=" padbot30">
                        <table cellpadding="0" cellspacing="0" border="0" class="table_dp_contact">
                            <tr>
                                <td class="td_dp_contact td_dp_contact1">
                                    <img src="{{asset('storage/images/phone_icon2.png')}}" />
                                </td>
                                <td class="td_dp_contact td_dp_contact2">
                                    (0274) 2801021 </td>
                            </tr>
                            <tr>
                                <td class="td_dp_contact td_dp_contact1">
                                    <img src="{{asset('storage/images/wa_icon2.png')}}" />
                                </td>
                                <td class="td_dp_contact td_dp_contact2">
                                    +62877-7300-0454 </td>
                            </tr>
                            <tr>
                                <td class="td_dp_contact td_dp_contact1">
                                    <img src="{{asset('storage/images/mail_icon.png')}}" />
                                </td>
                                <td class="td_dp_contact td_dp_contact2">
                                    <a href="mailto:percetakanharfeey@gmail.com">percetakanharfeey@gmail.com</a>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <a href="https://wa.me/6287773000454">
                        <div class="btn3 animationall borderradius5">
                            <div class="vm"><img src="{{asset('storage/images/wa_float.png')}}" /> Chat kami sekarang
                            </div>
                        </div>
                    </a>
                </td>
            </tr>
        </table>

    </div>
</div>