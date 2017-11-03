// JavaScript Document


var db = openDatabase('database', '1.0', 'Test DB', 2 * 1024 * 1024);

db.transaction(function(tx){
	tx.executeSql("CREATE TABLE IF NOT EXISTS nam (id unique,nam)");
	tx.executeSql("insert into nam (id,nam)values(1,2008)");
	tx.executeSql("insert into nam (id,nam)values(2,2009)");
	tx.executeSql("insert into nam (id,nam)values(3,2010)");
	tx.executeSql("insert into nam (id,nam)values(4,2011)");
	tx.executeSql("insert into nam (id,nam)values(5,2012)");
	tx.executeSql("insert into nam (id,nam)values(6,2013)");
	tx.executeSql("insert into nam (id,nam)values(7,2014)");
	tx.executeSql("insert into nam (id,nam)values(8,2015)");
	tx.executeSql("insert into nam (id,nam)values(9,2016)");
	tx.executeSql("insert into nam (id,nam)values(10,2017)");
	//tx.executeSql("delete from nam ");
});
function Selectnam(){
db.transaction(function(tx){
	tx.executeSql("select * from nam",[],function(tx,rs){
		var size = rs.rows.length;
		var value = "";
		for(i =0;i<size;i++){
		value+="<option value ='"+rs.rows.item(i).nam+"'>"+rs.rows.item(i).nam+"</option>";
		}
		$("#nam").html(value);
		vebieudo();
	});
});
}
db.transaction(function(tx){
	tx.executeSql("CREATE TABLE IF NOT EXISTS thang (id unique,thang)");
	tx.executeSql("insert into thang values(1,'12 tháng')");
	tx.executeSql("insert into thang values(2,1)");
	tx.executeSql("insert into thang values(3,2)");
	tx.executeSql("insert into thang values(4,3)");
	tx.executeSql("insert into thang values(5,4)");
	tx.executeSql("insert into thang values(6,5)");
	tx.executeSql("insert into thang values(7,6)");
	tx.executeSql("insert into thang values(8,7)");
	tx.executeSql("insert into thang values(9,8)");
	tx.executeSql("insert into thang values(10,9)");
	tx.executeSql("insert into thang values(11,10)");
	tx.executeSql("insert into thang values(12,11)");
	tx.executeSql("insert into thang values(13,12)");
	tx.executeSql("insert into thang values(14,'1>6')");
	tx.executeSql("insert into thang values(15,'6>12')");
	//tx.executeSql("delete from thang ");
	
});
function Selectthang(){
db.transaction(function(tx){
	tx.executeSql("select * from thang",[],function(tx,rs){
		var size = rs.rows.length;
		var value = "";
		for(i =0;i<size;i++){
			var thang =""+rs.rows.item(i).thang+"";
			
			if(thang.indexOf("tháng")!=-1){
		value+="<option value ='"+thang+"' >"+thang+"</option>";
			}else{
				if(thang.indexOf(">")!=-1){
					
					 thang = thang.split(">");
					var valuethang = thang[0]+","+thang[1];
				
					 value+="<option value ='"+valuethang+"'>tháng "+thang[0]+" đến tháng "+thang[1]+"</option>";
					}else{
						
				value+="<option value ='tháng "+thang+"'>tháng "+thang+"</option>";
					}
			}
		}
		$("#thang").html(value);
		
	});
});
}
 function rd(){
		var value =Math.floor(Math.random()*10000);
		return value;
	 }
