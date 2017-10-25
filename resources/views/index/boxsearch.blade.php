<div id="box_search_top">
  <form id="formSearch" name="formSearch" method="get" action="/san-pham/tim-kiem.html/" >
    <input type="hidden" name="do_search" value="1">
    <table width="100%" >
      <tbody>
        <tr>
          <td><select size="1" id="catfeature_id" name="catfeature_id" class="select_search" >
            <option value="0">- - Theo loại sản phẩm - -</option>
            <option value="20"  >Camera không dây (Wifi)</option>
            <option value="19"  >Đầu ghi hình HDI</option>
            <option value="18"  >Camera HDI</option>
            <option value="17"  >Đầu ghi hình HD-TVI</option>
            <option value="16"  >Camera HD-TVI</option>
            <option value="1"  >Camera analog</option>
            <option value="13"  >Camera AHD</option>
            <option value="11"  >Camera HD-SDI</option>
            <option value="9"  >Camera HDCVI</option>
            <option value="14"  >Đầu ghi hình AHD</option>
            <option value="15"  >Phụ kiện camera quan sát</option>
            <option value="12"  >Đầu ghi hình HD-SDI</option>
            <option value="4"  >Camera IP</option>
            <option value="5"  >Đầu ghi hình Analog</option>
            <option value="6"  >Đầu ghi hình IP</option>
            <option value="10"  >Đầu ghi hình HDCVI</option>
            <option value="7"  >Điện thoại bàn</option>
          </select></td>
          <td><select name="price_id" id="price_id" class="select_search">
            <option value="" selected="">- - Theo khoảng giá - -</option>
            <option value="0_500000">0 - &nbsp;500,000 VND</option>
            <option value="500000_700000">&nbsp;500,000 VND - &nbsp;700,000 VND</option>
            <option value="700000_1000000">&nbsp;700,000 VND - &nbsp;1,000,000 VND</option>
            <option value="1000000_1500000">&nbsp;1,000,000 VND - &nbsp;1,500,000 VND</option>
            <option value="1500000_2000000">&nbsp;1,500,000 VND - &nbsp;2,000,000 VND</option>
            <option value="2000000_5000000">&nbsp;2,000,000 VND - &nbsp;5,000,000 VND</option>
            <option value="5000000_10000000">&nbsp;5,000,000 VND - &nbspnbsp;10,000,000 VND</option>
          </select></td>
          <td id="display_feature"><select name="feature_id" id="feature_id" class="select_search">
            <option value="" selected="">- - Chức năng sản phẩm - -</option>
            <option value="14">Từ 500 TVL trở xuống</option>
            <option value="15">Từ 500TVL-700TVL</option>
            <option value="16">Từ 720TVL-1000TVL</option>
            <option value="17">4 kênh</option>
            <option value="18">8 kênh</option>
            <option value="19">16 kênh</option>
            <option value="20">24 kênh</option>
            <option value="21">32 kênh</option>
          </select></td>
          <td><select name="status_id" id="status_id" class="select_search">
            <option value="" selected="">- - Trạng thái sản phẩm - -</option>
            <option value="1">Sản phẩm khuyến mãi</option>
            <option value="3">Sản phẩm mới</option>
            <option value="4">Sản phẩm bán chạy</option>
            <option value="2">Hàng tồn kho thanh lý</option>
          </select></td>
          <td align="left"><button id="btnSearch" name="btnSearch" type="submit" class="btn_search" value="Tìm sản phẩm"> <span>Tìm sản phẩm</span> </button></td>
        </tr>
      </tbody>
    </table>
  </form>
</div>