function resettb(){
	$("#example1").html("<thead>"+
                     " <tr>"+
                       " <th style='width: 1%'>STT</th>"+
                       " <th >Mã HĐ</th>"+
                        "<th>Tên người dùng</th>"+
                        "<th >Tên tài khoản</th>"+
                       " <th>Trạng thái</th>"+
                        "<th >Xem chi tiết</th>"+
                        "<th >Ngày đặt</th>"+
                       
                        "<th >Thao tác</th>"+
                        
                     " </tr>"+
                    "</thead>")
}
function table(list,sotrang,index){
	
		var value="";
		resettb();
		var count =0;
		while(count<sotrang){
			
			value ="<tr id='row_1' class ='search'><td class>"+(index+1)+"</td>"+
					"<td class='text-center'>"+list[index].mhd+"</td>"+
					"<td>"+list[index].tnd+"</td>"+
					"<td>"+list[index].ttk+"</td>"+
					"<td class='text-center'><a class='hovera' onclick='capnhattt("+index+")'>"+list[index].tt+"</a></td>"+
					"<td class='text-center'><a data-toggle='modal' data-target='#myModal' href=''  onclick='view("+index+")'>Xem chi tiết</a></td>"+
					"<td class='text-center'>"+list[index].ndh+"</td>"+
					"<td class='text-center'><button type='button' class='btn btn-danger ' onclick='xoa("+index+")'> <span class='glyphicon glyphicon-remove'></span></button></td>"+"</tr>"

			$("#example1").append(value);
					index++;
					count++;
		}
	$("#search").quicksearch("#example1 .search");
	
}
function xoa(index){
	danhsach.splice(index,1);
	phantrang();
}

function view(index){
	$("#mahoadon").html(danhsach[index].mhd);
	$("#tennguoidung").html(danhsach[index].tnd);
	$("#tentaikhoan").html(danhsach[index].ttk);
	var d=danhsach[index].dssp;

	$("#thanhtien").html(tablesp(d)+" VNĐ");
	
}
function tablesp(list){

var value =""
var tongtien=0;
for(i=0;i<list.length;i++){
	var giakm = (list[i].gia -(list[i].gia*list[i].km)/100);
	var gia =giakm*list[i].soluong - ((giakm*list[i].soluong)*10)/100;
	tongtien+=gia;
	gia = price(""+gia+"");
	value+="<tr><td style='width:33%'>"+list[i].tensp+"</td>"+
				"<td style='text-align:center'>"+price(list[i].gia)+"</td>"+
				"<td style='text-align:center'>"+list[i].soluong+"</td>"+
				"<td style='text-align:center'>"+list[i].km+"</td>"+
				"<td style='text-align:center'>10</td>"+
				"<td style='text-align:center'>"+gia+"</td>"+
			"</tr>"	
}
$("#tbsp tbody").html(value);
return  price(""+tongtien+"");
}
function printhd(){
	
	var mywindow = window.open('', 'PRINT', 'height=600,width=800');
        mywindow.document.write($(".modal-header").html());
		 mywindow.document.write($(".modal-body").html());
        mywindow.document.close();
        mywindow.print();
        mywindow.close();

        return true;	
}
function capnhattt(index){
	if(danhsach[index].tt=="Đã giao hàng"){
			danhsach[index].tt="Chưa giao hàng";	
	}else{
		danhsach[index].tt="Đã giao hàng";
	}
	phantrang();
}

function phantrang(){
	var soptchia =10;
	var sotrang = (danhsach.length/soptchia);
	
	
	var sotrang1 = sotrang;
	if((danhsach.length%soptchia)>0){
	sotrang1 = parseInt(sotrang1);
			
	sotrang1++;
	}
	
	var size = danhsach.length;
	var sopt= 0;
	var first =0;
	var vitri = 0;
	var vitri1=0;
		if(danhsach.length>soptchia){
	
	first=soptchia;
	}else{
	
	first=danhsach.length;
	}
	
	var value ="<ul><li><button type='button' class='btn btn-primary'  onclick='tabledata("+first+","+0+")' ><span>&lt;&lt;</span></button></li>"
	for(i=0;i<sotrang1;i++){
		if(size>soptchia){
			vitri+=soptchia;
	sopt = soptchia;
	
	}else{
	sopt =size;
	vitri+=size-sopt;
	}
		if(i==sotrang1-1){
		
			value+="<li><button type='button' class='btn btn-primary' onclick='tabledata("+sopt+","+vitri+")' ><span>"+(i+1)+"</span></button></li>"
		}else{
			
		value+="<li><button type='button' class='btn btn-primary' onclick='tabledata("+sopt+","+vitri1+")' ><span>"+(i+1)+"</span></button></li>"  
		vitri1+=soptchia;       
		}
		size-=soptchia;
	}
	var last = danhsach.length%soptchia;
	value+="<li ><button type='button' class='btn btn-primary' onclick='tabledata("+last+","+vitri+")'><span>&gt;&gt;</span></button></li></ul>"
	$("#phantrang").html(value);
		
	table(danhsach,first,0);

}

function tabledata(sophantu,index){
	
	table(danhsach,sophantu,index)
}
$(document).ready(function(){
	phantrang();

});
function price(price){
	
	var index = 0;
	var value = "";
	var arrayvalue = price.split("");
	
	for(k = arrayvalue.length-1;k>=0;k--){
		if(index==3){
			value = ","+value;
			index=0;
		}
		value = arrayvalue[k]+value;
		index++;
		
	}
	return value;
}