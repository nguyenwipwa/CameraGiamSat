function resettb(){
	$("#example1").html(" <thead>"+
                      " <tr>"+
                        " <th style='width:1%;text-align: center;'>STT</th>"+
                        " <th style='text-align: center;'>ID</th>"+
                        " <th style='width:20%;text-align: center;' >Tên sản phẩm</th>"+
                        " <th style='width:11%;text-align: center;'>Giá gốc (VNĐ)</th>"+
                        " <th style='text-align: center;'>KM(%)</th>"+
                        " <th style='text-align: center;'>Còn lại (VNĐ)</th>"+
						" <th style='text-align: center;'>SL</th>"+
						" <th style='text-align: center;'>Sự kiện</th>"+
                        " <th style='text-align: center;'>Thời gian KM</th>"+     
                       "  <th style='text-align: center;'>Thao tác</th>"+
                     "  </tr>"+
                   "  </thead>")
}

function table(list,sotrang,index){
	
		var value="";
		resettb();
		var count =0;
		while(count<sotrang){
			var conlai =list[index].gia-((list[index].gia*list[index].km)/100);
				conlai = price(""+conlai+"");
			value ="<tr id='row_1' class ='search'><td class>"+(index+1)+"</td>"+
					"<td>SP "+list[index].id+"</td>"+
					"<td>"+list[index].tensp+"</td>"+
					"<td>"+price(list[index].gia)+"</td>"+
					"<td>"+list[index].km+"</td>"+
					"<td>"+conlai+"</td>"+
					"<td>"+list[index].sl+"</td>"+
					"<td>"+list[index].sk+"</td>"+
					"<td>"+list[index].time+"</td>"+
					"<td><button title='sửa thông tin' type='button' class='btn btn-success edit' data-toggle='modal' data-target='#sua' onclick='display("+index+")' value="+list[index].id+" > <span class='glyphicon glyphicon-pencil'></span></button><button type='button' title='xóa sản phẩm' class='btn btn-danger ' onclick='xoa("+index+")'> <span class='glyphicon glyphicon-remove'></span></button></td>"+
					
			"</tr>"
			
			$("#example1").append(value);
			index++;
			count++;
		}
	
		$("#search").quicksearch("#example1 .search");
}
function listchon(name,list){
	var value ="<option value='---'>---</option>";
	for(i=0;i<list.length;i++){
		value+= "<option value='"+list[i].id+"'>"+list[i].tensp+"</option>";	
	}
	$("#"+name).html(value);
	
}
function listsk(name){
	var value ="<option value='---'>---</option>";
	for(i=0;i<dssk.length;i++){
		value+= "<option value='"+dssk[i].tensk+"'>"+dssk[i].tensk+"</option>";	
	}
	$("#"+name).html(value);
}
function them(){
	
var id = $("#tid").val();
for(i=0;i<danhsach.length;i++){
		if(id==danhsach[i].id){
			var tensp =danhsach[i].tensp;
			var gia = danhsach[i].gia;
			var img =danhsach[i].img;
			var km =$("#tkm").val();
			var sl = $("#tsl").val();
			var time =$("#ttimebd").val()+":"+$("#ttimekt").val();
			var sk = $("#tskkm").val();

var spkm ={id:id,tensp:tensp,gia:gia,km:km,time:time,img:img,sl:sl,sk:sk}
dskm.unshift(spkm)
$("#tchonsp").val("--");
$("#tid").val("");
$("#ttsp").val("");
 $("#tgia").val("");
$("#tkm").val("");
$("#ttimebd").val("")
$("#ttimekt").val("")
$("#tsl").val("");
$("#timgsale").attr("src","");
$("#timg").attr("src","");
var sk = $("#tskkm").val("---");
		}
}

for(j=0;j<danhsach.length;j++){
	if(id==danhsach[j].id){
	danhsach.splice(j,1)
		
	}
}
phantrang();
listchon("tchonsp",danhsach);

}

function display(index){
	
	listsk();
	var id =$(".edit:eq("+index+")").val();
	
	for(i=0;i<dskm.length;i++){
		if(id==dskm[i].id){
			
			$("#sid").val(dskm[i].id);
		 $("#stsp").val(dskm[i].tensp);
		$("#sgia").val(dskm[i].gia);
		$("#skm").val(dskm[i].km);
		var time = dskm[i].time.split(":");
		$("#stimebd").val(time[0]);
		$("#stimekt").val(time[1]);
		$("#ssl").val(dskm[i].sl);
		$("#sskkm").val(dskm[i].sk);
		$("#simg").attr("src",dskm[i].img);
		for(j=0;j<dssk.length;j++){
			if(dskm[i].sk==dssk[j].tensk){
				$("#simgsale").attr("src",dssk[j].icon);
			}
		}
		
		
		}
	}
}
function capnhat(){
		 var id =$("#sid").val();
		var km = $("#skm").val();
		var time = $("#stimebd").val()+":"+$("#stimekt").val();
		var sk = $("#sskkm").val();
		var sl =$("#ssl").val();
	for(i=0;i<dskm.length;i++){
		if(id==dskm[i].id){

		dskm[i].km=km;
		dskm[i].time=time;
		dskm[i].sk=sk;
		dskm[i].sl=sl;
		}
	}
	phantrang();
}

function xoa(index){
		
	for(i=0;i<dskm.length;i++){
		if(index==i){
			
			
			var  ds={id:dskm[i].id,tensp:dskm[i].tensp,gia:dskm[i].gia,img:dskm[i].img};
			danhsach.push(ds);
			
			dskm.splice(i,1);
			
			
		}
	}
	listchon("tchonsp",danhsach);
	phantrang();
}
function phantrang(){
	var soptchia =10;
	var sotrang = (dskm.length/soptchia);
	
	
	var sotrang1 = sotrang;
	if((dskm.length%soptchia)>0){
	sotrang1 = parseInt(sotrang1);
			
	sotrang1++;
	}
	
	var size = dskm.length;
	var sopt= 0;
	var first =0;
	var vitri = 0;
	var vitri1=0;
		if(dskm.length>soptchia){
	
	first=soptchia;
	}else{
	
	first=dskm.length;
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
		
	table(dskm,first,0);

}

function tabledata(sophantu,index){
	
	table(dskm,sophantu,index)
}
//jquery
$(document).ready(function() {
    $("#tchonsp").change(function(){
		var value = $(this).val();
		for (i=0;i<danhsach.length;i++){
			if(value==danhsach[i].id){
			$("#tid").val(danhsach[i].id);
			$("#ttsp").val(danhsach[i].tensp);
			$("#tgia").val(danhsach[i].gia);
			$("#thinhanh").val(danhsach[i].img);		
			}
			
		}
		})
		$("#schonsp").change(function(){
		var value = $(this).val();
		if(value!="---"){
		for (i=0;i<dskm.length;i++){
			if(value==dskm[i].id){
			$("#sid").val(dskm[i].id);
			$("#stsp").val(dskm[i].tensp);
			$("#sgia").val(dskm[i].gia);
			$("#skm").val(dskm[i].km);
			$("#stimekm").val(dskm[i].time);
			$("#shinhanh").val(dskm[i].img);		
			}
			
		}
		}
		})
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