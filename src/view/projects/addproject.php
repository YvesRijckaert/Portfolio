<?php if (!empty($_SESSION['user'])): ?>
  <section class="projects-add">
    <h2 class="projects-add-header medium-title">Add project</h2>
    <form action="index.php?page=projects" method="post" class="projects-add-form wrap">
      <fieldset class="projects-add-fieldset">
        <div>
          <label for="title">Title <span class="label-required">&#42;</span></label>
          <p class="form-error error-small"></p>
          <?php if (!empty($errors['title'])) { echo '<p class="form-error error-small php">' . $errors['title'] . '</p>'; }?>
          <input class="input" id="title" type="text" name="title" <?php if(!empty($_POST['title'])) echo 'value="' . $_POST['title'] . '"';?> required />
        </div>
        <div>
          <label for="short-title">Short title <span class="label-required">&#42;</span></label>
          <p class="form-error error-small"></p>
          <?php if (!empty($errors['short-title'])) { echo '<p class="form-error error-small php">' . $errors['short-title'] . '</p>'; }?>
          <input class="input" id="short-title" type="text" name="short-title" <?php if(!empty($_POST['short-title'])) echo 'value="' . $_POST['short-title'] . '"';?> required />
        </div>
      </fieldset>
      <fieldset class="projects-add-fieldset">
        <div>
          <label for="creators">Creator(s) <span class="label-required">&#42;</span></label>
          <p class="form-error error-small"></p>
          <?php if (!empty($errors['creators'])) { echo '<p class="form-error error-small php">' . $errors['creators'] . '</p>'; }?>
          <input class="input" id="creators" type="text" name="creators" <?php if(!empty($_POST['creators'])) echo 'value="' . $_POST['creators'] . '"';?> required />
        </div>
        <div>
          <label for="client">Client <span class="label-required">&#42;</span></label>
          <p class="form-error error-small"></p>
          <?php if (!empty($errors['client'])) { echo '<p class="form-error error-small php">' . $errors['client'] . '</p>'; }?>
          <input class="input" id="client" type="text" name="client" <?php if(!empty($_POST['client'])) echo 'value="' . $_POST['client'] . '"';?> required />
        </div>
        <div>
          <label for="type">Type <span class="label-required">&#42;</span></label>
          <p class="form-error error-small"></p>
          <?php if (!empty($errors['type'])) { echo '<p class="form-error error-small php">' . $errors['type'] . '</p>'; }?>
          <input class="input" id="type" type="text" name="type" <?php if(!empty($_POST['type'])) echo 'value="' . $_POST['type'] . '"';?> required />
        </div>
        <div>
          <div class="input-radio-wrap">
            <label for="development">Development</label>
            <input class="input-radio" id="development" type="radio" name="category" />
            <label for="design">Design</label>
            <input class="input-radio" id="design" type="radio" name="category" />
            <label for="motion">Motion</label>
            <input class="input-radio" id="motion" type="radio" name="category" <?php if(!empty($_POST['type'])) echo 'value="' . $_POST['type'] . '"';?> />
          </div>
        </div>
      </fieldset>
      <fieldset class="projects-add-fieldset">
        <div>
          <label for="briefing">Briefing <span class="label-required">&#42;</span></label>
          <p class="form-error error-small"></p>
          <?php if (!empty($errors['briefing'])) { echo '<p class="form-error error-small php">' . $errors['briefing'] . '</p>'; }?>
          <textarea class="input input-text" id="briefing" name="briefing" cols="30" rows="10" required><?php if (!empty($_POST['briefing'])) { echo $_POST['briefing']; }?></textarea>
        </div>
        <div>
          <label for="elaboration">Elaboration <span class="label-required">&#42;</span></label>
          <p class="form-error error-small"></p>
          <?php if (!empty($errors['elaboration'])) { echo '<p class="form-error error-small php">' . $errors['elaboration'] . '</p>'; }?>
          <textarea class="input input-text" id="elaboration" name="elaboration" cols="30" rows="10" required><?php if (!empty($_POST['elaboration'])) { echo $_POST['elaboration']; }?></textarea>
        </div>
      </fieldset>
      <input class="input input-submit" type="submit" name="submit" value="Add Project" />
    </form>
  </section>
<?php endif; ?>
