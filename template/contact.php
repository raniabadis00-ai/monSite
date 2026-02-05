<h1><?= $title ?></h1>

<form action="" method="post">

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="saisissez votre mail">
    </div>

    <div>
        <label for="subject">Subject</label>
        <select name="subject" id="subject">
            <option value="refund">Remboursement</option>
            <option value="help">Aide</option>
            <option value="problem">Probleme</option>
        </select>
    </div>

    <div>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" row="10"></textarea>
    </div>

    <button type="submit">Soumettre</button>

</form>
