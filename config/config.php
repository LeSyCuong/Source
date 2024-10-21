<?php
 $servername = "157.66.219.16";
                            $username = "root"; // Thay đổi nếu cần thiết
                            $password = ""; // Thay đổi nếu cần thiết
                            $dbname = "hso";

                            // Tạo kết nối
                            $config = new mysqli($servername, $username, $password, $dbname);

                            // Kiểm tra kết nối
                            if ($config->connect_error) {
                                die("Connection failed: " . $config->connect_error);
                            }
                            
 
                            
                            session_start();
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            
$_login = isset($_SESSION['_login']) ? $_SESSION['_login'] : null;
$_user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

                            if ($_user != null) {
                                $_login = "on";
                                $user_arr = _fetch("SELECT * FROM account WHERE user='$_user'");
                               $sql_player = "SELECT REPLACE(REPLACE(REPLACE(`char`, '[', ''), ']', ''), '\"', '') AS `char` FROM account WHERE user='$_user'";
        $result_player = _query($sql_player);
        
        if ($result_player && $row_player = mysqli_fetch_assoc($result_player)) {
            $_player = $row_player['char'];
        } else {
            // Xử lý khi không có dữ liệu
            $_player = null;
        }
                                if (!$user_arr) {
                                    header("location:/?out");
                                    exit;
                                }
                                $_id = htmlspecialchars($user_arr['id']);
                                $_username = htmlspecialchars($user_arr['user']);
                                $_password = htmlspecialchars($user_arr['pass']);
                                $_coin = $user_arr['coin'];
                                $_tongnap = $user_arr['tongnap'];
                                $_luotquay_10k = $user_arr['luotquay_10k'];
                                $_luotquay_20k = $user_arr['luotquay_20k'];
                                $_luotquay_50k = $user_arr['luotquay_50k'];
                            } else {
                                $_login = null;
                            }
                            
                            function _query($sql) {
                                global $config;
                                return mysqli_query($config, $sql);
                            }

                            function _fetch($sql) {
                                global $config;
                                $result = _query($sql);
                                return mysqli_fetch_array($result);
                            }

                            function isset_sql($txt) {
                                global $config;
                                return mysqli_real_escape_string($config, $txt);
                            }
                            

                             if (isset($_GET['out'])) {
                                session_destroy();
                                header("location:/");
                                exit;
                            }

                            function _insert($table, $input, $output) {
                                return "INSERT INTO $table($input) VALUES($output)";
                            }

                            function _select($select, $from, $where) {
                                return "SELECT $select FROM $from WHERE $where";
                            }
							function _update($table, $set, $where) {
                                return "UPDATE $table SET $set WHERE $where";
                            }
                            function get_user_ip() {
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
                $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
                return trim($addr[0]);
            } else {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
?>
