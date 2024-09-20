package Funciones;

public class EjercicioA {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		System.out.println("PRUEBA 1: DOS NÚMEROS IGUALES");
		listarNuemrosIntermedios(0, 0);
		
		System.out.println("PRUEBA 2: NÚMEROS 1 ES 0 NÚMEROS 2 ES 10");
		listarNuemrosIntermedios(0, 10);
		
		System.out.println("PRUEBA 3: NÚMEROS 10 ES 0 NÚMEROS 2 ES 0");
		listarNuemrosIntermedios(10, 0);

	}

	private static void listarNuemrosIntermedios(int numero1, int numero2) {
		if (numero1 != numero2) {
			if (numero1 < numero2) {
				System.out.println("Número 1: "+numero1+" es menor que el número 2: "+ numero2);
				for (int i = numero1; i <= numero2; i++) {
					System.out.println(i);
				}

			} else {
				System.out.println("Número 1: "+numero1+" es mayor que el número 2: "+ numero2);
				for (int i = numero2; i <= numero1; i++) {
					System.out.println(i);
				}
			}
		}else {
			System.err.println("SON EL MISMO NÚMERO: "+ numero1 +" y "+numero2 );
		}

	}

}
