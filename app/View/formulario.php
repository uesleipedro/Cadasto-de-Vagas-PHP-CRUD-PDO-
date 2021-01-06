<main>

    <section>
        <a href="../../index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">

        <div class="form-group mt-3">
            <label for="titulo">Título</label>
            <input id="titulo" class="form-control" type="text" name="titulo" value="<?=$objVaga->titulo?>">
        </div>
        <div class="form-group mt-3">
            <label for="descricao">Descrição</label>
            <textarea id="descricao" class="form-control" name="descricao" rows="5"><?=$objVaga->descricao?></textarea>
        </div>

        <div class="form-group mt-3">
            <label for="descricao">Status</label>

            <div>
             
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked>Ativo 
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n" <?=$objVaga->ativo == 'n' ? 'checked' : '' ?>>Inativo 
                    </label>
                </div>

             </div>
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

</main>