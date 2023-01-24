<!----Harjutus02 24.01.23------>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    

    <?php
    	
        //aritmeetilised operaatorid
        $x = 8;
        $y = 2;
        $liitm = $x + $y;
        $lahut = $x - $y;
        $korru = $x * $y;
        $jagam = $x / $y;
        $jaak = $x % $y;
        
        printf("%d+%d = %d<br>", $x, $y, $liitm); 
        printf("%d-%d = %d<br>", $x, $y, $lahut); 
        printf("%d*%d = %d<br>", $x, $y, $korru); 
        printf("%d/%d = %d<br>", $x, $y, $jagam); 
        printf("%d%%d = %d<br>", $x, $y, $jaak); 

   
        $mm = 100;
        $cm = $mm /100;
        $m = $cm /100;
        echo "mm=$mm<br>cm=$cm<br>m=$m<br>";


        $h = 10;
        $a = 12;
        $b = 8;
        $c = 7;
        $umbermoot = $a + $b + $c;
        $pindala = $a*$h/2;
        printf("%d+%d+%d = %d<br>", $a, $b, $c, $umbermoot);
        printf("%d*%d/%d = %d<br>", $a, $h, 2, $pindala);




    ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>