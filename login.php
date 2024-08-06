<?php


// it's generally a good idea to wrap the reader in a try/catch block because it WILL throw eventually
try{
    $result = (new \chillerlan\QRCode\QRCode())->readFromFile('path/to/file.png'); // -> DecoderResult

    // you can now use the result instance...
    $content = $result->data;
    $matrix  = $result->getMatrix(); // -> QRMatrix

    // ...or simply cast it to string to get the content:
    $content = (string)$result;
}
catch(Throwable $e){
    // oopsies!
}