<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/UserDAO.php';

class UsersController extends Controller {

  private $userDAO;

  function __construct() {
    $this->userDAO = new UserDAO();
  }

  public function index() {
  }

  public function login() {
    $this->set('title', 'Login');
    $this->set('currentPage', 'login');

    if (!empty($_POST)) {
      if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $existing = $this->userDAO->selectByEmail($_POST['email']);
        if (!empty($existing)) {
          if (password_verify($_POST['password'], $existing['password'])) {
            $_SESSION['user'] = $existing;
            $_SESSION['info'] = 'Logged In';
            header('Location: index.php');
            exit();
          } else {
            $_SESSION['error'] = 'Unknown username / password';
          }
        } else {
          $_SESSION['error'] = 'Unknown username / password';
        }
      } else {
        $_SESSION['error'] = 'Unknown username / password';
      }
    }
  }

  public function logout() {
    $this->set('title', 'Logout');
    $this->set('currentPage', 'logout');

    if (!empty($_SESSION['user'])) {
      unset($_SESSION['user']);
    }
    $_SESSION['info'] = 'Logged Out';
    header('Location: index.php');
    exit();
  }

}
