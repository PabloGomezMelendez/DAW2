package POO.EjercicioC;

import java.util.Scanner;

/*
Igual que el ejercicio b) pero suponiendo que no se introduce el precio por
litro. Solo existen tres productos con precios: 1- 0,6 €/litro, 2- 3 €/litro y 3- 1,25 €/litro.
*/

public class EjercicioC {

	public static void main(String[] args) {
		Scanner s = new Scanner(System.in);

		boolean salir = false;
		String codigoFact = "";
		String opcion = "";
		double cantLitros = 0;
		double precioLitros = 0;
		final double PRECIOART1 = 0.6, PRECIOART2 = 3, PRECIOART3 = 1.25;
		
		factura facturas[] = new factura[5]; // nos creamos un array para almacenar todas las facturas

		for (int i = 0; i < 5; i++) {
			salir = false;
			do {
				System.out.println("\n- MENU DE PRODUCTOS -");
				System.out.println("1. Producto uno.");
				System.out.println("2. Producto dos.");
				System.out.println("3. Producto tres.");
				System.out.print("Selecciona un producto: \n");
				opcion = s.nextLine();

				switch (opcion) {
				case "1":
					System.out.println("\nEl precio del producto seleccionado es de 0,6€.\n");
					precioLitros = PRECIOART1;
					salir = true;
					break;
				case "2":
					System.out.println("\nEl precio del producto seleccionado es de 3€.\n");
					precioLitros = PRECIOART2;
					salir = true;
					break;
				case "3":
					System.out.println("\nEl precio del producto seleccionado es de 1,25€.\n");
					precioLitros = PRECIOART3;
					salir = true;
					break;
				default:
					System.out.println("Esa opcion no existe. Vuelve a intentarlo.");
					break;
				}
			} while (!salir);

			System.out.println("\nIntroducimos los datos de la factura " + (i + 1) + ".\n");
			System.out.print("Introduce el codigo de la factura: ");
			codigoFact = s.nextLine();
			System.out.print("Introduce la cantidad de litros vendido: ");
			cantLitros = s.nextDouble();

			s.nextLine();

			factura factura = new factura(codigoFact, cantLitros, precioLitros); // nos creamos un obj factura

			facturas[i] = factura; // guardamos el obj en el array

		}

		System.out.println("\nLas facturas guardadas son: ");
		for (factura f : facturas) {
			System.out.println(f);
		}
		System.out.println();

		// utilizamos los metodos creados en la clase
		factura.factTotal(facturas);
		factura.litrosVend(facturas);
		factura.factura600(facturas);

	}

}
