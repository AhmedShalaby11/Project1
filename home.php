<!DOCTYPE html>
<html>
<head>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>

  <!-- Optional theme -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' integrity='sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin='anonymous'>

  <!-- Latest compiled and minified JavaScript -->
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>

  <!-- Latest compiled and minified CSS -->

</head>
<body>

  <?php

  include 'logic.php';
  renderTable("Customer_Type","category");


   ?>


<div id='scrollDiv' style="overflow: scroll; width: 800px; height: 300px;">
<table class = "table table-hover table-bordered" id ='dt'>
<tr>
  <td>TYPE</td>
  <td>PROCESS</td>
</tr>
</table>
</div>

<span>get this value: </span><input id='txtval' type="text" name="val" value="">
<button type="button" id='btn' name="button">Click</button>
<script type="text/javascript">
  $(document).ready(function() {
    $("#dt tr td").click(function(){
      // $("#txtval").val($(this).text());
      if ((this).contains("TYPE"))
      {
        alert( "case is true");
      }
      else {
        {
          alert("case is false");
        }
      }
    })
  });

</script>


<script>
$(document).ready(function() {
  $("#scrollDiv").scroll();
});


</script>


</body>
</html>
