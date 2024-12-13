package com.example.demo;

public class Tripulacion {
	private String nombre;
	private String posicion;
	
	public Tripulacion(String nombre, String posicion) {
		this.nombre = nombre;
		this.posicion = posicion;
	}

	public String getName() {
		return nombre;
	}

	public void setName(String name) {
		this.nombre = name;
	}

	public String getPosition() {
		return posicion;
	}

	public void setPosition(String position) {
		this.posicion = position;
	}

	@Override
	public String toString() {
		return "Crew [name=" + nombre + ", position=" + posicion + "]";
	}
	
	

}
