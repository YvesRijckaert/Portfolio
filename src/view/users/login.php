<section class="login">
  <h2 class="login-header medium-title">Login</h2>
  <form action="index.php?page=login" method="post" class="login-form wrap">
    <input type="hidden" name="action" value="login" />
    <div>
      <label for="email">E-mail</label>
      <p class="form-error error-small"></p>
      <?php if(!empty($errors['email'])) echo '<p class="form-error error-small php">' . $errors['email'] . '</p>';?>
      <input class="input" id="email" autocomplete="on" type="text" name="email" placeholder="e-mail" <?php if(!empty($_POST['email'])) echo 'value="' . $_POST['email'] . '"';?> required />
    </div>
    <div>
      <label for="password">Password</label>
      <p class="form-error error-small"></p>
      <?php if(!empty($errors['password'])) echo '<p class="form-error error-small php">' . $errors['password'] . '</p>';?>
      <input class="input" id="password" autocomplete="on" type="password" name="password" placeholder="password" />
    </div>
    <input class="input input-submit" type="submit" name="submit" value="login" />
  </form>
</section>
