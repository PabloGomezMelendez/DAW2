package clases;

import java.util.Arrays;

public class Banco {
	private Usuario[] usuarios;
	private Administrador administrador;

	public Banco(Usuario[] usuarios, Administrador administradores) {
		this.usuarios = usuarios;
		this.administrador = administradores;
	}

	public Usuario[] getUsuarios() {
		return usuarios;
	}

	public void setUsuarios(Usuario[] usuarios) {
		this.usuarios = usuarios;
	}

	public Administrador getAdministrador() {
		return administrador;
	}

	public void setAdministrador(Administrador administrador) {
		this.administrador = administrador;
	}

	@Override
	public String toString() {
		return "Banco [Usuarios=\n" + Arrays.toString(usuarios) + "\nAdministrador=" + administrador + "]";
	}

	
}
