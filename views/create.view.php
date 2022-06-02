 
<?php require "views/partials/header.php" ?>


<form action="" method="POST">
    <label for="gname"> Boodschap </lable>
    <input type="text" name="groceryname" id="gname">

    <label for="gcost"> Hoeveelheid </label>
    <input type="number" name="grocerynum" id="gnum" value=0 min=0>
    
    <label for="gcost"> Kosten per stuk </label>
    <input type="number" name="grocerycost" id="gcost" value=0 step="0.01" min=0>

    <input type="submit" value="invoeren">
</form>

<?php require "views/partials/footer.php" ?>