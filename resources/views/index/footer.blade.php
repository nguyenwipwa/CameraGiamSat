<div class="container-fluid bg-footer">
	<div class="row">
		<div class="col-xs-12 col-xs-offset-0 col-md-10 col-md-offset-1">
			<div class="row">
				<div class="col-md-2 hidden-xs hidden-sm">
					<div class="f-logo">
						<a href="http://fptcamera.vn/">
							<img title="LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ" alt="Camera FPT Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="http://fptcamera.vn/resources/uploads/images/automatic/logo/logo-fpt-camera-giam-sat.png">
						</a>
					</div>
				</div>
				@foreach($contact as $value)
				<div class="col-xs-12 col-md-5">
					<!-- <div class="f-address"> -->
						{!!$value->content!!}
						<!-- </div> -->
					</div>
					@endforeach
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-xs-offset-0 col-md-10 col-md-offset-1">
				<div class="f-copyright">Copyright © 2015. All Rights Reserved by FPT Camera</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div style="display: none">
		<!-- Histats.com  START  (standard)-->
		<script type="text/javascript">
			document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));
		</script>
		<a href="http://www.histats.com" target="_blank" title="">
			<script type="text/javascript">
				try {
					Histats.start(1, 3313430, 4, 438, 112, 75, "00011111");
					Histats.track_hits();
				} catch (err) {};
			</script>
		</a>
		<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3313430&101" alt="" border="0"></a></noscript>
		<!-- Histats.com  END  -->
	</div>
	<div class="clear"></div>