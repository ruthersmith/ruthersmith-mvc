<?php
/**
 *
 */
class Pages extends Controller {

  function __construct(){
  }

  public function index(){
  	$my_data = [
  		'title' => 'Ruthersmith-mvc'
  	];
  	$this->load_view('pages/welcome', $my_data);
  }

  public function about($value='')
  {
    echo "Hello From the About method in the pages Controller " . $value;
  }

}
