<!DOCTYPE html>
<html>
  <head>
    <link href="<?php echo base_url('assets/css/bootstrap/js/bootstrap.js');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap/js/bootstrap.min.js');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  </head>
  <body>
    <table class="table">
      <tr>
        <th>no</th>
        <th>name</th>
      </tr>
      <tbody>
        <?php 
        $departments;
        foreach($departments as $department): ?>
          <tr>
            <td><?php echo $department->dept_no ?></td>
            <td><?php echo $department->dept_name ?></td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </body>
</html>
