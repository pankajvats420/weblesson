<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
// $a = 'i am variable';

// echo "helo pankaj ".$a." ";

// echo "<br>";

// echo "helo pankaj $a ";

// echo "<br>";

// echo 'helo pankaj $a ';

// echo "<br>";

// echo 'helo pankaj '.$a.' ';

// echo "<br>";

// echo 'helo pankaj '.$a.' ';

// echo "<br>";

// echo 'helo pankaj '.$a.' ';


// echo "<br>";

// echo "kjnlhnlnl","bhkgbhkgkbhk","juhkjklhljjhnl";

// echo "<br>";

// print "kjnlhnlnl";

// if(print "kjnlhnlnl" == 1){
// 	echo "yes";
// }

// $a .="my name is what";


// echo $a."<br>";

// echo __FILE__ . "<br><br>";  

//   echo __DIR__ . "<br><br>";  

// echo 'gbjkbkhgbkjhbkjbkjbjkyhdrtyhrtuhjrt'.'<br>';


//   function test(){    
//         //print the function name i.e; test.   
//         echo 'The function name is '. __FUNCTION__ . "<br><br>";   
//     }    
//     test();




function my_sort($a,$b)
{
if ($a==$b) return 0;
  return ($a<$b)?-1:1;
}

$arr=array("a"=>'apple',"b"=>'bhbjj',"c"=>'kjjj',"d"=>'jjkkkjk');
sort($arr,"my_sort");
 
foreach($arr as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }

?>


</body>
</html>