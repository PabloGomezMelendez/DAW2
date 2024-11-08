import java.util.ArrayList;
import java.util.Random;

public class General {
	//atrivutos
	private static final int SIZE_SALA = 8;
	private static final int MAYOR_EDAD = 18;
	private static final double ENTRADA_JOVEN=3.5;
	private static final int ENTRADA_TARJETA=5;
	private static final int ENTRADA_SIN_DESCUENTO=7;

	private static final char[] COLUMNAS = { 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I' };
	
	private static final String[] NOMBRE_PEROSNAS = { "Mateo", "Martín", "Lucas", "Leo", "Daniel", "Alejandro",
			"Manuel", "Pablo", "Álvaro", "Adrián", "Mario", "Diego", "David", "Bruno", "Juan", "Pedro", "Gabriel",
			"Sofía", "Martina", "María", "Julia", "Paula", "Valeria", "Emma", "Carmen", "Olivia", "Celia", "Irene",
			"Marta", "Laura", "Gema", "Lola", "Jimena", "Claudia" };
	
	private static final Pelicula[] listaPeliculas = { new Pelicula("Joker", "Todd Phillips", MAYOR_EDAD),
			new Pelicula("El pianista", "Roman Polanski", 13),
			new Pelicula("El señor de los anillos, El retorno del rey", "Peter Jackson", 13),
			new Pelicula("El caballero oscuro", "Christopher Nolan", 13), new Pelicula("Smile", "Parker Finn", 16) };
	
	
	
	
	
	//METODOS	
	
	public static Pelicula generarPelicula() {
		Random rand = new Random();
		double probabilidad = rand.nextDouble(); // Genera un número entre 0.0 y 1.0

		if (probabilidad < 0.5) {
			// 50% Joker
			return listaPeliculas[0];
		} else if (probabilidad < 0.625) {
			return listaPeliculas[1];
		} else if (probabilidad < 0.75) {
			return listaPeliculas[2];
		} else if (probabilidad < 0.875) {
			return listaPeliculas[3];
		} else {
			return listaPeliculas[4];
		}

	}

	public static ArrayList<Asientos> generarAsientosSala() {
		ArrayList<Asientos> asientos = new ArrayList<Asientos>();
		for (int i = SIZE_SALA; i >= 0; i--) {
			for (int j = 0; j < SIZE_SALA; j++) {
				Asientos auxAsiento = new Asientos(COLUMNAS[j], i, false, null);
				asientos.add(auxAsiento);
			}
		}
		return asientos;
	}

	public static String toStringAsientosSalaCine(ArrayList<Asientos> asientos) {
		String aux = "\n";
		for (Asientos auxAsiento : asientos) {
			aux = aux + auxAsiento.toString() + "\n";
		}
		return aux;
	}

	public static ArrayList<Espectador> genarEspectadores() {
		ArrayList<Espectador> espectadores = new ArrayList<Espectador>();
		int auxNombre = 0;
		int auxEdad = 0;
		int auxDienro = 0;

		for (int i = 34; i >= 0; i--) {
			auxNombre = (int) (Math.random() * NOMBRE_PEROSNAS.length);
			auxEdad = (int) (Math.random() * (48 - 8) + 8);
			auxDienro = (int) (Math.random() * (20 - 2) + 2);
			Espectador auxEspectador = new Espectador(NOMBRE_PEROSNAS[auxNombre], auxEdad, auxDienro);
			espectadores.add(auxEspectador);
		}
		return espectadores;
	}

	public static String mostarEspectadores(ArrayList<Espectador> espectadores) {
		String aux = "\n";
		int cont=0;
		for (Espectador auxEspectador : espectadores) {
			aux = aux +cont+" "+ auxEspectador.toString() + "\n";
			cont++;
		}
		return aux;
	}

	
	//TODO COMPLETAR COMPRA
	public static void comparanEntradas(SalaCine salaCine, ArrayList<Espectador> espectadores) {
		int indexAsientoBacio=busacaAsientoBacio(salaCine);
		
		for (Espectador espectador : espectadores) {
			salaCine.getAsientos().get(indexAsientoBacio);//todo
		}
		
	}

	private static int busacaAsientoBacio(SalaCine salaCine) {
		
		int randomAsiento=(int)(Math.random() * salaCine.getAsientos().size()) + 1;
		if (salaCine.getAsientos().get(randomAsiento).is_ocupado()) {
			return busacaAsientoBacio(salaCine);
		}else {
			return randomAsiento;
		}
	}

}
