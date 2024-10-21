<?php
$_alert = null;
$_title = "Hiệp Sĩ Làng Đá - Thanh toán";
include_once '../config/head.php';
if($_login == null) {header("location:/login");}
function check_string($data)
{
    return trim(htmlspecialchars(addslashes($data)));
}
if(isset($_POST['submit'])) {
    $name   = check_string($_POST['name']);
    $stk    = "18106201";
    $money  = check_string($_POST['money']);
    $tentk  = "NGUYEN VU LUAN";
    $nd     = urlencode(check_string($_POST['nd']));
    $temp   = check_string($_POST['temp']);
    if(!$name) {
        echo 'Bạn chưa chọn ngân hàng';
    } else if(!$stk) {
        echo 'Bạn chưa điền số tài khoản';
    } else {
        // $url = "https://api.vietqr.io/$name/$stk/$money/$nd/vietqr_net_2.jpg";
        $url = "https://img.vietqr.io/image/$name-$stk-$temp.png?amount=$money&addInfo=$nd&accountName=$tentk";
    }
}
function customUrlDecode($value) {
    $value = str_replace('%2B', ' ', $value);
    // Nếu có các quy tắc giải mã khác, bạn có thể thêm vào đây
    return $value;
}
?>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		
<style>
    table, th, td {
        border: 1px solid #ccc;
        text-align: center;
    }
    th, td {
        line-height: 2.5rem;
    }
	.copy-alert {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 10px 20px;
    border: 1px solid #000000;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    z-index: 9999; /* Đảm bảo thông báo hiển thị trên cùng */
    display: none; /* Ẩn ban đầu */
	
}

</style>

  <body>
  
    <div
      class="outer subpage"
      style="height: 4285.31px; width: 980px; overflow: hidden"
    >
	
      <div
        id="scrollContent"
        class="inner scrollContent scrollSwipe"
        style="
          display: block;
          transform: scale(1.27539);
          margin-left: 0.25px;
          height: auto;
          overflow: hidden;
          outline: none;
        "
        data-scale-ratio="1.275390625"
        data-scrollbar="true"
        tabindex="-1"
      >
        <div
          class="scroll-content"
          style="transform: translate3d(0px, 0px, 0px)"
        >
         
         <br> <br> <br> <br>
          <section class="section section--2"> <br> <br> <br> <br>
         
  
   

<div class="container">
    <div class="chuc-nang">
        <div class="title">
        <div class="title">
            <h3>NẠP TIỀN</h3>
        </div>
        <div id="copyAlert" class="copy-alert">Thông tin đã được sao chép!</div>

        <div class="content">
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <div class="card text-dark bg-light mb-3">
                        <div class="card-header text-light bg-success">Nạp tiền ATM</div>
                        <div class="card-body">
                            <table style="width: 100%;">
							<tbody>
                                  <div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-8" style="float:none;margin:0 auto;">
            <form method="POST" action="">
                <div class="form-group">
                    <label>Ngân hàng:</label>
                    <select class="form-control" name="name">
                       
                        <option value="ACB">ACB</option>
                       
                    </select>
                </div>
                <div class="form-group">
                    <label>Số tài khoản:</label>
                    <input type="text" class="form-control" name="stk" value="<?php echo (isset($stk) ? $stk : "18106201"); ?>"/>
                </div>
                <div class="form-group">
                    <label>Tên chủ thẻ:</label>
                    <input type="text" class="form-control" name="tentk" value="<?php echo (isset($tentk) ? urldecode($tentk) : "NGUYEN VU LUAN"); ?>"/>
                </div>
                <div class="form-group">
                    <label>Số tiền :</label>
                    <input type="number" class="form-control" name="money" value ="<?php echo (isset($money) ? $money : 0); ?>"/>
                </div>
                <div class="form-group">
                    <label>Nội dung:</label>
                    <input type="text" class="form-control" name="nd" value ="
                    <?php if(isset($_SESSION['user'])){echo 'hso'.$_id;}else{echo'hso2'.$_id;} ?>" required />
                </div>
                <div class="form-group">
                    <label>Giao diện mã:</label>
                    <select class="form-control" name="temp">
                        
                        <option value="print">Bao gồm : Mã QR, các logo và đầy đủ thông tin chuyển khoản</option>
                    </select>
                </div>
        
               
                <div class="form-group">
                    <button type="submit"  name="submit">TẠO MÃ QR</button>
                </div>
				<p>Kéo xuống dưới để xem mã QR</p>

            </form>
        </div>
    </div>
</div>
                                </tbody>
                            </table>
                            <hr>
                            <p style="font-weight: bold; color: red;">Lưu ý: Thời gian xử lý từ 1-2 phút</p>
                            <p>(*) Cần ghi đúng nội dung chuyển khoản, viết liền không dấu</p>
                            <p>(**) Kiểm tra Số Tài Khoản nhận tiền nhận tiền và chủ tài khoản</p>
                            <p>(***) Các trường hợp chuyển khoản sai vui lòng liên hệ admin để được kiểm tra.</p>
                        </div>
                    </div>
                </div>
				<?php if(isset($url)) { ?>
<center><img src = "<?=$url;?>">
<div class="col-md-1" style="float:none;margin:0 auto;">
   
</div>
</center>
<?php } ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
                <div class="col-md-12 col-lg-5">
                    <div class="card text-dark bg-light mb-3">
                        <div class="card-header bg-light">Thông tin</div>
                        <div class="card-body">
                            <h5 class="card-title">BẢNG GIÁ QUY ĐỔI coin </h5>
                            <table style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;">Số tiền</th>
                                        <th style="width: 50%;">Tỷ lệ coin nhận về</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>1.000 - 100.000</td>
                                            <td style="font-weight: bold;">100%</td>
                                        </tr>
										
                                        <tr>
                                            <td>100.000 - 200.000</td>
                                            <td style="font-weight: bold;">110%</td>
                                        </tr>
                                        <tr>
                                            <td>200.000 - 500,000</td>
                                            <td style="font-weight: bold;">120%</td>
                                        </tr>
                                        <tr>
                                            <td>500.000 - 1,000,000</td>
                                            <td style="font-weight: bold;">130%</td>
                                        </tr>
                                        <tr>
                                            <td> 1.000.000 - 2.000.000</td>
                                            <td style="font-weight: bold;">140%</td>
                                        </tr>
										 <tr>
                                            <td> > 2.000.000</td>
                                            <td style="font-weight: bold;">150%</td>
                                        </tr>
                                </tbody>
                            </table>
                            <hr>
                            <p>Những thắc mắc xin liên hệ QTV trong <a href="https://www.facebook.com/profile.php?id=61557100396482&mibextid=LQQJ4d">Facebook</a> hoặc <a href="https://zalo.me/g/zhiwjz007">Box Zalo</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   </div>
          </section>
         
<?php include '../config/foot.php'; ?>
<script>
    $(document).ready(function() {
$('#modal-alert').modal('show');
    })

    
</script>


