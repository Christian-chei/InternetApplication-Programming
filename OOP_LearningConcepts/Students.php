<?php
  class Students /**This is  the initial class */
  {
    public $first_name; /**These are the class attributes or properties */
    public $last_name; /**These attributes are accessed by an object of the Students class during instantiation */
    public $address;

    public function __construct($first_name, $last_name, $address) /**Upon Object instantiation the _Construct is the first function triggered */ {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->address = $address;
    }
    
    public function greeting(){
        return "Hello" . $this->first_name . "\n";
    }

    public function getaddress(){
     return "Your address is " . $this->address . "\n";
    }

  }
    $student1 = new Students("John", "Doe", "3225 Woodland Park St");
    echo $student1->greeting();
    echo $student1->getaddress();


    $student2 = new Students( "Mary", "Jane", "4567 Phenom Park Avenue" );
    echo $student2->greeting();
    echo $student2->getaddress();

    ?>
