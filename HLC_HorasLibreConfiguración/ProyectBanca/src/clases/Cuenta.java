package clases;

import general.Contantes;

public class Cuenta {
	// Atributos
	private double saldoCuenta;
	private double extimacionDeGatos;

	// Constructores
	Cuenta() {
		this.saldoCuenta = 0;
	}

	public Cuenta(double saldaCuenta) {
		super();
		this.saldoCuenta = saldaCuenta;
	}

	// Getters y Setters
	public double getSaldoCuenta() {
		return saldoCuenta;
	}

	public void setSaldoCuenta(double saldoCuenta) {
		this.saldoCuenta = saldoCuenta;
	}

	public double getExtimacionDeGatos() {
		return extimacionDeGatos;
	}

	public void setExtimacionDeGatos(double extimacionDeGatos) {
		this.extimacionDeGatos = extimacionDeGatos;
	}

	// To String
	@Override
	public String toString() {
		return "Cuenta [saldoCuenta=" + saldoCuenta + ", extimacionDeGatos=" + extimacionDeGatos + "]";
	}

	// Metodos
	public void ingresarDineroEnCuenta(double ingreso) {
		if (ingreso >= 0) {
			setSaldoCuenta(getSaldoCuenta() + ingreso);
		} else {
			System.out.println(Contantes.INGRESO_DE_DINERO_EN_CUENTA);
		}
	}

	public void gastarDinero(double gasto) {
		double aux = getSaldoCuenta() - gasto;
		if (aux >= 0) {
			setSaldoCuenta(aux);
		} else {
			System.out.println(Contantes.CUENTA_ERROR_GASTO_SUPERIOR_A_SALDO);
		}

	}

	public void pasarDinero(double cantidad, Cuenta cuenta) {
		double aux = this.getSaldoCuenta() - cantidad;
		if (aux >= 0) {

		} else {
			System.out.println(Contantes.CUENTA_ERROR_PASAR_NO_POSITIVO);
		}

	}

}
