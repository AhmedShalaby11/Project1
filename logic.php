<?php


function renderTable($col1,$col2)
{

  include 'api.php';
  // echo "<table class = 'table table-bordered table-hover' id ='dt'></table>";
for ($i=0; $i < $result ->num_rows; $i++) {
  # code..

  echo("
  <script type='text/javascript'>
    $(document).ready(function() {
      $('#dt').append('<tr><td>".$arr[$i][$col1]."</td><td>".$arr[$i][$col2]."</td></tr>');

    });

  </script>
  ");
}
}

 ?>
