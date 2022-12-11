<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleForm.css">
   
    <title>Formulario JavaScript</title>
</head>
<body>
    <div class="content">
                    <h1>Criar sua conta</h2>       
<form>
    <div >
              <input type="text" placeholder="Digite seu nome" class="inputs required" oninput="nameValidate()">
              <span class="span-required">Nome deve ter no minimo 3 caracteres</span>
       
    </div>
    <div >
        <input type="email" placeholder="Digite um email válido" class="inputs required" oninput="emailValidate()">
              <span class="span-required">Digite um email válido</span>
       
    </div>
    <div >
        <input type="password" placeholder="Digite sua senha" class="inputs required"  oninput="mainPasswordValidate()">
        <span class="span-required">A senha deve ter no minimo 8 caracteres</span>
    </div>
    <div >
        <input type="password" placeholder="Repita sua senha" class="inputs required" 
       oninput="comparePassword()">
        <span class="span-required">As senhas devem ser compativeis</span>
    </div>
    <p>Sexo</p>
    <div class="box-select">
        <div>
        <input type="radio" id="masc" value="masc" name="sexo">
        <label for="masc">Masculino</label>
    </div>
    <div>
        <input type="radio" id="fem" value="fem" name="sexo">
        <label for="fem">Feminino</label>
    </div>
    <div>
        <input type="radio" id="outro" value="outro" name="sexo">
        <label for="outro">Outros</label>
    </div>
    </div>
    <p>Como conheceu nossos produtos ?</p>
    <div class="box-select">
        <div>
        <input type="checkbox" id="internet" value="internet" name="midia">
        <label for="internet">Internet</label>
    </div>
    <div>
        <input type="checkbox" id="tv" value="tv" name="midia">
        <label for="tv">Televisão</label>
    </div>
    <div>
        <input type="checkbox" id="revista" value="revista" name="midia">
        <label for="outros">Revista</label>
    </div>
    <div>
        <input type="checkbox" id="outros" value="outros" name="midia">
        <label for="outros">outros</label>
    </div>
    </div>
    <button type="submit">Enviar</button>
   
</form>
    </div>
    
</body>
<script type="text/javascript" src="../js/valid.js"></script>
</html>