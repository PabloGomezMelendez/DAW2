package POO.EjercicioF;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

//Ejercicio Ordenación 2.
//Crea 4 bolígrafos:
//Boli 1: Pilot SuperGrip 1€
//Boli 2: Pilot G2 1,3€
//Boli 3: Bic Cristal 0,5€
//Boli 4: Pilot G2 1,3€
//Compara el boli 1 con el 2, Compara el 2 con el 4.
//Ordena los bolis por marca.

public class EjercicioF {

	public static void main(String[] args) {
		Scanner s = new Scanner(System.in);

		ArrayList<boligrafo> bolis = new ArrayList<>();

		// Nos creamos 4 obj bolis
		boligrafo boli1 = new boligrafo("Pilot", "SuperGrip", 1);
		boligrafo boli2 = new boligrafo("Pilot", "G2", 1.3);
		boligrafo boli3 = new boligrafo("Bic", "Cristal", 0.5);
		boligrafo boli4 = new boligrafo("Pilot", "G2", 1.3);

		// Añadimos los objs al arrayList creado
		bolis.add(boli1);
		bolis.add(boli2);
		bolis.add(boli3);
		bolis.add(boli4);

		boolean salir = false;

		do {
			System.out.println("\n- MENU COMPARABLE -");
			System.out.println("1. Comparar boli 1 con boli 2.");
			System.out.println("2. Comparar boli 2 con boli 4.");
			System.out.println("3. Ordenar por marca.");
			System.out.println("4. Salir del menu.");
			System.out.print("Introduce un valor: ");
			String opcion = s.nextLine();

			switch (opcion) {
			case "1": // Compara el boli1 con el boli2
				boligrafo.comparaBolis(boli1, boli2);
				break;
			case "2": // Compara el boli2 con el boli4
				boligrafo.comparaBolis(boli2, boli4);
				break;
			case "3": // Ordena los bolis por marca
				Collections.sort(bolis);

				System.out.println("\nLos bolis ordenados por marca: \n");

				for (boligrafo tipoBoli : bolis) {
					System.out.println(tipoBoli);
				}
				break;
			case "4": // Sale del programa
				salir = true;
				System.out.println("\nHas salido del menu.");
				break;
			default:
				System.out.println("Esa opcion no esta disponible.");
				break;
			}
		} while (!salir);

	}

}
