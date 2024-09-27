package Matrices;

import java.util.Scanner;

public class EjercicioB {
	private static Scanner teclado;
	private static int numero_de_matrix_rellenada = 1;

	public static void main(String[] args) {
//		iniciliza las variables
		teclado = new Scanner(System.in);

		int filas = pide_un_lenght();

		int[][] matriz1 = new int[filas][filas];
		int[][] matriz2 = new int[filas][filas];
		int[][] sumaMatrices = new int[filas][filas];

//		trabajamos con la primera matriz
		System.out.println(" RELLENA LA MATRIZ: " + numero_de_matrix_rellenada);
		rellenaMatriz(matriz1);
		System.out.println(" VALORES DE LA MATRIZ: " + numero_de_matrix_rellenada);
		mostrarMatriz(matriz1);
		System.out.println();
		
//		trabajamos con la Segunda matriz
		System.out.println(" RELLENA LA MATRIZ: " + numero_de_matrix_rellenada);
		rellenaMatriz(matriz2);
		System.out.println(" VALORES DE LA MATRIZ: " + numero_de_matrix_rellenada);
		mostrarMatriz(matriz1);
		System.out.println();
		
//		Sumamos las matrices
		sumarMatrices(matriz1, matriz2, sumaMatrices);
		
//		Mostramos el resultado
		mostrarMatriz(sumaMatrices);

		teclado.close();

	}

	private static void mostrarMatriz(int[][] matriz) {
		for (int[] is : matriz) {

			for (int is2 : is) {
				System.out.print(is2 + " ");
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

	private static void sumarMatrices(int[][] matriz1, int[][] matriz2, int[][] sumaMatrices) {
		for (int i = 0; i < matriz1.length; i++) {
			for (int j = 0; j < matriz1[i].length; j++) {
				sumaMatrices[i][j] = matriz1[i][j] + matriz2[i][j];
			}
		}

	}

	private static int pide_un_lenght() {
		int resul = 0;
		System.out.print("Introduce el tamaño de la matriz interior: ");
		resul = teclado.nextInt();

		return resul;
	}

	private static void rellenaMatriz(int[][] matriz) {
		for (int i = 0; i < matriz.length; i++) {
			for (int j = 0; j < matriz[i].length; j++) {
				matriz[i][j] = pide_un_valor_matriz(i, j);
			}
		}
		numero_de_matrix_rellenada++;

	}

	private static int pide_un_valor_matriz(int i, int j) {
		int resul = 0;
		System.out.print("Introduce el valor de la fila " + i + " y de la colunma " + j + " de la matriz "
				+ numero_de_matrix_rellenada + " : ");
		resul = teclado.nextInt();

		return resul;
	}

}
