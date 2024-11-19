package clases;

import java.util.ArrayList;

public class Usuario extends Personas {
	//atributos
	Cuenta cuantas= new Cuenta();
	ArrayList<Movimientos> moviminetos=new ArrayList<Movimientos>();
	

	public Usuario(String nombre, String contrasena) {
		super(nombre, contrasena);
		
	}
	
	

	public Cuenta getCuantas() {
		return cuantas;
	}



	public void setCuantas(Cuenta cuantas) {
		this.cuantas = cuantas;
	}



	public ArrayList<Movimientos> getMoviminetos() {
		return moviminetos;
	}



	public void setMoviminetos(ArrayList<Movimientos> moviminetos) {
		this.moviminetos = moviminetos;
	}



	@Override
	public String toString() {
		return "[cuantas=" + cuantas + ", moviminetos=" + moviminetos + ", Nombre=" + getNombre()
				+ ", Contrasena=" + getContrasena() + "]";
	}
	
	

}
