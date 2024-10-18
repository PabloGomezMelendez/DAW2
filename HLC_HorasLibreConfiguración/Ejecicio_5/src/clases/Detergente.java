package clases;

import java.time.LocalDate;

import interfaces.ConDescuento;
import interfaces.EsLiquido;

public class Detergente implements EsLiquido, ConDescuento {

	// Porpiedades
	private String marca;
	private Double precio;
	private LocalDate Caducidad;
	private int Calorias = 0;
	

	public String getMarca() {
		return marca;
	}

	public void setMarca(String marca) {
		this.marca = marca;
	}

	public Double getPrecio() {
		return precio;
	}

	public void setPrecio(Double precio) {
		this.precio = precio;
	}

	@Override
	public void setCaducidad(LocalDate fc) {
		// TODO Auto-generated method stub

	}

	@Override
	public LocalDate getCaducidad() {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public int getCalorias() {
		// TODO Auto-generated method stub
		return 0;
	}

	@Override
	public void setVolumen(int v) {
		// TODO Auto-generated method stub

	}

	@Override
	public int getVolumen() {
		// TODO Auto-generated method stub
		return 0;
	}

	@Override
	public void setTipoEnvase(String env) {
		// TODO Auto-generated method stub

	}

	@Override
	public String getTipoEnvase() {
		// TODO Auto-generated method stub
		return null;
	}

}
