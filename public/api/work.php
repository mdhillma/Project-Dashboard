<?php //must use ; in PHP php.net for document resource 

echo '<pre>'; //to prefix browser to read code as written
echo "foo\n"; // \n is new line
echo 'bar\n';

$name = 'Phil'; // $ before variables

echo "\n";
echo "My name is {$name}\n";
echo "My name is" .$name."\n"; // . is concatenate

class Animal
{
  public $type = 'Pig';
}
$wilbur = new Animal();
echo $wilbur->type; //-> to dereference instance variables
//errors will not show to User

if(true){
  //This
} else {
  //That
}

for($i = 0; $i<10; $i++){
  //stuff
}

$id=0;
if(isser($GET['id'])){
  $id = $_GET['id'];
}

$id = isset($_GET['id']) ? $_GET['id'] : 0; //same as lines 31-34

$id = $_GET['id'] ?? 0; //coalesce operator ; same as line 38


$arr = [
  'first' => 'Michaela' // => is assignment operator
  'last' => 'Hillman'
];

echo '[0]:'.$arr1[0]; //won't work
echo '[first]:'.$arr1['first']; //will work!

$arr2 = ['one', 'two', 'three'];
//on the backend, this is happening:
$arr2 = [
  0=> 'one',
  1=> 'two',
  2=> 'three'];

foreach($arr2 as $key,$val in $arr2){
  echo $key.':'.$val;
}
