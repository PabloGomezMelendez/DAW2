
//@author Pablo Gómez Meléndez
import java.util.ArrayList;

public class SalaCine {
	//Atributos
	private Pelicula pelicula;
	private ArrayList<Asientos> asientos;
	private double recaudado;
	//Constructor
	/**
	 * @param pelicula
	 * @param asientos
	 * @param recaudado
	 */
	public SalaCine(Pelicula pelicula, ArrayList<Asientos> asientos, double recaudado) {
		this.pelicula = pelicula;
		this.asientos = asientos;
		this.recaudado = recaudado;
	}
	/**
	 * 
	 */
	public SalaCine() {
		this.pelicula=General.generarPelicula();
		this.asientos=General.generarAsientosSala();
		this.recaudado=0.0;
		
	}
	
	//Getters y Setters
	public Pelicula getPelicula() {
		return pelicula;
	}
	public void setPelicula(Pelicula pelicula) {
		this.pelicula = pelicula;
	}
	public ArrayList<Asientos> getAsientos() {
		return asientos;
	}
	public void setAsientos(ArrayList<Asientos> asientos) {
		this.asientos = asientos;
	}
	public double getRecaudado() {
		return recaudado;
	}
	public void setRecaudado(double recaudado) {
		this.recaudado = recaudado;
	}
	//ToString
	@Override
	public String toString() {
		return "SalaCine [\npelicula=" + pelicula + "\nAsientos=" + General.toStringAsientosSalaCine(asientos) + "\nRecaudado total=" + recaudado + "]";
	}
	
	
	
	
	

}
