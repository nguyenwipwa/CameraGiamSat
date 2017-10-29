<div class="menuleft">
  @foreach($category as $cate)
    @if($cate->id_root == 0)
  <div class="box_cat">
    <div class="bc_title">
      <h5><a href="#"><span>{{$cate->name}}</span></a></h5>
    </div>
    <div class="bc_content">
      <ul>
         @foreach($category as $cate1)
          @if($cate->id == $cate1->id_root)
        <li class="show_left_big">
          <p><a href=""> {{$cate1->name}}</a></p>
          <ul class="show_left">
            @foreach($category as $cate2)
              @if($cate1->id == $cate2->id_root)
            <li><a href=""><span>{{$cate2->name}}</span></a></li>
             @endif
             @endforeach
          </ul>
        </li>
          @endif
        @endforeach
      </ul>
    </div>
  </div>
    @endif
  @endforeach
  
  
  <div class="box_statistics"><div class="s-title" style="font-size: 21px;">Thống kê truy cập</div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td width="100" nowrap="">Online</td>
        <td width="15" align="center"> : </td>
        <td><span id="stats_online">305</span></td>
      </tr>
      <tr>
        <td nowrap="">Truy cập hôm qua</td>
        <td width="10" align="center"> : </td>
        <td><span id="stats_yesterday">2976</span></td>
      </tr>
      <tr>
        <td nowrap="">Truy cập hôm nay</td>
        <td width="10" align="center"> : </td>
        <td><span id="stats_today">675</span></td>
      </tr>
      <tr>
        <td nowrap=""><b class="font_err">Lượt truy cập</b></td>
        <td width="10" align="center"> : </td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <div class="stats_totals" id="stats_totals">
    <span>1</span><span>2</span><span>4</span><span>4</span><span>2</span><span>0</span><span>4</span>
  </div>
</div>
