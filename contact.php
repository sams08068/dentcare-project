<?php
session_start();
error_reporting(0);
include('../includes/connect.php');

 ?>

<!DOCTYPE html>
<html>
<?php
include('../admin/includes/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include('../admin/includes/header.php');
  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
     
    </section>
    
    <!-- Main content -->
    <table style="width:50%">
        <tr>
        <th>#</th>
            <th>name</th>
            <th>email</th>
            <th>subject</th>
            <th>message</th>
        </tr>
        <?php
        $count = 1;
        $query = "SELECT * FROM contactus ";
        $data = mysqli_query($connect, $query);
        $result = mysqli_num_rows($data);

        while ($row = mysqli_fetch_object($data))
        {
            ?>
        <tr>
        <td><?=$count++?></td>       
        <td><?=$row->name?></td>
        <td><?=$row->email?></td>
        <td><?=$row->subject?></td>
        <td><?=$row->message?></td>

          
        </tr>
<?php        
        }
        ?>   



    </table>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div><?php
include('../admin/includes/footer.php');
?>
</body>
</html>