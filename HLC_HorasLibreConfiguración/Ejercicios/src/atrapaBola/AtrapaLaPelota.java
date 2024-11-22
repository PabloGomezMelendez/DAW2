package atrapaBola;
import java.util.Random;
import java.util.Scanner;

public class AtrapaLaPelota {
    private static volatile boolean gameRunning = true; // Controla el estado del juego
    private static volatile int ballPositionX = 0; // Posición de la pelota
    private static volatile int ballPositionY = 0; // Posición de la pelota
    private static final int GRID_SIZE = 5; // Tamaño de la cuadrícula (5x5)
    private static volatile int score = 0; // Puntuación del jugador

    public static void main(String[] args) {
        // Crear hilos
        Thread ballThread = new Thread(new BallMover());
        Thread timerThread = new Thread(new Timer());

        // Iniciar hilos
        ballThread.start();
        timerThread.start();

        // Lógica del jugador (en el hilo principal)
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

        // Finalizar juego
        try {
            ballThread.join();
            timerThread.join();
        } catch (InterruptedException e) {
            Thread.currentThread().interrupt();
        }

        System.out.println("Juego terminado. Tu puntuación es: " + score);
    }

    // Clase para mover la pelota
    static class BallMover implements Runnable {
        private final Random random = new Random();

        @Override
        public void run() {
            while (gameRunning) {
                ballPositionX = random.nextInt(GRID_SIZE);
                ballPositionY = random.nextInt(GRID_SIZE);

                System.out.println("La pelota se movió a una nueva posición.");
                try {
                    Thread.sleep(2000); // Cambiar la posición cada 2 segundos
                } catch (InterruptedException e) {
                    Thread.currentThread().interrupt();
                }
            }
        }
    }

    // Clase para manejar el temporizador
    static class Timer implements Runnable {
        @Override
        public void run() {
            int timeLimit = 30; // Duración del juego en segundos
            while (timeLimit > 0 && gameRunning) {
                System.out.println("Tiempo restante: " + timeLimit + " segundos");
                timeLimit--;

                try {
                    Thread.sleep(1000); // Actualizar cada segundo
                } catch (InterruptedException e) {
                    Thread.currentThread().interrupt();
                }
            }

            // Terminar el juego cuando el tiempo se acabe
            gameRunning = false;
            System.out.println("¡El tiempo se acabó!");
        }
    }
}
