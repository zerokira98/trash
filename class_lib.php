<?php
class vektor{
public $size;
public $array;
//constructor
public function __construct($newsize){
  //if args is an integer
  if (is_int($newsize)) {
  $this->size = $newsize;
  for ($i=0; $i < $this->size ; $i++) {
    # code...
    $this->array[$i]=$i;
  }
}
//if args is an array
else if (is_array($newsize)) {
  # code...
  $this->array = $newsize;
  $this->size = count($newsize);
}
}
//return a value of array
public function getnilai($index){
  return ($this->array[$index]);
}
//set/change a value of array
public function set_nilai($index,$nilai){
  $this->array[$index]=$nilai;
}
//return (object) the sum of 2 vectors
public function jumlah_vektor($vect1, $vect2){
  $c = new vektor($this->size);
  for ($i=0; $i <$this->size ; $i++) {
    # code...
    $c->array[$i] = $vect1->array[$i]+$vect2->array[$i];
  }
  return $c;
}
//return (object) the substraction of 2 vectors
public function kurang_vektor($vect1, $vect2){
  $c = new vektor($this->size);
  for ($i=0; $i <$this->size ; $i++) {
    # code...
    $c->array[$i] = $vect1->array[$i]-$vect2->array[$i];
  }
  return $c;
}
//return (object) the multiplication of 2 vectors
public function kali_vektor($vect1, $vect2){
  $c = new vektor($this->size);
  for ($i=0; $i <$this->size ; $i++) {
    # code...
    $c->array[$i] = $vect1->array[$i]*$vect2->array[$i];
  }
  return $c;
}
//return (object) the division of 2 vectors
public function bagi_vektor($vect1, $vect2){
  $c = new vektor($this->size);
  for ($i=0; $i <$this->size ; $i++) {
    # code...
    $c->array[$i] = $vect1->array[$i]/$vect2->array[$i];
  }
  return $c;
}
//display getnilai() 
public function display_get($chk){
  echo $chk."</br>";
}
//display array value from object
public function display_class($class){
  for ($i=0; $i < $class->size ; $i++) {
  # code...
  echo $class->array[$i]." ";
}
echo "</br>";
}
//display array value of current object
public function display()
{
  for ($i=0; $i < $this->size ; $i++) {
  # code...
  echo $this->array[$i]." ";
}
 echo "</br>";
}
}
 ?>
