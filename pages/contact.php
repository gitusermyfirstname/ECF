<div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <h1>Contact</h1>
    </div>
</div>
<div class="container">

    <form id="formulaireContact" action="../Php/php/contactMail.php" method="post">

        <div class="mb-3">
            <label for="NomInput" class="form-label">Nom</label>
            <input type="text" class="form-control" id="NomInput" placeholder="Votre nom" name="name">
            
            <div class="invalid-feedback">
                Le nom est requis
            </div>

      </div>

      <div class="mb-3">
          <label for="EmailInput" class="form-label">Email</label>
          <input type="email" name="EmailInput" class="form-control" id="EmailInput" placeholder="test@gmail.com" name="email">
        
          <div class="invalid-feedback">
            Email non valide
          </div>
          <div class="valid-feedback">
            Email valide
          </div>
      </div>

        <div class="">
              <label for="mail">Votre Mail ici</label>
              <textarea name="mail" class="champ" placeholder="" id="mail"></textarea>
        
              <div class="invalid-feedback">
                non ok
              </div>
              <div class="valid-feedback">
                ok
              </div>

        </div>

        <div class="text-center p-3">
            <button type="submit" class="btn btn-primary" id="btnContact">Envoyer</button>
        </div>
       
    </form>

    <div class="text-center pt-3">
        <a href="/home">Retour à home</a>
    </div>

</div>