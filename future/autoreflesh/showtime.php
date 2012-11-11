<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="jquery-1.4.3.js"></script>
        <script>
            loadtime();
            function loadtime(){
                $("#showtime").load("loadtime.php");
                setTimeout("loadtime()",500);
            }
        </script>
  
    </head>
    <body>
        <div id="showtime"></div>
    </body>
</html>
