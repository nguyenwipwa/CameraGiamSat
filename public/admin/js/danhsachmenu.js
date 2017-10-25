var danhsach =[];
var db = openDatabase('database', '1.0', 'Test DB', 2 * 1024 * 1024);

db.transaction(function(tx){
	tx.executeSql("CREATE TABLE IF NOT EXISTS danhsachmenu (id unique ,dmsp,dm,loai,show)");
	tx.executeSql("insert into danhsachmenu values(1,'Camera Quan sát trọn bộ','Trọn bộ Camera giá rẻ','Tron bộ 1 camera giá rẻ','checked')");
	tx.executeSql("insert into danhsachmenu values(2,'Camera Quan sát trọn bộ','Trọn bộ Camera giá rẻ','Trọn bộ 1 camera HD','checked')");
	tx.executeSql("insert into danhsachmenu values(3,'Camera giám sát','Camera theo hãng sản xuất','Camera Vantech','checked')");
	tx.executeSql("insert into danhsachmenu values(4,'Camera giám sát','Camera theo loại sản phẩm','Camera Analog','checked')");
	tx.executeSql("insert into danhsachmenu values(5,'Camera giám sát','Camera theo chức năng','Camera wifi','checked')");
	tx.executeSql("insert into danhsachmenu values(6,'Đầu ghi hình camera','Đầu ghi theo hãng','Đầu ghi hình vantech','checked')");
	tx.executeSql("insert into danhsachmenu values(7,'Đầu ghi hình camera','Đầu ghi theo loại','Đầu ghi hình Analog','checked')");
	tx.executeSql("insert into danhsachmenu values(8,'Đầu ghi hình camera','Đầu ghi theo kênh','Đầu ghi hình 4 kênh','checked')");
	tx.executeSql("insert into danhsachmenu values(9,'Phụ kiện camera','Ô lưu dữ liệu camera','Ô lưu trữ 80G','checked')");
	tx.executeSql("insert into danhsachmenu values(10,'Phụ kiện camera','Phụ kiện chính hãng','Dây cáp Camera','checked')");
	tx.executeSql("insert into danhsachmenu values(11,'Phụ kiện camera','Phụ kiện chính hãng','Dây cáp Camera','checked')");
	//	tx.executeSql("drop table danhsachmenu");
	});
	db.transaction(function(tx){
		tx.executeSql("Select * from danhsachmenu",[],function(tx,rs){
			var size = rs.rows.length;
			for(i =0;i<size;i++){
				danhsach.push(rs.rows.item(i));	
			}
			})
		})

	db.transaction(function(tx){
	tx.executeSql("CREATE TABLE IF NOT EXISTS idmenu (id unique ,tenmenu,idmenu)");
	tx.executeSql("insert into idmenu values(1,'danhmuc',11)");
		
	});




//danhsachmenu
var danhmucmenu=[];
var dmmn1 = "Camera Quan sát trọn bộ";
var dmmn2 = "Camera giám sát";
var dmmn3 = "Đầu ghi hình camera";
var dmmn4 = "Phụ kiện camera";
danhmucmenu.push(dmmn1);
danhmucmenu.push(dmmn2);
danhmucmenu.push(dmmn3);
danhmucmenu.push(dmmn4);
//danhmuc

var danhmucmn1 =[];
var dm11 ="Trọn bộ Camera giá rẻ";
var dm12 ="Trọn bộ Camera HD";
danhmucmn1.push(dm11);
danhmucmn1.push(dm12);

var danhmucmn2 =[];

var dm21 ="Camera theo hãng sản xuất";
var dm22 ="Camera theo loại sản phẩm";
var dm23 ="Camera theo chức năng";
danhmucmn2.push(dm21);
danhmucmn2.push(dm22);
danhmucmn2.push(dm23);

var danhmucmn3 =[];
var dm31 ="Đầu ghi theo hãng";
var dm32 ="Đầu ghi theo loại";
var dm33 ="Đầu ghi theo kênh";
danhmucmn3.push(dm31);
danhmucmn3.push(dm32);
danhmucmn3.push(dm33);

var danhmucmn4 =[];
var dm41 ="Ô lưu dữ liệu camera";
var dm42 ="Phụ kiện chính hãng";

danhmucmn4.push(dm41);
danhmucmn4.push(dm42);
//loai

var loaidm11 =[];
var ldm111 ="Tron bộ 1 camera giá rẻ";
var ldm112 ="Tron bộ 2 camera giá rẻ";
loaidm11.push(ldm111);
loaidm11.push(ldm112);

var loaidm12 =[];
var ldm121 ="Trọn bộ 1 camera HD";
var ldm122 ="Trọn bộ 2 camera HD";

loaidm12.push(ldm121);
loaidm12.push(ldm122);

var loaidm21 =[];
var ldm211 ="Camera Vantech";
var ldm212 ="Camera Dahua";
loaidm21.push(ldm211);
loaidm21.push(ldm212);

var loaidm22 =[];
var ldm221 ="Camera Analog";
var ldm222 ="Camera IP";

loaidm22.push(ldm221);
loaidm22.push(ldm222);

var loaidm23 =[];
var ldm231 ="Camera quan sát ";
var ldm232 ="Camera wifi";
loaidm23.push(ldm231);
loaidm23.push(ldm232);

var loaidm31 =[];
var ldm311 ="Đầu ghi hình vantech";
var ldm312 ="Đầu ghi hình Dahua";

loaidm31.push(ldm311);
loaidm31.push(ldm312);

var loaidm32 =[];
var ldm321 ="Đầu ghi hình Analog";
var ldm322 ="Đầu ghi hình IP";
loaidm32.push(ldm321);
loaidm32.push(ldm322);

var loaidm33 =[];
var ldm331 ="Đầu ghi hình 4 kênh";
var ldm332 ="Đầu ghi hình 8 kênh";
loaidm33.push(ldm331);
loaidm33.push(ldm332);

var loaidm41 =[];
var ldm411 ="Ô lưu trữ 80G";
var ldm412 ="Ô lưu trữ 160G";

loaidm41.push(ldm411);
loaidm41.push(ldm412);

var loaidm42 =[];
var ldm421 ="Nguồn Camera";
var ldm422 ="Dây cáp Camera";
loaidm42.push(ldm421);
loaidm42.push(ldm422);


var tongdanhmuc=[];
tongdanhmuc.push(danhmucmn1);
tongdanhmuc.push(danhmucmn2);
tongdanhmuc.push(danhmucmn3);
tongdanhmuc.push(danhmucmn4);




