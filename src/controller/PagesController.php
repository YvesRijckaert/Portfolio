<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProjectDAO.php';

class PagesController extends Controller {

    private $projectDAO;

    function __construct() {
      $this->projectDAO = new ProjectDAO();
    }

    public function index()
    {
        if (!empty($_GET['category'])) {
          header('Location: index.php?page=work&category=' . $_GET['category']);
          exit();
        }

        $featuredwork = $this->projectDAO->selectFeatured();

        $this->set('featuredwork', $featuredwork);
        $this->set('title', 'Home');
        $this->set('currentPage', 'home');
    }

    public function contact()
    {
        $this->set('title', 'Contact');
        $this->set('currentPage', 'contact');
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $emailFrom = $_POST['email'];
            $message = $_POST['message'];

            $emailTo = "hi@yvesrijckaert.com";
            $headers = "From: " . $emailFrom;
            $txt = "You have received an email from " . $name . ".\n\n" . $message;

            mail($emailTo, $subject, $txt, $headers);

            $_SESSION['info'] = 'Email sent successfully!';
            header('Location: index.php');
            exit();
        }
    }
}
