
<?php include '../../config/head.php'; ?>
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
        <h1>Top Level</h1>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên nhân vật</th>
					<th>Level</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
              
                // Truy vấn SQL
                $query = "
    SELECT 
        player.name AS user, 
        player.level AS level 
    FROM 
        player 
    INNER JOIN 
        account 
    ON 
        JSON_CONTAINS(account.char, CONCAT('\"', player.name, '\"')) 
    WHERE 
        account.baove = 1 
    ORDER BY 
        player.level DESC 
    LIMIT 10";
                $result = $config->query($query);
                $stt = 1;

         
if ($result === false) {
    echo 'Lỗi truy vấn SQL: '.$config->error;
} elseif ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <td>'.$stt.'</td>
            <td>'.$row['user'].'</td>
            <td>'.$row['level'].'</td>
        </tr>
        ';
        $stt++;
    }
} else {
    echo '
    <tr>
        <td colspan="3" align="center"><span style="font-size:100%;"><< Lịch Sử Trống >></span></td>
    </tr>
    ';
}
// Đóng kết nối
$config->close();
                ?>
            </tbody>
        </table>
    </div>
	
	
	
	
          </section>
         


<?php include '../../config/foot.php'; ?>