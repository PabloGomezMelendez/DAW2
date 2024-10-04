package POO.EjercicioD;

import java.util.Scanner;

public class EjercicioD {

	public static void main(String[] args) {
		Scanner s = new Scanner(System.in);

		// Nos creamos dos obj de Libro
		libro l1 = new libro("", "", "", 0);
		libro l2 = new libro("", "", "", 0);

		for (int i = 0; i < 2; i++) {
			System.out.println("\nVamos introducir los datos del libro " + (i + 1) + ".\n");
			System.out.print("Introduce el ISBN del libro: ");
			String isbn = s.nextLine();
			System.out.print("Introduce el nombre del libro: ");
			String nombreLib = s.nextLine();
			System.out.print("Introduce el nombre del autor: ");
			String autor = s.nextLine();
			System.out.print("Introduce el numero de paginas del libro: ");
			int numPag = s.nextInt();
			s.nextLine();

			if (i == 0) { // introducimos los datos de cada libro
				l1 = new libro(isbn, nombreLib, autor, numPag);
			} else {
				l2 = new libro(isbn, nombreLib, autor, numPag);
			}

		}

		// Mostramos los libros
		System.out.println("\nLos libros registrados son:\n");
		System.out.println(l1.toString());
		System.out.println(l2.toString());

		System.out.println();
		l1.masPaginas(l1, l2); // Comprobamos que libro tiene mas paginas

	}

}
