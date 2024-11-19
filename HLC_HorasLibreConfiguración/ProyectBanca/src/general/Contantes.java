package general;

public class Contantes {
	
	public static final String SEPARADOR = "**********************************************************************************************************************************************************";

	//TEXTOS LOGIN
	public static final String LOGIN_USUARIO = "IDENTIFICATE CON EL NOMBRE DE USUARIO: ";
	public static final String LOGIN_PASSWORD = "INTRODUCE LA CONTRASENA: ";
	public static final String LOGIN_ERROR = "Usuario o contraseña erroneos";
	public static final String LOGIN_EXITOSO_ADMIN = "Tuvo exito en registro como administrador. ";
	public static final String LOGIN_EXITOSO_USER = "Tuvo exito en registro ";
	//TEXTOS BIENVENIDA
	public static final String BIENVENIDA = "Bienvenido a la interfaz de banca digital";
	//TEXTOS MENUS
	public static final String MENU_INICIO = "Menu de acciones iniciales: ";
	public static final String[] MENU_INICIO_ACCIONES_USER= {"SALIR","Ingresar dinero a cuenta","Pagar una cuenta","Mover dinero entre cuentas"};
	public static final String[] MENU_INICIO_ACCIONES_ADMIN= {"SALIR","Dar de alta a nuevo usuario","Consultar movimiento de un usuario","Cerrar cuenta de usuario"};
	public static final String SELECIONA_ACCION = "SELECIONA UNA ACCION [Introduce el numero de la accion a realizar] : ";
	
	//TEXTOS CUENTAS
	public static final String INGRESO_DE_DINERO_EN_CUENTA = "No se puede hacer ingresos negatigos";
	public static final String CUENTA_ERROR_GASTO_SUPERIOR_A_SALDO = "Se anulo el proceso, ya que el saldo es insuficiente";
	public static final String CUENTA_ERROR_GASTO_NO_POSITIVO = "No se puede realizar el pago ya que no hay un saldo positivo";
	public static final String CUENTA_ERROR_RETIRO_NO_POSITIVO = "No se puede realizar la retirada de dinero ya que no hay un saldo positivo";
	public static final String CUENTA_ERROR_PASAR_NO_POSITIVO = "No se puede realizar el pase de dinero ya que no hay un saldo positivo";

	

}
