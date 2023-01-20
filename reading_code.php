<?php 
    $database = "novel";
    require_once('db.php');

    $data =[
        "title" => [],
        "genre" => [],
        "date" => [],
        "judul" => [],
        "isi" => []
    ];

    $query = "SELECT * FROM novel";
    $result = mysqli_query($conn, $query)or die(mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push( $data['title'],$row['title']);
            array_push( $data['genre'],$row['genre']);
            array_push( $data['date'],$row['date']);
            array_push( $data['judul'],$row['judul']);
            array_push( $data['isi'],$row['isi']);
        }    
    }
    // print_r($data);

?>