<?php ob_start(); ?>
<?php $title = 'Colyseum Exo 5' ?>
<section class="py-4 py-xl-5">
    <ul>
        <?php foreach ($clients as $key => $client) { ?>
            <li>
                <p>Nom : <?= $client->lastname ?></p>
                <p>Prénom : <?= $client->firstname ?></p>
            </li>
        <?php } ?>
    </ul>

</section>
<?php $content = ob_get_clean();
include __DIR__ . '/../layout.php';
?>