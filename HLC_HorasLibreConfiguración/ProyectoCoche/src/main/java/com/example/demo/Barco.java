package com.example.demo;

import java.util.ArrayList;
import java.util.List;

public class Barco {
	private String modelo;
	private TipoBarco tipoBarco;
	private Integer asientos;
	private List<Tripulacion> tripulacion = new ArrayList<Tripulacion>();
	
	public Barco () {}
	
	public Barco(String modelo, TipoBarco tipoBarco, Integer asientos) {
		this.modelo = modelo;
		this.tipoBarco = tipoBarco;
		this.asientos = asientos;
	}

	public String getModelo() {
		return modelo;
	}

	public void setModelo(String modelo) {
		this.modelo = modelo;
	}

	public TipoBarco getTipoBarco() {
		return tipoBarco;
	}

	public void setTipoBarco(TipoBarco tipoBarco) {
		this.tipoBarco = tipoBarco;
	}

	public Integer getAsientos() {
		return asientos;
	}

	public void setAsientos(Integer asientos) {
		this.asientos = asientos;
	}
	
	public List<Tripulacion> getTripulacion() {
		return tripulacion;
	}

	public void setTripulacion(List<Tripulacion> tripulacion) {
		this.tripulacion = tripulacion;
	}

	@Override
	public String toString() {
		return "Barco [modelo=" + modelo + ", Tipo Barco=" + tipoBarco + ", Asientos=" + asientos + ", Tripulacion=" + tripulacion + "]";
	}

	
	
}
