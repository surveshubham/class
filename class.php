<?php 
class student{
     public $name;
     public $std;

     function set_name($name){
        $this->name = $name; 
     }

     function get_name(){
         return $this->name;
     }

     function set_std($std){
        $this->std = $std; 
     }

     function get_std(){
        return $this->std;
    }

}

$student1 = new Student();
$student1->set_name("shubham");
$student1->set_std("12");
echo $student1->get_name();
echo $student1->get_std();

echo "<br>";

$student2 = new Student();
$student2->set_name("Sandesh");
$student2->set_std("10");
echo $student2->get_name();
echo $student2->get_std();

?>




