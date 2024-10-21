
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
        <h1>Top Nạp</h1>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên nhân vật</th>
                   <th>Tổng nạp</th>
                </tr>
            </thead>
            <tbody>
            <?php 
    // Truy vấn SQL
    $query = "SELECT user, `char`, SUM(tongnap) AS tongnap FROM `account` GROUP BY user, `char` ORDER BY tongnap DESC LIMIT 10";

    $result = $config->query($query);
    $stt = 1;

    if ($result === false) {
        echo '<tr><td colspan="3" class="message">Lỗi truy vấn SQL: ' . $config->error . '</td></tr>';
    } elseif ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Kiểm tra nếu `char` không chứa giá trị "[]", nếu chứa thì bỏ qua
            if ($row['char'] !== '[]' && !empty($row['char'])) {
                $char_display = '["' . htmlspecialchars($row['char']) . '"]';
            } else {
                // Bỏ qua giá trị nếu `char` chứa [] hoặc rỗng
                continue;
            }

            echo '
            <tr>
                <td>' . $stt . '</td>
                
                <td>' . htmlspecialchars($row['char']) . '</td>
                 <td>' . $row['tongnap'] . '</td>
            </tr>
            ';
            $stt++;
        }
    } else {
        echo '<tr><td colspan="3" class="center message"><< Lịch Sử Trống >></td></tr>';
    }

    // Đóng kết nối
    $config->close();
?>



            </tbody>
        </table>
    </div>
	
	
	
	
          </section>
         


<?php include '../../config/foot.php'; ?>