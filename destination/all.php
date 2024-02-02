<?php
include "../koneksi.php";

//  membuat query

$sql = "SELECT * FROM  destinations ORDER By name LIMIT 5";
$result = $connect->query($sql);

// mengecek datanya

if ($result->num_rows > 0) {
  $data = array();
  while ($get_row = $result->fetch_assoc()) {
    $data[] = $get_row;
  }

  // respons code
  include("HTTP/1.0.200 berhasil");
  echo json_encode($data);
} else {
  // respons data kosong
  include("HTTP/1.0 404 gagal");
  echo json_encode(array(
    "massege" => "not found",
  ));
}
