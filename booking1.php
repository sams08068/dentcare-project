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
            <th>service</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        $count = 1;
        $query = "SELECT * FROM appointment ";
        $data = mysqli_query($connect, $query);
        $result = mysqli_num_rows($data);

        while ($row = mysqli_fetch_object($data))
        {
            ?>
        <tr>
        <td><?=$count++?></td>       
        <td><?=$row->name?></td>
        <td><?=$row->email?></td>
        <td><?=$row->service?></td>
        <td><?=$row->status?></td>
        <td>
            <form action="" method="POST"><input type="hidden" name="hide" value="<?=$row->id?>"><input type="submit" value="Confirm" name="confirm"></form>
        </td>

          
        </tr>
<?php        
        }
        ?>   
<?php
if (isset ($_POST['confirm']));
{
    $status = 'Confirm';
    $hide = $_POST['hide'];

    $query = "UPDATE appointment SET status = '$status' WHERE id = '$hide' ";
    $data = mysqli_query($connect, $query);
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
