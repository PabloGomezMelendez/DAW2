package caraCruz;

import java.util.Random;
import java.util.Scanner;

public class CaraCruz {
	private static volatile String coinFace = "Cara"; // Cara inicial
	private static volatile boolean gameRunning = true; // Estado del juego
	private static volatile boolean playerAnswered = false; // Si el jugador respondió
	private static volatile String playerGuess = ""; // Adivinanza del jugador

	public static void main(String[] args) {
		// Crear hilos
		Thread coinThread = new Thread(new CoinFlipper());
		Thread timerThread = new Thread(new Timer());

		// Iniciar hilos
		coinThread.start();
		timerThread.start();

		// Lógica del jugador (en el hilo principal)
		try (Scanner scanner = new Scanner(System.in)) {
			while (gameRunning) {
				System.out.println("¿Cara o Cruz? (Escribe tu elección): ");
				playerGuess = scanner.nextLine().trim();
				playerAnswered = true; // Marcar que el jugador respondió
			}
		}

		// Esperar a que los hilos terminen
		try {
			coinThread.join();
			timerThread.join();
		} catch (InterruptedException e) {
			Thread.currentThread().interrupt();
		}

		System.out.println("Juego terminado. ¡Gracias por jugar!");
	}

	// Clase para simular el lanzamiento de la moneda
	static class CoinFlipper implements Runnable {
		private final Random random = new Random();

		@Override
		public void run() {
			while (gameRunning) {
				coinFace = random.nextBoolean() ? "Cara" : "Cruz";

				try {
					Thread.sleep(500); // Cambiar la cara de la moneda cada 0.5 segundos
				} catch (InterruptedException e) {
					Thread.currentThread().interrupt();
				}

				if (playerAnswered) {
					checkGuess(); // Verificar la adivinanza
				}
			}
		}

		private void checkGuess() {
			if (playerGuess.equalsIgnoreCase(coinFace)) {
				System.out.println("¡Correcto! La moneda mostró: " + coinFace);
			} else {
				System.out.println("Incorrecto. La moneda mostró: " + coinFace);
			}
			playerAnswered = false; // Resetear la respuesta del jugador
		}
	}

	// Clase para manejar el temporizador
	static class Timer implements Runnable {
		@Override
		public void run() {
			int timeLimit = 20; // Duración del juego en segundos
			while (timeLimit > 0 && gameRunning) {
				System.out.println("Tiempo restante: " + timeLimit + " segundos");
				timeLimit--;

				try {
					Thread.sleep(1000); // Esperar un segundo
				} catch (InterruptedException e) {
					Thread.currentThread().interrupt();
				}
			}

			// Terminar el juego
			gameRunning = false;
			System.out.println("¡Se acabó el tiempo!");
		}
	}
}
