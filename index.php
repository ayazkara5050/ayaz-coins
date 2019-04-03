
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta http-equiv="refresh" content="60;URL=index.php">
<title>Coins</title>
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
