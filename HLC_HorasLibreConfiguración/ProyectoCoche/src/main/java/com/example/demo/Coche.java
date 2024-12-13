package com.example.demo;

import java.util.ArrayList;
import java.util.List;

public class Coche {
	private String modelo;
	private TipoCoche tipoCoche;
	private Integer asientos;
	private List<Tripulacion> tripulacion = new ArrayList<Tripulacion>();
	
	public Coche () {}
	
	public Coche(String modelo, TipoCoche tipoCoche, Integer asientos) {
		this.modelo = modelo;
		this.tipoCoche = tipoCoche;
		this.asientos = asientos;
	}

	public String getModelo() {
		return modelo;
	}

	public void setModelo(String modelo) {
		this.modelo = modelo;
	}

	public TipoCoche getTipoCoche() {
		return tipoCoche;
	}

	public void setTipoCoche(TipoCoche tipoCoche) {
		this.tipoCoche = tipoCoche;
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
		return "Coche [modelo=" + modelo + ", Tipo Coche=" + tipoCoche + ", Asientos=" + asientos + ", Tripulacion=" + tripulacion + "]";
	}

	
	
}
