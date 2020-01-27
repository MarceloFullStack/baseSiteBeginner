//edit <h2>Editar pagina</h2>

<form action="" method="post">

    <div class="form-group">
        <label for="pagesTitle">Titulo</label>
        <input name="title" id="pagestitle" type="text" class="form-control" placeholder="aqui vai o titulo..." required value="pagina inicial">
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control" placeholder="URL amigavel">
        </div>

    </div>

    <div class="form-group">
        <input id="pagesBody" type="hidden" name="body" required value="<h3>pagina inicial</h3>">
        <trix-editor input="pagesBody"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">salvar</button>
    <hr>
</form>
<a class="btn btn-secondary" href="/admin/pages/1">voltar</a>
