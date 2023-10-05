<?php ob_start(); ?>
<?php $title = 'Colyseum Exo 2' ?>
<section class="py-4 py-xl-5">
    <ul class="nav nav-tabs">
        <?php foreach ($showTypes as $key => $showType) { ?>
            <li class="nav-item">
                <a class="nav-link" href="http://colyseum.localhost/shows/<?= $showType->id ?>"><?= $showType->type ?></a>
            </li>
        <?php } ?>
    </ul>
</section>
<?php $content = ob_get_clean();
include __DIR__ . '/../layout.php';
?>