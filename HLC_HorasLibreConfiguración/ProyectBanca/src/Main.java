import clases.Administrador;
import clases.Banco;
import clases.Usuario;
import general.GeneralBanco;

public class Main {

	public static void main(String[] args) {

		// Banca digital
		Usuario[] usuarios = GeneralBanco.generarUsuariosPrueba();
		Administrador administrador = GeneralBanco.generarAdministradorPrueba();
		Banco banco = new Banco(usuarios, administrador);
		
//		System.out.println(banco.toString());
		
		
		GeneralBanco.mainAccion(banco);
	}

}
