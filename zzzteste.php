<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário NPS</title>
</head>
<body>

    <h1>Formulário NPS</h1>
    
    <form action="processa_formulario.php" method="post">
        
        <!-- Pergunta 1 -->
        <p>1. Em uma escala de 0 a 10, o quanto você recomendaria nosso serviço?</p>
        <input type="number" name="pergunta1" min="0" max="10" required>
        
        <!-- Pergunta 2 -->
        <p>2. Você ficou satisfeito com a qualidade do atendimento?</p>
        <select name="pergunta2" required>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
        
        <!-- Pergunta 3 -->
        <p>3. O que podemos fazer para melhorar sua experiência?</p>
        <textarea name="pergunta3" rows="4" cols="50"></textarea>
        
        <!-- Pergunta 4 -->
        <p>4. A navegação em nosso site foi fácil e intuitiva?</p>
        <select name="pergunta4" required>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
        
        <!-- Pergunta 5 -->
        <p>5. Em uma palavra, como você descreveria sua experiência?</p>
        <input type="text" name="pergunta5" maxlength="20" required>
        
        <!-- Botão de envio -->
        <input type="submit" value="Enviar">
        
    </form>

</body>
</html>
