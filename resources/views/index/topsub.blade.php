        <div id="top">
          <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          @include('index.layouts.topmenu')
          <!-- Menu -->
          @include('index.layouts.collapse')
          <!-- End Menu -->                      
          <div class="container menu_bg">
            <div class="row menu_bg">
              <div class="col-xs-12 menu_bg">
                <div class="row">
                  <div class="col-md-4 col-lg-3 hidden-xs hidden-sm" style="padding-right:0;">
                    <div id="prd-cate-list">
                      <div class="prd-cate-header">
                        <span>Danh mục sản phẩm<i class="fa fa-chevron-circle-down"></i></span>
                      </div>
                      <ul class="sub-page">
                        <ul>
                         @foreach($category as $cate)
                         @if($cate->id_root == 0 && $cate->status==1)
                         <li><a href="{{url('/category/'.$cate->id.'/1')}}"><img alt = "{{$cate->name}}" src = "{{ asset('public/images/danh-muc-san-pham/'.$cate->icon) }}" /><span class="mc_title">{{$cate->name}}<i class="fa fa-chevron-right hidden-md"></i></span></a>
                          <ul>
                            @foreach($category as $cate1)
                            @if($cate->id == $cate1->id_root && $cate1->status==1)
                            <li><a href="{{url('/category/'.$cate1->id.'/1')}}"><img alt = "{{$cate1->name}}" src = "" /><span class="mc_title">{{$cate1->name}}<i class="fa fa-chevron-right hidden-md"></i></span></a>
                              <ul>
                               @foreach($category as $cate2)
                               @if($cate1->id == $cate2->id_root && $cate2->status==1)
                               <li><a href="{{url('/category/'.$cate2->id.'/1')}}"><img alt = "{{$cate2->name}}" src = "" /><span class="mc_title">{{$cate2->name}}<i class="fa fa-chevron-right hidden-md"></i></span></a>
                                <div class="clear"></div>
                              </li>
                              @endif
                              @endforeach
                            </ul>
                            <div class="clear"></div>
                          </li>
                          @endif
                          @endforeach
                        </ul>
                        <div class="clear"></div>
                      </li>
                      @endif
                      @endforeach
                    </ul>
                    <div class="clear"></div>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-md-8 col-lg-9">
                <div class="row">
                  <div class="col-xs-12 col-lg-8" style="padding:0;">
                    <div id="searchform">
                      <form action="{{route('search')}}" accept-charset="utf-8" method="get">
                        <img style="display: none;" class="loader" src="http://fptcamera.vn/resources/ui_images/client/background/loader.gif"/>
                        <input type="text" name="key" value="" id="searchbutton" class="searchfield" onkeyup="lookup()" autocomplete="off" placeholder="Tìm kiếm sản phẩm ..."  />
                        <input type="submit" name="submit_search" value="Tìm kiếm" id="search_smt" class="searchbutton" />
                        <div class="clear"></div>
                        <div class="autoSuggestionsList_l" id="autoSuggestionsList">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-4 hidden-xs hidden-sm hidden-md" style="padding-left:0;">
                    <button type="button" class="btn btn-danger button-support" data-toggle="modal" data-target="#supportonlineModal"><img src="http://fptcamera.vn/resources/ui_images/client/background/yahoo-smile.png">&nbsp;Hỗ trợ trực tuyến</button>
                  </div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>                
      <div class="clear"></div>
    </div>
