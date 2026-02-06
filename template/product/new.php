<h1><?= $title ?></h1>

<form action="" method="post">

    <div>
        <label for="title">Title</label>
        <input id="title" type="text" name="title" placeholder="saisissez le nom du produit">
    </div>

    <div>
        <label for="price">Price</label>
        <input id="price" type="number" name="price" placeholder="saisissez le prix">
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" row="10"></textarea>
    </div>

    <button type="submit">Soumettre</button>

</form>