<?php 
    include('connection.php');

    $post = json_decode(file_get_contents('php://input'),true);
    $kode = $post['kode_barang'];
    $nama = $post['nama_barang'];
    $harga = $post['harga'];
    $pengirim = $post['pengirim'];
    $tgl_masuk = $post['tgl_masuk_gudang'];
    $satuan = $post['satuan'];
    $kategori = $post['kategori'];
    $stock = $post['stock'];
    $foto = $post['foto'];



    $query = "UPDATE gudang SET nama='$nama',harga ='$harga',pengirim = '$pengirim' ,tgl_masuk_gudang = '$tgl_masuk' ,
    satuan = '$satuan' ,kategori = '$kategori',stock = '$stock',foto = '$foto' WHERE kode_barang = $kode)";


    $execute = mysqli_query($koneksi,$query);

    $response = array();

    if ($execute) 
    {
        $response['Message'] = "Success!";   
    }
    else {
        $response['Message'] = "Failed";
    }

    echo json_encode($response);
?>