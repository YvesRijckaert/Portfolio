<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProjectDAO.php';

class ProjectsController extends Controller {

    private $projectDAO;

    function __construct() {
        $this->projectDAO = new ProjectDAO();
    }

    public function projects() {

      //default: show all projects
      if(empty($_GET['category'])) {
        $projects = $this->projectDAO->selectAll();
      }

      //for correct sorting of projects
      if (!empty($_GET['category'])) {
        if ($_GET['category'] === 'allprojects') {
          $projects = $this->projectDAO->selectAll();
        } else {
          $projects = $this->projectDAO->selectCategory($_GET['category']);
        }
      }

      //ajax
      if ($_SERVER['HTTP_ACCEPT'] == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode($projects);
        exit();
      }

      //admin tools
      //for deleting projects
      if (!empty($_GET['action'])) {
        if ($_GET['action'] == 'delete' && !empty($_GET['id'])) {
          if (!empty($_SESSION['user'])) {
            $this->_handleDelete();
          } else {
            $_SESSION['error'] = 'You need to be signed in to do this!';
          }
        }
      }

      //for adding new projects
      if (!empty($_POST)) {
        if (!empty($_SESSION['user'])) {
          $this->_handleAdd();
        } else {
          $_SESSION['error'] = 'You need to be signed in to do this!';
        }
      }
      $this->set('projects', $projects);
      $this->set('title', 'Projects');
      $this->set('currentPage', 'projects');
    }

    public function project() {
      $projectDAO = new ProjectDAO();

      if(!empty($_GET['id'])) {
        $project = $projectDAO->selectById($_GET['id']);
      }
      if(!$project) {
        $_SESSION['error'] = 'Work could not be found!';
        header('Location: index.php');
        exit();
      }
      $this->set('project', $project);
      $this->set('title', $project['title']);
      $this->set('currentPage', 'project-detail');
    }

    private function _handleAdd(){
      $projectDAO = new ProjectDAO();
      $data = array_merge($_POST, array('user_id' => $_SESSION['user']['id'], 'created' => date('Y-m-d H:i:s')));
      if($insertedWork = $projectDAO->insert($data)) {
        $_SESSION['info'] = 'You just added new work!';
        header('Location: index.php?page=detail&id=' . $insertedWork['id']);
        exit();
      } else {
        $_SESSION['error'] = 'Could not post this new work!';
        $this->set('errors', $projectDAO->validate($data));
      }

    }

    private function _handleDelete(){
      $projectDAO = new ProjectDAO();

      $projectDAO->delete($_GET['id']);
      $_SESSION['info'] = 'Work got deleted!';
      header('Location: index.php');
      exit();
    }
}
