<?php

require_once( __DIR__ . '/DAO.php');

class ProjectDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `projects`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectCategory($category) {
    $sql = "SELECT * FROM `projects` WHERE `category` = :category";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':category', $category);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `projects` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectFeatured(){
    $sql = "SELECT * FROM `projects` WHERE `featured` = TRUE";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insert($data) {
    $errors = $this->validate($data);
    if (empty($errors)) {
      $sql = "INSERT INTO `projects` (`created`, `user_id`, `text`, `title`) VALUES (:created, :user_id, :text, :title)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':created', $data['created']);
      $stmt->bindValue(':user_id', $data['user_id']);
      $stmt->bindValue(':text', $data['text']);
      $stmt->bindValue(':title', $data['title']);
      if ($stmt->execute()) {
        $insertedId = $this->pdo->lastInsertId();
        return $this->selectById($insertedId);
      }
    }
    return false;
  }

  public function update($id, $data) {
    $errors = $this->validate($data);
    if (empty($errors)) {
      $sql = "UPDATE `projects` SET `created` = :created, `user_id` = :user_id, `text` = :text WHERE `id` = :id";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':created', $data['created']);
      $stmt->bindValue(':user_id', $data['user_id']);
      $stmt->bindValue(':text', $data['text']);
      $stmt->bindValue(':id', $id);
      if ($stmt->execute()) {
        return $this->selectById($id);
      }
    }
    return false;
  }

  public function delete($id) {
    $sql = "DELETE FROM `projects` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function validate($data) {
    $errors = array();
    if (empty($data['created'])) {
      $errors['created'] = 'Please enter a created date';
    }
    if (empty($data['user_id'])) {
      $errors['user_id'] = 'Please enter a user_id';
    }
    if (empty($data['text'])) {
      $errors['text'] = 'Please enter a text';
    }
    return $errors;
  }

}
