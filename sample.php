<?php
$var= "one";
unset($var);
echo $var;
print 'new file';
echo"</br>";

$vowels = 'a,e,i,o,u';
echo 'The vowels are =' .$vowels;
echo"</br>";

$fruit= 'apple';
$vegetable='betroot';
echo "The red color fruit and vegetable are" .$fruit. "and" .$vegetable;
echo"</br>";

$price='500';
$discount='200';
echo "brand new pencil is".$price. "after discount " .$discount;
echo"</br>";

$numbers="";
$one='1';
$two='2';
$three='3';
$four='4';
$numbers .=$one.$two.$three.$four;
echo $numbers;
echo"</br>";

$vehicles = array('motor cycle','auto','car','bus','lorry');
echo $vehicles[3];
echo"</br>";

$details = array(
    'studentname' => 'surya',
    'department'=>'computer science',
    'place'=>'pondicherry',
);
    echo $details['department'];
echo"</br>";

$size= count($vehicles);
echo $size;
echo"</br>";

$alphabets= array('a','b','c','d','e');
$alphabets1= ['a','b','c','d','e'];
foreach ($alphabets1 as $i){
echo nl2br("\n". $i);
};
echo"</br>";

for($i=0;$i<=10;$i++)
{
echo $i;
}

function name($str)   
{
 echo $str;
}
name('Hello world!');
echo"</br>";
echo"</br>";
?>

<?php
 $servername = "localhost";
 $username = "root";
 $password = "root";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, "crud");
 
 // Check connection
 if ($conn->connect_error) {
   echo "Connection failed";
 }
 else
 {
   echo "Connected successfully!!!!!";
 }
?>

<?php
echo"</br>";
 echo "Today is " . date("Y/m/d") . "<br>";
 echo "Today is " . date("l") . "<br>";
?>