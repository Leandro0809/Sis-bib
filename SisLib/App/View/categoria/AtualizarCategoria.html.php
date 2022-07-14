<?php include '../../../App/View/base.php' ?>
<div class="conteudoCadastroAutor">
    <h1>Atualizar Categoria</h1>

    <form method='POST' action="../../../App/Controller/Categoria/CategoriaUpdateStore.php">
        <div class="back">
        <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" readonly type="text" name="id" value="<?php echo $id ?>" placeholder="" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="text" name="nome" value="<?php echo $nome ?>" placeholder="" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNacionalidade">
                    <input class="campo"  id="txtNome" type="text" name="setor" value="<?php echo $setor ?>" placeholder="Setor" required />
                </div>
                <div class="botoes">
                    <a class="btna" href="./autor.html">Cancelar</a>
                    <input class="btn" name="cadastrar" type="submit" />
                </div>
            </div>
        </div>
    </form>

</div>
</div>
</div>
</body>

</html>