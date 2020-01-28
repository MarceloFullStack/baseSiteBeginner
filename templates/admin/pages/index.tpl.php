<table class="table table-hover">
    <thead>
    <tr>
        <th>#</th>
        <th>titulo</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data['pages'] as $key => $pages) { ?>
        <tr>
            <td><?= $pages['id'] ?></td>
            <td><a href="/admin/pages/<?= $pages['id'] ?>"><?= $pages['title'] ?></a></td>
            <td class="text-right"><a href="/admin/pages/<?= $pages['id'] ?>" class="btn btn-primary btn-sm">ver</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<h2 class="mb-5">admin pages</h2>

<a class="btn btn-secondary" href="/admin/pages/create">Criar Novo</a>