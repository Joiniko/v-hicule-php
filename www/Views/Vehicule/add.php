<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un véhicule</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <?php include "../Views/header.php"; ?>

    <main>
        <h2>Ajouter un véhicule</h2>
        <form action="vehicule/save" method="POST" enctype="multipart/form-data">
            <label>Marque :</label>
            <input type="text" name="marque" required>
            <?php if (isset($errors['marque'])): ?>
							<span class="error"><?php echo $errors['marque'][0];?></span>
						<?php endif; ?>

						<label>Modèle :</label>
            <input type="text" name="modele" required>
            <?php if (isset($errors['modele'])): ?>
							<span class="error"><?php echo $errors['modele'][0];?></span>
						<?php endif; ?>

						<label>Année :</label>
            <input type="text" name="annee" required>
            <?php if (isset($errors['annee'])): ?>
							<span class="error"><?php echo $errors['annee'][0];?></span>
						<?php endif; ?>

						<label>Motorisation :</label>
            <select id="motorisation" name="motorisation" required>
							<option value="">Sélectionner le type de moteur</option>
							<option value="diesel" <?= (isset($_POST['motorisation']) && $_POST['motorisation'] === 'diesel') ? 'selected' : '' ?>>Diesel</option>
							<option value="unleaded" <?= (isset($_POST['motorisation']) && $_POST['motorisation'] === 'unleaded') ? 'selected' : '' ?>>Essence</option>
							<option value="electric" <?= (isset($_POST['motorisation']) && $_POST['motorisation'] === 'electric') ? 'selected' : '' ?>>Électrique</option>
						</select>
            <?php if (isset($errors['motorisation'])): ?>
							<span class="error"><?php echo $errors['motorisation'][0];?></span>
						<?php endif; ?>

						<label>Photo :</label>
            <input type="file" name="photo" accept="image/jpeg, image/png" required>
            <?php if (isset($errors['photo'])): ?>
							<span class="error"><?php echo $errors['photo'][0];?></span>
						<?php endif; ?>

						<label>Véhicule de collection :</label>
						<input type="checkbox" name="collection">
            <?php if (isset($errors['collection'])): ?>
							<span class="error"><?php echo $errors['collection'][0];?></span>
						<?php endif; ?>

						 <div class="buttons">
								<button type="submit">Ajouter</button>
								<button type="reset">Annuler</button>
						</div>
				</form>
    </main>

    <?php include "../Views/footer.php"; ?>

</body>
</html>
