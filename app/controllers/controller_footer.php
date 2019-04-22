<?php
    class Controller_Footer extends Controller
    {
        function __construct()
        {
            $this->model = new Model_Footer();
            $this->view = new View();
        }

        function action_index()
        {
            $data = $this->model->get_data();
            $this->view->generate('footer_view.php', 'template_view.php',$data);
        }
    }
