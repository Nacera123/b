<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once ('config.php');
        if( isset($_POST['delete'])){
            $sql = "DELETE FROM identite WHERE id=" . $_POST['id'];
            if($conn->query($sql) === TRUE){
                echo "<div class='alert alert-success'>Successfully delete  user</div>";
            }
        }

        $sql="SELECT * FROM identite";
        $result = $conn->query($sql);  /* Execution de la requete avec retour d'un tableau*/ 
        if( $result->num_rows > 0)
        {
    ?>
    <h2>Tous les noms</h2> <br>
    <table class="table table-bordered table-striped">
		<tr>
            <td class="inp">Id </td>
			<td class="inp">Nom</td>
			<td width="70px" class="inp">Supprimer</td>
		</tr>
		<?php
	/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['id']."' name='id' />"; //added
		echo "<tr>";
        echo "<td class='toto'>".$row['id'] . "</td>";
		echo "<td class='toto'>".$row['nom'] . "</td>";

		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
		echo "</tr>";
		echo "</form>"; //added 
	}
	?>
	</table>
<?php 
}
else
{
	echo "<br><br>Pas d'enregistrements";
}
?> 


    
</body>
</html>