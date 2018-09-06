<section class="contact">
  <header class="contact-header medium-title">
    <h1>Contact me</h1>
  </header>
  <form action="index.php?page=contact" method="post" class="contact-form wrap">
    <fieldset class="contact-fieldset">
      <div>
        <label for="name">Full name <span class="contact-label-required">&#42;</span></label>
        <p class="form-error error-small"></p>
        <input class="contact-input" autocomplete="on" type="text" name="name" required />
      </div>
      <div>
        <label for="subject">Subject</label>
        <p class="form-error error-small"></p>
        <input class="contact-input" type="text" name="subject" />
      </div>
      <div>
        <label for="email">E-mail <span class="contact-label-required">&#42;</span></label>
        <p class="form-error error-small"></p>
        <input class="contact-input" autocomplete="on" type="email" name="email" required />
      </div>
    </fieldset>
    <fieldset class="contact-fieldset">
      <label for="message">Message <span class="contact-label-required">&#42;</span></label>
      <p class="form-error error-small"></p>
      <textarea class="contact-input contact-input-text" name="message" cols="30" rows="10" required></textarea>
      <input class="contact-input contact-input-submit" type="submit" name="submit" value="submit" />
    </fieldset>
  </form>
</section>
