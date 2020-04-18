<?php 

    include('connection.php');

    $post = json_decode(file_get_contents('php://input'),true);
    $kode = $post['kode_barang'];
    $getdata = mysqli_query($koneksi,"SELECT * FROM gudang WHERE kode_barang=$kode");
    $rows = mysqli_num_rows($getdata);

    $delete = "DELETE FROM gudang WHERE kode_barang=$kode";
    $result = mysqli_query($koneksi,$delete);

    $response = array();

    if($rows > 0)
{
  if ($result) {
    $respose['code'] = 1;
    $respose['message'] = "Success";
  }else{
    $respose['code'] = 0;
    $respose['message'] = "Failed";
  }
}else{
  $respose['code'] = 0;
  $respose['message'] = "Failed to Delete, data Not Found";
}


echo json_encode($respose);

?>