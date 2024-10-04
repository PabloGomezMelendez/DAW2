package POO.EjercicioG;

public class persona {

	// Constantes 	
	public static final int INFRAPESO = -1;
	public static final int PESOIDEAL = 0;
	public static final int SOBREPESO = 1;

	private static final char SEXO_DEFECTO = 'H';

	// Atributos
	private String nombre, DNI;
	private int edad;
	private double peso, altura;
	private char sexo;

	/**
	 * Constructor vacio, por defecto.
	 */
	public persona() {
		super();
		this.nombre = "";
		this.edad = 0;
		this.peso = 0.0;
		this.altura = 0.0;
		comprobarSexo();
		generaDNI();
	}

	/**
	 * Constructor con solo tres parametros.
	 * @param nombre
	 * @param edad
	 * @param sexo
	 */
	public persona(String nombre, int edad, char sexo) {
		super();
		this.nombre = nombre;
		this.edad = edad;
		this.peso = 0.0;
		this.altura = 0.0;
		this.sexo = sexo;
		comprobarSexo();
		generaDNI();
	}

	/**
	 * Constructor con todos los parametros menos DNI.
	 * @param nombre
	 * @param edad
	 * @param peso
	 * @param altura
	 * @param sexo
	 */
	public persona(String nombre, int edad, double peso, double altura, char sexo) {
		super();
		this.nombre = nombre;
		this.edad = edad;
		this.peso = peso;
		this.altura = altura;
		this.sexo = sexo;
		comprobarSexo();
		generaDNI();
	}
	
	// Getters and Setters

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

	public double getPeso() {
		return peso;
	}

	public void setPeso(double peso) {
		this.peso = peso;
	}

	public double getAltura() {
		return altura;
	}

	public void setAltura(double altura) {
		this.altura = altura;
	}

	public char getSexo() {
		return sexo;
	}

	public void setSexo(char sexo) {
		this.sexo = sexo;
	}

	@Override
	public String toString() {
		return "Nombre: " + nombre + "\nDNI: " + DNI + "\nSexo: " + sexo + "\nEdad: " + edad + "\nPeso: " + peso + "\nAltura: " + altura + "\n";
	}

	// Metodos propios.
	
	/**
	 * Calcula el IMC de la persona y retorna su tipo de peso.
	 * @return
	 */
	public int calcularIMC() {
		double pesoIdeal = this.peso / (Math.pow(this.altura, 2));

		if (pesoIdeal < 20) {
			return INFRAPESO;
		} else if (pesoIdeal >= 20 && pesoIdeal <= 25) {
			return PESOIDEAL;
		} else {
			return SOBREPESO;
		}

	}

	/**
	 * Retorna si la persona es mayor o menor de edad.
	 * @return
	 */
	public boolean esMayorDeEdad() {
		boolean esMayor = false;

		if (this.edad >= 18) {
			esMayor = true;
			return esMayor;
		} else {
			return esMayor;
		}
	}

	/**
	 * Comprueba el sexo definido en la persona.
	 */
	private void comprobarSexo() {
		if (this.sexo != 'H' && this.sexo != 'M') {
			this.sexo = SEXO_DEFECTO;
		} else if (this.sexo == 'M') {
			this.sexo = 'M';
		}
	}

	/**
	 * Genera el DNI de cada persona.
	 */
	private void generaDNI() {
		// Generamos 8 digitos
		int numerosDNI = ((int) Math.floor(Math.random() * (100000000 - 10000000) + 10000000));

		// El metodo generaLetraDNI() tiene 23 letras
		final int cantLetraDNI = 23;

		// Calculamos el numero del array
		int resto = numerosDNI - (numerosDNI / cantLetraDNI * cantLetraDNI);

		//Generamos la letra
		char LetraDNI = generaLetraDNI(resto);

		// Pasamos el DNI a String
		this.DNI = Integer.toString(numerosDNI) + LetraDNI;

	}

	/**
	 * Genera la letra del DNI de cada persona.
	 * @param res
	 * @return
	 */
	private char generaLetraDNI(int res) {
		char letras[] = { 'T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H',
				'L', 'C', 'K', 'E' };

		return letras[res];
	}

}
