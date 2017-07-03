<?php

class HomeController extends Controller{
	private $homeModel;

	public function __construct(){
		parent::__construct();

		$this->homeModel = $this->loadModel('home');
	}

	public function index($param1 = 'user', $param2 = 'cool'){
		$this->view->set('heading', 'Home page.');
		$this->view->set('greeting', $this->homeModel->get($param1, $param2));

		$this->view->render('home/index');
	}

	public function contact(){
		$this->view->set('heading', 'Contact page');

		$this->view->render('home/contact');
	}
}