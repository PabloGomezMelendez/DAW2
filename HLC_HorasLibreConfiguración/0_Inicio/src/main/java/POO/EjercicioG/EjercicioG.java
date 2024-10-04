package POO.EjercicioG;

//Haz una clase llamada Persona que siga las siguientes condiciones:
//● Sus atributos son: nombre, edad, DNI, sexo (H hombre, M mujer), peso y altura.
//No queremos que se accedan directamente a ellos. Piensa que modificador de acceso es
//el más adecuado, también su tipo. Si quieres añadir algún atributo puedes hacerlo.
//● Por defecto, todos los atributos menos el DNI serán valores por defecto según su tipo
//(0 números, cadena vacía para String, etc.). Sexo sera hombre por defecto, usa una constante para
//ello.
//● Se implantaran varios constructores:
//○ Un constructor por defecto.
//○ Un constructor con el nombre, edad y sexo, el resto por defecto.
//○ Un constructor con todos los atributos como parámetro.
//● Los métodos que se implementaran son:
//○ calcularIMC() : calculara si la persona esta en su peso ideal (peso en kg/(altura^2
//en m)), si esta fórmula devuelve un valor menor que 20, la función devuelve un -1, si devuelve un
//número entre 20 y 25 (incluidos), significa que esta por debajo de su peso ideal la función devuelve
//un 0 y si devuelve un valor mayor que 25 significa que tiene sobrepeso, la función devuelve un 1.
//○ esMayorDeEdad() : indica si es mayor de edad, devuelve un booleano.
//○ comprobarSexo(char sexo) : comprueba que el sexo introducido es correcto. Si
//no es correcto, sera H. No sera visible al exterior.
//○ toString() : devuelve toda la información del objeto.
//○ generaDNI() : genera un número aleatorio de 8 cifras, genera a partir de este su
//número su letra correspondiente. Este método sera invocado cuando se construya el objeto. Puedes
//dividir el método para que te sea más fácil. No será visible al exterior.
//○ Métodos set de cada parámetro, excepto de DNI.
//Ahora, crea una clase ejecutable que haga lo siguiente:
//● Pide por teclado el nombre, la edad, sexo, peso y altura.
//● Crea 3 objetos de la clase anterior, el primer objeto obtendrá las anteriores variables
//pedidas por teclado, el segundo objeto obtendrá todos los anteriores menos el peso y la altura y el
//último por defecto, para este último utiliza los métodos set para darle a los atributos un valor.
//● Para cada objeto, deberá comprobar si esta en su peso ideal, tiene sobrepeso o por
//debajo de su peso ideal con un mensaje.
//● Indicar para cada objeto si es mayor de edad.
//● Por último, mostrar la información de cada objeto.


import java.util.Scanner;

public class EjercicioG {

	public static void main(String[] args) {
		Scanner s = new Scanner(System.in);

		boolean salir = false, salir2 = false, datos1 = false;

		String nombre = "";
		int edad = 0;
		char sexo = 'H';
		double peso = 0.0, altura = 0.0;

		// Definimos 3 objetos personas.
		persona p1 = new persona();
		persona p2 = new persona(nombre, edad, sexo);
		persona p3 = new persona(nombre, edad, peso, altura, sexo);

		do {
			salir2 = false;
			
			metodos.menuPrincipal();
			String opcion = s.nextLine();

			switch (opcion) {
			case "1": //Ingresamos los datos de las personas.
				do {

					metodos.menuPersona();
					String persona = s.nextLine();

					switch (persona) {
					case "1":
						p1.setNombre("Daniel");
						p1.setEdad(30);
						p1.setPeso(80);
						p1.setAltura(1.83);
						p1.setSexo('H');
						System.out.println("\nLos datos de la persona 1 se han guardado correctamente.");
						break;
					case "2":
						p2.setNombre("Laura");
						p2.setEdad(27);
						p2.setPeso(60);
						p2.setAltura(1.58);
						p2.setSexo('M');
						System.out.println("\nLos datos de la persona 2 se han guardado correctamente.");
						break;
					case "3":
						System.out.print("\nIntroduce el nombre: ");
						nombre = s.nextLine();

						System.out.print("Introduce la edad: ");
						edad = s.nextInt();

						System.out.print("Introduce el sexo (H/M): ");
						sexo = s.next().charAt(0);

						System.out.print("Introduce el peso: ");
						peso = s.nextDouble();

						System.out.print("Introduce la altura: ");
						altura = s.nextDouble();
						s.nextLine();

						p3 = new persona(nombre, edad, peso, altura, sexo);
						break;
					case "4":
						salir2 = true;
						System.out.println("\nHas salido del submenu.");
						break;
					default:
						System.out.println("\nEsa opcion no existe.");
						break;
					}
				} while (!salir2);
				datos1 = true;
				break;
			case "2": //Comprobamos el peso de cada persona.
				if (datos1) {
					System.out.println("\nComprobacion del peso de la persona 1: ");
					metodos.tipoPeso(p1);
					System.out.println("\nComprobacion del peso de la persona 2: ");
					metodos.tipoPeso(p2);
					System.out.println("\nComprobacion del peso de la persona 3: ");
					metodos.tipoPeso(p3);
				} else {
					System.out.println("\nTienes que introducir los datos de las personas antes.");
				}
				break;
			case "3": //Comprobamos la edad de cada persona.
				if (datos1) {
					System.out.println("\nComprobacion edad de la persona 1: ");
					metodos.comprobarEdad(p1);
					System.out.println("\nComprobacion edad de la persona 2: ");
					metodos.comprobarEdad(p2);
					System.out.println("\nComprobacion edad de la persona 3: ");
					metodos.comprobarEdad(p3);					
				} else {
					System.out.println("\nTienes que introducir los datos de las personas antes.");
				}
				break;
			case "4": //Mostramos todos los datos de las personas.
				if (datos1) {
					System.out.println("\nDatos de la persona 1: ");
					System.out.println(p1.toString());
					System.out.println("\nDatos de la persona 2: ");
					System.out.println(p2.toString());
					System.out.println("\nDatos de la persona 3: ");
					System.out.println(p3.toString());					
				} else {
					System.out.println("\nTienes que introducir los datos de las personas antes.");
				}
				break;
			case "5": //Salimos del programa.
				salir = true;
				System.out.println("\nHas salido del programa.");
				break;
			default:
				break;
			}
		} while (!salir);

	}

}
