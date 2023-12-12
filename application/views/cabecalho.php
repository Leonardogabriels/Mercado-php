<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css")?>">
</head>
<body>
    <div>
    <?php if ($this->session->flashdata("success")) : ?>
       <p class="alert alert-success"> <?= $this->session->flashdata("success"); ?></p>
        <?php endif ?>

       <?php if ($this->session->flashdata("danger")) : ?>
       <p class="alert alert-danger"> <?= $this->session->flashdata("danger"); ?></p>
        <?php endif ?>