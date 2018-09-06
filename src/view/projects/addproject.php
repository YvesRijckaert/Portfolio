<?php if (!empty($_SESSION['user'])): ?>
  <!-- if admin is logged in -->
  <section class="projects-add">
    <h3>Add project</h3>
    <form method="post">
      <label>Title:</label>
      <input name="title" type="text" value="<?php if (!empty($_POST['title'])) { echo $_POST['title']; }?>" />
      <?php if (!empty($errors['title'])) {
        echo '<span class="error">' . $errors['text'] . '</span>';
      }?>
      <label>Text:</label>
      <textarea name="text">
        <?php if (!empty($_POST['text'])) {
          echo $_POST['text'];
        }?>
      </textarea>
      <?php if (!empty($errors['text'])) {
        echo '<span class="error">' . $errors['text'] . '</span>';
      }?>
      <input type="submit" name="action" value="Add Work" class="form-submit" />
    </form>
  </section>
  <?php endif; ?>
