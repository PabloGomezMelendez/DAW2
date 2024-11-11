package clases;

public class Personas {
	//ATRUBUTOS
	private String nombre;
	private int contrasena;
	
	//CONSTRUCTOR
	public Personas(String nombre, String contrasena) {
		super();
		this.nombre = nombre;
		this.contrasena = contrasena.hashCode();
	}
	
	//GETTERS Y SETTERS
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public int getContrasena() {
		return contrasena;
	}
	public void setContrasena(String contrasena) {
		this.contrasena = contrasena.hashCode();
	}
	
	

}
