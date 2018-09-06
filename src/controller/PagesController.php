<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProjectDAO.php';

class PagesController extends Controller {

  private $projectDAO;

  function __construct() {
    $this->projectDAO = new ProjectDAO();
  }

  public function index() {
    if (!empty($_GET['category'])) {
      header('Location: index.php?page=work&category=' . $_GET['category']);
      exit();
    }

    $featuredwork = $this->projectDAO->selectFeatured();

    $this->set('featuredwork', $featuredwork);
    $this->set('title', 'Home');
    $this->set('currentPage', 'home');
  }

  public function contact() {
    if(isset($_POST['submit'])) {
      $this->_handleContact();
    }

    $this->set('title', 'Contact');
    $this->set('currentPage', 'contact');
  }

  private function _handleContact() {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) {
      $errors['name'] = 'Please enter your full name.';
      $_SESSION['error'] = 'Message not send.';
    }
    if(empty($emailFrom)) {
      $errors['email'] = 'Please enter your e-mail.';
      $_SESSION['error'] = 'Message not send.';
    } else {
        if (!filter_var($emailFrom, FILTER_VALIDATE_EMAIL)) {
          $errors['email'] = 'This is not a correct e-mail.';
          $_SESSION['error'] = 'Message not send.';
        }
      }
    if(empty($message)) {
      $errors['message'] = 'Please type your message.';
      $_SESSION['error'] = 'Message not send.';
    }

    if(empty($errors)) {
      $emailTo = "hi@yvesrijckaert.com";
      $headers = "From: " . $emailFrom;
      $txt = "You have received an email from " . $name . ".\n\n" . $message;
      mail($emailTo, $subject, $txt, $headers);

      $_SESSION['info'] = 'Email sent successfully!';
      header('Location: index.php');
      exit();
    }

    $this->set('errors', $errors);
  }
}
