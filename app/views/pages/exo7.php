<?php ob_start(); ?>
<?php $title = 'Colyseum Exo 7' ?>
<section class="py-4 py-xl-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Card</th>
                <th scope="col">Card Number</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $key => $client) { ?>
                <tr>
                    <td><?= $client->firstName ?></td>
                    <td><?= $client->lastName ?></td>
                    <td><?= $client->card ?></td>
                    <td><?= $client->cardNumber ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</section>
<?php $content = ob_get_clean();
include __DIR__ . '/../layout.php';
?>