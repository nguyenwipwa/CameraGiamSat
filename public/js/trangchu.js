//mua hàng:
function contains(a, obj) {
  for (var i = 0; i < a.length; i++) {
    if (a[i].trim() == obj) {
      return true;
    }
  }
  return false;
}
  //. Tạo danh sách sản phẩm
  function lo(list,sotrang,index){
    var value="";
      // resettb();
      // $("#home").html("");
      var count =0;
      while(count<sotrang){
        value +="<div class ='item hvr-glow'><div class='img_cat_con'><a><img src='"+list[index].img+"'></a></div>"+
        "<div class='title'><p class='tensanpham'><a>"+list[index].tensp+"</a></p><p class='price text-muted'> Giá bán: <span class='giaban'>"+formatMoney(list[index].gia)+" VNĐ</span></p></div>"+"<div> <a class='btn btn-default hvr-buzz' style='background:#990000; color:white;' onclick='mua(\""+list[index].id+"\",\"1\");'><span class='glyphicon glyphicon-shopping-cart'></span> Mua </a> <a class='btn btn-default hvr-forward' href='sanpham.html' target='_blank' onclick='setSanPham("+index+")'><span></span> Xem chi tiết </a> </div>"+"</div>";
        index++;
        count++;
        if(index==danhsach.length) break;
      }
      $("#home1").html(value);
    }
    /// Thêm vào giỏ hàng
    function mua (e,n) {
      alert('Đã thêm vào giỏ');
      if(contains(getCookie1(),e)){
        setCookie(e, Number(n)+Number(getCookie(e.trim())), 7);
      }else{
        setCookie(e, 1, 7);
        
      }
      // for(var i=0; i < getCookie1().length; i++){

      // }
      // getCookie1(alert(e));
      // alert(getCookie1());
      addgh();
      setbadge();
      $('.pricegh').html(formatMoney(tongtien())+' VNĐ');
      // alert(tongtien());
    }
    function addgh() {
     var a = [];
     var kq ="";
     for(var i =0; i < (a = getCookie1()).length;i++){
      for(var j=0; j < danhsach.length; j++){
        if(a[i].trim()== danhsach[j].id.trim()){
          // alert(a[i]);
          kq+="<tr><td style='width: 17%;'><img src='"+danhsach[j].img +"'width='70px' height='70px'></td> <td style='width: 44%;'> "+danhsach[j].tensp+" </td> <td style='width: 14%;'><input onchange='setsl(\""+danhsach[j].id+"\",$(this).val())' type='number' value='"+getCookie(a[i].trim())+"' name='' min=1 max=50 style='width:100%'> </td><td style='width: 17%;' id='"+danhsach[j].id.trim()+"'> "+formatMoney(thanhtien(a[i].trim()))+" </td><td> <span class='btn btn-danger glyphicon glyphicon-remove' onclick='xoa(\""+danhsach[j].id+"\");'> </span></td></tr>";
        }
      }
    }
    $('#giohang').html(kq);    
  }
  //set badge gh
  function setbadge () {
    var a = getCookie1();
    var n =0;
    for(var i = 0; i<a.length ; i++){
      n += Number(getCookie(a[i].trim()));
        // alert(getCookie(a[i]));
      }
      $('#badgegh').html(n);
    }
  //set so luong
  function setsl (masp, n) {
    var sl = Number(n);
    setCookie(masp, n, 7);
    $('.pricegh').html(formatMoney(tongtien())+' VNĐ');
    $('#'+masp).html(formatMoney(thanhtien(masp.trim())));
    setbadge();

    // body... 
  }
  // tinh tien san pham
  function thanhtien (masp) {
    var price = 0;
    var sl = Number(getCookie(masp.trim()));
    for(var i=0; i< danhsach.length; i++){
      if(danhsach[i].id==masp.trim()){
        price = Number(danhsach[i].gia);
        break;
      }
    }
    return sl*price;
    // body... 
  }
  function tongtien () {
    var tong =0;
    var a = getCookie1();
    for(var i=0; i< (a =getCookie1()).length;i++){
      tong += thanhtien(a[i]);
    }
    // alert(getCookie1()[0]);
    return tong;
    // body... 
  }
  //format number
  function formatMoney(num) {

    var p = Number(num).toFixed();
    return p.split("").reverse().reduce(function(acc, num, i, orig) {
      return  num + (i && !(i % 3) ? "," : "") + acc ;
    },"");
  }
  $(document).ready(function() {
    addgh();
    setbadge();
    $('.pricegh').html(formatMoney(tongtien())+' VNĐ');
  });
  function xoa (e) {
    deleteCookie(e);
    addgh();
    setbadge();
    $('.pricegh').html(formatMoney(tongtien())+' VNĐ');
    // body... 
  }
  //sử lý cookie:
  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
  }
  function getCookie1() {
    var arr = [];
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
      if(((ca[i].split('=')[0]).split(';')[0]!='ARRAffinity')){
        // alert(((ca[i].split('=')[0]).split(';')[0]).indexOf('__'));
        if(((ca[i].split('=')[0]).split(';')[0]).indexOf('__')==-1){
        arr.push((ca[i].split('=')[0]).split(';')[0]);
      }
    }
  }
            // alert(arr)
            return arr;
          }
          // Hàm lấy Cookie
          function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0)==' ') c = c.substring(1);
              if (c.indexOf(name) == 0){
               return c.substring(name.length, c.length);
             } 
           }
           return "";
         }
         function deleteCookie (name) {
          document.cookie = name + "=" + "null" + "; " +"expires=Thu, 01 Jan 1970 00:00:01 GMT;";

        }
        // sử lý tàj khoảng:
        function dangki (name,user,email,pass) {
          var a = [name,user,email,pass];
          localStorage.setItem(user, a);
          alert('Đăng kí thành công!');
          $('.btnthoat').click();
        // body... 
      }
      var interval = null;
      function dangnhap (user,pass) {
        if(localStorage.getItem(user)!=null){
          var a = localStorage.getItem(user).split(",");
          if(a[1]==user && pass == a[3] && user!=""){
            $('.progress').removeClass('hidden');
            interval = setInterval(function () {
              $('.progress').addClass('hidden');
              sessionStorage.name = a[0];
              localStorage.setItem('login', "true");
              $('.log').addClass('hidden');
              $('.login1').removeClass('hidden');
              $('.namedn').html(sessionStorage.name);
          // body... 
        }, 2000);
            $('.btnthoat').click();
          }else{
            alert('Sai mật khẩu!');
            localStorage.setItem('login', "false");
          }
        }else {
          alert('Tài khoảng không tồn tại!');
        }
        // body... 
      }
      function logout () {
        clearInterval(interval);
        localStorage.setItem('login', "false");
        $('.login1').addClass('hidden');
        $('.log').removeClass('hidden');
        // body... 
      }
      $(document).ready(function() {
        deleteCookie('ARRAffinity');
        if(localStorage.getItem("login")!=null){
         if(localStorage.getItem("login")=='true'){
          $('.log').addClass('hidden');
          $('.login1').removeClass('hidden');
          $('.namedn').html(sessionStorage.name);
          $('.login1').css('margin-right','100px');
        }else{
          $('.log').removeClass('hidden');
          $('.login1').addClass('hidden');
        }}
      });
      function setSanPham (e) {
        sessionStorage.id = e;
      }
      