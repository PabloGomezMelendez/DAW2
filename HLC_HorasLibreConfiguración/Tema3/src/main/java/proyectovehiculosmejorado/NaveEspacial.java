package proyectovehiculosmejorado;

import org.springframework.stereotype.Component;

@Component
public class NaveEspacial implements VehiculoMejorado {
	private final static int TRIPULACION=4;
	
	

	@Override
	public String getNombre() {
		// TODO Auto-generated method stub
		return "Halcón Milenario";
	}

	@Override
	public int getNumPasajeros() {
		// TODO Auto-generated method stub
		return TRIPULACION+numPasajeros;
	}

}
