<?php
    class Controller_Blog extends Controller
    {
        function __construct()
        {
            $this->model = new Model_Blog();
            $this->view = new View();
        }

        function action_index()
        {
            $data = $this->model->get_data();
            $this->view->generate('blog_view.php', 'template_view.php',$data);
        }
    }
