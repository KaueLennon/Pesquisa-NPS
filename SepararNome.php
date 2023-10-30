$nomeCompleto = "João Maria da Rosa";

// Divida a string com base nos espaços em branco
$partesDoNome = explode(" ", $nomeCompleto);

// Pegue o primeiro elemento do array resultante
$primeiroNome = $partesDoNome[0];

echo $primeiroNome; // Isso imprimirá "João"
