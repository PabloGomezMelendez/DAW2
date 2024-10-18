package Menus;

import java.util.Scanner;

public class Menu {
	private TextosMenu textoMenu=new TextosMenu();
	private Scanner teclado; 
	public int menuInicio() {
		teclado= new Scanner(System.in);
		int valorMenu = 0;
		String respuesta;
		System.out.println("Bienvenido a esta aventura");
		System.out.println("Estas listo para iniciar la aventura:[Si/No]");
		respuesta=teclado.nextLine();
		
		
		teclado.close();
		return valorMenu;
	}
	public void menuPassword() {
		teclado= new Scanner(System.in);
		int valorMenu = 0;
		System.out.println("Bienvenido a ");
		
		teclado.close();
	}

}
