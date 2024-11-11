package clases;

public class Sesion {
	
	private boolean login = false;
	private boolean admin = false;
	private boolean user = true;
	
	private String usarName;
	public Sesion() {
		super();
	}
	
	public String getUsarName() {
		return usarName;
	}

	public void setUsarName(String usarName) {
		this.usarName = usarName;
	}

	public boolean isLogin() {
		return login;
	}

	public void setLogin(boolean login) {
		this.login = login;
	}

	public boolean isAdmin() {
		return admin;
	}

	public void setAdmin(boolean admin) {
		this.admin = admin;
	}

	public boolean isUser() {
		return user;
	}

	public void setUser(boolean user) {
		this.user = user;
	}
	

	
	

}
