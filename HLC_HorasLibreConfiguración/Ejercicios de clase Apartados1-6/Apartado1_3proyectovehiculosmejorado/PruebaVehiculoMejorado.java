package Apartado1_3proyectovehiculosmejorado;

import org.springframework.context.support.ClassPathXmlApplicationContext;

public class PruebaVehiculoMejorado {

	public static void main(String[] args) {
		ClassPathXmlApplicationContext miContexto = new ClassPathXmlApplicationContext("applicationContext.xml");
		VehiculoMejorado nave = miContexto.getBean("naveEspacial", VehiculoMejorado.class);
		System.out.println(nave.getNombre());

		//Paso 4: Cerramos el bean.
		miContexto.close();
	}

}
