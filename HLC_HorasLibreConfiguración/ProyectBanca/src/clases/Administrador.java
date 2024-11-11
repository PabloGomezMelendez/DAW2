package clases;

public class Administrador extends Personas {

	public Administrador(String nombre, String contrasena) {
		super(nombre, contrasena);
		// TODO Auto-generated constructor stub
	}

	@Override
	public String toString() {
		return "[Nombre=" + getNombre() + ", Contrasena=" + getContrasena() + "]";
	}
	

}
