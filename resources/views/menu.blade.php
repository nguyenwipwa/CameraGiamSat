<ul id="ul2" class="col-md-12">
	@foreach($category as $cate)
	@if($cate->menu == 1)
    <li class="menufirst"><a href="">{{$cate->name}}</a></li>
    @endif
    @endforeach
    
  </ul>