

<?php
// Gerando uma chave criptografada
$key = random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);

// Criando um número único para a critografia
$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

// Usando a chave para criptografar a informação
$mensagemCifrada = sodium_crypto_secretbox('Mensagem criptografada.', $nonce, $key);

/**
 * ..A MENSAGEM É ENVIADA..
 */
$conteudo = sodium_crypto_secretbox($mensagemCifrada, $nonce, $key);
if ($conteudo === false) {
    var_dump("ERRO");
}

/** sodium_bin2hex Converte uma string binária bruta em uma string codificada em hexadecimal **/
echo sodium_bin2hex($conteudo);

?>