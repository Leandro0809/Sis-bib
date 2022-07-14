<?php include '../../../App/View/base.php';



?>
<div class="conteudoCadastroAutor">
    <h1>Cadastro Livro</h1>

    <form method='POST' action="">
        <div class="back">
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="text" name="nome" placeholder="Nome" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="text" name="descricao" placeholder="Descrição" required />
                </div>
            </div>

            <!--  -->
            <div class="allinputs">
                <div id="divBuscaNome">
                    <!-- <select name="select"> -->
                    <select style="align-items: center;" class="campo" name="cars" id="cars">
                    <?php
                    $categoria = new CategoriaController;

                    foreach ($categoria->findAll() as $key => $value) { ?>
                        <option value=<?php echo $value->idcategoria;?>><?php echo $value->nome;?></option>
                        
                <?php    } ?>
                </section>

                    <!-- </select> -->
                </div>
            </div>

            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="number" name="quantidade" placeholder="Quantidade" required />
                </div>
            </div>
            <div class="botoes">
                <a class="btna" href="./autor.html">Cancelar</a>
                <input class="btn" name="cadastrar" type="submit" />
            </div>
        </div>
    </form>

</div>
</div>
</div>
</body>

</html>