<?php
include '../../../App/View/base.php';
require_once '../../../App/Controller/Autor/AutorController.php';

?>
    <div class="conteudoAutor">
      <div class="adicionarEPesquisar">
        <div class="botaoAdd">
          <a class="adicionarAutor" href="../../../App/Controller/Autor/AutorCreate.php">Adicionar Autor</a>
        </div>
        <div>
          <div id="divBusca">
            <input type="text" id="txtBusca" placeholder="Buscar..." /><img src="../../../App/View/img/icon seach.png" id="btnBusca" alt="Buscar" />
          </div>
        </div>
      </div>
      <?php
      if (isset($_POST['excluir'])){                                    
      $id = $_POST['id'];      
      $autor->delete($id);
}
      ?>
      <div class="tabelaAutor">
        <hr />
        <table class="tabela" border="1">
          <thead>
            <tr>
              <td>ID</td>
              <td>Nome</td>
              <td>Nacionalidade</td>
              <td></td>
            </tr>
          </thead>

          <?php
          foreach ($autor->findAll() as $key => $value) { ?>
          <tr>
            <td> <?php echo $value->idautor;?> </td> 
            <td> <?php echo $value->nome;?> </td> 
            <td> <?php echo $value->nacionalidade;?> </td>
            <td>
                <form method="post" action="../../../App/Controller/Autor/AutorUpdate.php">
                        <input name="id" type="hidden" value="<?php echo $value->idautor;?>"/>                  
                        <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                        <input name="nacionalidade" type="hidden" value="<?php echo $value->nacionalidade;?>"/>
                        <button name="alterar" type="submit">Alterar</button>
                </form>
            <td> 
                <form method="post" >
                    <input name="id" type="hidden" value="<?php echo $value->idautor;?>"/>
                    <button name="excluir" type="submit" >Excluir</button>
                </form>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>