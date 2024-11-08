//@author Pablo Gómez Meléndez

class Pelicula {
	//Atributos
	private String titulo;
	private String director;
	private int edad;
	
	//Constructor
	/**
	 * @param titulo
	 * @param director
	 * @param edad
	 */
	public Pelicula(String titulo, String director, int edad) {
		this.titulo = titulo;
		this.director = director;
		this.edad = edad;
	}
	
	public Pelicula() {
		// TODO Auto-generated constructor stub
	}

	//Getters y Setters
	public String getTitulo() {
		return titulo;
	}
	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}
	public String getDirector() {
		return director;
	}
	public void setDirector(String director) {
		this.director = director;
	}
	public int getEdad() {
		return edad;
	}
	public void setEdad(int edad) {
		this.edad = edad;
	}

	@Override
	public String toString() {
		return "Pelicula [titulo=" + titulo + ", director=" + director + ", edad=" + edad + "]";
	}
	
	
	
	
	

}
