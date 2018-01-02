@extends('admin.layout.app')
@section('script')
<script src="{{ asset('resources/views/admin/ckeditor/ckeditor.js') }}"></script>
<link href="{{asset('resources/views/admin/css/stylesheet.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div id="content">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <div class="page-header">
      <div class="container-fluid">
        <div class="pull-right"><a href="http://localhost:81/opencart/admin/index.php?route=sale/order&amp;user_token=LRLhUr6HXulMIMPm8PxCIoxiwTLSHiq5" class="btn btn-default"><i class="fa fa-reply"></i> Trở về</a></div>
        <h1>Đơn hàng</h1>
        <ul class="breadcrumb">
          <li><a href="http://localhost:81/opencart/admin/index.php?route=common/dashboard&amp;user_token=LRLhUr6HXulMIMPm8PxCIoxiwTLSHiq5">Trang chủ</a></li>
          <li><a href="http://localhost:81/opencart/admin/index.php?route=sale/order&amp;user_token=LRLhUr6HXulMIMPm8PxCIoxiwTLSHiq5">Đơn hàng</a></li>
        </ul>
      </div>
    </div>
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-pencil"></i> Chỉnh sửa đơn hàng</h3>
        </div>
        <div class="panel-body">
          <form class="form-horizontal">
            <ul id="order" class="nav nav-tabs nav-justified">
              <li class="disabled active"><a href="#tab-customer" data-toggle="tab">1. Thông tin khách hàng</a></li>
              <li class="disabled"><a href="#tab-cart" data-toggle="tab">2. Sản phẩm</a></li>
              <li class="disabled"><a href="#tab-payment" data-toggle="tab">3. Chi tiết thanh toán</a></li>
              <li class="disabled"><a href="#tab-shipping" data-toggle="tab">4. Chi tiết vận chuyển</a></li>
              <li class="disabled"><a href="#tab-total" data-toggle="tab">5. Tổng cộng</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab-customer">
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-store">Cửa hàng</label>
                  <div class="col-sm-10">
                    <select name="store_id" id="input-store" class="form-control">
                      <option value="0" selected="selected">Mặc định</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-currency">Currency</label>
                  <div class="col-sm-10">
                    <select name="currency" id="input-currency" class="form-control">
                      <option value="VND" selected="selected">Việt Nam Đồng</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-customer">Khách hàng</label>
                  <div class="col-sm-10">
                    <input type="text" name="customer" value="" placeholder="Khách hàng" id="input-customer" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                    <input type="hidden" name="customer_id" value="0">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-customer-group">Nhóm khách hàng</label>
                  <div class="col-sm-10">
                    <select name="customer_group_id" id="input-customer-group" class="form-control">
                      <option value="1" selected="selected">Default</option>
                    </select>
                  </div>
                </div>
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-firstname">Tên</label>
                  <div class="col-sm-10">
                    <input type="text" name="firstname" value="tung" id="input-firstname" class="form-control">
                  </div>
                </div>
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-lastname">Họ</label>
                  <div class="col-sm-10">
                    <input type="text" name="lastname" value="tung" id="input-lastname" class="form-control">
                  </div>
                </div>
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-email">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" value="tungle251@gmail.com" id="input-email" class="form-control">
                  </div>
                </div>
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-telephone">Số điện thoại</label>
                  <div class="col-sm-10">
                    <input type="text" name="telephone" value="123" id="input-telephone" class="form-control">
                  </div>
                </div>
                <div class="text-right">
                  <button type="button" id="button-customer" data-loading-text="Đang tải..." class="btn btn-primary"><i class="fa fa-arrow-right"></i> Tiếp tục</button>
                </div>
              </div>
              <div class="tab-pane" id="tab-cart">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <td class="text-left">Sản phẩm</td>
                        <td class="text-left">Mẫu</td>
                        <td class="text-right">Số lượng</td>
                        <td class="text-right">Đơn vị giá</td>
                        <td class="text-right">Tổng cộng</td>
                        <td>Tác vụ</td>
                      </tr>
                    </thead>
                    <tbody id="cart">
                      <tr>
                        <td class="text-left">HP LP3065<br>
                          <input type="hidden" name="product[0][product_id]" value="47">
                        </td>
                        <td class="text-left">Product 21</td>
                        <td class="text-right">1
                          <input type="hidden" name="product[0][quantity]" value="1"></td>
                          <td class="text-right"></td>
                          <td class="text-right"></td>
                          <td class="text-center"></td>
                        </tr>
                      </tbody></table>
                    </div>
                    <ul class="nav nav-tabs nav-justified">
                      <li class="active"><a href="#tab-product" data-toggle="tab">Sản phẩm</a></li>
                      <li><a href="#tab-voucher" data-toggle="tab">Phiếu quà tặng</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab-product">
                        <fieldset>
                          <legend>Thêm sản phẩm</legend>
                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-product">Chọn sản phẩm</label>
                            <div class="col-sm-10">
                              <input type="text" name="product" value="" id="input-product" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                              <input type="hidden" name="product_id" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-quantity">Số lượng</label>
                            <div class="col-sm-10">
                              <input type="text" name="quantity" value="1" id="input-quantity" class="form-control">
                            </div>
                          </div>
                          <div id="option"></div>
                        </fieldset>
                        <div class="text-right">
                          <button type="button" id="button-product-add" data-loading-text="Đang tải..." class="btn btn-primary"><i class="fa fa-plus-circle"></i> Thêm sản phẩm</button>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab-voucher">
                        <fieldset>
                          <legend>Thêm phiếu khuyến mãi</legend>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-to-name">Tên người nhận</label>
                            <div class="col-sm-10">
                              <input type="text" name="to_name" value="" id="input-to-name" class="form-control">
                            </div>
                          </div>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-to-email">Email của người nhận</label>
                            <div class="col-sm-10">
                              <input type="text" name="to_email" value="" id="input-to-email" class="form-control">
                            </div>
                          </div>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-from-name">Tên người gửi</label>
                            <div class="col-sm-10">
                              <input type="text" name="from_name" value="" id="input-from-name" class="form-control">
                            </div>
                          </div>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-from-email">Người gửi Email</label>
                            <div class="col-sm-10">
                              <input type="text" name="from_email" value="" id="input-from-email" class="form-control">
                            </div>
                          </div>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-theme">Chứng nhận chủ đề quà tặng</label>
                            <div class="col-sm-10">
                              <select name="voucher_theme_id" id="input-theme" class="form-control">
                                <option value="7">Birthday</option>
                                <option value="6">Christmas</option>
                                <option value="8">General</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-message">Thông báo</label>
                            <div class="col-sm-10">
                              <textarea name="message" rows="5" id="input-message" class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-amount">Số lượng</label>
                            <div class="col-sm-10">
                              <input type="text" name="amount" value="1" id="input-amount" class="form-control">
                            </div>
                          </div>
                        </fieldset>
                        <div class="text-right">
                          <button type="button" id="button-voucher-add" data-loading-text="Đang tải..." class="btn btn-primary"><i class="fa fa-plus-circle"></i> Thêm phiếu quà tặng</button>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-sm-6 text-left">
                        <button type="button" onclick="$('a[href=\'#tab-customer\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> Trở lại</button>
                      </div>
                      <div class="col-sm-6 text-right">
                        <button type="button" id="button-cart" class="btn btn-primary"><i class="fa fa-arrow-right"></i> Tiếp tục</button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-payment">
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-payment-address">Chọn địa chỉ</label>
                      <div class="col-sm-10">
                        <select name="payment_address" id="input-payment-address" class="form-control">
                          <option value="0" selected="selected"> ---Không--- </option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-payment-firstname">Tên</label>
                      <div class="col-sm-10">
                        <input type="text" name="firstname" value="tung" id="input-payment-firstname" class="form-control">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-payment-lastname">Họ</label>
                      <div class="col-sm-10">
                        <input type="text" name="lastname" value="tung" id="input-payment-lastname" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-payment-company">Công ty</label>
                      <div class="col-sm-10">
                        <input type="text" name="company" value="ád" id="input-payment-company" class="form-control">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-payment-address-1">Địa chỉ 1</label>
                      <div class="col-sm-10">
                        <input type="text" name="address_1" value="ádasdasdasdasdas" id="input-payment-address-1" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-payment-address-2">Địa chỉ 2</label>
                      <div class="col-sm-10">
                        <input type="text" name="address_2" value="ádasdasdasdasdas" id="input-payment-address-2" class="form-control">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-payment-city">Thành phố</label>
                      <div class="col-sm-10">
                        <input type="text" name="city" value="ádasdasdasdasdas" id="input-payment-city" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-payment-postcode">Mã bưu điện</label>
                      <div class="col-sm-10">
                        <input type="text" name="postcode" value="12" id="input-payment-postcode" class="form-control">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-payment-country">Quốc gia</label>
                      <div class="col-sm-10">
                        <select name="country_id" id="input-payment-country" class="form-control">
                          <option value=""> ---Xin vui lòng chọn--- </option>
                          <option value="244">Aaland Islands</option>
                          <option value="1">Afghanistan</option>
                          <option value="2">Albania</option>
                          <option value="3">Algeria</option>
                          <option value="4">American Samoa</option>
                          <option value="5">Andorra</option>
                          <option value="6">Angola</option>
                          <option value="7">Anguilla</option>
                          <option value="8">Antarctica</option>
                          <option value="9">Antigua and Barbuda</option>
                          <option value="10">Argentina</option>
                          <option value="11">Armenia</option>
                          <option value="12">Aruba</option>
                          <option value="252">Ascension Island (British)</option>
                          <option value="13">Australia</option>
                          <option value="14">Austria</option>
                          <option value="15">Azerbaijan</option>
                          <option value="16">Bahamas</option>
                          <option value="17">Bahrain</option>
                          <option value="18">Bangladesh</option>
                          <option value="19">Barbados</option>
                          <option value="20">Belarus</option>
                          <option value="21">Belgium</option>
                          <option value="22">Belize</option>
                          <option value="23">Benin</option>
                          <option value="24">Bermuda</option>
                          <option value="25">Bhutan</option>
                          <option value="26">Bolivia</option>
                          <option value="245">Bonaire, Sint Eustatius and Saba</option>
                          <option value="27">Bosnia and Herzegovina</option>
                          <option value="28">Botswana</option>
                          <option value="29">Bouvet Island</option>
                          <option value="30">Brazil</option>
                          <option value="31">British Indian Ocean Territory</option>
                          <option value="32">Brunei Darussalam</option>
                          <option value="33">Bulgaria</option>
                          <option value="34">Burkina Faso</option>
                          <option value="35">Burundi</option>
                          <option value="36">Cambodia</option>
                          <option value="37">Cameroon</option>
                          <option value="38">Canada</option>
                          <option value="251">Canary Islands</option>
                          <option value="39">Cape Verde</option>
                          <option value="40">Cayman Islands</option>
                          <option value="41">Central African Republic</option>
                          <option value="42">Chad</option>
                          <option value="43">Chile</option>
                          <option value="44">China</option>
                          <option value="45">Christmas Island</option>
                          <option value="46">Cocos (Keeling) Islands</option>
                          <option value="47">Colombia</option>
                          <option value="48">Comoros</option>
                          <option value="49">Congo</option>
                          <option value="50">Cook Islands</option>
                          <option value="51">Costa Rica</option>
                          <option value="52">Cote D'Ivoire</option>
                          <option value="53">Croatia</option>
                          <option value="54">Cuba</option>
                          <option value="246">Curacao</option>
                          <option value="55">Cyprus</option>
                          <option value="56">Czech Republic</option>
                          <option value="237">Democratic Republic of Congo</option>
                          <option value="57">Denmark</option>
                          <option value="58">Djibouti</option>
                          <option value="59">Dominica</option>
                          <option value="60">Dominican Republic</option>
                          <option value="61">East Timor</option>
                          <option value="62">Ecuador</option>
                          <option value="63">Egypt</option>
                          <option value="64">El Salvador</option>
                          <option value="65">Equatorial Guinea</option>
                          <option value="66">Eritrea</option>
                          <option value="67">Estonia</option>
                          <option value="68">Ethiopia</option>
                          <option value="69">Falkland Islands (Malvinas)</option>
                          <option value="70">Faroe Islands</option>
                          <option value="71">Fiji</option>
                          <option value="72">Finland</option>
                          <option value="74">France, Metropolitan</option>
                          <option value="75">French Guiana</option>
                          <option value="76">French Polynesia</option>
                          <option value="77">French Southern Territories</option>
                          <option value="126">FYROM</option>
                          <option value="78">Gabon</option>
                          <option value="79">Gambia</option>
                          <option value="80">Georgia</option>
                          <option value="81">Germany</option>
                          <option value="82">Ghana</option>
                          <option value="83">Gibraltar</option>
                          <option value="84">Greece</option>
                          <option value="85">Greenland</option>
                          <option value="86">Grenada</option>
                          <option value="87">Guadeloupe</option>
                          <option value="88">Guam</option>
                          <option value="89">Guatemala</option>
                          <option value="256">Guernsey</option>
                          <option value="90">Guinea</option>
                          <option value="91">Guinea-Bissau</option>
                          <option value="92">Guyana</option>
                          <option value="93">Haiti</option>
                          <option value="94">Heard and Mc Donald Islands</option>
                          <option value="95">Honduras</option>
                          <option value="96">Hong Kong</option>
                          <option value="97">Hungary</option>
                          <option value="98">Iceland</option>
                          <option value="99">India</option>
                          <option value="100">Indonesia</option>
                          <option value="101">Iran (Islamic Republic of)</option>
                          <option value="102">Iraq</option>
                          <option value="103">Ireland</option>
                          <option value="254">Isle of Man</option>
                          <option value="104">Israel</option>
                          <option value="105">Italy</option>
                          <option value="106">Jamaica</option>
                          <option value="107">Japan</option>
                          <option value="257">Jersey</option>
                          <option value="108">Jordan</option>
                          <option value="109">Kazakhstan</option>
                          <option value="110">Kenya</option>
                          <option value="111">Kiribati</option>
                          <option value="253">Kosovo, Republic of</option>
                          <option value="114">Kuwait</option>
                          <option value="115">Kyrgyzstan</option>
                          <option value="116">Lao People's Democratic Republic</option>
                          <option value="117">Latvia</option>
                          <option value="118">Lebanon</option>
                          <option value="119">Lesotho</option>
                          <option value="120">Liberia</option>
                          <option value="121">Libyan Arab Jamahiriya</option>
                          <option value="122">Liechtenstein</option>
                          <option value="123">Lithuania</option>
                          <option value="124">Luxembourg</option>
                          <option value="125">Macau</option>
                          <option value="127">Madagascar</option>
                          <option value="128">Malawi</option>
                          <option value="129">Malaysia</option>
                          <option value="130">Maldives</option>
                          <option value="131">Mali</option>
                          <option value="132">Malta</option>
                          <option value="133">Marshall Islands</option>
                          <option value="134">Martinique</option>
                          <option value="135">Mauritania</option>
                          <option value="136">Mauritius</option>
                          <option value="137">Mayotte</option>
                          <option value="138">Mexico</option>
                          <option value="139">Micronesia, Federated States of</option>
                          <option value="140">Moldova, Republic of</option>
                          <option value="141">Monaco</option>
                          <option value="142">Mongolia</option>
                          <option value="242">Montenegro</option>
                          <option value="143">Montserrat</option>
                          <option value="144">Morocco</option>
                          <option value="145">Mozambique</option>
                          <option value="146">Myanmar</option>
                          <option value="147">Namibia</option>
                          <option value="148">Nauru</option>
                          <option value="149">Nepal</option>
                          <option value="150">Netherlands</option>
                          <option value="151">Netherlands Antilles</option>
                          <option value="152">New Caledonia</option>
                          <option value="153">New Zealand</option>
                          <option value="154">Nicaragua</option>
                          <option value="155">Niger</option>
                          <option value="156">Nigeria</option>
                          <option value="157">Niue</option>
                          <option value="158">Norfolk Island</option>
                          <option value="112">North Korea</option>
                          <option value="159">Northern Mariana Islands</option>
                          <option value="160">Norway</option>
                          <option value="161">Oman</option>
                          <option value="162">Pakistan</option>
                          <option value="163">Palau</option>
                          <option value="247">Palestinian Territory, Occupied</option>
                          <option value="164">Panama</option>
                          <option value="165">Papua New Guinea</option>
                          <option value="166">Paraguay</option>
                          <option value="167">Peru</option>
                          <option value="168">Philippines</option>
                          <option value="169">Pitcairn</option>
                          <option value="170">Poland</option>
                          <option value="171">Portugal</option>
                          <option value="172">Puerto Rico</option>
                          <option value="173">Qatar</option>
                          <option value="174">Reunion</option>
                          <option value="175">Romania</option>
                          <option value="176">Russian Federation</option>
                          <option value="177">Rwanda</option>
                          <option value="178">Saint Kitts and Nevis</option>
                          <option value="179">Saint Lucia</option>
                          <option value="180">Saint Vincent and the Grenadines</option>
                          <option value="181">Samoa</option>
                          <option value="182">San Marino</option>
                          <option value="183">Sao Tome and Principe</option>
                          <option value="184">Saudi Arabia</option>
                          <option value="185">Senegal</option>
                          <option value="243">Serbia</option>
                          <option value="186">Seychelles</option>
                          <option value="187">Sierra Leone</option>
                          <option value="188">Singapore</option>
                          <option value="189">Slovak Republic</option>
                          <option value="190">Slovenia</option>
                          <option value="191">Solomon Islands</option>
                          <option value="192">Somalia</option>
                          <option value="193">South Africa</option>
                          <option value="194">South Georgia &amp; South Sandwich Islands</option>
                          <option value="113">South Korea</option>
                          <option value="248">South Sudan</option>
                          <option value="195">Spain</option>
                          <option value="196">Sri Lanka</option>
                          <option value="249">St. Barthelemy</option>
                          <option value="197">St. Helena</option>
                          <option value="250">St. Martin (French part)</option>
                          <option value="198">St. Pierre and Miquelon</option>
                          <option value="199">Sudan</option>
                          <option value="200">Suriname</option>
                          <option value="201">Svalbard and Jan Mayen Islands</option>
                          <option value="202">Swaziland</option>
                          <option value="203">Sweden</option>
                          <option value="204">Switzerland</option>
                          <option value="205">Syrian Arab Republic</option>
                          <option value="206">Taiwan</option>
                          <option value="207">Tajikistan</option>
                          <option value="208">Tanzania, United Republic of</option>
                          <option value="209">Thailand</option>
                          <option value="210">Togo</option>
                          <option value="211">Tokelau</option>
                          <option value="212">Tonga</option>
                          <option value="213">Trinidad and Tobago</option>
                          <option value="255">Tristan da Cunha</option>
                          <option value="214">Tunisia</option>
                          <option value="215">Turkey</option>
                          <option value="216">Turkmenistan</option>
                          <option value="217">Turks and Caicos Islands</option>
                          <option value="218">Tuvalu</option>
                          <option value="219">Uganda</option>
                          <option value="220">Ukraine</option>
                          <option value="221">United Arab Emirates</option>
                          <option value="222">United Kingdom</option>
                          <option value="223">United States</option>
                          <option value="224">United States Minor Outlying Islands</option>
                          <option value="225">Uruguay</option>
                          <option value="226">Uzbekistan</option>
                          <option value="227">Vanuatu</option>
                          <option value="228">Vatican City State (Holy See)</option>
                          <option value="229">Venezuela</option>
                          <option value="230" selected="selected">Viet Nam</option>
                          <option value="231">Virgin Islands (British)</option>
                          <option value="232">Virgin Islands (U.S.)</option>
                          <option value="233">Wallis and Futuna Islands</option>
                          <option value="234">Western Sahara</option>
                          <option value="235">Yemen</option>
                          <option value="238">Zambia</option>
                          <option value="239">Zimbabwe</option>
                        </select> 
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-payment-zone">Vùng / Bang</label>
                      <div class="col-sm-10">
                        <select name="zone_id" id="input-payment-zone" class="form-control"><option value=""> ---Xin vui lòng chọn--- </option><option value="3751">An Giang</option><option value="3756">Ba Ria-Vung Tau</option><option value="3752">Bac Giang</option><option value="3753">Bac Kan</option><option value="3754">Bac Lieu</option><option value="3755">Bac Ninh</option><option value="3757">Ben Tre</option><option value="3758">Binh Dinh</option><option value="3759">Binh Duong</option><option value="3760">Binh Phuoc</option><option value="3761">Binh Thuan</option><option value="3762">Ca Mau</option><option value="3763">Can Tho</option><option value="3764">Cao Bang</option><option value="3767">Da Nang</option><option value="3765">Dak Lak</option><option value="3766">Dak Nong</option><option value="3768">Dien Bien</option><option value="3769" selected="selected">Dong Nai</option><option value="3770">Dong Thap</option><option value="3771">Gia Lai</option><option value="3772">Ha Giang</option><option value="3775">Ha Nam</option><option value="3776">Ha Noi</option><option value="3777">Ha Tay</option><option value="3778">Ha Tinh</option><option value="3773">Hai Duong</option><option value="3774">Hai Phong</option><option value="3781">Hau Giang</option><option value="3780">Ho Chi Minh City</option><option value="3779">Hoa Binh</option><option value="3782">Hung Yen</option></select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 text-left">
                        <button type="button" onclick="$('a[href=\'#tab-cart\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> Trở lại</button>
                      </div>
                      <div class="col-sm-6 text-right">
                        <button type="button" id="button-payment-address" data-loading-text="Đang tải..." class="btn btn-primary"><i class="fa fa-arrow-right"></i> Tiếp tục</button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-shipping">
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-shipping-address">Chọn địa chỉ</label>
                      <div class="col-sm-10">
                        <select name="shipping_address" id="input-shipping-address" class="form-control">
                          <option value="0" selected="selected"> ---Không--- </option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-shipping-firstname">Tên</label>
                      <div class="col-sm-10">
                        <input type="text" name="firstname" value="tung" id="input-shipping-firstname" class="form-control">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-shipping-lastname">Họ</label>
                      <div class="col-sm-10">
                        <input type="text" name="lastname" value="tung" id="input-shipping-lastname" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-shipping-company">Công ty</label>
                      <div class="col-sm-10">
                        <input type="text" name="company" value="ád" id="input-shipping-company" class="form-control">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-shipping-address-1">Địa chỉ 1</label>
                      <div class="col-sm-10">
                        <input type="text" name="address_1" value="ádasdasdasdasdas" id="input-shipping-address-1" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-shipping-address-2">Địa chỉ 2</label>
                      <div class="col-sm-10">
                        <input type="text" name="address_2" value="ádasdasdasdasdas" id="input-shipping-address-2" class="form-control">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-shipping-city">Thành phố</label>
                      <div class="col-sm-10">
                        <input type="text" name="city" value="ádasdasdasdasdas" id="input-shipping-city" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-shipping-postcode">Mã bưu điện</label>
                      <div class="col-sm-10">
                        <input type="text" name="postcode" value="12" id="input-shipping-postcode" class="form-control">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-shipping-country">Quốc gia</label>
                      <div class="col-sm-10">
                        <select name="country_id" id="input-shipping-country" class="form-control">
                          <option value=""> ---Xin vui lòng chọn--- </option>
                          <option value="244">Aaland Islands</option>
                          <option value="1">Afghanistan</option>
                          <option value="2">Albania</option>
                          <option value="3">Algeria</option>
                          <option value="4">American Samoa</option>
                          <option value="5">Andorra</option>
                          <option value="6">Angola</option>
                          <option value="7">Anguilla</option>
                          <option value="8">Antarctica</option>
                          <option value="9">Antigua and Barbuda</option>
                          <option value="10">Argentina</option>
                          <option value="11">Armenia</option>
                          <option value="12">Aruba</option>
                          <option value="252">Ascension Island (British)</option>
                          <option value="13">Australia</option>
                          <option value="14">Austria</option>
                          <option value="15">Azerbaijan</option>
                          <option value="16">Bahamas</option>
                          <option value="17">Bahrain</option>
                          <option value="18">Bangladesh</option>
                          <option value="19">Barbados</option>
                          <option value="20">Belarus</option>
                          <option value="21">Belgium</option>
                          <option value="22">Belize</option>
                          <option value="23">Benin</option>
                          <option value="24">Bermuda</option>
                          <option value="25">Bhutan</option>
                          <option value="26">Bolivia</option>
                          <option value="245">Bonaire, Sint Eustatius and Saba</option>
                          <option value="27">Bosnia and Herzegovina</option>
                          <option value="28">Botswana</option>
                          <option value="29">Bouvet Island</option>
                          <option value="30">Brazil</option>
                          <option value="31">British Indian Ocean Territory</option>
                          <option value="32">Brunei Darussalam</option>
                          <option value="33">Bulgaria</option>
                          <option value="34">Burkina Faso</option>
                          <option value="35">Burundi</option>
                          <option value="36">Cambodia</option>
                          <option value="37">Cameroon</option>
                          <option value="38">Canada</option>
                          <option value="251">Canary Islands</option>
                          <option value="39">Cape Verde</option>
                          <option value="40">Cayman Islands</option>
                          <option value="41">Central African Republic</option>
                          <option value="42">Chad</option>
                          <option value="43">Chile</option>
                          <option value="44">China</option>
                          <option value="45">Christmas Island</option>
                          <option value="46">Cocos (Keeling) Islands</option>
                          <option value="47">Colombia</option>
                          <option value="48">Comoros</option>
                          <option value="49">Congo</option>
                          <option value="50">Cook Islands</option>
                          <option value="51">Costa Rica</option>
                          <option value="52">Cote D'Ivoire</option>
                          <option value="53">Croatia</option>
                          <option value="54">Cuba</option>
                          <option value="246">Curacao</option>
                          <option value="55">Cyprus</option>
                          <option value="56">Czech Republic</option>
                          <option value="237">Democratic Republic of Congo</option>
                          <option value="57">Denmark</option>
                          <option value="58">Djibouti</option>
                          <option value="59">Dominica</option>
                          <option value="60">Dominican Republic</option>
                          <option value="61">East Timor</option>
                          <option value="62">Ecuador</option>
                          <option value="63">Egypt</option>
                          <option value="64">El Salvador</option>
                          <option value="65">Equatorial Guinea</option>
                          <option value="66">Eritrea</option>
                          <option value="67">Estonia</option>
                          <option value="68">Ethiopia</option>
                          <option value="69">Falkland Islands (Malvinas)</option>
                          <option value="70">Faroe Islands</option>
                          <option value="71">Fiji</option>
                          <option value="72">Finland</option>
                          <option value="74">France, Metropolitan</option>
                          <option value="75">French Guiana</option>
                          <option value="76">French Polynesia</option>
                          <option value="77">French Southern Territories</option>
                          <option value="126">FYROM</option>
                          <option value="78">Gabon</option>
                          <option value="79">Gambia</option>
                          <option value="80">Georgia</option>
                          <option value="81">Germany</option>
                          <option value="82">Ghana</option>
                          <option value="83">Gibraltar</option>
                          <option value="84">Greece</option>
                          <option value="85">Greenland</option>
                          <option value="86">Grenada</option>
                          <option value="87">Guadeloupe</option>
                          <option value="88">Guam</option>
                          <option value="89">Guatemala</option>
                          <option value="256">Guernsey</option>
                          <option value="90">Guinea</option>
                          <option value="91">Guinea-Bissau</option>
                          <option value="92">Guyana</option>
                          <option value="93">Haiti</option>
                          <option value="94">Heard and Mc Donald Islands</option>
                          <option value="95">Honduras</option>
                          <option value="96">Hong Kong</option>
                          <option value="97">Hungary</option>
                          <option value="98">Iceland</option>
                          <option value="99">India</option>
                          <option value="100">Indonesia</option>
                          <option value="101">Iran (Islamic Republic of)</option>
                          <option value="102">Iraq</option>
                          <option value="103">Ireland</option>
                          <option value="254">Isle of Man</option>
                          <option value="104">Israel</option>
                          <option value="105">Italy</option>
                          <option value="106">Jamaica</option>
                          <option value="107">Japan</option>
                          <option value="257">Jersey</option>
                          <option value="108">Jordan</option>
                          <option value="109">Kazakhstan</option>
                          <option value="110">Kenya</option>
                          <option value="111">Kiribati</option>
                          <option value="253">Kosovo, Republic of</option>
                          <option value="114">Kuwait</option>
                          <option value="115">Kyrgyzstan</option>
                          <option value="116">Lao People's Democratic Republic</option>
                          <option value="117">Latvia</option>
                          <option value="118">Lebanon</option>
                          <option value="119">Lesotho</option>
                          <option value="120">Liberia</option>
                          <option value="121">Libyan Arab Jamahiriya</option>
                          <option value="122">Liechtenstein</option>
                          <option value="123">Lithuania</option>
                          <option value="124">Luxembourg</option>
                          <option value="125">Macau</option>
                          <option value="127">Madagascar</option>
                          <option value="128">Malawi</option>
                          <option value="129">Malaysia</option>
                          <option value="130">Maldives</option>
                          <option value="131">Mali</option>
                          <option value="132">Malta</option>
                          <option value="133">Marshall Islands</option>
                          <option value="134">Martinique</option>
                          <option value="135">Mauritania</option>
                          <option value="136">Mauritius</option>
                          <option value="137">Mayotte</option>
                          <option value="138">Mexico</option>
                          <option value="139">Micronesia, Federated States of</option>
                          <option value="140">Moldova, Republic of</option>
                          <option value="141">Monaco</option>
                          <option value="142">Mongolia</option>
                          <option value="242">Montenegro</option>
                          <option value="143">Montserrat</option>
                          <option value="144">Morocco</option>
                          <option value="145">Mozambique</option>
                          <option value="146">Myanmar</option>
                          <option value="147">Namibia</option>
                          <option value="148">Nauru</option>
                          <option value="149">Nepal</option>
                          <option value="150">Netherlands</option>
                          <option value="151">Netherlands Antilles</option>
                          <option value="152">New Caledonia</option>
                          <option value="153">New Zealand</option>
                          <option value="154">Nicaragua</option>
                          <option value="155">Niger</option>
                          <option value="156">Nigeria</option>
                          <option value="157">Niue</option>
                          <option value="158">Norfolk Island</option>
                          <option value="112">North Korea</option>
                          <option value="159">Northern Mariana Islands</option>
                          <option value="160">Norway</option>
                          <option value="161">Oman</option>
                          <option value="162">Pakistan</option>
                          <option value="163">Palau</option>
                          <option value="247">Palestinian Territory, Occupied</option>
                          <option value="164">Panama</option>
                          <option value="165">Papua New Guinea</option>
                          <option value="166">Paraguay</option>
                          <option value="167">Peru</option>
                          <option value="168">Philippines</option>
                          <option value="169">Pitcairn</option>
                          <option value="170">Poland</option>
                          <option value="171">Portugal</option>
                          <option value="172">Puerto Rico</option>
                          <option value="173">Qatar</option>
                          <option value="174">Reunion</option>
                          <option value="175">Romania</option>
                          <option value="176">Russian Federation</option>
                          <option value="177">Rwanda</option>
                          <option value="178">Saint Kitts and Nevis</option>
                          <option value="179">Saint Lucia</option>
                          <option value="180">Saint Vincent and the Grenadines</option>
                          <option value="181">Samoa</option>
                          <option value="182">San Marino</option>
                          <option value="183">Sao Tome and Principe</option>
                          <option value="184">Saudi Arabia</option>
                          <option value="185">Senegal</option>
                          <option value="243">Serbia</option>
                          <option value="186">Seychelles</option>
                          <option value="187">Sierra Leone</option>
                          <option value="188">Singapore</option>
                          <option value="189">Slovak Republic</option>
                          <option value="190">Slovenia</option>
                          <option value="191">Solomon Islands</option>
                          <option value="192">Somalia</option>
                          <option value="193">South Africa</option>
                          <option value="194">South Georgia &amp; South Sandwich Islands</option>
                          <option value="113">South Korea</option>
                          <option value="248">South Sudan</option>
                          <option value="195">Spain</option>
                          <option value="196">Sri Lanka</option>
                          <option value="249">St. Barthelemy</option>
                          <option value="197">St. Helena</option>
                          <option value="250">St. Martin (French part)</option>
                          <option value="198">St. Pierre and Miquelon</option>
                          <option value="199">Sudan</option>
                          <option value="200">Suriname</option>
                          <option value="201">Svalbard and Jan Mayen Islands</option>
                          <option value="202">Swaziland</option>
                          <option value="203">Sweden</option>
                          <option value="204">Switzerland</option>
                          <option value="205">Syrian Arab Republic</option>
                          <option value="206">Taiwan</option>
                          <option value="207">Tajikistan</option>
                          <option value="208">Tanzania, United Republic of</option>
                          <option value="209">Thailand</option>
                          <option value="210">Togo</option>
                          <option value="211">Tokelau</option>
                          <option value="212">Tonga</option>
                          <option value="213">Trinidad and Tobago</option>
                          <option value="255">Tristan da Cunha</option>
                          <option value="214">Tunisia</option>
                          <option value="215">Turkey</option>
                          <option value="216">Turkmenistan</option>
                          <option value="217">Turks and Caicos Islands</option>
                          <option value="218">Tuvalu</option>
                          <option value="219">Uganda</option>
                          <option value="220">Ukraine</option>
                          <option value="221">United Arab Emirates</option>
                          <option value="222">United Kingdom</option>
                          <option value="223">United States</option>
                          <option value="224">United States Minor Outlying Islands</option>
                          <option value="225">Uruguay</option>
                          <option value="226">Uzbekistan</option>
                          <option value="227">Vanuatu</option>
                          <option value="228">Vatican City State (Holy See)</option>
                          <option value="229">Venezuela</option>
                          <option value="230" selected="selected">Viet Nam</option>
                          <option value="231">Virgin Islands (British)</option>
                          <option value="232">Virgin Islands (U.S.)</option>
                          <option value="233">Wallis and Futuna Islands</option>
                          <option value="234">Western Sahara</option>
                          <option value="235">Yemen</option>
                          <option value="238">Zambia</option>
                          <option value="239">Zimbabwe</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-shipping-zone">Vùng / Bang</label>
                      <div class="col-sm-10">
                        <select name="zone_id" id="input-shipping-zone" class="form-control"><option value=""> ---Xin vui lòng chọn--- </option><option value="3751">An Giang</option><option value="3756">Ba Ria-Vung Tau</option><option value="3752">Bac Giang</option><option value="3753">Bac Kan</option><option value="3754">Bac Lieu</option><option value="3755">Bac Ninh</option><option value="3757">Ben Tre</option><option value="3758">Binh Dinh</option><option value="3759">Binh Duong</option><option value="3760">Binh Phuoc</option><option value="3761">Binh Thuan</option><option value="3762">Ca Mau</option><option value="3763">Can Tho</option><option value="3764">Cao Bang</option><option value="3767">Da Nang</option><option value="3765">Dak Lak</option><option value="3766">Dak Nong</option><option value="3768">Dien Bien</option><option value="3769" selected="selected">Dong Nai</option><option value="3770">Dong Thap</option><option value="3771">Gia Lai</option><option value="3772">Ha Giang</option><option value="3775">Ha Nam</option><option value="3776">Ha Noi</option><option value="3777">Ha Tay</option><option value="3778">Ha Tinh</option><option value="3773">Hai Duong</option><option value="3774">Hai Phong</option><option value="3781">Hau Giang</option><option value="3780">Ho Chi Minh City</option><option value="3779">Hoa Binh</option><option value="3782">Hung Yen</option></select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 text-left">
                        <button type="button" onclick="$('a[href=\'#tab-payment\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> Trở lại</button>
                      </div>
                      <div class="col-sm-6 text-right">
                        <button type="button" id="button-shipping-address" data-loading-text="Đang tải..." class="btn btn-primary"><i class="fa fa-arrow-right"></i> Tiếp tục</button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-total">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td class="text-left">Sản phẩm</td>
                            <td class="text-left">Mẫu</td>
                            <td class="text-right">Số lượng</td>
                            <td class="text-right">Đơn vị giá</td>
                            <td class="text-right">Tổng cộng</td>
                          </tr>
                        </thead>
                        <tbody id="total">
                          <tr>
                            <td class="text-center" colspan="5">Không có kết quả!</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <fieldset>
                      <legend>Chi tiết đơn hàng</legend>
                      <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-shipping-method">Phương pháp vận chuyển</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <select name="shipping_method" id="input-shipping-method" class="form-control">
                              <option value=""> ---Xin vui lòng chọn--- </option>
                              <option value="flat.flat" selected="selected">Flat Shipping Rate</option>
                            </select>
                            <span class="input-group-btn">
                              <button type="button" id="button-shipping-method" data-loading-text="Đang tải..." class="btn btn-primary"></button>
                            </span></div>
                          </div>
                        </div>
                        <div class="form-group required">
                          <label class="col-sm-2 control-label" for="input-payment-method">Phương thức thanh toán</label>
                          <div class="col-sm-10">
                            <div class="input-group">
                              <select name="payment_method" id="input-payment-method" class="form-control">
                                <option value=""> ---Xin vui lòng chọn--- </option>
                                <option value="cod" selected="selected">Cash On Delivery</option>
                              </select>
                              <span class="input-group-btn">
                                <button type="button" id="button-payment-method" data-loading-text="Đang tải..." class="btn btn-primary"></button>
                              </span></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-coupon">Phiếu giảm giá</label>
                            <div class="col-sm-10">
                              <div class="input-group">
                                <input type="text" name="coupon" value="" id="input-coupon" class="form-control">
                                <span class="input-group-btn">
                                  <button type="button" id="button-coupon" data-loading-text="Đang tải..." class="btn btn-primary"></button>
                                </span></div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label" for="input-voucher">Phiếu quà tặng</label>
                              <div class="col-sm-10">
                                <div class="input-group">
                                  <input type="text" name="voucher" value="" id="input-voucher" data-loading-text="Đang tải..." class="form-control">
                                  <span class="input-group-btn">
                                    <button type="button" id="button-voucher" data-loading-text="Đang tải..." class="btn btn-primary"></button>
                                  </span></div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-reward">Thưởng</label>
                                <div class="col-sm-10">
                                  <div class="input-group">
                                    <input type="text" name="reward" value="" id="input-reward" data-loading-text="Đang tải..." class="form-control">
                                    <span class="input-group-btn">
                                      <button type="button" id="button-reward" data-loading-text="Đang tải..." class="btn btn-primary"></button>
                                    </span></div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="input-order-status">Tình trạng đơn hàng</label>
                                  <div class="col-sm-10">
                                    <select name="order_status_id" id="input-order-status" class="form-control">
                                      <option value="7">Canceled</option>
                                      <option value="9">Canceled Reversal</option>
                                      <option value="13">Chargeback</option>
                                      <option value="5">Complete</option>
                                      <option value="8">Denied</option>
                                      <option value="14">Expired</option>
                                      <option value="10">Failed</option>
                                      <option value="1" selected="selected">Pending</option>
                                      <option value="15">Processed</option>
                                      <option value="2">Processing</option>
                                      <option value="11">Refunded</option>
                                      <option value="12">Reversed</option>
                                      <option value="3">Shipped</option>
                                      <option value="16">Voided</option>
                                    </select>
                                    <input type="hidden" name="order_id" value="1">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="input-comment">Bình luận</label>
                                  <div class="col-sm-10">
                                    <textarea name="comment" rows="5" id="input-comment" class="form-control"></textarea>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="input-affiliate">Liên kết kinh doanh</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="affiliate" value=" " id="input-affiliate" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                                    <input type="hidden" name="affiliate_id" value="0">
                                  </div>
                                </div>
                              </fieldset>
                              <div class="row">
                                <div class="col-sm-6 text-left">
                                  <button type="button" onclick="$('select[name=\'shipping_method\']').prop('disabled') ? $('a[href=\'#tab-payment\']').tab('show') : $('a[href=\'#tab-shipping\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> Trở lại</button>
                                </div>
                                <div class="col-sm-6 text-right">
                                  <button type="button" id="button-refresh" data-toggle="tooltip" title="" data-loading-text="Đang tải..." class="btn btn-warning" data-original-title="Cập nhật mới"><i class="fa fa-refresh"></i></button>
                                  <button type="button" id="button-save" class="btn btn-primary"><i class="fa fa-check-circle"></i> Lưu</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </form>
        </div>

      </div>

    </div>
    <link href="{{asset('resources/views/admin/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('resources/views/admin/css/codemirror.css')}}" rel="stylesheet"/>
    <link href="{{asset('resources/views/admin/css/monokai.css')}}" rel="stylesheet"/>
    <script type="text/javascript" src="{{asset('resources/views/admin/js/codemirror.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/admin/js/xml.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/admin/js/formatting.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/admin/js/summernote/summernote.js')}}"></script>
    <link href="{{asset('resources/views/admin/js/summernote/summernote.css')}}" rel="stylesheet"/>
    <script type="text/javascript" src="{{asset('resources/views/admin/js/summernote/summernote-image-attributes.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/admin/js/opencart.js')}}"></script>


  </div>
</section>
</div>

@endsection

