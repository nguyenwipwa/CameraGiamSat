// JavaScript Document
//jquery
	$(document).ready(function() {
      
		$(".edit").click(function () {
			$('body,html').animate({
				scrollTop: 100
			})
			
		});
		phantrang();
			
		
    });

function resettb(){
	$("#example1").html(" <thead>"+
                     " <tr>"+
                      "  <th style='width:1%;text-align:center'>STT</th>"+
                       " <th style='width:10%;text-align:center'>ID</th>"+
                       " <th style='text-align:center'>Tên sản phẩm</th>"+
                       " <th style='text-align:center'>Loại sản phẩm</th>"+
                       " <th style='text-align:center'>Thuộc danh mục</th>"+
                       " <th style='text-align:center'>Giá sản phẩm</th>"+
                        "<th style='width: 10%;text-align:center'>Hình ảnh</th>"+
                       
                       " <th style='text-align:center'>Thao tác</th>"+
                       
                     " </tr>"+
                   " </thead>")
}


function table(list,sotrang,index){

		var value="";
		resettb();
		var count =0;
		while(count<sotrang){
			value ="<tr id='row_1' class ='search'><td class>"+(index+1)+"</td>"+
					"<td>SP "+list[index].id+"</td>"+
					"<td style='text-align:left'>"+list[index].tensp+"</td>"+
					"<td>"+list[index].loaisp+"</td>"+
					"<td>"+list[index].thuocdm+"</td>"+
					"<td>"+ price(list[index].gia)+"</td>"+
					"<td ><img src="+list[index].img+" class ='sizeimg'/></td>"+
					"<td><button title='xem chi tiết' type='button' class='btn btn-info edit' data-toggle='modal' data-target='#view' onclick='view("+index+")' value="+list[index].id+" > <span class='glyphicon glyphicon-eye-open'></span></button><button title='sửa thông tin' type='button' class='btn btn-success edit' data-toggle='modal' data-target='#sua' onclick='display("+index+")' value="+list[index].id+" > <span class='glyphicon glyphicon-pencil'></span></button><button type='button' title='xóa sản phẩm' class='btn btn-danger ' onclick='xoa("+index+")'> <span class='glyphicon glyphicon-remove'></span></button></td>"+
					
			"</tr>"
			$("#example1").append(value);
			index++;
			count++;
		}
		$("#search").quicksearch("#example1 .search");
}

function them(){
		var id = (parseInt(danhsach[danhsach.length-1].id)+1);
		var tensp = $("#ttsp").val();
		var loaisp = $("#tlsp").val();
		var thuocdm = $("#ttdm").val();
		var gia = $("#tgsp").val();
		var img = $("#thinhanh").val();
		var chitiet = CKEDITOR.instances['tchitiet'].getData();
		var ds ={id:id,tensp:tensp,loaisp:loaisp,thuocdm:thuocdm,gia:gia,img:img,chitiet:chitiet};
			
		 $("#ttsp").val("");
		$("#tlsp").val("");
		$("#ttdm").val("");
		$("#tgsp").val("");
		$("#thinhanh").val("");
		CKEDITOR.instances['tchitiet'].setData("");
		danhsach.unshift(ds);
		phantrang();
}
function display(index){
//	var id =$(".edit:eq("+index+")").val();
			$("#sid").val(danhsach[index].id);
		 $("#stsp").val(danhsach[index].tensp);
		$("#slsp").val(danhsach[index].loaisp);
		$("#stdm").val(danhsach[index].thuocdm);
		$("#sgsp").val(danhsach[index].gia);
		$("#shinhanh").val(danhsach[index].img);
		CKEDITOR.instances['schitiet'].setData(danhsach[index].chitiet);	
}
function capnhat(){
		 var id =$("#sid").val();
		var tensp = $("#stsp").val();
		var loaisp = $("#slsp").val();
		var thuocdm = $("#stdm").val();
		var gia = $("#sgsp").val();
		var img = $("#shinhanh").val();
		var chitiet = CKEDITOR.instances['schitiet'].getData();
	for(i=0;i<danhsach.length;i++){
		if(id==danhsach[i].id){
		
		danhsach[i].tensp=tensp;
		danhsach[i].loaisp=loaisp;
		danhsach[i].thuocdm=thuocdm;
		danhsach[i].gia=gia;
		danhsach[i].img=img;
		danhsach[i].chitiet=chitiet;
		}
	}
	phantrang();
}
function xoa(index){
	var id =$(".edit:eq("+index+")").val();
	
	for(i=0;i<danhsach.length;i++){
		if(id==danhsach[i].id){
			danhsach.splice(i,1);
		}
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

function view(index){
	$("#tieudesp").html(danhsach[index].tensp);
	$("#imgview").attr("src",danhsach[index].img);
	$("#msp").text("SP "+danhsach[index].id);
	$("#giasp").text( price(danhsach[index].gia)+" VNĐ");
	$("#loaisp").text(danhsach[index].loaisp);
	$("#tdm").text(danhsach[index].thuocdm);
	$("#chitiet").html(danhsach[index].chitiet);	
}
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
