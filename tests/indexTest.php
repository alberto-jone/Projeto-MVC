use PHPUnit\Framework\TestCase;

<?php


class ChessGameTest extends TestCase
{
    public function testChessboardRendering()
    {
        ob_start();
        include 'index.php';
        $output = ob_get_clean();

        // Check if the chessboard is rendered with 64 squares
        $this->assertStringContainsString('class="tabuleiro-xadrez"', $output);
        $this->assertEquals(64, substr_count($output, 'data-linha='));
    }

    public function testUserGreeting()
    {
        // Simulate user data
        $dado = ['nome' => 'João Silva'];
        ob_start();
        include 'index.php';
        $output = ob_get_clean();

        // Check if the user greeting is displayed correctly
        $this->assertStringContainsString('Olá, João Silva! Pronto para jogar?', $output);
    }
}