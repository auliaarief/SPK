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
    <h2>Tabel Database</h2>
    <p>Berisi data yang berada di database saat ini</p>
    <div class = "table-responsive">
        <table class = "table">
            <tr>
                <th>nama</th>
                <th>harga</th>
                <th>total kuota</th>
                <th>kuota 24 jam</th>
                <th>masa aktif</th>
            </tr>      
            <?php foreach($altArray as $alt){?>
            <tr>
                <td><?php echo $alt['nama']?></td>
                <td><?php echo $alt['harga']?></td>
                <td><?php echo $alt['total']?></td>
                <td><?php echo $alt['kuota24']?></td>
                <td><?php echo $alt['masa']?></td>
            </tr>      
            <?php } ?>
        </table>      
    </div>        
</div>
    
</body>
</html>