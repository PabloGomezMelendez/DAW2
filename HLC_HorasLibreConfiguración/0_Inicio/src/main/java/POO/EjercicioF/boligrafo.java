package POO.EjercicioF;

import java.util.Objects;

public class boligrafo implements Comparable<boligrafo>{
	// Atributos
	private String marca;
	private String modelo;
	private double precio;
	
	/**
	 * Constructor por defecto.
	 * @param marca
	 * @param modelo
	 * @param precio
	 */
	public boligrafo(String marca, String modelo, double precio) {
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
	
	//Metodo toString
	@Override
	public String toString() {
		return "Boligrafo: " + marca + " " + modelo + " " + precio + ".";
	}

	//Metodo hashCode
	@Override
	public int hashCode() {
		return Objects.hash(marca, modelo, precio);
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		boligrafo other = (boligrafo) obj;
		return Objects.equals(marca, other.marca) && Objects.equals(modelo, other.modelo)
				&& Double.doubleToLongBits(precio) == Double.doubleToLongBits(other.precio);
	}

	@Override
	public int compareTo(boligrafo obj) {
		return this.marca.compareTo(obj.getMarca());
	}

	/**
	 * Compara los bolis pasados por parametros
	 * @param b1
	 * @param b2
	 */
	public static void comparaBolis(boligrafo b1, boligrafo b2) {
		if (b1.equals(b2)) {
			System.out.println("\nLos boligrafos son iguales.\n");
		} else {
			System.out.println("\nLos boligrafos no son iguales.\n");
		}
	}
}