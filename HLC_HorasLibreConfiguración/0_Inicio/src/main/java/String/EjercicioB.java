package String;

import java.util.Scanner;

public class EjercicioB {

	public static void main(String[] args) {

		Scanner scanner = new Scanner(System.in);

		System.out.println("Contador de dias. El formato de una fecha es: dd/MM/yyyy");

		// Solicitar la primera fecha

		System.out.println("Escriba la primera fecha:");

		String fecha1 = scanner.nextLine();

		// Solicitar la segunda fecha

		System.out.println("Escriba la segunda fecha:");

		String fecha2 = scanner.nextLine();

		try {

			// Validar formato de fechas

			validarFormatoFecha(fecha1);

			validarFormatoFecha(fecha2);

			// Preguntar cuál será la primera fecha

			System.out.println("¿Cuál de las 2 fechas será la primera? (Elija 1 o 2)");

			int eleccion = scanner.nextInt();

			scanner.nextLine(); // Consumir el salto de línea restante

			// Asignar el orden de las fechas

			String primeraFecha, segundaFecha;

			if (eleccion == 1) {

				primeraFecha = fecha1;

				segundaFecha = fecha2;

			} else {

				primeraFecha = fecha2;

				segundaFecha = fecha1;

			}

			// Mostrar el orden de las fechas

			System.out.println("La primera fecha es entonces: " + primeraFecha);

			System.out.println("La segunda fecha es entonces: " + segundaFecha);

			// Calcular la diferencia de días

			int diferenciaDias = calcularDiferenciaDias(primeraFecha, segundaFecha);

			System.out.println("La diferencia de días es: " + diferenciaDias);

		} catch (NumberFormatException e) {

			System.out.println("Formato de fechas incorrectas. Cerrando la aplicación.");

		} catch (MiExcepcion e) {

			System.out.println(e.getMessage());

		} catch (Exception e) {

			System.out.println("Se ha producido un error inesperado: " + e.getMessage());

		}

		scanner.close();

	}

	// Método para validar el formato de fecha (lanzará una excepción si es
	// incorrecto)

	private static void validarFormatoFecha(String fecha) throws NumberFormatException, MiExcepcion {

		String[] partes = fecha.split("/");

		if (partes.length != 3) {

			throw new NumberFormatException("Formato incorrecto");

		}

		int dia = Integer.parseInt(partes[0]);

		int mes = Integer.parseInt(partes[1]);

		int año = Integer.parseInt(partes[2]);

		// Lanzar excepción si la fecha es la del nacimiento (01/01/1990 en este
		// ejemplo)

		if (dia == 16 && mes == 07 && año == 1991) {

			throw new MiExcepcion("¡Error! Fecha de nacimiento detectada.");

		}

		// Verificar que los valores estén en el rango adecuado

		if (dia < 1 || dia > 30 || mes < 1 || mes > 12 || año < 1) {

			throw new NumberFormatException("Fecha inválida");

		}

	}

	// Método para calcular la diferencia de días entre dos fechas dadas

	private static int calcularDiferenciaDias(String fecha1, String fecha2) {

		// Convertir las fechas en arrays de enteros: [día, mes, año]

		int[] f1 = convertirFechaAArray(fecha1);

		int[] f2 = convertirFechaAArray(fecha2);

		// Convertir las fechas a "días totales" desde el año 0 (simplificación)

		int diasF1 = f1[2] * 365 + f1[1] * 30 + f1[0];

		int diasF2 = f2[2] * 365 + f2[1] * 30 + f2[0];

		// Calcular la diferencia absoluta entre los días

		return Math.abs(diasF1 - diasF2);

	}

	// Método auxiliar para convertir una fecha en formato dd/MM/yyyy a un array de
	// enteros

	private static int[] convertirFechaAArray(String fecha) {

		String[] partes = fecha.split("/");

		int dia = Integer.parseInt(partes[0]);

		int mes = Integer.parseInt(partes[1]);

		int año = Integer.parseInt(partes[2]);

		return new int[] { dia, mes, año };

	}

	// Excepción personalizada para la fecha de nacimiento

	static class MiExcepcion extends Exception {

		public MiExcepcion(String mensaje) {

			super(mensaje);

		}

	}

}
