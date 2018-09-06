<section class="contact">
  <header class="contact-header medium-title">
    <h1>Contact me</h1>
  </header>
  <form action="index.php?page=contact" method="post" class="contact-form wrap">
    <fieldset class="contact-fieldset">
      <div>
        <label for="name">Full name <span class="contact-label-required">&#42;</span></label>
        <p class="form-error error-small"></p>
        <?php if(!empty($errors['name'])) echo '<p class="form-error error-small php">' . $errors['name'] . '</p>';?>
        <input class="contact-input" autocomplete="on" type="text" name="name" <?php if(!empty($_POST['name'])) echo 'value="' . $_POST['name'] . '"';?> required />
      </div>
      <div>
        <label for="subject">Subject</label>
        <p class="form-error error-small"></p>
        <input class="contact-input" type="text" name="subject" <?php if(!empty($_POST['subject'])) echo 'value="' . $_POST['subject'] . '"';?> />
      </div>
      <div>
        <label for="email">E-mail <span class="contact-label-required">&#42;</span></label>
        <p class="form-error error-small"></p>
        <?php if(!empty($errors['email'])) echo '<p class="form-error error-small php">' . $errors['email'] . '</p>';?>
        <input class="contact-input" autocomplete="on" type="email" name="email" <?php if(!empty($_POST['email'])) echo 'value="' . $_POST['email'] . '"';?> required />
      </div>
    </fieldset>
    <fieldset class="contact-fieldset">
      <label for="message">Message <span class="contact-label-required">&#42;</span></label>
      <p class="form-error error-small"></p>
      <?php if(!empty($errors['message'])) echo '<p class="form-error error-small php">' . $errors['message'] . '</p>';?>
      <textarea class="contact-input contact-input-text" name="message" cols="30" rows="10" <?php if(!empty($_POST['message'])) echo 'value="' . $_POST['message'] . '"';?> required></textarea>
      <input class="contact-input contact-input-submit" type="submit" name="submit" value="submit" />
    </fieldset>
  </form>
</section>
