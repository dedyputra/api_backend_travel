<?php
include "../koneksi.php";

$sql = "SELECT * FROM destinations ORDER BY rate DESC LIMIT 3";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
  $data = array();
  while ($get_row = $result->fetch_assoc()) {
    $data[] = $get_row;
  }
  header("HTTP/1.0 200");
  echo json_encode($data);
} else {
  header("HTTP/1.0 404");
  echo json_encode(array(
    "message" => "not found",
  ));
}
