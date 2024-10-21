
         
         
         
<?php include '../config/head.php'; ?>
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        h1 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f9f9f9;
            color: red;
            font-weight: bold;
            border-bottom: 2px solid red;
        }
        tr:nth-child(even) {
            background-color: #fff;
        }
        tr:hover {
            background-color: #ddd;
        }
        .center {
            text-align: center;
        }
        .message {
            font-size: 16px;
            color: #ff0000;
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
            <br> <br> <br> <br>

       <div class="container">
        <h1>Thông tin nhân vật</h1>
      
        <table>
            <thead>
                <tr>
                    <th>Tên tài khoản</th>
                     <th>Sever</th>
                    <th>Tổng nạp</th>
                    <th>Số coin</th>
                    <th>Lượt quay 10k</th>
                    <th>Lượt quay 20k</th>
                    <th>Lượt quay 50k</th>
                    <th>IP</th>
                    <th>Đổi mật khẩu</th>
					<th>Đăng xuất</th>
                </tr>
            </thead>
            <tbody>
               
                        <tr>
                             <td><?php echo $_username; ?></td>
                             <td><?php if(isset($_login))
      {
          echo '2';
      }elseif(isset($_login2))
      {
          echo '1';
      }else
      {
          echo '0';
      }
      ; ?></td>
                            <td><?php echo number_format($_tongnap); ?> vnđ</td>
                           <td><?php echo number_format($_coin); ?> coin</td>
                            <td><?php echo number_format($_luotquay_10k); ?></td>
                            <td><?php echo number_format($_luotquay_20k); ?> </td>
                            <td><?php echo number_format($_luotquay_50k); ?> </td>
                           
                            <td><?php echo get_user_ip(); ?></td>
                            <td><a href="/doimatkhau"><button type="button">Đổi mật khẩu</button></a></td>
							<td><a href="/logout-hso"><button type="button">Đăng xuất</button></a></td>
                        </tr>
                        
            </tbody>
        </table>
    </div>
	
	
	
	
          </section>
         


<?php include '../config/foot.php'; ?>