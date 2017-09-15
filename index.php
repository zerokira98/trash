
<?php
//header
echo "<h2>Tugas 4, Vektor</h2>";
echo "<h3>081611633016</h3>";

//import class file
include 'class_lib.php';

//create array
$aName = array("0", "1", "2", "3","4","5","6","7","8","9");

//create object
 $vektor1 = new vektor($aName);
 $vektor2 = new vektor(10);

 //display value of each vector
 echo "vektor1 :</br>";
 $vektor1->display_class($vektor1);
echo "vektor2 :</br>";
 $vektor1->display_class($vektor2);

 //return and display the functions
 echo "bagi_vektor :</br> ";
 $vektor1->display_class($vektor1->bagi_vektor($vektor1, $vektor2));
 echo "kali_vektor :</br> ";
 $vektor1->display_class($vektor1->kali_vektor($vektor1, $vektor2));
 echo "kurang_vektor :</br> ";
 $vektor1->display_class($vektor1->kurang_vektor($vektor1, $vektor2));
 echo "jumlah_vektor :</br> ";
 $vektor1->display_class($vektor1->jumlah_vektor($vektor1, $vektor2));
 ?>
