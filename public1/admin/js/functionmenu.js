//jquery


$(document).ready(function() {
	
	function showlist(nameip,namedatalist,nameremove){
	$("#"+nameip).change(function(){
		
		var dmsp = $(this).val();
		for(j=0;j<danhmucmenu.length;j++){
			if(dmsp ==danhmucmenu[j]){
			listdanhmuc(namedatalist,tongdanhmuc[j]);
			break;	
		}else{
			
			$("#"+nameremove).val("")
		$("#"+namedatalist).html("");	
		}
		}
		
		
		})
}
		$("#chonmenu").change(function(){
			var value1 = $(this).val();
			for (j=0;j<danhmucmenu.length;j++){
				if(value1==danhmucmenu[j]){
					
					listmenu("loaimenu",tongdanhmuc[j])	
				}
			}
			})

		showlist("tvldmsp","tdm","tvldm");
		showlist("svldmsp","sdm","svldm");
	
			phantrang();
 		$("#schonmenu").change(function(){
			for(i = 0;i<danhmucmenu.length;i++){
				if($(this).val()==danhmucmenu[i]){
					$("#indexschon").val(i)	
				}
			}
		
			});
			$("#sloaimenu").change(function(){
				for(i = 0;i<tongdanhmuc.length;i++){
					var list =tongdanhmuc[i];
				for(j = 0;j<list.length;j++){
				if($(this).val()==list[j]){
					$("#indexsloaii").val(i);
					$("#indexloaij").val(j);
						
				}
			}
			}
		
			})
});

function table(list,sotrang,index){
	
	var value ="";
	
	
	resettb();
	var count =0;
		while(count<sotrang){
	
	
		value="<tr class='search'><td class='text-center'>"+(index+1)+"</td>"+
				"<td>"+list[index].dmsp+"</td>"+
				"<td>"+list[index].dm+"</td>"+
				"<td>"+list[index].loai+"</td>"+
				"<td class='text-center'><input type='checkbox' disabled='disabled' "+list[index].show+"></td>"+
				"<td class='text-center'><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#sua' onclick='sua("+index+")'  ><span class='glyphicon glyphicon-edit'></span></button></td>"+
				"<td class='text-center'><button type='button' class='btn btn-danger' onclick='xoa("+index+")'><span class='glyphicon glyphicon-remove'></span></button></td>"+
				"</tr>"
				
				$("#example1").append(value);
				count++;
				index++;
	}
	$("#search").quicksearch("#example1 .search");
}

function resettb(){
		
	
	
	$("#example1").html( "<thead>"+
                     " <tr>"+
                       " <th style='width:1%'>STT</th>"+
                        
                        "<th>Danh mục sản phẩm</th>"+
                        "<th>Danh mục</th>"+
                        "<th>Loại</th>"+
                        "<th style='width:1%'>Hiện</th>"+
                        "<th colspan='2' >Thao tác</th>"+
                       " <th class='hidden'></th>"+
                      "</tr>"+
                  "  </thead>");
	}
