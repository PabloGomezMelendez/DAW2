package clases;

import general.Contantes;

public class Cuenta {
	//Atributos
	private double saldoCuenta;
	private double extimacionDeGatos;
	private boolean saldoPositivo;
	
	//Constructores
	Cuenta(){
		this.saldoCuenta=0;
		this.saldoPositivo=Boolean.TRUE;
	}
	public Cuenta(double saldaCuenta) {
		super();
		this.saldoCuenta = saldaCuenta;
		this.saldoPositivo=Boolean.TRUE;
	}
	
	//Getters y Setters
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
	public boolean isSaldoPositivo() {
		return saldoPositivo;
	}
	public void setSaldoPositivo(boolean saldoPositivo) {
		this.saldoPositivo = saldoPositivo;
	}
	//To String
	@Override
	public String toString() {
		return "Cuenta [saldoCuenta=" + saldoCuenta + ", extimacionDeGatos=" + extimacionDeGatos + ", saldoPositivo="
				+ saldoPositivo + "]";
	}
	
	//Metodos
	public void ingresarDineroEnCuenta(double ingreso) {
		if (ingreso>=0) {			
			setSaldoCuenta(getSaldoCuenta()+ingreso);
		}else {
			System.out.println(Contantes.INGRESO_DE_DINERO_EN_CUENTA);
		}
	}
	public void gastarDinero(double gasto) {
		if (isSaldoPositivo()) {
			double aux= getSaldoCuenta()-gasto;
			if(aux>=0) {
				setSaldoCuenta(aux);
			}else {
				System.out.println(Contantes.CUENTA_ERROR_GASTO_SUPERIOR_A_SALDO);
			}
		}else {
			System.out.println(Contantes.CUENTA_ERROR_GASTO_NO_POSITIVO);
		}
	}
	public void retirarDinero(double retiro) {
		if(isSaldoPositivo()) {
			gastarDinero(retiro);
		}else {
			System.out.println(Contantes.CUENTA_ERROR_RETIRO_NO_POSITIVO);
		}
	}
	public void pasarDinero(double cantidad, Cuenta cuenta) {
		if(isSaldoPositivo()) {

		}else {
			System.out.println(Contantes.CUENTA_ERROR_PASAR_NO_POSITIVO);
		}
		
	}

}
