package demoConfig;

import org.springframework.context.annotation.AnnotationConfigApplicationContext;

public class Prueba {

	public static void main(String[] args) {
		// Paso 1: Cargar archivo XML
//		ClassPathXmlApplicationContext miContexto = new ClassPathXmlApplicationContext("applicationContext.xml");

		// Paso 1: Leer el class de configuración:
		AnnotationConfigApplicationContext miContexto = new AnnotationConfigApplicationContext(Config.class);
		// Paso 2: Hacemos la llamada al bean
		VehiculoMejorado puto = miContexto.getBean("naveEspacial", VehiculoMejorado.class);
		System.out.println("En el " + puto.getNombre() + " hay " + puto.getNumPasajeros() + " pasajeros");
		// Paso 3: Cerrar el miContexto
		miContexto.close();

	}

}
