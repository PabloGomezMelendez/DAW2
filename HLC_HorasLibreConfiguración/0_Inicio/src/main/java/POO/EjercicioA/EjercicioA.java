package POO.EjercicioA;

import java.util.Scanner;

/*
Crea una clase llamada Cuenta que tendrá los siguientes atributos: titular y
cantidad (La cual puede tener decimales).
El titular será obligatorio y la cantidad es opcional. Crea dos constructores que cumpla lo anterior.
Crea sus métodos get, set y toString. Tendrá dos métodos especiales:
● ingresar(double cantidad): se ingresa una cantidad a la cuenta, si la cantidad introducida es
negativa, no se hará nada.
● retirar(double cantidad): se retira una cantidad a la cuenta, si restando la cantidad actual a la que
nos pasan es negativa, la cantidad de la cuenta pasa a ser 0

*/

public class EjercicioA {

	public static void main(String[] args) {
		Scanner s = new Scanner(System.in);

		boolean salir = false;

		System.out.print("Introduce tu nombre: ");
		String nombre = s.nextLine();
		System.out.print("Introduce el saldo de tu cuenta: ");
		double saldo = s.nextDouble();
		s.nextLine();

		cuenta cuenta = new cuenta(); // creamos el objeto cuenta

		do {
			System.out.println();
			System.out.println("- MENU CUENTA -");
			System.out.println("1. Ingresa.");
			System.out.println("2. Retirar.");
			System.out.println("3. Ver estado de la cuenta.");
			System.out.println("4. Salir.");
			System.out.print("Introduce una opcion: ");
			String opcion = s.nextLine();

			double cantidad = 0;
			switch (opcion) {

			case "1": // ingresa una cantidad pasada a la cuenta
				System.out.print("Introduce la cantidad a ingresar: ");
				cantidad = s.nextDouble();
				s.nextLine();
				cuenta.ingresar(cantidad);
				break;

			case "2": // retira una cantidad pasada a la cuenta
				System.out.print("Introduce la cantidad a retirar: ");
				cantidad = s.nextDouble();
				s.nextLine();
				cuenta.retirar(cantidad);
				break;

			case "3": // muestra informacion de la cuenta
				System.out.println("Informacion de la cuenta.");
				System.out.println(cuenta.toString());
				break;

			case "4": // sale del menu
				salir = true;
				System.out.println("Has salido del programa.");
				break;
			default:
				System.out.println("Esa opcion no existe.");
			}

		} while (!salir);


	}

}
