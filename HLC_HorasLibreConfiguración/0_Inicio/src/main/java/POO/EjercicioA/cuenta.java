package POO.EjercicioA;

public class cuenta {

		// Atributos
		private String titular;
		private double cantidad;

		/**
		 * Constructor por defecto
		 * 
		 * @param titular
		 * @param cantidad
		 * @return 
		 */
		public void Cuenta(String titular, double cantidad) {
			this.titular = titular;
			this.cantidad = cantidad;
		}

		/**
		 * Constructor con el atributo obligatorio
		 * 
		 * @param titular
		 * @return 
		 */
		public void Cuenta(String titular) {
			this.titular = titular;
		}

		// Getters and setters
		public String getTitular() {
			return titular;
		}

		public void setTitular(String titular) {
			this.titular = titular;
		}

		public double getCantidad() {
			return cantidad;
		}

		public void setCantidad(double cantidad) {
			this.cantidad = cantidad;
		}

		// Metodo toString
		@Override
		public String toString() {
			return "cuenta [titular=" + titular + ", cantidad=" + cantidad + "]";
		}

		/**
		 * Metodo que realiza ingreso al objeto creado
		 * 
		 * @param cantidadInt
		 * @return
		 */
		public double ingresar(double cantidadInt) {
			if (cantidadInt > 0) {
				this.cantidad += cantidadInt;
			} else {
				System.out.println("No se ha añadido nada.");
			}

			return this.cantidad;
		}

		/**
		 * Metodo que realiza un retiro de dinero al objeto creado
		 * 
		 * @param cantidadInt
		 * @return
		 */
		public double retirar(double cantidadInt) {

			if (this.cantidad-cantidadInt < 0) {
				this.cantidad = 0;
				System.out.println("Su cuenta pasa a tener un valor de 0.");
			} else {
				this.cantidad -= cantidadInt;
			}

			return this.cantidad;

	}

}
