//@author Pablo Gómez Meléndez

import java.util.ArrayList;

public class Main {

	public static void main(String[] args) {
		
		System.out.println("SALA GENERADA *****************************************************************");

		SalaCine salaCine = new SalaCine();

		System.out.println(salaCine.toString());
		
		System.out.println("ESPECTARORES GENERADOS *****************************************************************");

		ArrayList<Espectador> espectadores = General.genarEspectadores();
		
		System.out.println(General.mostarEspectadores(espectadores));
		
		System.out.println("Compran entradas *****************************************************************");
		
//		General.comparanEntradas(salaCine,espectadores);

		

	}

}
