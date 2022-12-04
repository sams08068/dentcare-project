<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('includes/head.php');
  ?>
</head>
<body>
  <?php 
  session_start();
  error_reporting(0);
  include('includes/header.php');

$user ='';
$user = $_SESSION['email'];

  ?>
 <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Appointment Status</h1>
                <a href="index.php" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Appointment Status</a>
            </div>
        </div>
    </div>

    <h1>Appointnment</h1>
    <table style="width:50%">
        <tr>
        <th>#</th>
            <th>name</th>
            <th>email</th>
            <th>service</th>
            <th>Status</th>
        </tr>
        <?php
        $count = 1;
        $query = "SELECT * FROM appointment WHERE email = '$user' ";
        $data = mysqli_query($connect, $query);

        while ($row = mysqli_fetch_object($data))
        {
            ?>
        <tr>
        <td><?=$count++?></td>       
        <td><?=$row->name?></td>
        <td><?=$row->email?></td>
        <td><?=$row->service?></td>
        <td><?=$row->status?></td>

          
        </tr>
<?php        
        }
        ?>   



    </table>
    <br>
    <br>
    <br>
    <h1>Emergency</h1>

    <table style="width:50%">
        <tr>
        <th>#</th>
            <th>date</th>
            <th>email</th>
            <th>service</th>
            <th>Status</th>
        </tr>
        <?php
        $count = 1;
        $query2 = "SELECT * FROM emergency WHERE email = '$user' ";
        $data2 = mysqli_query($connect, $query2);

        while ($row2 = mysqli_fetch_object($data2))
        {
            ?>
        <tr>
        <td><?=$count++?></td>       
        <td><?=$row2->date?></td>
        <td><?=$row2->email?></td>
        <td><?=$row2->service?></td>
        <td><?=$row2->status?></td>

          
        </tr>
<?php        
        }
        ?>   



    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    
    <?php include('includes/footer.php');
  ?>
</body>
</html>