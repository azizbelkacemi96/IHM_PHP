
<h1 class="my-5"> Mes Bons </h1>
<button class="btn btn-outline-success w-100 my-5" onclick="alert('Error')"> Ajouter un bon </button>
<table class="table table-striped my-5">
    <thead>
        <tr>
            <th class="w-100"> ID de la commande </th>
            <th class="w-100"> Fournissuer </th>
            <th class="w-100"> Prix </th>
            <th class="w-100"> Date </th>
            <th class="w-100"> Status </th>
            <th class="w-100"> Details </th>
            <th class="w-100"> Supprimer </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($orders as $line) { ?>
            <tr>
                <td class="w-20"> <?= $line["id"]; ?> </td>
                <td class="w-20"> <?= $line["supplier"]; ?> </td>
                <td class="w-20"> $<?= $line["amount"]; ?> </td>
                <td class="w-20"> <?= $line["date"]; ?> </td>
                <td class="w-20"> <?= getStatus($line["status"]["status"]); ?> </td>
                <td>
                    <button class="btn btn-outline-info w-100" onclick="window.location.replace('Index.php?Track=<?= $line["id"]; ?>')"> voir détails </button>
                </td>
                <td>
                    <button class="btn btn-outline-danger w-100" onclick="alert('Error')"> Sup </button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php if($track > 0 && $track <= sizeof($orders)) { ?>
    <div class="d-flex flex-column flex-md-row justify-content-around my-5">
        <p class="p-5 text-center bg-<?= getColor($orders[$track - 1]["status"]["status"], 0); ?> shadow border rounded-circle">
           RECUS
            <br/>
        </p>
        <p class="p-5 text-center bg-<?= getColor($orders[$track - 1]["status"]["status"], 1); ?> shadow border rounded-circle">
            EN COURS
            <br/>
        </p>
        <p class="p-5 text-center bg-<?= getColor($orders[$track - 1]["status"]["status"], 2); ?> shadow border rounded-circle">
            LIVRE
            <br/>
        </p>
    </div>
<?php } ?>
