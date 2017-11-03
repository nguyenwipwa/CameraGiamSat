function resettb(){
	$("#example1").html("<thead>"+
                     " <tr>"+
                       " <th style='width: 1%'>STT</th>"+
                       " <th >Mã thành viên</th>"+
                        "<th>Tên thành viên</th>"+
                        "<th >Tên tài khoản</th>"+
                       " <th>Trạng thái</th>"+
                        "<th >Sơ yếu lí lịch</th>"+
						"<th>Chức vụ</th>"+
                        "<th >Ngày khởi tạo</th>"+
                       
                        "<th >Thao tác</th>"+
                        
                     " </tr>"+
                    "</thead>")
}
function table(list,sotrang,index){
	
		var value="";
		resettb();
		var count =0;
		while(count<sotrang){
			
			value ="<tr id='row_1' class ='search text-center'><td class>"+(index+1)+"</td>"+
					"<td class='text-center'>"+list[index].mtv+"</td>"+
					"<td>"+list[index].ttv+"</td>"+
					"<td>"+list[index].ttk+"</td>"+
					"<td class='text-center'><a class='hovera' onclick='capnhattt("+index+")'>"+list[index].tttk+"</a></td>"+
					"<td class='text-center'><a data-toggle='modal' data-target='#myModal' href=''  onclick='view("+index+")'>Xem thông tin</a></td>"+
					"<td class='text-center'><select  class='cv' onchange=change("+index+")><option value='Thành Viên'>Thành Viên</option ><option value ='Quản trị viên'>Quản trị viên</option></select></td>"+
					"<td class='text-center'>"+list[index].nkt+"</td>"+
					"<td class='text-center'><button type='button' class='btn btn-danger btn-sm' onclick='xoa("+index+")'> <span class='glyphicon glyphicon-remove'></span></button></td>"+"</tr>"
				
			$("#example1").append(value);
			$(".cv:eq("+index+")").val(list[index].chucvu);
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
	$("#mtv").text(danhsach[index].mtv);
	$("#ttv").text(danhsach[index].ttv);
	$("#ttk").text(danhsach[index].ttk);
	$("#sdt").text(danhsach[index].sdttv);
	$("#ns").text(danhsach[index].ns);
	$("#qq").text(danhsach[index].qq);
	$("#gt").text(danhsach[index].gt);
	$("#chucvu").text(danhsach[index].chucvu);
	$("#nkt").text(danhsach[index].nkt);
	$("#add").attr("src",danhsach[index].img);
	
	
}



function capnhattt(index){
	if(danhsach[index].tttk=="Không khóa"){
			danhsach[index].tttk="Khóa";	
	}else{
		danhsach[index].tttk="Không khóa";
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
function change(index){
	var value=$(".cv:eq("+index+")").val();
	danhsach[index].chucvu = value;
	phantrang();	
}
function tabledata(sophantu,index){
	
	table(danhsach,sophantu,index)
}
$(document).ready(function(){
	
	phantrang();

});
