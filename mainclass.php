<?php
class programmer{
    public $name; 
    public $role;
  
    function __construct($name, $role){
        $this->name = $name;
        $this->role = $role;
    }
 
   
}

$shubham = new programmer("shubham","web developer");
echo "The name of the employee is $shubham->name and its role is  $shubham->role";

echo "<br>";

$sandesh = new programmer("sandesh","junior software developer");
echo "The name of the employee is $sandesh->name and its role is $sandesh->role";

?>


