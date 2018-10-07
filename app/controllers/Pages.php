<?php
class Pages extends Controller {
  public function __construct() {

  }

  public function index() {
    $data = [
      'title' => 'Cris Aian Vergara'
    ];

    $this->view('pages/index', $data);
  }

  public function portfolio() {
    $data = [
      'title' => 'Portfolio'
    ];

    $this->view('pages/portfolio', $data);
  }
}