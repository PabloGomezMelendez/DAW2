package POO.EjercicioE;

import java.util.Objects;

public class movil implements Comparable<movil>{

	//Atributos
	private String marca;
	private String modelo;
	private int precio;
	
	/**
	 * Constructor por defecto
	 * 
	 * @param marca
	 * @param modelo
	 * @param precio
	 */
	public movil(String marca, String modelo, int precio) {
		super();
		this.marca = marca;
		this.modelo = modelo;
		this.precio = precio;
	}

	//Getters and setters
	public String getMarca() {
		return marca;
	}

	public void setMarca(String marca) {
		this.marca = marca;
	}

	public String getModelo() {
		return modelo;
	}

	public void setModelo(String modelo) {
		this.modelo = modelo;
	}

	public double getPrecio() {
		return precio;
	}

	public void setPrecio(int precio) {
		this.precio = precio;
	}

	/**
	 * Metodo toString
	 */
	@Override
	public String toString() {
		return this.modelo + " " + this.marca + " " + this.precio + ".";
	}

	/**
	 * Ordena segun el precio de cada movil
	 */
	@Override
	public int compareTo(movil m) {
		if (this.precio > m.getPrecio()) {
			return 1;
		} else if (this.precio < m.getPrecio()) {
			return -1;
		} else {
			return (this.marca).compareTo(m.getMarca());
		}
	}

}
