<?php
/**
 *
 */
class Pages extends Controller {

  function __construct(){
    $this->post_model = $this->load_model('Post');
  }

  public function index(){
  	$my_data = [
  		'title' => 'Ruthersmith-mvc'
  	];
    var_dump($this->post_model->getposts());
  	$this->load_view('pages/welcome', $my_data);
  }

  public function about($value='')
  {
    echo "Hello From the About method in the pages Controller " . $value;
  }

}
