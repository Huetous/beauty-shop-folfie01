<?php
class Controller_Subs extends Controller
{
  function __construct()
  {
      $this->model = new Model_Subs();
      $this->view = new View();
  }

  function action_index()
  {
      $data = $this->model->get_data();
      $this->view->generate('subs_view.php', 'template_view.php', $data);
  }
}
