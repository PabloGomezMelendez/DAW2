
public class Espectador {

	// Atributos
	private String nombre;
	private int edad;
	private double dinero;
	private boolean is_tarjeta_socio;
	private boolean is_trajeta_joven;

	// Constructor
	/**
	 * @param nombre
	 * @param edad
	 * @param dinero
	 */
	public Espectador(String nombre, int edad, double dinero) {
		super();
		this.nombre = nombre;
		this.edad = edad;
		this.dinero = dinero;
		this.is_tarjeta_socio = EsSocio();
		this.is_trajeta_joven = EsJoven();
	}

	// Getters y Setters
	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public int getEdad() {
		return edad;
	}

	public void setEdad(int edad) {
		this.edad = edad;
	}

	public double getDinero() {
		return dinero;
	}

	public void setDinero(double dinero) {
		this.dinero = dinero;
	}

	public boolean isIs_tarjeta_socio() {
		return is_tarjeta_socio;
	}

	public void setIs_tarjeta_socio(boolean is_tarjeta_socio) {
		this.is_tarjeta_socio = is_tarjeta_socio;
	}

	public boolean isIs_trajeta_joven() {
		return is_trajeta_joven;
	}

	public void setIs_trajeta_joven(boolean is_trajeta_joven) {
		this.is_trajeta_joven = is_trajeta_joven;
	}
	

	@Override
	public String toString() {
		return "Espectador [nombre=" + nombre + ", edad=" + edad + ", dinero=" + dinero + ", is_tarjeta_socio="
				+ is_tarjeta_socio + ", is_trajeta_joven= " + is_trajeta_joven + "]";
	}

	/***
	 * Devuelve si tiene la tarjeta de socio
	 * 
	 * @return true o false en 25%
	 */
	private boolean EsSocio() {
		int aux = (int) (Math.random() * 4) + 1;
		return (aux != 4) ? false : true;
	}

	/**
	 * 
	 * @return True si Edad esta entre 18 y 35
	 */
	private boolean EsJoven() {
		if (getEdad() >= 18 && getEdad() <= 35) {
			return true;

		} else {
			return false;
		}
	}

}
