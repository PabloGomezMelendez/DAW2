package pruebaFichero;

import java.util.HashSet;
import java.util.Set;

import org.springframework.beans.factory.annotation.Value;

public class Viaje {
	@Value("${nombre}")
	private String nombre;
	@Value("${origen}")
	private String origen;
	@Value("${destino}")
	private String destino;
	

	
//	public Viaje(String name, String origin, String destination) {
//		this.nombre = name;
//		this.origen = origin;
//		this.destino = destination;
//	}

	public Viaje() {

	}

	public String getNombre() {
		return nombre;
	}

	public String getOrigen() {
		return origen;
	}

	public String getDestino() {
		return destino;
	}





	@Override
	public String toString() {
		return "Viaje [nombre=" + nombre + ", origen=" + origen + ", destino=" + destino ;
	}

	

}
