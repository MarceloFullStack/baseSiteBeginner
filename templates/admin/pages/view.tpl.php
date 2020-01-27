<?php include __DIR__.'/../../BASE/footer.php'?>

//view
<h2 class="mb-5">Ver detalhes da pagina</h2>

<div class="row">
    <div class="col-4">
        <dl class="row">
            <dt class="col-sm-4">titulo</dt>
            <dd class="col-sm-8">pagina inicial</dd>

            <dt class="col-sm-4">URL</dt>
            <dd class="col-sm-8">/ - <a href="/" target="_blank">abrir</a></dd>

            <dt class="col-sm-4">criado em</dt>
            <dd class="col-sm-8">2020-01-01 10:10</dd>

            <dt class="col-sm-4">atualizado</dt>
            <dd class="col-sm-8">2020-01-01 10:10</dd>
        </dl>
    </div>
    <div class="col bg-light">
        <h3>pagina inicial</h3>
        <p>esta e a pagina inicial do site</p>
    </div>
</div>

<p>
    <a href="/admin/pages/1/edit" class="btn btn-primary">editar</a>

    <a href="/admin/pages/1/delete" class="btn btn-danger">remover</a>
</p>

<a class="btn btn-secondary" href="/admin/pages">voltar</a>

<?php include __DIR__.'/../../BASE/footer.php'?>
