


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js">
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
</head>

<body>
<div id="veri">

</div>

</body>
</html>

<script type="text/javascript">
   $(document).ready(function() {
       $("#veri").load("veri.php");
     var refreshId = setInterval(function() {
        $("#veri").load('veri.php');
     }, 10000);
  });
</script>