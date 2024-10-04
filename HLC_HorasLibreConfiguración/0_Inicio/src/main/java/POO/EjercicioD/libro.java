package POO.EjercicioD;

public class libro {
	
		// Atributos
		private String isbn;
		private String titulo;
		private String autor;
		private int numPaginas;

		/**
		 * Constructor por defecto
		 * 
		 * @param isbn
		 * @param titulo
		 * @param autor
		 * @param numPaginas
		 */
		public libro(String isbn, String titulo, String autor, int numPaginas) {
			super();
			this.isbn = isbn;
			this.titulo = titulo;
			this.autor = autor;
			this.numPaginas = numPaginas;
		}

		// Getters and Setters
		public String getIsbn() {
			return isbn;
		}

		public void setIsbn(String isbn) {
			this.isbn = isbn;
		}

		public String getTitulo() {
			return titulo;
		}

		public void setTitulo(String titulo) {
			this.titulo = titulo;
		}

		public String getAutor() {
			return autor;
		}

		public void setAutor(String autor) {
			this.autor = autor;
		}

		public int getNumPaginas() {
			return numPaginas;
		}

		public void setNumPaginas(int numPaginas) {
			this.numPaginas = numPaginas;
		}

		/**
		 * Metodo toString
		 */
		@Override
		public String toString() {
			return "El libro " + this.titulo + " con ISBN " + this.isbn + " escrito por " + this.autor + " tiene "
					+ this.numPaginas + " paginas.";
		}

		/**
		 * Metodo que devuelve que libro tiene mas paginas
		 * 
		 * @param l1
		 * @param l2
		 */
		public static void masPaginas(libro l1, libro l2) {
			if (l1.getNumPaginas() > l2.getNumPaginas()) {
				System.out.println(l1.toString());
				System.out.println("Tiene mas paginas que " + l2.toString());
			} else {
				System.out.println(l2.toString());
				System.out.println("Tiene mas paginas que " + l1.toString());
			}
		}

}
