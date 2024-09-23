package Funciones;

import java.util.Scanner;

public class EjercicioD {

	public static void main(String[] args) {
		generaBinario();
	}
	
	private static void generaBinario() {
		int numero = pideNuemroUsauario();
		String binario; 
		
		if (numero >= 0 && numero <= 255) {
			binario=Integer.toBinaryString(numero);
			System.out.println("El binario corespondiente al número "+numero+" es el "+binario);
			
		}else {
			System.out.println("El número se encuentra entre 0 y 255");
		}
		
	}
	
	private static int pideNuemroUsauario() {
		int a = 0;
		Scanner teclado = new Scanner(System.in);

		System.out.print("Introduce un número entre 0 y 255: ");
		a = teclado.nextInt();
		teclado.close();

		return a;

	}

}
