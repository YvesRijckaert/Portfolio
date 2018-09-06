<section class="contact">
  <header class="contact-header medium-title">
    <h1>Contact me</h1>
  </header>
  <form action="index.php?page=contact" method="post" class="contact-form wrap">
    <fieldset class="contact-fieldset">
      <div>
        <label for="name">Full name <span class="label-required">&#42;</span></label>
        <p class="form-error error-small"></p>
        <?php if(!empty($errors['name'])) echo '<p class="form-error error-small php">' . $errors['name'] . '</p>';?>
        <input class="input" id="name" autocomplete="on" type="text" name="name" <?php if(!empty($_POST['name'])) echo 'value="' . $_POST['name'] . '"';?> required />
      </div>
      <div>
        <label for="subject">Subject</label>
        <p class="form-error error-small"></p>
        <input class="input" id="subject" type="text" name="subject" <?php if(!empty($_POST['subject'])) echo 'value="' . $_POST['subject'] . '"';?> />
      </div>
      <div>
        <label for="email">E-mail <span class="label-required">&#42;</span></label>
        <p class="form-error error-small"></p>
        <?php if(!empty($errors['email'])) echo '<p class="form-error error-small php">' . $errors['email'] . '</p>';?>
        <input class="input" id="email" autocomplete="on" type="email" name="email" <?php if(!empty($_POST['email'])) echo 'value="' . $_POST['email'] . '"';?> required />
      </div>
    </fieldset>
    <fieldset class="contact-fieldset">
      <label for="message">Message <span class="label-required">&#42;</span></label>
      <p class="form-error error-small"></p>
      <?php if(!empty($errors['message'])) echo '<p class="form-error error-small php">' . $errors['message'] . '</p>';?>
      <textarea class="input input-text" id="message" name="message" cols="30" rows="10" required><?php if(!empty($_POST['message'])) echo $_POST['message']; ?></textarea>
      <input class="input input-submit" type="submit" name="submit" value="submit" />
    </fieldset>
  </form>
</section>
