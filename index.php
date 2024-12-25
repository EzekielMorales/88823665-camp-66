<h1>File index.php</h1>

<?php
/** 
 * 
 * 
 * 
 * FILE index.php */ 

 # comment
// comment
$my_arry = array( 1, array(2), 3, 4, 5 ,"myindex " => 6 , "myindex " => 7);
print_r($my_arry);
echo "<br>" ;
$my_arry2[] = 1;
$my_arry2[] = 2;
$my_arry2[] = 3;
print_r($my_arry2);

if(FALSE){
    echo "if false" ;
} else if(TRUE and FALSE){
 echo "else if true ";
} else {
    echo "else " ;
}
echo "<br>";





$myvar = "hello world";
$myvar = 1;
echo "<h1>".$myvar."</h1>" ;
echo "<br>";
$x = 1;
function x(){
    global $x;
    $x = 2;
}
echo $x ;
echo "<br>";
x();

echo "1";
$x = "1" ;
echo $x++;;
echo "<br>";
?>

<h1><?php echo $myvar ;?></h1>
