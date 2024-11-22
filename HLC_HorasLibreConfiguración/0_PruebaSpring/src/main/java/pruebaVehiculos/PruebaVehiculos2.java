package pruebaVehiculos;

import org.springframework.context.support.ClassPathXmlApplicationContext;

import proyectoVehiculos.Vehiculo;

public class PruebaVehiculos2 {

	public static void main(String[] args) {
		// Paso 1: Cargar archivo XML
		ClassPathXmlApplicationContext miContexto = new ClassPathXmlApplicationContext("applicationContext.xml");
		// Paso 2: Hacemos la llamada al bean
		// id
		// tipo el que especifique el bean
		Vehiculo v1 = miContexto.getBean("GeneradorVehiculos", Vehiculo.class);
		System.out.println(v1.getTareas());
		// paso 6: Mantenimiento inyectado === inyección de dependencia
		System.out.println(v1.getMantenimiento());
		miContexto.close();
	}

}
