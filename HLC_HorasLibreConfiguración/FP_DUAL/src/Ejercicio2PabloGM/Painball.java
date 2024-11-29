package Ejercicio2PabloGM;

import java.lang.Math;
import java.util.Scanner;

public class Painball {
	// variables
	private static final int MAX = 1000000000;

	// METODOS ESPECIFICOS
	public int selcionaNivel() {
		Scanner teclado = new Scanner(System.in);
		int nivel = 0;
		System.out.println("¿Que nivel desea jugar? ");
		System.out.println("1-Nivel facil(100-500 puntos)");
		// falta desarolar las clasesniveles para/ poder bloquear el acceso
		/*
		 * System.out.
		 * println("2-Nivel medio(500-1500 puntos)[Debes superlos 500 puntos en el nivel 1 para desbloquear]"
		 * ); System.out.println(
		 * "3-Nivel ENDEMONIADO(1500-2000 puntos)[Debes superlos 1500 puntos en el nivel 2 para desbloquear]"
		 * );
		 */
		System.out.print("Que nivel desea --> ");
		nivel = teclado.nextInt();
		return nivel;
	}// fin selecionar nivel

	public void iniciarJuego() {
		int nivel = selcionaNivel();

		switch (nivel) {
		case 0:
			huevoDePascua();
			break;
		case 1:
			juegoNivel1();
			break;
		/*
		 * case 2: // juegoNivel2(); break; case 3: // juegoNivel3(); break;
		 */
		default:
			System.out.println("No existe aun el nivel que ha selecionado");
		}
	}// fin jugar

	private void huevoDePascua() {

		System.out.println("Puntos: " + MAX + " | Se ha alcanzado la puntuacion maxima");
		System.out.println("ENHORA BUENA ERES EL CAMPEON INDISCUTIBLE DEL PINBALL");

	}

	private void juegoNivel1() {
		int puntosNivel = 0;
		int aux;
		int puntRuleta;
		// inicio
		System.out.println("Puntos: " + puntosNivel + " | Se inicia la partida");
		aux = (int) (Math.random() * 10 + 1);
		// desciende por tabla
		puntosNivel += aux;
		System.out.println("Puntos: " + puntosNivel + " | La bola desciende por un panel rebotando entre " + aux
				+ " palos (un punto revote en palo)");
		aux = (int) (Math.random() * 10 + 1);
		// sale por una de 3 puertas
		if (aux > 5) {
			puntosNivel += 10;
			System.out.println("Puntos: " + puntosNivel + " | La bola sale por la pueta de 10 puntos");
		} else {
			if (aux < 5) {
				puntosNivel += 20;
				System.out.println("Puntos: " + puntosNivel + " | La bola sale por la pueta de 20 puntos");
			} else {
				puntosNivel += 50;
				System.out.println("Puntos: " + puntosNivel + " | La bola sale por la pueta de 50 puntos");
			}
		}
		// bucle de juego
		do {
			aux = (int) (Math.random() * 100 + 1);
			if (1 <= aux && aux <= 25) {
				if (aux == 1 && puntosNivel < 125) {
					puntRuleta = 125 - puntosNivel;
					puntosNivel += puntRuleta;
					System.out.println("Puntos: " + puntosNivel + " | La bola cae en el agujero de la ruleta de "
							+ puntRuleta + " puntos");
				} else {
					if (aux == 25) {
						puntosNivel += 25;
						System.out.println("Puntos: " + puntosNivel + " | La bola pasa por un aro de 25 puntos");
					} else {
						puntosNivel += 5;
						System.out.println("Puntos: " + puntosNivel + " | La bola revota en un trampolin");
					}
				}
			} // fin 0-25

			if (25 < aux && aux <= 50) {
				if (aux == 50 && puntosNivel < 350) {
					puntRuleta = 350 - puntosNivel;
					puntosNivel += puntRuleta;
					System.out.println("Puntos: " + puntosNivel + " | La bola cae en el agujero de la ruleta de "
							+ puntRuleta + " puntos");
				} else {
					if (aux == 50) {
						puntosNivel += 50;
						System.out.println("Puntos: " + puntosNivel + " | La bola pasa por un aro de 50 puntos");
					} else {
						puntosNivel += 5;
						System.out.println("Puntos: " + puntosNivel + " | La bola golpea la pelota con una palanca");
					}
				}
			} // fin 25-50

			if (50 < aux && aux <= 75) {
				if (aux == 75 && puntosNivel < 475) {
					puntRuleta = 475 - puntosNivel;
					puntosNivel += puntRuleta;
					System.out.println("Puntos: " + puntosNivel + " | La bola cae en el agujero de la ruleta de "
							+ puntRuleta + " puntos");
				} else {
					if (aux == 75) {
						puntosNivel += 75;
						System.out.println("Puntos: " + puntosNivel + " | La bola pasa por un aro de 75 puntos");
					} else {
						puntosNivel += 5;
						System.out.println("Puntos: " + puntosNivel + " | La bola golpea la pelota con una palanca");
					}
				}
			} // fin 50-75

			if (75 < aux && aux <= 100) {
				if (aux == 100 && puntosNivel < 500) {
					puntRuleta = 500 - puntosNivel;
					puntosNivel += puntRuleta;
					System.out.println("Puntos: " + puntosNivel + " | La bola cae en el agujero de la ruleta de "
							+ puntRuleta + " puntos");
				}
			} // fin 75-100

		} while (100 >= puntosNivel && puntosNivel <= 500);
		System.out.println("GAME OVER");
		System.out.println("Su puntacion final es de " + puntosNivel);
		System.out.println("Le faltan " + (MAX - puntosNivel) + " puntos para alcanzar la maxima puntuacion posible");

	}// fin ninel 1

}// fin painBall