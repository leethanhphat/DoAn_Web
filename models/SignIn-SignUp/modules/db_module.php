<?php
require_once "config.php";

class Db_module{
  function taoKetNoi(&$conn)
  {
    $conn = mysqli_connect(HOST, USER, PASSWORD, DB);
    if (mysqli_connect_errno()) {
      echo "Lỗi kết nối đến máy chủ: " . mysqli_connect_error();
      exit();
    }
  }
  
  function chayTruyVanTraVeDL($conn, $q)
  {
    $result = mysqli_query($conn, $q);
    return $result;
  }
  
  function chayTruyVanKhongTraVeDL($conn, $q)
  {
    $result = mysqli_query($conn, $q);
    return $result;
  }
  
  function giaiPhongBoNho($conn, $result)
  {
    try {
      mysqli_close($conn);
      mysqli_free_result($result);
    } catch (TypeError $e) {
    }
  }
}
?>