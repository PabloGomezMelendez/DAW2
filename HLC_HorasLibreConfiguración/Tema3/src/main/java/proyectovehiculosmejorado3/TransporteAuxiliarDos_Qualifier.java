package proyectovehiculosmejorado3;

import org.springframework.stereotype.Component;

@Component
public class TransporteAuxiliarDos_Qualifier implements PasajerosExtra {

	@Override
	public int getPasajerosExtra() {
		// TODO Auto-generated method stub
		return 10;
	}

}
