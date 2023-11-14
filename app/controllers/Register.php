<?php

class Register extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['username'])) {
      $data['title'] = "Register";
      $this->view('register/index', $data);
    } else {
      header("Location:" . BASEURL . "login");
      exit;
    };
  }

  public function registerAction()
  {
    $_POST['role'] = 'user';

    $data['user'] = $this->model('users_model')->getUserByEmail($_POST);

    if (!$data['user']) {
      if ($this->model('users_model')->insertUserRegister($_POST) > 0) {
        Flasher::setFlash('success', 'Successfully create account!');
        header("Location:" . BASEURL . "login");
        exit;
      } else {
        Flasher::setFlash('danger', 'Failed to create account!');
        header("Location:" . BASEURL . "register");
        exit;
      }
    } else {
      Flasher::setFlash('danger', 'Email is already registered!');
      header("Location:" . BASEURL . "signup");
      exit;
    }
  }
}
