<?php include('includes/configDB.php')?>
<?php 
     $query = "SELECT * FROM alttab  ORDER BY id ";
        if(mysqli_query($conn, $query)){

            // get the query result
            $result = mysqli_query($conn, $query);

            // fetch result in array format
            $altArray= mysqli_fetch_all($result , MYSQLI_ASSOC);

            // print_r($notesArray);

        }else{
            //failure
            echo 'query error: '. mysqli_error($conn);
        }
?>
<?php 
     $query = "SELECT * FROM kriteria  ORDER BY id ";
        if(mysqli_query($conn, $query)){

            // get the query result
            $hasil = mysqli_query($conn, $query);

            // fetch result in array format
            $kritArray= mysqli_fetch_all($hasil , MYSQLI_NUM);

            // print_r($notesArray);

        }else{
            //failure
            echo 'query error: '. mysqli_error($conn);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php include('navbar.php')?>
<body>
<div class = "container"> 
    <h2>Tabel VI</h2>
    <p>Berisi nilai bobot yang sudah dikalikan dengan setiap krietria</p>
    <div class = "table-responsive">
        <table class = "table">
            <tr>
                <th>nama</th>
                <th>nilai </th>
            </tr>      
            <?php foreach($altArray as $alt){?>
            <tr>
                <td><?php echo $alt['nama']?></td>
                <?php      $total = 1;?>
                <?php
                $nilai_vektor = $alt['harga']**-0.25;
                $total=$total*$nilai_vektor;
                
                $nilai_vektor = $alt['total']**0.1;
                $total=$total*$nilai_vektor;

                $nilai_vektor = $alt['kuota24']**0.4;
                $total=$total*$nilai_vektor;

                $nilai_vektor = $alt['masa']**0.25;
                $total=$total*$nilai_vektor;

                ?>
                
                <td><?php echo $total?></td>
                
            </tr>      
            <?php } ?>
        </table>      
    </div>        
</div>
    
</body>
</html>l