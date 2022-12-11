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
                    <h1>Seja bem vindo</h2>       
<form>               
  
    <div >
        <input type="email" placeholder="Digite um email válido" class="inputs required" oninput="emailValidate()">
              <span class="span-required">Digite um email válido</span>
       
    </div>
    <div >
        <input type="password" placeholder="Digite sua senha" class="inputs required"  oninput="mainPasswordValidate()">
        <span class="span-required">A senha deve ter no minimo 8 caracteres</span>
    </div>
 
    <button type="submit">Entrar</button>
  
</form>
    </div>
    
</body>
</html>