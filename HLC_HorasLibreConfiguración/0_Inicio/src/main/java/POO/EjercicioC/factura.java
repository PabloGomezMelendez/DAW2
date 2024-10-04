package POO.EjercicioC;

public class factura {
	// Atributos
		private String codigo;
		private double cantLitros;
		private double precioLitros;

		/**
		 * Constructor por defecto
		 * 
		 * @param codigo
		 * @param cantLitros
		 * @param precioLitros
		 */
		public factura(String codigo, double cantLitros, double precioLitros) {
			super();
			this.codigo = codigo;
			this.cantLitros = cantLitros;
			this.precioLitros = precioLitros;
		}

		// Getter and setter
		public String getCodigo() {
			return codigo;
		}

		public void setCodigo(String codigo) {
			this.codigo = codigo;
		}

		public double getCantLitros() {
			return cantLitros;
		}

		public void setCantLitros(double cantLitros) {
			this.cantLitros = cantLitros;
		}

		public double getPrecioLitros() {
			return precioLitros;
		}

		public void setPrecioLitros(double precioLitros) {
			this.precioLitros = precioLitros;
		}

		// Metodo toString
		@Override
		public String toString() {
			return "Factura [codigo=" + codigo + ", cantLitros=" + cantLitros + ", precioLitros=" + precioLitros + "]";
		}

		/**
		 * Calcula la factura total de todas las facturas
		 * 
		 * @param factura
		 */
		public static void factTotal(factura factura[]) {

			double factTotal = 0;

			for (int i = 0; i < factura.length; i++) {
				factTotal += factura[i].getCantLitros() * factura[i].getPrecioLitros();
			}

			System.out.println("El factorial total es de: " + factTotal + "€.");
		}

		/**
		 * Calcula la cantidad de litros de vendidos
		 * 
		 * @param factura
		 */
		public static void litrosVend(factura factura[]) {

			double litrosVend = 0;

			for (int i = 0; i < factura.length; i++) {
				litrosVend += factura[i].getCantLitros();
			}

			System.out.println("La cantidad de litros vendidos es de: " + litrosVend + "L.");

		}

		/**
		 * Comprueba la cantidad de facturas mayor a 600€
		 * 
		 * @param factura
		 */
		public static void factura600(factura factura[]) {

			int contador = 0;

			for (int i = 0; i < factura.length; i++) {
				if (factura[i].getCantLitros() * factura[i].getPrecioLitros() > 600) {
					contador++;
				}
			}

			System.out.println("Hay un total de " + contador + " facturas mayor a 600€.");
		}

}
