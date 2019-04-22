<?php
  class Controller_Gallery extends Controller
  {
      function __construct()
      {
          $this->model = new Model_Gallery();
          $this->view = new View();
        }

      function action_index()
      {
          $data = $this->model->get_data();
          $this->view->generate('gallery_view.php', 'template_view.php', $data);
      }
  }
