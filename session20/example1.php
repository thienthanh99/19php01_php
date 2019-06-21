<link rel="stylesheet" type="text/css" href="style.css">

<?php
echo "<h1>HELLO wordl! </h1>";

  ?>
  <p>Hi man!</p>

  <?php
  $userName = 'admin';
  echo $userName;
  //document.write(userName);
  $x = 7;
  $y = 8;
  
  echo "<br>";
  echo $x + $y;
  echo "<br>";
  echo $x - $y;
  echo "<br>";
  echo $x * $y;
  echo "<br>";
  echo $x / $y;

  /*
  sumNumber function
  */

  function sumNumber($a, $b){
  	return $a + $b;
  }
  echo "<br>";
  echo sumNumber(22, 98);

  $i = 5;
  echo "<br>";
  if ($i %2) {
  	echo "i la so le";
  	}else{
  			echo "i la so chan";
  		}
	echo "<br>";
  for ($i = 1;$i <=10;$i++ ){
  	echo "$i";
  	echo "<br>";
  }

  echo "<br>";
  $n= 5;
  while ($n <10) {
  	echo $n;
  	$n++;
  	echo "<br>";
  }

  echo "<br>";
  $m = 5;
  do{
  	echo $m;
  	$m++;
  	echo "<br>";

  } while ($m < 10) ;

  //Hiển thị các số trong khoảng (200, 250) mà chia hết cho 3
  echo "<br>";
  for ($i=200; $i <=250 ; $i++) { 
  	if($i %3 ==0){
  		echo "$i";
  		echo "<br>";
  	}
	  }

//Vẽ bàn cờ vua bằng vòng lặp for
	  echo "<br>";
	  echo "<div class='border'>";
	  for($row=1; $row <= 8; $row++)  
      {  
          echo "<tr>";  
          for($col=1; $col <=8; $col++)  
          {  
            $total=$row + $col;  
            if($total%2 == 0)  
             {  
              echo "<div class='black'></div>";  
            }  
            else  
            {  
              echo "<div class='red'></div>";  
            }  
          }  
          echo "</tr>";  
      } 
      echo "</div>";

      //In hình tam giác có chiều cao 10 đơn vị
      echo "<br>";
      for($i=1;$i<=10;$i++)
		{
		for($j=1;$j<=10-$i;$j++)
		echo(" ");
		for($j=1;$j<=2*$i-1;$j++)
		echo("*");
		echo "<br>";
		//echo("\10");
}
		//Cần có tổng 1.000.000 đồng từ 3 loại tiền 10.000 đồng, 20.000 đồng, 50.000 đồng. Lập chương trình để tìm ra tất cả các phương án có thể
		echo "<br>";
		$x = 20000000;
		$y = 0.6;
		$h = 12;
		$t = 3;
		echo "bai2:Tiền sau 3 năm là:";
		echo ($x * $y * $h) * $t;
		
 ?>