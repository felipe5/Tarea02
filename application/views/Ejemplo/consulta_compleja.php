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
        <th>first_name</th>
        <th>last_name</th>
        <th>salary</th>
        <th>title</th>
        <th>from_date</th>
        <th>to_date</th>
        <th>dept_name</th>
      </tr>
      <tbody>
        <?php 
        $Personas;
        foreach($Personas as $persona): ?>
          <tr>
            <td><?php echo $persona->first_name ?></td>
            <td><?php echo $persona->last_name ?></td>
            <td><?php echo $persona->salary ?></td>
            <td><?php echo $persona->title ?></td>
            <td><?php echo $persona->from_date ?></td>
            <td><?php echo $persona->to_date ?></td>
            <td><?php echo $persona->dept_name ?></td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </body>
</html>

