<?php
require(APPPATH.'libraries/REST_Controller.php');
class Tgm extends REST_Controller {
   function test_GET(){
      $out = "Hello";
      $this->response($out, 200);
   }
   function trends_GET(){
      
   }
   function location_GET(){
      
   }
   function map_GET(){
      
   }
}
?>