function listmenu(name,list){
	var value ="";
	
	if(name!="chonmenu"){
		value ="<option value='---'>---</option>";
	}
	for(i=0;i<list.length;i++){
		value+="<option value='"+list[i]+"'>"+list[i]+"</option>"
		
	}
	$("#"+name).html(value);
}
function listsuamenu(){
	var value ="<option value='---'>---</option>";
	for(i=0;i<danhmucmenu.length;i++){
		value+="<option value='"+danhmucmenu[i]+"'>"+danhmucmenu[i]+"</option>"
		
	}
	$("#schonmenu").html(value);
}
function listsualoaimenu(){
	var value ="<option value='---'>---</option>";
	for(i=0;i<tongdanhmuc.length;i++){
		var list = tongdanhmuc[i];
		for(j=0;j<list.length;j++){
		value+="<option value='"+list[j]+"'>"+list[j]+"</option>"
		
	}
		
	}
	$("#sloaimenu").html(value);
}
function xoamenu(){
var valuemenu=$("#chonmenu").val();
var valueloaimenu=$("#loaimenu").val();
if(valueloaimenu=="---"){
	for(k=0;k<danhmucmenu.length;k++){
		if(valuemenu==danhmucmenu[k]){
			danhmucmenu.splice(k,1);
			listmenu("chonmenu",danhmucmenu)
			tongdanhmuc.splice(k,1);
			console.log(tongdanhmuc)
			if(tongdanhmuc.length>0){
			listmenu("loaimenu",tongdanhmuc[0]);
			}else{
				listmenu("loaimenu",tongdanhmuc);
			}
			var danhsachtmp=[]
			for(l=0;l<danhsach.length;l++){
				if(valuemenu!=danhsach[l].dmsp){
				danhsachtmp.push(danhsach[l])	
				}
			}
			
		}
	}
		}else{
			for(k=0;k<danhmucmenu.length;k++){
				if(valuemenu==danhmucmenu[k]){
					for(l=0;l<tongdanhmuc[k].length;l++){
							if(valueloaimenu==tongdanhmuc[k][l]){
									tongdanhmuc[k].splice(l,1);
									listmenu("loaimenu",tongdanhmuc[k])
									var danhsachtmp=[]
						for(h=0;h<danhsach.length;h++){
							if(valueloaimenu!=danhsach[h].dm){
							danhsachtmp.push(danhsach[h])	
									}
								}
								
							}
					}
				}
			}
		}
		danhsach=danhsachtmp;
		phantrang()
		
		
		capnhatmenu();
}
function listdanhmuc(name,list){
	var value = null;
	
	for(i=0;i<list.length;i++){
		value+="<option value='"+list[i]+"'></option>"	
	}
	
	$("#"+name).html(value);
	
}
function them(){
	
var dmsp = $("#tvldmsp").val();
var dm = $("#tvldm").val();
var loai = $("#tloai").val();
var check = "";

if(document.getElementById("tcheck").checked ==true){
	check="checked";	
}
var ds ={dmsp:dmsp,dm:dm,loai:loai,show:check};
danhsach.unshift(ds);
var kt = false;
var ktdm=false;
var index =0;
for(i=0;i<danhmucmenu.length;i++){
	if(dmsp==danhmucmenu[i]){
		kt = true;
		index  =i;
	}
	for(j=0;j<tongdanhmuc[i].length;j++){
			if(dm==tongdanhmuc[i][j]){
			ktdm = true;
			break;
		}	
	}
	
}

if(kt==false){
	danhmucmenu.push(dmsp);
		var danhmucmoi =[];
			danhmucmoi.push(dm);
		tongdanhmuc.push(danhmucmoi);
}

if(ktdm==false && kt!=false){
	
	tongdanhmuc[index].push(dm);
}

listdanhmuc("tdmsp",danhmucmenu);
phantrang()
capnhatmenu();

$("#tvldmsp").val("");
$("#tvldm").val("");
$("#tdm").html("");
$("#tloai").val("");
$("#tcheck").prop("checked",false);
}
function capnhatmenu(){
	
	listmenu("chonmenu",danhmucmenu)
	if(tongdanhmuc.length>0){
			listmenu("loaimenu",tongdanhmuc[0]);
			}else{
				listmenu("loaimenu",tongdanhmuc);
			}
			listdanhmuc("tdmsp",danhmucmenu)
			listdanhmuc("sdmsp",danhmucmenu)
}
function showlist1(nameip,namedatalist){
		var dmsp = $("#"+nameip).val();
	
		for(k=0;k<danhmucmenu.length;k++){
			if(dmsp ==danhmucmenu[k]){
			listdanhmuc(namedatalist,tongdanhmuc[k]);
			break;	
		}else{

		$("#"+namedatalist).html("");	
		}
		}
		
		
}

function sua(index){
	listdanhmuc("sdmsp",danhmucmenu);
	
	for(j=0;j<danhsach.length;j++){
		if(index ==j){
			$("#svldmsp").val(danhsach[j].dmsp);
			$("#svldm").val(danhsach[j].dm);
		
			$("#sloai").val(danhsach[j].loai);
			if(danhsach[j].show=="checked"){
			$("#scheck").prop("checked",true);
			}
showlist1("svldmsp","sdm");
$("#edit").val(j);
		}
	}
}
function capnhat(){
	var index = $("#edit").val();
			danhsach[index].dmsp=$("#svldmsp").val();
				danhsach[index].dm=$("#svldm").val();
				danhsach[index].loai=$("#sloai").val();
				if(document.getElementById("scheck").checked ==true){
					danhsach[index].show="checked";
				}else{
					danhsach[index].show="";
				}
				alert("Cập nhật thành công")
				var kt = false;
var ktdm=false;
var index =0;
for(i=0;i<danhmucmenu.length;i++){
	if($("#svldmsp").val()==danhmucmenu[i]){
		kt = true;
		index  =i;
	}
	for(j=0;j<tongdanhmuc[i].length;j++){
			if($("#svldm").val()==tongdanhmuc[i][j]){
			ktdm = true;
			break;
		}	
	}
	
}

if(kt==false){
	danhmucmenu.push($("#svldmsp").val());
		var danhmucmoi =[];
			danhmucmoi.push($("#svldm").val());
		tongdanhmuc.push(danhmucmoi);
}

if(ktdm==false && kt!=false){
	
	tongdanhmuc[index].push($("#svldm").val());
}
				
				phantrang()
				capnhatmenu()
}

function xoa(index){
	danhsach.splice(index,1)
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
function setfirst(){
	
	listsuamenu()
listsualoaimenu()
	
}
function updatmenu(){
	var indexchon = $("#indexschon").val();
	var indexloaii = $("#indexsloaii").val();
	var indexloaij = $("#indexloaij").val();
	if($("#schonmenu").val()!="---"){
	danhmucmenu[indexchon] =$("#schon").val();
	}
	if($("#sloaimenu").val()!="---"){
		
	var tdm = tongdanhmuc[indexloaii];
	tdm[indexloaij] =$("#sloai1").val();

	}
	
	
	for(a=0;a<danhsach.length;a++){
		
	
		if(danhsach[a].dmsp==$("#schonmenu").val()){		
			danhsach[a].dmsp=$("#schon").val()
		}
		if(danhsach[a].dm==$("#sloaimenu").val()){
			
			danhsach[a].dm=$("#sloai1").val();
		}
	}
		$("#sloai1").val("");
	$("#schon").val("");
	setfirst();
	phantrang();
}