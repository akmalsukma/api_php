<?php 
    include('connection.php');

    $query = "SELECT * FROM gudang";
    $result = mysqli_query($koneksi,$query);
    $array_data = array();
    

    while ($baris = mysqli_fetch_assoc($result)) 
    {
        $array_data [] =$baris;
    }

    echo json_encode($array_data);



?>