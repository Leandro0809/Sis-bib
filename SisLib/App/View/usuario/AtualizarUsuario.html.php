<?php include '../../../App/View/base.php' ?>
<div class="conteudoCadastroAutor">
    <h1>Atualizar Categoria</h1>

    <form method='POST' action="../../../App//Controller/Usuario/UsuarioUpdateStore.php">
        <div class="back">
        <div class="allinputs">
                <div id="divBuscaNome">
                    <input readonly class="campo"  type="text" name="id" value="<?php echo $id ?>"  placeholder="ID" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="text" name="nome" value="<?php echo $nome ?>"  placeholder="Nome" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    
                    <input class="campo" type="text" name="cpf" value="<?php echo $cpf ?>"  oninput="mascara(this)"  placeholder="CPF" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="text" name="telefone" value="<?php echo $telefone ?>"  placeholder="Telefone" oninput="telefone(this)" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="text" name="endereco" value="<?php echo $endereco ?>"   placeholder="Endereco" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="email" name="email" value="<?php echo $email ?>"  placeholder="Email" required />
                </div>
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
<script>
    function mascara(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}
</script>
</body>

</html>