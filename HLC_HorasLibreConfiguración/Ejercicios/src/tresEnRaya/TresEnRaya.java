package tresEnRaya;
import java.util.Scanner;

public class TresEnRaya {
    private static final char EMPTY = ' ';
    private static final char PLAYER_X = 'X';
    private static final char PLAYER_O = 'O';
    private static char[][] board = {
        {EMPTY, EMPTY, EMPTY},
        {EMPTY, EMPTY, EMPTY},
        {EMPTY, EMPTY, EMPTY}
    };
    private static boolean gameRunning = true;

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        char currentPlayer = PLAYER_X;

        System.out.println("=== Bienvenido a Tres en Raya ===");
        System.out.println("Jugador 1: X | Jugador 2: O");
        System.out.println("Para jugar, introduce la fila y columna (0, 1 o 2)");

        while (gameRunning) {
            printBoard();
            System.out.println("Turno del jugador: " + currentPlayer);

            // Leer la posición del jugador
            int row = -1, col = -1;
            boolean validInput = false;

            while (!validInput) {
                System.out.print("Introduce fila (0-2): ");
                row = scanner.nextInt();
                System.out.print("Introduce columna (0-2): ");
                col = scanner.nextInt();

                if (isValidMove(row, col)) {
                    validInput = true;
                } else {
                    System.out.println("Movimiento no válido. Intenta otra vez.");
                }
            }

            // Realizar el movimiento
            board[row][col] = currentPlayer;

            // Verificar si hay ganador
            if (checkWinner(currentPlayer)) {
                printBoard();
                System.out.println("¡El jugador " + currentPlayer + " gana!");
                gameRunning = false;
                break;
            }

            // Verificar si hay empate
            if (isBoardFull()) {
                printBoard();
                System.out.println("¡Es un empate!");
                gameRunning = false;
                break;
            }

            // Cambiar turno
            currentPlayer = (currentPlayer == PLAYER_X) ? PLAYER_O : PLAYER_X;
        }

        // Reiniciar o salir
        System.out.println("¿Quieres jugar de nuevo? (s/n): ");
        char playAgain = scanner.next().toLowerCase().charAt(0);
        if (playAgain == 's') {
            resetGame();
            main(null); // Reiniciar el juego
        } else {
            System.out.println("¡Gracias por jugar! Adiós.");
        }

        scanner.close();
    }

    // Imprimir el tablero
    private static void printBoard() {
        System.out.println("  0 1 2");
        for (int i = 0; i < 3; i++) {
            System.out.print(i + " ");
            for (int j = 0; j < 3; j++) {
                System.out.print(board[i][j]);
                if (j < 2) System.out.print("|");
            }
            System.out.println();
            if (i < 2) System.out.println("  -----");
        }
    }

    // Verificar si un movimiento es válido
    private static boolean isValidMove(int row, int col) {
        return row >= 0 && row < 3 && col >= 0 && col < 3 && board[row][col] == EMPTY;
    }

    // Verificar si el tablero está lleno
    private static boolean isBoardFull() {
        for (int i = 0; i < 3; i++) {
            for (int j = 0; j < 3; j++) {
                if (board[i][j] == EMPTY) {
                    return false;
                }
            }
        }
        return true;
    }

    // Verificar si hay un ganador
    private static boolean checkWinner(char player) {
        // Verificar filas y columnas
        for (int i = 0; i < 3; i++) {
            if ((board[i][0] == player && board[i][1] == player && board[i][2] == player) || 
                (board[0][i] == player && board[1][i] == player && board[2][i] == player)) {
                return true;
            }
        }

        // Verificar diagonales
        if ((board[0][0] == player && board[1][1] == player && board[2][2] == player) || 
            (board[0][2] == player && board[1][1] == player && board[2][0] == player)) {
            return true;
        }

        return false;
    }

    // Reiniciar el juego
    private static void resetGame() {
        for (int i = 0; i < 3; i++) {
            for (int j = 0; j < 3; j++) {
                board[i][j] = EMPTY;
            }
        }
        gameRunning = true;
    }
}
