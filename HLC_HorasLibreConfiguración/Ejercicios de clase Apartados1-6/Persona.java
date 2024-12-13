

import java.util.ArrayList;
import java.util.List;

public class Persona {

	private String nombre;
	private String edad;
	List list = new ArrayList<>();

	public Persona(String nombre, String edad, List list) {
		super();
		this.nombre = nombre;
		this.edad = edad;
		this.list = list;
		System.out.println("gestor creado: " + getNombre() + " " + getEdad() + " " + list.toString());
	}

	public Persona(String nombre, String edad) {
		this.nombre = nombre;
		this.edad = edad;
		System.out.println("gestor creado: " + getNombre() + " " + getEdad());
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public String getEdad() {
		return edad;
	}

	public void setEdad(String edad) {
		this.edad = edad;
	}

}