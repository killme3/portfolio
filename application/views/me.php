<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin page | View All Products</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/main.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/DataTables/media/css/dataTables.bootstrap.css'); ?>">
    <script type="text/javascript" language="javascript" src="<?= base_url('assets/jquery.js');?>"></script>
    <script type="text/javascript" language="javascript" src="<?= base_url('assets/DataTables/media/js/jquery.dataTables.min.js');?>"></script>
    <script type="text/javascript" language="javascript" src="<?= base_url('assets/DataTables/media/js/dataTables.bootstrap.js');?>"></script>
</head>
<body>

<img src="<?php echo base_url();?>image/hp.jpg" alt="" width="100%" height="100%" class="bgHome">
<div class='container'>

    <table id="myTable" class='table table-bordered table-striped table-hover' style="background-color:white">
        <thead>
            <tr>
                <th colspan="3">Email Baru</th>
                <th><?php echo anchor('bek_en/logout/', 'Logout');?></th>
            </tr>
        </thead>
            <tbody>
            <?php foreach ($new as $baru) { ?>
                <tr>
                    <td><?php echo $baru->name; ?></td>
                    <td><?php echo $baru->email; ?></td>
                    <td><?php echo $baru->text; ?></td>
                    <td><?php echo $baru->tgl; ?></td>
                </tr>
            <?php } ?>
            </tbody>
    </table>
</div>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script> 
</body>
</html>