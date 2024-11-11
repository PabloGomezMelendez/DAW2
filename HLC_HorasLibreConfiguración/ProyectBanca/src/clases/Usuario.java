package clases;

import java.util.ArrayList;

public class Usuario extends Personas {
	//atributos
	ArrayList<Cuenta> cuantas= new ArrayList<Cuenta>();
	ArrayList<Movimientos> moviminetos=new ArrayList<Movimientos>();
	

	public Usuario(String nombre, String contrasena) {
		super(nombre, contrasena);
		
	}
	
	public void abrirCuenta() {
		
	}

	@Override
	public String toString() {
		return "[cuantas=" + cuantas + ", moviminetos=" + moviminetos + ", Nombre=" + getNombre()
				+ ", Contrasena=" + getContrasena() + "]";
	}
	
	

}
