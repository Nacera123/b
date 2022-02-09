<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="headers.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>




       <?php 
            require('config.php');

                if(isset($_POST['register'])){

                    if(empty($_POST['nom'])){
                    
                        echo "Champs obligatoires"; 
                    }else{	
                        $nom =$_POST['nom'];

                        $sql = "INSERT INTO identite(nom) 
                        VALUES('$nom')";
            
                        if( $conn->query($sql) === TRUE ){
                            echo "<div class='alert alert-primary' role='alert'><br>Nouvel utilisateur ajouté avec succès <br>
                            cliquer sur afficher pour voir tous les nom <a href='les_noms.php'><button  class='btn' type='button'> Afficher</button></a>
                            </div>";
                        }else{
                            echo "<div class='alert alert-danger'>Error: ajout impossible</div>";
                        }

                    }
                }

       ?>
    <div class="container"><br>
        <form action="" method="post">
            <div class="register"><br>
                <label for="nom" >NOM</label>
                <input type="text"  name="nom" placeholder="ajoute ton nom">
            </div>
            <div class="dbtn">
            <button  class="btn" type="submit"  name="register"> register</button>
            </div>
        </form>
    </div>
</body>
</html>