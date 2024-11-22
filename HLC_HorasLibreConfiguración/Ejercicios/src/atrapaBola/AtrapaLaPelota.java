package atrapaBola;


import java.util.Random;
import java.util.Scanner;

public class AtrapaLaPelota {
    private static volatile boolean gameRunning = true;
    private static volatile int ballPositionX = 0;
    private static volatile int ballPositionY = 0;
    private static final int GRID_SIZE = 5;
    private static volatile int score = 0;

    public static void main(String[] args) {
        Thread ballThread = new Thread(new BallMover());
        Thread timerThread = new Thread(new Timer());

        ballThread.start();
        timerThread.start();

        try (Scanner scanner = new Scanner(System.in)) {
            while (gameRunning) {
                System.out.println("Introduce una posición (x y): ");
                int playerX = scanner.nextInt();
                int playerY = scanner.nextInt();

                if (playerX == ballPositionX && playerY == ballPositionY) {
                    System.out.println("¡Atrápaste la pelota!");
                    score++;
                } else {
                    System.out.println("¡Fallaste! La pelota no está allí.");
                }
            }
        }

        try {
            ballThread.join();
            timerThread.join();
        } catch (InterruptedException e) {
            Thread.currentThread().interrupt();
        }

        System.out.println("Juego terminado. Tu puntuación es: " + score);
    }

    static class BallMover implements Runnable {
        private final Random random = new Random();

        @Override
        public void run() {
            while (gameRunning) {
                ballPositionX = random.nextInt(GRID_SIZE);
                ballPositionY = random.nextInt(GRID_SIZE);
                System.out.println("La pelota se movió a una nueva posición.");
                try {
                    Thread.sleep(2000);
                } catch (InterruptedException e) {
                    Thread.currentThread().interrupt();
                }
            }
        }
    }

    static class Timer implements Runnable {
        @Override
        public void run() {
            int timeLimit = 30;
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
            System.out.println("¡El tiempo se acabó!");
        }
    }
}
