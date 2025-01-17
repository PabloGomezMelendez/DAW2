package model;

public class Producto {
	private String nombre;
	private String titulo;
	private String contenido;
	
	public Producto(String nombre, String titulo, String contenido) {
		super();
		this.nombre = nombre;
		this.titulo = titulo;
		this.contenido = contenido;
	}
	
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public String getTitulo() {
		return titulo;
	}
	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}
	public String getContenido() {
		return contenido;
	}
	public void setContenido(String contenido) {
		this.contenido = contenido;
	}
	

}
