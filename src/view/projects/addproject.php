<?php if (!empty($_SESSION['user'])): ?>
  <section class="projects-add">
    <h2 class="projects-add-header medium-title">Add project</h2>
    <form action="index.php?page=projects" method="post" class="projects-add-form wrap">
      <div>
        <label for="title">Title <span class="label-required">&#42;</span></label>
        <p class="form-error error-small"></p>
        <?php if (!empty($errors['title'])) { echo '<p class="form-error error-small php">' . $errors['title'] . '</p>'; }?>
        <input class="input" id="title" type="text" name="title" <?php if(!empty($_POST['title'])) echo 'value="' . $_POST['title'] . '"';?> required />
      </div>
      <div>
        <label for="text">Text <span class="label-required">&#42;</span></label>
        <p class="form-error error-small"></p>
        <?php if (!empty($errors['text'])) { echo '<p class="form-error error-small php">' . $errors['text'] . '</p>'; }?>
        <textarea class="input input-text" name="text" cols="30" rows="10"><?php if (!empty($_POST['text'])) { echo $_POST['text']; }?></textarea>
      </div>
      <input class="input input-submit" type="submit" name="submit" value="Add Project" />
    </form>
  </section>
<?php endif; ?>
