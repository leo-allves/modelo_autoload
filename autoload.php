<?php
// # criando o autoload para puxar os arq. automaticamente com PDR-4


# Nesse caso serve para qualquer sistema Linux, Mac ou Windows
spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '\classes\\';
    $dirSep = DIRECTORY_SEPARATOR; // DIRECTORY_SEPARATOR pega o padrão do sistema usado
    $file = $baseDir . $dirSep . str_replace('\\', $dirSep, $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});



//OU


# Nesse caso ele somente inverte as barras


// spl_autoload_register(function($class){
//     #echo "CLASSE: ".$class."<br/>"; //imprimir o diretorio

//     $baseDir = __DIR__.'/classes/';
//     #se for para sistema linux e mac, precisa usar o str_replace, p. inverter as barras \ p. /
//     $file = $baseDir.str_replace('\\','/', $class).'.php';

//     #echo "<br/>".$baseDir."<br/>"; //imprimir o diretorio para ver a necessidade da barra
//     if (file_exists($file)) {
//         require $file;
//     } 
// });