<!DOCTYPE html>
<html lang="pt-BR"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Xadrez</title>
    <style>
        /* Estilos existentes */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f9;
        }
        header, footer {
            background-color: #333;
            color: white;
            padding: 15px 20px;
            text-align: center;
            width: 100%;
        }
        main {
            margin: 20px 0;
            text-align: center;
        }
        .tabuleiro-xadrez {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
            border: 2px solid #333;
            margin: 20px auto;
        }
        .tabuleiro-xadrez div {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            cursor: pointer;
        }
        .tabuleiro-xadrez .branco {
            background-color: #fff;
        }
        .tabuleiro-xadrez .preto {
            background-color: #000;
            color: white;
        }
        .info-usuario {
            margin-bottom: 20px;
            font-size: 18px;
            color: #555;
        }
        .btn-voltar {
            margin: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-voltar:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo ao Jogo de Xadrez</h1>
        <p>Desfrute de um clássico jogo de xadrez com um toque moderno!</p>
        <p><a href="./Routes/cost.php">Home</a></p>
        <p><a href="https://www.chesshotel.com/pt/game">Jogar</a></p>
    </header>
    <main>
        <!-- <button class="btn-voltar" onclick="window.location.href='../Routes/cost.php'">Voltar à Página Inicial</button> -->
        <?php
        // Exemplo de dados do usuário
        // $dado = ['nome' => 'João Silva'];

        // Exibir o nome do usuário
        echo '<div class="info-usuario">Olá, ' . htmlspecialchars($dado['nome']) . '! Pronto para jogar?</div>';
        ?>

        <div class="tabuleiro-xadrez" id="tabuleiro">
            <?php
            $pecas = [
                '♖', '♘', '♗', '♕', '♔', '♗', '♘', '♖',
                '♙', '♙', '♙', '♙', '♙', '♙', '♙', '♙',
                '', '', '', '', '', '', '', '',
                '', '', '', '', '', '', '', '',
                '', '', '', '', '', '', '', '',
                '', '', '', '', '', '', '', '',
                '♟', '♟', '♟', '♟', '♟', '♟', '♟', '♟',
                '♜', '♞', '♝', '♛', '♚', '♝', '♞', '♜'
            ];
            for ($linha = 0; $linha < 8; $linha++) {
                for ($coluna = 0; $coluna < 8; $coluna++) {
                    $ehBranco = ($linha + $coluna) % 2 === 0;
                    $peca = $pecas[$linha * 8 + $coluna];
                    echo '<div class="' . ($ehBranco ? 'branco' : 'preto') . '" data-linha="' . $linha . '" data-coluna="' . $coluna . '">';
                    if ($peca) {
                        echo '<span class="peca">' . $peca . '</span>';
                    }
                    echo '</div>';
                }
            }
            ?>
        </div>
    </main>
    <footer>
        <p>Jogo de Xadrez © 2023 | Criado para fins de demonstração</p>
        <p>Contato: xadrez@exemplo.com</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let selecionado = null;

        function validarMovimento(origem, destino, peca) {
            // Adicione aqui a lógica para validar os movimentos de cada peça
            // Exemplo básico para peões:
            const origemLinha = parseInt(origem.data('linha'));
            const origemColuna = parseInt(origem.data('coluna'));
            const destinoLinha = parseInt(destino.data('linha'));
            const destinoColuna = parseInt(destino.data('coluna'));

            if (peca === '♙') {
                return destinoLinha === origemLinha - 1 && destinoColuna === origemColuna;
            }
            if (peca === '♟') {
                return destinoLinha === origemLinha + 1 && destinoColuna === origemColuna;
            }
            // Adicione regras para outras peças
            return true;
        }

        $('.tabuleiro-xadrez div').on('click', function () {
            const casa = $(this);
            if (selecionado) {
                const peca = selecionado.find('.peca').text();
                if (validarMovimento(selecionado, casa, peca)) {
                    casa.html(selecionado.html());
                    selecionado.html('');
                    selecionado = null;
                } else {
                    alert('Movimento inválido!');
                }
            } else if (casa.find('.peca').length > 0) {
                selecionado = casa;
            }
        });
    </script>
</body>
</html>
