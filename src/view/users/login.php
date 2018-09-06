<section class="login">
  <header class="login-header medium-title">
    <h1>Login</h1>
  </header>
  <form action="index.php?page=login" method="post" class="login-form wrap">
    <input type="hidden" name="action" value="login" />
    <div>
      <label>Email</label>
      <input class="login-input" type="text" name="email" placeholder="email" />
    </div>
    <div>
      <label>Password</label>
      <input class="login-input" type="password" name="password" placeholder="password" />
    </div>
    <input class="login-input login-input-submit" type="submit" name="submit" value="login" />
  </form>
</section>
