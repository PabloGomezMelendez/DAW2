package Funciones;

import java.util.Scanner;

public class EjercicioB {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		sumaNumerosPrimos();

	}

	private static void sumaNumerosPrimos() {

		int a, b, c = 0;

		a = pideNuemroUsauario();
		b = pideNuemroUsauario();

		c = calculoSumaImpares(a, b);

		System.out.println("El resultado de los impares entre los números " + a + " y " + b + " es igual a: " + c);

	}

	private static int calculoSumaImpares(int a, int b) {
		int numero1 = a;
		int numero2 = b;
		int suma = 0;

		if (numero1 != numero2) {
			if (numero1 < numero2) {
				System.out.println("Número 1: " + numero1 + " es menor que el número 2: " + numero2);
				for (int i = numero1; i <= numero2; i++) {
					if (i % 2 != 0) {
						System.out.println("Impar: "+i);
						suma += i;
					}else {
						System.out.println("Par: "+i);
					}
				}

			} else {
				System.out.println("Número 1: " + numero1 + " es mayor que el número 2: " + numero2);
				for (int i = numero2; i <= numero1; i++) {
					if (i % 2 != 0) {
						System.out.println("Impar: "+i);
						suma += i;
					}else {
						System.out.println("Par: "+i);
					}
				}
			}
		} else {
			System.err.println("SON EL MISMO NÚMERO: " + numero1 + " y " + numero2);
		}

		return suma;
	}

	private static int pideNuemroUsauario() {
		int a = 0;
		Scanner teclado = new Scanner(System.in);

		System.out.print("Introduce un número: ");
		a = teclado.nextInt();

		return a;

	}
}
