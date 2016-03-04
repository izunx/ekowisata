<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php echo $head;?>
  </head>
  <body>
    <?php
    if($mod == 'paket' && $act == 'cetak'){
      echo $data['content'];      
    }else{
      foreach ($data as $dt) {
        echo $dt;
      }
    }
    ?>
  </body>
</html>