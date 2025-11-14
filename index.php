<?php include('entete.php'); ?>
    <header>
        <h1>TP Numéro 4</h1>
        <nav>
        </nav>
    </header>        
        
    
    <section>
        <h2>Connexion</h2>

        <form action ="connexion.php" method="post">
            <label for="identifiant">Identifiant :</label>
            <input type="text" id="identifiant" name="identifiant">

            <label for="mdp">Mot de passe :</label>
            <input type="password" id="mdp" name="mdp">

            <button type="submit">Envoyer</button>
        </form>
    </section>
<?php include('piedpage.php'); ?>
   
