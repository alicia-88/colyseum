<?php ob_start(); ?>
<?php $title = 'Colyseum Exo 6' ?>
<section class="py-4 py-xl-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Artiste</th>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shows as $key => $show) { ?>
                <tr>
                    <th scope="row"><?= $show->id ?></th>
                    <td><?= $show->title ?></td>
                    <td><?= $show->performer ?></td>
                    <td><?= $show->date->format('d/m/Y') ?></td>
                    <td><?= $show->startTime ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</section>
<?php $content = ob_get_clean();
include __DIR__ . '/../layout.php';
?>