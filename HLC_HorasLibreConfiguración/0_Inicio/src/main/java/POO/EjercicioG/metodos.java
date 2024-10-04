package POO.EjercicioG;

public class metodos {
	/**
	 * Muestra un mensaje segun el peso de la persona.
	 * @param p
	 */
	public static void tipoPeso(persona p) {
		int IMC = p.calcularIMC();
		switch (IMC) {
		case persona.INFRAPESO:
			System.out.println("La persona esta por debajo de su peso ideal.");
			break;
		case persona.PESOIDEAL:
			System.out.println("La persona esta en su peso ideal.");
			break;
		case persona.SOBREPESO:
			System.out.println("La persona esta por encima de su peso ideal.");
			break;
		}
	}
	
	/**
	 * Muestra un mensaje segun la edad de la persona.
	 * @param p
	 */
	public static void comprobarEdad(persona p) {
		if (p.esMayorDeEdad() == true) {
			System.out.println("La persona es mayor de edad.");
		} else {
			System.out.println("La persona es menor de edad.");
		}
	}
	
	/**
	 * Muestra el menu principal del programa.
	 */
	public static void menuPrincipal() {
		System.out.println("\n- REGISTRO DE PERSONAS -");
		System.out.println("1. Introducir datos.");
		System.out.println("2. Comprobar peso ideal.");
		System.out.println("3. Comprobar la edad.");
		System.out.println("4. Mostrar todos los datos.");
		System.out.println("5. Salir del menu.");
		System.out.print("Introduce una opcion: ");
	}
	
	/**
	 * Muestra el submenu del programa.
	 */
	public static void menuPersona() {
		System.out.println("\n- ELIGE UNA PERSONA -");
		System.out.println("1. Persona 1.");
		System.out.println("2. Persona 2.");
		System.out.println("3. Persona 3.");
		System.out.println("4. Salir del submenu.");
		System.out.print("Selecciona una persona: ");
	}

}
