<?php

require_once __DIR__ . '/vendor/autoload.php';
    $bodyHtml = '<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <link rel=\"stylesheet\" href=\"body.css\">
        <title>Document</title>
    </head>
    <body>
        <table>
            <caption>DUDU Inescrupuloso</caption>
            <thead>
              <tr>
                <th class=\"ID\" scope=\"col\">ID</th>
                <th class=\"Assoc\" scope=\"col\">Nr. Assoc.</th>
                <th class=\"Nome\" scope=\"col\">Nome/Razão Social</th>
                <th class=\"Telefone\" scope=\"col\">Telefone</th>
                <th class=\"status\" scope=\"col\">Situação</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope=\"row\">1</td>
                <td>111</td>
                <td>Loren da Silva Ribeiro Neto Junior de Paula</td>
                <td>21 985488547</td>
                <td>Ativo</td>
              </tr>
              <tr>
                <td scope=\"row\">1</td>
                <td>111</td>
                <td>Loren da Silva Ribeiro Neto Junior de Paula</td>
                <td>21 985488547</td>
                <td>Inativo</td>
              </tr>
            </tbody>
          </table>
    </body>
    </html>
    ';
    $mpdf = new \Mpdf\Mpdf();
    $css = file_get_contents("body.css");
    $mpdf->WriteHTML($css,1);
    $mpdf->WriteHTML($bodyHtml);
    $mpdf->Output();
?>
Teste
