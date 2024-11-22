package caraCruz;


import java.util.Random;
import java.util.Scanner;

public class CaraCruz {
    private static volatile String coinFace = "Cara";
    private static volatile boolean gameRunning = true;
    private static volatile boolean playerAnswered = false;
    private static volatile String playerGuess = "";

    public static void main(String[] args) {
        Thread coinThread = new Thread(new CoinFlipper());
        Thread timerThread = new Thread(new Timer());

        coinThread.start();
        timerThread.start();

        try (Scanner scanner = new Scanner(System.in)) {
            while (gameRunning) {
                System.out.println("¿Cara o Cruz? (Escribe tu elección): ");
                playerGuess = scanner.nextLine().trim();
                playerAnswered = true;
            }
        }

        try {
            coinThread.join();
            timerThread.join();
        } catch (InterruptedException e) {
            Thread.currentThread().interrupt();
        }

        System.out.println("Juego terminado. ¡Gracias por jugar!");
    }

    static class CoinFlipper implements Runnable {
        private final Random random = new Random();

        @Override
        public void run() {
            while (gameRunning) {
                coinFace = random.nextBoolean() ? "Cara" : "Cruz";

                try {
                    Thread.sleep(500);
                } catch (InterruptedException e) {
                    Thread.currentThread().interrupt();
                }

                if (playerAnswered) {
                    checkGuess();
                }
            }
        }

        private void checkGuess() {
            if (playerGuess.equalsIgnoreCase(coinFace)) {
                System.out.println("¡Correcto! La moneda mostró: " + coinFace);
            } else {
                System.out.println("Incorrecto. La moneda mostró: " + coinFace);
            }
            playerAnswered = false;
        }
    }

    static class Timer implements Runnable {
        @Override
        public void run() {
            int timeLimit = 20;
            while (timeLimit > 0 && gameRunning) {
                System.out.println("Tiempo restante: " + timeLimit + " segundos");
                timeLimit--;

                try {
                    Thread.sleep(1000);
                } catch (InterruptedException e) {
                    Thread.currentThread().interrupt();
                }
            }
            gameRunning = false;
            System.out.println("¡Se acabó el tiempo!");
        }
    }
}
