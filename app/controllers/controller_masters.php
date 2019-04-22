<?php
class Controller_Masters extends Controller
{
  function __construct()
  {
      $this->model = new Model_Masters();
      $this->view = new View();
  }

  function action_index()
  {
      $data = $this->model->get_data();
      $this->view->generate('masters_view.php', 'template_view.php',$data);
  }
}
