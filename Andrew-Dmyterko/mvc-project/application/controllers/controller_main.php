<?php

class Controller_Main extends Controller
{

    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

	function action_index($article_id=null)
	{
	    $data = $this->model->get_data($article_id,$error);
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
}