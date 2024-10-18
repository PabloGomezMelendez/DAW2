package EstructurasDinamicas.EjercicioB;

import java.util.ArrayList;
import java.util.Iterator;

public class EjercicioB {
	
	public static ArrayList<String> a = new ArrayList<String>();

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		a.add("rojo");
		a.add("rojo");
		a.add("verde");
		a.add("azul");
		a.add("blanco");
		a.add("amarillo");


	}
	
	private void vaciar() {
		// TODO Auto-generated method stub
		for (int i = 0; i < a.size(); i++) {
			a.remove(i);
		}

	}
	

}
