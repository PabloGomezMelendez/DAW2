package Funciones;

import java.util.Scanner;

public class EjercicioC {
	public static Scanner teclado = new Scanner(System.in);
	
	public static void main(String[] args) {
		areaFiguras();
	}

	private static void areaFiguras() {
		int menu = 0;
		
		do {
			menu = muestraMenudeAreas();
			
			calculaAreas(menu);
			
		} while (menu==0);
		
	}

	private static void calculaAreas(int menu) {
		double area=0;
		
		switch (menu) {
		case 1:
			area=AreaCuadrado();
			break;
		case 2:
			area=AreaTriangulo();
			break;
		case 3:
			area=AreaCiculo();
			break;
		default:
			System.out.println("No existe la opcion ");
			break;
		}
		
		if (area!=0) {
			System.out.println("Esta es el area de la figura: "+area);
		}

		
	}

	private static double AreaCiculo() {
		double radio=0;
		System.out.print("Introduce el radio del circulo: ");
		radio=teclado.nextDouble();
		
		return calculoAreaCirculo(radio);
	}

	private static double calculoAreaCirculo(double radio) {
		
		return Math.PI*Math.pow(radio, 2);
	}

	private static double AreaTriangulo() {
		double base=0;
		double altura=0;
		System.out.print("Introduce la base del triangulo: ");
		base=teclado.nextDouble();
		System.out.print("Introduce la altura del triangulo: ");
		base=teclado.nextDouble();
		
		return calculoAreaTriangulo(base,altura);
	}

	private static double calculoAreaTriangulo(double base, double altura) {
		
		return 0;
	}

	private static double AreaCuadrado() {
		double lado=0;
		System.out.print("Introduce el lado del cuadrado: ");
		lado=teclado.nextDouble();
		
		return calculoAreaCuadrdo(lado);
	}

	private static double calculoAreaCuadrdo(double lado) {
		return lado*lado;
	}

	private static int muestraMenudeAreas() {

		int opcion = 0;

		System.out.println("MENU DE AREAS A CALCULAR:");
		System.out.println("1-Cuadrado");
		System.out.println("2-Triangulo");
		System.out.println("3-Circulo");
		System.out.println("0-Cerrar");
		System.out.println("-------------------------------");
		System.out.print("Introduce una opción: ");

		opcion = teclado.nextInt();

		return opcion;
	}
}
