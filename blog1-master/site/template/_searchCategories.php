<?php $conn = new PDO("mysql:host=localhost;dbname=base1;charset=utf8;port=3306", "root", "", []); 

$req = $conn->prepare("SELECT * FROM categorie");

$req->execute(); 

$categories = $req->fetchAll(PDO::FETCH_OBJ);

//* var_dump($categories); //*

?>


<form action="#" method="post" name="searchCategorie">
    <select name="cat">
    	
    	<?php foreach ($categories as $categorie) : ?>
		<option value="<?php echo $categorie->id_categorie ?>"> 
			<?php echo $categorie->nom_categorie ?> 
		</option>
		<?php endforeach ?>
    </select>
    <input type="submit" name="Valider" value="Valider">
</form>
