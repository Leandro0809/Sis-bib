<?php include '../../../App/View/base.php' ?>
<div class="conteudoCadastroAutor">
    <h1>Cadastro Usuário</h1>

    <form method='POST' action="../../../App//Controller/Usuario/UsuarioStore.php">
        <div class="back">
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="text" name="nome"  placeholder="Nome" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    
                    <input class="campo" type="text" name="cpf" oninput="mascara(this)"  placeholder="CPF" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="text" name="telefone" placeholder="Telefone" oninput="telefone(this)" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="text" name="endereco"  placeholder="Endereco" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="email" name="email"  placeholder="Email" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNome">
                    <input class="campo" type="password" name="senha"  placeholder="Senha" required />
                </div>
            </div>
            <div class="allinputs">
                <div id="divBuscaNacionalidade">
                    <input class="campo"  id="txtNome" type="password"  name="confirmar_senha" placeholder="Confirmar senha" required />
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

<script>
    
</script>
</body>

</html>