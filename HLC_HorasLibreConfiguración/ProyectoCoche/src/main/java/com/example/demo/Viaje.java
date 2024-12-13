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
	
	private Coche coche;

	private Set<Pasajero> pasajeros = new HashSet<Pasajero>();
	
//	public Viaje(String name, String origin, String destination) {
//		this.nombre = name;
//		this.origen = origin;
//		this.destino = destination;
//	}

	public Viaje(Coche superCoche, Set<Pasajero> of) {
		this.setCoche(superCoche);
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

	public Coche getCoche() {
		return coche;
	}

	public void setCoche(Coche coche) {
		this.coche = coche;
	}



	public Set<Pasajero> getPasajeros() {
		return pasajeros;
	}

	public void setPasajeros(Set<Pasajero> pasajeros) {
		this.pasajeros = pasajeros;
	}

	@Override
	public String toString() {
		return "Viaje [nombre=" + nombre + ", origen=" + origen + ", destino=" + destino + ", coche=" + coche
				+ ", pasajeros=" + pasajeros + "]";
	}

	

}
