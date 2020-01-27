//create
<h2 class="mb-5">Criar nova pagina</h2>

    <form action="" method="post">

        <div class="form-group">
            <label for="pagesTitle">Titulo</label>
            <input name="title" id="pagestitle" type="text" class="form-control" placeholder="aqui vai o titulo..." required>
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
                <input id="pagesBody" type="hidden" name="body" required>
                <trix-editor input="pagesBody"></trix-editor>
            </div>
        <button type="submit" class="btn btn-primary">salvar</button>
        <hr>
    </form>

<a class="btn btn-secondary" href="/admin/pages">voltar</a>


