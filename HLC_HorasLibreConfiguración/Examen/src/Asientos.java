//@author Pablo Gómez Meléndez

public class Asientos {
	// Atributos
	private char columna;
	private int fila;
	private boolean is_ocupado;
	private Espectador espectador;

	// Constructor
	/**
	 * @param columna
	 * @param fila
	 * @param is_ocupado
	 * @param espectador
	 */
	public Asientos(char columna, int fila, boolean is_ocupado, Espectador espectador) {
		
		this.columna = columna;
		this.fila = fila;
		this.is_ocupado = is_ocupado;
		this.espectador = espectador;
	}

	// Getters y Setters
	public char getColumna() {
		return columna;
	}

	public void setColumna(char columna) {
		this.columna = columna;
	}

	public int getFila() {
		return fila;
	}

	public void setFila(int fila) {
		this.fila = fila;
	}

	public boolean is_ocupado() {
		return is_ocupado;
	}

	public void setIs_ocupado(boolean is_ocupado) {
		this.is_ocupado = is_ocupado;
	}

	public Espectador getEspectador() {
		return espectador;
	}

	public void setEspectador(Espectador espectador) {
		this.espectador = espectador;
	}

	@Override
	public String toString() {
		return "Asientos [columna=" + columna + ", fila=" + fila + ", Esta ocupado=" + is_ocupado + ", Espectador="
				+ espectador + "]";
	}
	

}
