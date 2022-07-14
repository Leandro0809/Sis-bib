<?php include '../../../App/View/base.php' ?>
<div class="conteudoCadastroAutor">
    <h1>Cadastro Categoria</h1>

    <form method='POST' action="../../../App/Controller/Categoria/CategoriaStore.php">
        <div class="back">
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="text" name="nome"  placeholder="Nome" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNacionalidade">
                    <input class="campo"  id="txtNome" type="text"  name="setor" placeholder="Setor" required />
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