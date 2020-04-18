<?php 
    include('connection.php');


    $post = json_decode(file_get_contents('php://input'),true);
    $nama = $post['nama_barang'];
    $harga = $post['harga'];
    $pengirim = $post['pengirim'];
    $tgl_masuk = $post['tgl_masuk_gudang'];
    $satuan = $post['satuan'];
    $kategori = $post['kategori'];
    $stock = $post['stock'];
    $foto = $post['foto'];


   
    $query = "INSERT INTO `gudang` (`kode_barang`, `nama_barang`, `harga`, `pengirim`, `tgl_masuk_gudang`, `satuan`, `kategori`, `stock`, `foto`) VALUES (NULL, '$nama', '$harga', '$pengirim', '$tgl_masuk', '$satuan', '$kategori', '$stock', '$foto');";


    $execute = mysqli_query($koneksi, $query);

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