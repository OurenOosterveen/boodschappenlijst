<?php require "views/partials/header.php"; ?>

    <table id="groceryList">
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
        </tr>

        <?php
        $total = 0;
        foreach ($groceries as $product) : ?>
        <?php $total += $product->price * $product->number?>
        <tr>
            <td> <?= $product->name ?> </td>
            <td class="productPrice"> <?= $product->price ?> </td>
            <td><input class="productQuantity" type="number" min="0" value= <?= $product->number ?>></td>
            <td class="productTotalCost"> <?= $product->price * $product->number ?> </td>
        </tr>
        <?php endforeach ?>
        <tr>
            <td>Totaal</td>
            <td></td>
            <td></td>
            <td id="totalCost"> <?= $total ?> </td>
        </tr>
    </table>

    <?php require "views/partials/footer.php"; ?>