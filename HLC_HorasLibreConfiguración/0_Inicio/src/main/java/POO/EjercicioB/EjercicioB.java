package POO.EjercicioB;

import java.util.Scanner;

/*
Una empresa que se dedica a la venta de desinfectantes necesita un
programa para gestionar las facturas. En cada factura figura: el código del artículo, la
cantidad vendida en litros y el precio por litro.
Se pide de 5 facturas introducidas: Facturación total, cantidad en litros vendidos del
artículo 1 y cuantas facturas se emitieron de más de 600 €.
*/

public class EjercicioB {

	public static void main(String[] args) {
		Scanner s = new Scanner(System.in);
		
		String codigoFact = "";
		double cantLitros = 0;
		double precioLitros = 0;
		
		factura facturas[] = new factura [5]; //nos creamos un array para almacenar todas las facturas	

		for (int i = 0; i < 5; i++) {
			System.out.println("\nIntroducimos los datos de la factura " + (i+1) + ".\n");
			System.out.print("Introduce el codigo de la factura: ");
			codigoFact = s.nextLine();
			System.out.print("Introduce la cantidad de litros vendido: ");
			cantLitros = s.nextDouble();
			System.out.print("Introduce el precio por litro: ");
			precioLitros = s.nextDouble();
			s.nextLine();
			
			factura factura = new factura(codigoFact, cantLitros, precioLitros); //nos creamos un obj factura
			
			facturas[i] = factura; //guardamos el obj en el array
		}
		
		System.out.println("\nLas facturas guardadas son: ");
		for (factura f : facturas) {
			System.out.println(f);
		}
		System.out.println();
		
		//utilizamos los metodos creados en la clase
		factura.factTotal(facturas);
		factura.litrosVend(facturas);
		factura.factura600(facturas);
		
	}

}
