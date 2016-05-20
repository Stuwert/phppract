<?php

  class SimpleClass
  {
    public $vendorId;

    function __construct($id){
      $this->vendorId = $id;
    }

    public function displayId(){
      echo $this->vendorId;
    }

  }

  $test = new SimpleClass(12);

  $test->displayId();

 ?>
