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

    <div class="name">
        <form>
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name">
        </form>
    </div>
    <div class="idade">
        <form>
            <label for="idade">Idade: </label>
            <input type="number" name="idade" id="idade">
        </form>
    </div>
    <div class="sexo">
        <form>
            <label for="sexo">Sexo: </label>
            <select name="sexo" id="sexo">
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="binario">Nao binario</option>
                <option value="hetero">Hetero top</option>
                <option value="careca">Careca</option>
                <option value="calvo">calvo</option>
            </select>
        </form>
    </div>
    <div class="endereco">
        <form>
            <label for="endereco">Endereço: </label>
            <input type="text" name="endereco" id="endereco">
        </form>
    </div>
    <div class="país">
        <form>
            <label for="país">País: </label>
            <input type="país" name="país" id="país">
        </form>
    </div>
    <div class="estado">
        <form>
            <label for="estado">Estado: </label>
            <input type="estado" name="estado" id="estado">
        </form>
    </div>
    <div class="cidade">
        <form>
            <label for="cidade">Cidade: </label>
            <input type="cidade" name="cidade" id="cidade">
        </form>
    </div>
    <div class="telefone">
        <form>
            <label for="telefone">Telefone: </label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
        </form>
    </div>
    <div class="email">
        <form>
            <label for="email">E-mail: </label>
            <input type="email" id="email" name="email">
        </form>
    </div>
    <div class="linkedin">
        <form>
            <label for="linkedin">Linkedin: </label>
            <input type="linkedin" id="linkedin" name="linkedin">
        </form>
    </div>
    <div class="git-hub">
        <form>
            <label for="git-hub">Git-Hub: </label>
            <input type="git-hub" id="git-hub" name="git-hub">
        </form>
    </div>

</body>
</html>