package proyectoVehiculosConfig;

public class Coche implements Vehiculo{

	@Override
	public String getTareas() {
		// TODO Auto-generated method stub
		return "Coche conduce por ciudad";
	}
	 //Paso 1
	 //Apartado 4 Inyeccion de dependencias
	 @Override
	 public String getMantenimiento() {
	 return "Mantenimiento realizado en coche" + 
	creacion.getMantenimiento();
	 }
	 //Paso 2
	 private Mantenimiento creacion;
	 //Paso 3
	 //Creación del constructor en la clase (Mantenimiento) para la inyección de la dependencia.
	 public Coche(Mantenimiento creacion) {
	 this.creacion = creacion; //Inyección de la dependencia
	 }
	 //Paso 4 --> Vincular el bean en archivo XML
}
