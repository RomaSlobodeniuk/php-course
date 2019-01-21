<?php

class Controller_Article extends Controller
{

    function __construct()
    {
        $this->model = new Model_Article();
        $this->view = new View();
    }

// Метод просмотра статьи
	function action_see($article_id)
	{
	    $data = $this->model->get_data($article_id, $error);
//        echo "<pre>";
//        var_dump($data);
		$this->view->generate('article_see_view.php', 'template_view.php', $data);
	}

	// Метод редактирования статьи
	function action_edit($article_id)
	{
	    $data = $this->model->get_data($article_id, $error);
//        echo "<pre>";
//        var_dump($data);
		$this->view->generate('article_edit_view.php', 'template_view.php', $data);
	}





}