package proyectovehiculosmejorado3;

import org.springframework.stereotype.Component;

@Component
public class TransporteAuxiliar implements PasajerosExtra{

	@Override
	public int getPasajerosExtra() {
		return 8;
	}

}
