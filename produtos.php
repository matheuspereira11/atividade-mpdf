<?php
$produtos = [
    [
        'nome' => 'Bola profissional',
        'categoria' => 'equipamentos',
        'preco' => '139.90',
        'descricao' => 'Bola oficial, com custura reforçada e alto acabamento'
    ],
    [
        'nome' => 'Camisa do Sâo Paulo',
        'categoria' => 'Roupas',
        'preco' => '129.90',
        'descricao' => 'Camisa oficial do São Paulo, modelo 2024,'
    ],
    [
        'nome' => 'Meião Adidas ',
        'categoria' => 'roupa e equipamentos',
        'preco' => '30.70',
        'descricao' => 'Meião Adidas, alto conforto, tecido Poliéster'
    ],
    [
        'nome' => 'chuteira nike',
        'categoria' => 'equipamentos',
        'preco' => '399.90',
        'descricao' => 'Chuteira oficial, alta tecnologia, chuteira de campo, travas de metal'
    ],
    [
        'nome' => 'luva de goleiro',
        'categoria' => 'equipamentos',
        'preco' => '80.90',
        'descricao' => 'Luva amadora, impermeavel, Grip Gel '
    ]
];
 
require_once '../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
 
 
$html = '
<h1>Relatório de Produtos</h1>
<p>Data de geração: 31/10/24 </p>
<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>';
 
foreach ($produtos as $produto) {
    $html .= '
        <tr>
            <td>' . $produto['nome'] . '</td>
            <td>' . $produto['categoria'] . '</td>
            <td>' . $produto['preco'] . '</td>
            <td>' . $produto['descricao'] . '</td>
        </tr>';
}
// Fecha a tabela e finaliza o HTML
$html .= '</tbody></table>';
 
 
$mpdf->WriteHTML($html);
$mpdf->Output();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>