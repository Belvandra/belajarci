<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <h1>Hello, <?= $name ? $name : "World!" ?></h1>
<?= $this->endSection() ?>