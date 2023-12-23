<div id="contact" class="container mt-5">
  <h2>Contactez-moi</h2>
<div class="container mt-4">
    <p class="text-muted">
      En soumettant ce formulaire, vous consentez à ce que nous recevions et traitons les informations fournies. Nous ne conservons pas vos données personnelles après le traitement de votre demande.
    </p>
  <form action="php/traitement_contact.php" method="post">
    <div class="form-group">
      <label for="nom">Nom de l'expéditeur:</label>
      <input type="text" class="form-control" id="nom" name="nom" required>
    </div>

    <div class="form-group">
      <label for="email">Adresse de courriel:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="form-group">
      <label for="objet">Objet du message:</label>
      <input type="text" class="form-control" id="objet" name="objet" required>
    </div>

    <div class="form-group">
      <label for="message">Contenu du message:</label>
      <textarea class="form-control" id="message" name="message" required></textarea>
    </div>

    <!-- Ajoutez le widget reCAPTCHA -->
    <div class="form-group">
      <div class="g-recaptcha" data-sitekey="6LeAmjopAAAAACW8Wv0XCBhjXFnRaDp2ULBmqI4h"></div>
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>