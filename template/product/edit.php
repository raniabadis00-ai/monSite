<h1><?= $title ?></h1>

<form action="/product/<?= $product->getId() ?>/delete" method="post">
    <input type="hidden" name="_METHOD" value="DELETE">
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

<form action="" method="post">
    <div>
        <label for="title">Title</label>
        <input id="title" type="text" name="title" placeholder="saisissez le nom du produit" value = "<?= $product->getTitle() ?>" required>
    </div>

    <div>
        <label for="price">Price</label>
        <input id="price" type="number" placeholder="saisissez le prix" value="<?= $product->getPrice() ?>" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" row="10" placeholder="saisissez une description" style="resize: none;" required >
             <?= $product->getDescription() ?>
        </textarea>
    </div>

    <button type="submit">Modifier</button>
</form>