<?php $this->view('template/header'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">
        Tacio's Framework v.1.0
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->url(); ?>">Home</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">

    <div class="text-center">
        <h1><?= $hello; ?></h1>
        <p><?= $message; ?></p>
    </div>
    
    <table class="table table-striped table-hovered">
        <tr>
            <th>ID</th>
            <th>Venda</th>
            <th>Cliente</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($vendas as $venda) { ?>
            <tr>
                <td><?= $venda->id; ?></td>
                <td><?= $venda->codigo; ?></td>
                <td><?php print_r($venda->cliente('cliente_id', $venda->cliente_id)); ?></td>
                <td>Ações</td>
            </tr>
        <?php } ?>
    </table>

</div>

<?php $this->view('template/footer'); ?>