function vebieudo(){
  

	var date = $("#thang").val();
	var date1 = $("#nam").val();
	var data=[];
	var name = "";
	var value = [];
	var valuedate= [];
	var title1 = "Doanh thu năm "+date1+" "+date;
	var title2 = "Bảng thống kê doanh thu năm "+date1+" "+date;
	if(date =="12 tháng"){
		name = "tháng";
		for(i=1;i<13;i++){
		var thang = "tháng "+i;
		value.push(thang);
		var dulieu = rd();
		data.push(dulieu);
		valuedate.push(i);
		}
		
	}else{
		if(date.indexOf(",")!=-1){
		name = "Tháng";
		date = date.split(",");
		title1 = "Doanh thu năm "+date1+" tháng "+date[0]+" đến tháng "+date[1];
		title2 = "Bảng thống kê doanh thu năm "+date1+" tháng "+date[0]+" đến tháng "+date[1];	 
		for(i=date[0];i<=parseInt(date[1]);i++){
		var thang = "tháng "+i;
		value.push(thang);
		var dulieu = rd();
		data.push(dulieu);
		valuedate.push(i);
		}
	}else{
		name = "Ngày";
		for(i=1;i<=30;i++){
		var thang = "ngày "+i;
		value.push(thang);
		var dulieu = rd();
		data.push(dulieu);
		valuedate.push(i);
		}
	}
	}

	

	$("#title1").html(title1);
	$("#title2").html(title2);
	thongketieude(name,valuedate);
	thongkedata(data);
	tongdoanhthu(data);
	chart(data,value);
	
}
function chart(data,value){
	
		 var areaChartData = {
          labels: value,
          datasets: [
          //  {
            //  label: "Electronics",
            //  fillColor: "#00a65a",
            //  strokeColor: "#00a65a",
            //   pointColor: "#3b8bba",
            //  pointStrokeColor: "rgba(60,141,188,1)",
            //  pointHighlightFill: "#fff",
            //  pointHighlightStroke: "rgba(60,141,188,1)",	
             // data: [thang1, thang2, thang3, thang4, thang5, thang6, thang7,thang8,thang9,thang10,thang11,thang12]
           // },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
             data: data
            }
          ]
        };
            

			var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
		
        var barChartData = areaChartData;
       
        var barChartOptions = {
          //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
          scaleBeginAtZero: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: true,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - If there is a stroke on each bar
          barShowStroke: true,
          //Number - Pixel width of the bar stroke
          barStrokeWidth: 2,
          //Number - Spacing between each of the X value sets
          barValueSpacing: 5,
          //Number - Spacing between data sets within X values
          barDatasetSpacing:1,
          //String - A legend template
         
          //Boolean - whether to make the chart responsive
          responsive: true,
          maintainAspectRatio: false
        };
		var optionsline = {
				scales: {
            xAxes: [{
                display: false
            }]
        }	
		}
        barChartOptions.datasetFill = false;
	
        barChart.Bar(barChartData, barChartOptions);
		
	 }
	 function thongketieude(name,valuedate){
		
			 var value ="<tr><th style='text-align:center'>"+name+"</th>";
			 for(j =0;j<valuedate.length;j++){
				
                    value+= "<th style='text-align:center'>"+valuedate[j]+"</th>";
			 }
			 value+= "</tr>";
			 
			 $("#thongke thead").html(value);
	 }
	 function thongkedata(data){
		
			 var value ="<tr><td style='text-align:center'>Doanh thu (tr)</td>";
			 for(j =0;j<data.length;j++){
				
                    value+= "<td style='text-align:center'>"+data[j]+"</td>";
			 }
			 value+= "</tr>";
			 
			 $("#thongke tbody").html(value);
	 }
	  function tongdoanhthu(data){
		
			 var value =0;
			 for(j =0;j<data.length;j++){
				
                    value+= data[j];
			 }
			 
			 
			 $("#doanhthu").html(value+ " (tr)");
	 }
	 $(document).ready(function() {
		 
		Selectthang();
			Selectnam();
			
			$("#nam").change(function(){
				$("#bieudo").html("");
				$("#bieudo").html("<canvas id='barChart' height='100'></canvas>");
				vebieudo();
				});
				$("#thang").change(function(){
				$("#bieudo").html("");
				$("#bieudo").html("<canvas id='barChart' height='100'></canvas>");
				vebieudo();
				});
				
        });
		