// JavaScript Document


var db = openDatabase('database', '1.0', 'Test DB', 2 * 1024 * 1024);

db.transaction(function(tx){
	tx.executeSql("CREATE TABLE IF NOT EXISTS spbanchaytheotongloai (id unique,loaisp,color)");
	tx.executeSql("insert into spbanchaytheotongloai values(1,'Camera','#99FF00')");
	tx.executeSql("insert into spbanchaytheotongloai values(2,'Đâu ghi hình','#CC0033')");
	tx.executeSql("insert into spbanchaytheotongloai values(3,'Phụ kiện camera','#FFFF00')");
	tx.executeSql("insert into spbanchaytheotongloai values(4,'Thiết bị an ninh','#DA70D6')");
	tx.executeSql("insert into spbanchaytheotongloai values(5,'Thiết bị văn phòng','#9B30FF')");
	tx.executeSql("insert into spbanchaytheotongloai values(6,'Máy chấm công','#FF6600')");
	tx.executeSql("insert into spbanchaytheotongloai values(7,'Tổng đài - Bộ đàm','#EEEEEE')");
	
	//tx.executeSql("delete from spbanchaytheotongloai ");
});
var datalable =[];
var colordata=[];
var datavalue =[];
var size=0;
db.transaction(function(tx){
	tx.executeSql("select * from spbanchaytheotongloai" ,[],function(tx,rs){
	size = rs.rows.length;
	for(i=0;i<size;i++){
		var value = rs.rows.item(i).loaisp;
		var color = rs.rows.item(i).color;
	
		datalable.push(value);
		colordata.push(color);
	}
});	
	});

function Selectnam(){
db.transaction(function(tx){
	tx.executeSql("select * from nam",[],function(tx,rs){
		var size1 = rs.rows.length;
		var value = "";
		for(i =0;i<size1;i++){
		value+="<option value ='"+rs.rows.item(i).nam+"'>"+rs.rows.item(i).nam+"</option>";
		}
		$("#nam").html(value);
		vebieudo();
	});
});
}

 function rd(){
		var value =Math.floor(Math.random()*20000);
		return value;
	 }
function vebieudo(){
	
var title1 = "Số lượng sản phẩm bán được năm "+$("#nam").val();
var title2 ="Bảng thống kê số lượng sản phẩm bán được năm "+$("#nam").val();

datavalue =[];

 $("#title1").html(title1);
  $("#title2").html(title2);
  for(i=0;i<size;i++){
	  var data=rd();
	  datavalue.push(data);
	   
  }
  
  

  //thongketieude(datalable);
  
  thongkedata(datavalue,datalable);
  //tongdoanhthu(datavalue);
  chart(datavalue,datalable,colordata);
  
	
  
}
function  vebieudophantram(){
	var dataphantram=[];
	var chitieu=$("#chitieu").val();
	  for(k=0;k<size;k++){
		 
	  var data=mround((datavalue[k]*100)/tongdoanhthu(datavalue));
	  dataphantram.push(data);
	  
  }
  if(chitieu =="tongso"){
	    thongkedata(datavalue,datalable);
  //tongdoanhthu(datavalue);
  chart(datavalue,datalable,colordata);
  }else{
	  thongkedata(dataphantram,datalable);
  //tongdoanhthu(datavalue);
  chartpie(dataphantram,datalable,colordata);
  }
}
function mround(value){
var soducanlay = 100;
var sodu = Math.round(value*soducanlay);
return sodu/soducanlay;
}
function chartpie(data,value,color){
	var data1 = {
    labels: value,
    datasets: [
        {
            data: data,
            backgroundColor:color
            
        }]
};
var PolarChartCanvas = $("#polarChart").get(0).getContext("2d");
var myPieChart = new Chart(PolarChartCanvas,{
    type: 'pie',
    data: data1,
     options: {
            responsive: true,
            legend: {
                position: 'bottom',
            },
           
            scale: {
              ticks: {
                beginAtZero: true
              },
              reverse: false
            },
            animation: {
              //  animateRotate: false,
                animateScale: true
            }
        }
});
}
function chart(data,value,color){
	
		 var areaChartData = {
           data: {
            datasets: [{
                data: data,
                backgroundColor: colordata,
                label: 'My dataset' // for legend
            }],
            labels: value
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom',
            },
           
            scale: {
              ticks: {
                beginAtZero: true
              },
              reverse: false
            },
            animation: {
                animateRotate: false,
                animateScale: true
            }
        }
        };
            
	
			var PolarChartCanvas = $("#polarChart").get(0).getContext("2d");
				
			Chart.PolarArea(PolarChartCanvas, areaChartData);
			
		
	 }
	 function thongketieude(valuelable){
		
			 var value ="<tr><th style='text-align:center;width:20%'>Loại</th>";
			 for(j =0;j<valuelable.length;j++){
				
                    value+= "<th style='text-align:center'>"+valuelable[j]+"</th>";
			 }
			 value+= "</tr>";
			 
			 $("#thongke thead").html(value);
	 }
	 function thongkedata(data,valuelable){
		
			 var value ="";
			 for(j =0;j<data.length;j++){
				
                    value+= "<tr><td>"+valuelable[j]+"</td><td style='text-align:center'>"+data[j]+"</td></tr>";
			 }
			 value+= "<tr><td><label>Tổng</label></td><td style='text-align:center'>"+tongdoanhthu(data)+"</td></tr>";
			 
			 $("#thongke tbody").html(value);
	 }
	  function tongdoanhthu(data){
		
			 var value =0;
			 for(j =0;j<data.length;j++){
				
                    value+= data[j];
			 }
			 
			 return Math.round(value);
			 
	 }
	 $(document).ready(function() {
		 
		
			Selectnam();
			
			$("#nam").change(function(){
				
				if($("#chitieu").val()=="tongso"){
					$("#bieudo").html("");
				$("#bieudo").html("<canvas id='polarChart'></canvas>");
				vebieudo();
				}else{
					vebieudo();
					$("#bieudo").html("");
				$("#bieudo").html("<canvas id='polarChart'></canvas>");
					vebieudophantram();
				}
				});
				$("#chitieu").change(function(){
				$("#bieudo").html("");
				$("#bieudo").html("<canvas id='polarChart'></canvas>");
				
				vebieudophantram();
				});
				
        });
		