<div class="container">
	<h1><?php echo $titulo;?></h1>

	<form class="form-horizontal" method="POST">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="user_nome">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="user_nome" type="text" placeholder="" class="form-control input-md" value="<?php echo $tabela['user_nome'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="user_login">Login</label>  
  <div class="col-md-4">
  <input id="email" name="user_login" type="text" placeholder="" class="form-control input-md"  value="<?php echo $tabela['user_login'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="user_senha">Senha</label>  
  <div class="col-md-4">
  <input id="cpf" name="user_senha" type="text" placeholder="" class="form-control input-md" value="<?php echo $tabela['user_senha'];?>">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-success">Alterar</button>
  </div>
</div>

</fieldset>
</form>

</div>
