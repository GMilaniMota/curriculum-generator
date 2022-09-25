<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
</head>
<body>
    
    <h1>Gerador de Currículos</h1>

    <div class="information">
        <form>
            <div class="nome">
                <label for="name">Nome: </label>
                <input type="text" name="name" id="name">
            </div>
            <div class="idade">
                <label for="idade">Idade: </label>
                <input type="number" name="idade" id="idade">
            </div>
            <div class="sexo">
                <label for="sexo">Sexo: </label>
                <select name="sexo" id="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="binario">Nao binario</option>
                    <option value="hetero">Hetero top</option>
                    <option value="careca">Careca</option>
                    <option value="calvo">calvo</option>
                </select>
            </div>
            <div class="endereco">
                <label for="endereco">Endereço: </label>
                <input type="text" name="endereco" id="endereco">
            </div>
            <div class="país">
                <label for="país">País: </label>
                <input type="país" name="país" id="país">
            </div>
            <div class="estado">
                <label for="estado">Estado: </label>
                <input type="estado" name="estado" id="estado">
            </div>
            <div class="cidade">
                <label for="cidade">Cidade: </label>
                <input type="cidade" name="cidade" id="cidade">
            </div>
            <div class="telefone">
                <label for="telefone">Telefone: </label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
            </div>
            <div class="email">
                <label for="email">E-mail: </label>
                <input type="email" id="email" name="email">
            </div>
            <div class="linkedin">
                <label for="linkedin">Linkedin: </label>
                <input type="linkedin" id="linkedin" name="linkedin">
            </div>
            <div class="git-hub">
                <label for="git-hub">Git-Hub: </label>
                <input type="git-hub" id="git-hub" name="git-hub">
            </div>
        </form>
    </div> 
</body>
</html>