package general;

import java.util.Scanner;

import clases.Administrador;
import clases.Banco;
import clases.Sesion;
import clases.Usuario;

public class GeneralBanco {

	public static Usuario[] generarUsuariosPrueba() {
		Usuario[] usuario = new Usuario[3];
		usuario[0] = new Usuario("Pablo", "Pablo");
		usuario[1] = new Usuario("Alvaro", "Alvaro");
		usuario[2] = new Usuario("Luis", "Luis");
		return usuario;
	}

	public static Administrador generarAdministradorPrueba() {
		return new Administrador("admin", "admin");
	}

	public static void mainAccion(Banco banco) {
		Scanner teclado = new Scanner(System.in);
		Sesion sesion = new Sesion();
		boolean isStart = Boolean.TRUE;
		boolean isAccion = Boolean.TRUE;
		int accion;
		checkLogin(banco, teclado, sesion);

		System.out.println(Contantes.SEPARADOR);
		System.out.println(Contantes.MENU_INICIO);
		System.out.println(Contantes.SEPARADOR);
		do {

			if (sesion.isAdmin()) {
				for (int i = 0; i < Contantes.MENU_INICIO_ACCIONES_ADMIN.length; i++) {
					System.out.println(i  + "-" + Contantes.MENU_INICIO_ACCIONES_ADMIN[i]);
				}
				System.out.println(Contantes.SELECIONA_ACCION);
				accion = teclado.nextInt();
			} else {
				for (int i = 0; i < Contantes.MENU_INICIO_ACCIONES_USER.length; i++) {
					System.out.println(i + "-" + Contantes.MENU_INICIO_ACCIONES_USER[i]);
				}
				System.out.println(Contantes.SELECIONA_ACCION);
				accion = teclado.nextInt();
			}
			if (accion != 0) {
				System.out.println("Entra en asunto");
			} else {
				isAccion = Boolean.FALSE;
			}
		} while (isAccion == Boolean.TRUE);
		System.out.println("Fin");

	}

	private static void checkLogin(Banco banco, Scanner teclado, Sesion sesion) {
		do {
			System.out.println(Contantes.LOGIN_USUARIO);
			String auxUsuario = teclado.next();

			System.out.println(Contantes.LOGIN_PASSWORD);
			String aux = teclado.next();
			int auxPassword = aux.hashCode();

			// Comprobar el login del banco
			if (banco.getAdministrador().getNombre().equals(auxUsuario)
					&& banco.getAdministrador().getContrasena() == auxPassword) {
				System.out.println(Contantes.LOGIN_EXITOSO_ADMIN);
				sesion.setLogin(Boolean.TRUE);
				sesion.setAdmin(Boolean.TRUE);

			} else {
				for (Usuario user : banco.getUsuarios()) {
					if (user.getNombre().equals(auxUsuario) && user.getContrasena() == auxPassword) {
						System.out.println(Contantes.LOGIN_EXITOSO_USER + auxUsuario);
						sesion.setLogin(Boolean.TRUE);
						sesion.setUser(Boolean.TRUE);
					}
				}
			}
			if (!sesion.isLogin()) {
				System.out.println(Contantes.LOGIN_ERROR);
			} else {
				sesion.setUsarName(auxUsuario);
			}
		} while (!sesion.isLogin());
	}

}
