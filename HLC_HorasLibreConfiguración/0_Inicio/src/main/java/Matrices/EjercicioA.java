package Matrices;

import java.util.Scanner;

public class EjercicioA {
	private static final Scanner TECLADO = new Scanner(System.in);
	private static final int NUEMRO_CINCO = 5;
	private static final int NUEMRO_MAXIMO = 11;

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int lenghtMatiz2 = pide_un_lenght();
		int[][] matriz = new int[NUEMRO_CINCO][lenghtMatiz2];
		rellenaMatriz(matriz);
		mostrarMatriz(matriz);

	}

	private static void mostrarMatriz(int[][] matriz) {
		for (int[] is : matriz) {
			
			for (int is2 : is) {
				System.out.print(is2+" ");
			}
			System.out.println("");
		}
//		for (int i = 0; i < NUEMRO_CINCO; i++) {
//			for (int j = 0; j < matriz[i].length; j++) {
//				System.out.println(matriz[i][j]+" ");
//			}
//			System.out.println("");
//		}
		
	}

	private static void rellenaMatriz(int[][] matriz) {
		for (int i = 0; i < NUEMRO_CINCO; i++) {
			for (int j = 0; j < matriz[i].length; j++) {
				matriz[i][j]=(int) (Math.random()*NUEMRO_MAXIMO);
			}
		}
		
	}

	private static int pide_un_lenght() {
		int resul = 0;
		System.out.print("Introduce el tamaño de la matriz interior: ");
		resul = TECLADO.nextInt();
		TECLADO.close();
		return resul;
	}

}
