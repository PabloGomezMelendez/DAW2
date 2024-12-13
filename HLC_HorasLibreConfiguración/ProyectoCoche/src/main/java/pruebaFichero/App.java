package pruebaFichero;

import org.springframework.context.annotation.AnnotationConfigApplicationContext;
import org.springframework.context.annotation.Bean;

public class App {

	public static void main(String[] args) {
		// 1: Leer el class de configuración:
		AnnotationConfigApplicationContext miContexto = new AnnotationConfigApplicationContext(AppConfig.class);
		Viaje nave = miContexto.getBean("viaje", Viaje.class);
		System.out.println(nave.getNombre());

		// Paso 4: Cerramos el bean.
		miContexto.close();
	}
	

}
