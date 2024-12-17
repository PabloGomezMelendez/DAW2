package com.example.demo;

import java.util.HashSet;
import java.util.Set;

import org.springframework.beans.factory.annotation.Value;

public class Viaje {
	@Value("${nombre}")
	private String nombre;
	@Value("${origen}")
	private String origen;
	@Value("${destino}")
	private String destino;
	
	private Barco barco;

	private Set<Pasajero> pasajeros = new HashSet<Pasajero>();
	
//	public Viaje(String name, String origin, String destination) {
//		this.nombre = name;
//		this.origen = origin;
//		this.destino = destination;
//	}

	public Viaje(Barco superBarco, Set<Pasajero> of) {
		this.setCoche(superBarco);
		this.setPasajeros(of);
	}

	public String getNombre() {
		return nombre;
	}

	public String getOrigen() {
		return origen;
	}

	public String getDestino() {
		return destino;
	}

	public Barco getBarco() {
		return barco;
	}

	public void setCoche(Barco barco) {
		this.barco = barco;
	}



	public Set<Pasajero> getPasajeros() {
		return pasajeros;
	}

	public void setPasajeros(Set<Pasajero> pasajeros) {
		this.pasajeros = pasajeros;
	}

	@Override
	public String toString() {
		return "Viaje [nombre=" + nombre + ", origen=" + origen + ", destino=" + destino + ", barco=" + barco
				+ ", pasajeros=" + pasajeros + "]";
	}

	

}
