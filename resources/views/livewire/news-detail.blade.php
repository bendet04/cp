<div class="pagecontent1" style="padding-top:30px">
    <div class="container2">
        @if(!empty($news))
        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="table_nd">
            <tr>
                <td class="td_nd td_nd1">
                    <div class="pagetitle5b padbot10">{{$news->name}}</div>
                    <div class="nd_date pagedescription1 padbot20">{{$news->created_at}}</div>

                    <div class="">
                        <div class="nd_img padbot35"><img src="{{asset('storage/'.$news->image)}}" class="borderradius5" style="max-width:100%" /></div>
                        <!---->
                    </div>
                    {!! $news->description !!}}
                </td>
            </tr>
        </table>
        @endif
    </div>
</div>