package POO.EjercicioE;

import java.util.ArrayList;
import java.util.Collections;

/*
Apartado 1: Ordena por precios:
Apartado 2: Ordena por precios, a igual precio, ordena por marca alfabéticamente:
iPhone 12 Pro Max (1.259 euros)
Xiaomi Mi 10 Pro (999 euros)
Huawei P40 Pro+ (1.399 euros)
Samsung Z Flip 5G (1.550 euros)
Samsung S20 (1500 euros)
LG V50 (899 euros)
Xiaomi Mi 10 Pro (999 euros)
Huawei P40 Pro+ (1.399 euros)
Samsung Z Flip 5G (1.550 euros)
Samsung S30 (1300 euros)
Huawei P50 Pro+ (1.399 euros)
Samsung Z Flip 5G (1.550 euros)
*/

public class EjercicioE {

	public static void main(String[] args) {
		// Creamos los 12 moviles
		movil m1 = new movil("iPhone", "12 Pro Max", 1259);
		movil m2 = new movil("Xiaomi", "Mi 10 Pro", 999);
		movil m3 = new movil("Huawei", "P40 Pro+", 1399);
		movil m4 = new movil("Samsung", "Z Flip 5G", 1550);
		movil m5 = new movil("Samsung", "S20", 1500);
		movil m6 = new movil("LG", "V50", 899);
		movil m7 = new movil("Xiaomi", "Mi 10 Pro", 999);
		movil m8 = new movil("Huawei", "P40 Pro+", 1399);
		movil m9 = new movil("Samsung", "Z Flip 5G", 1550);
		movil m10 = new movil("Samsung", "S30", 1300);
		movil m11 = new movil("Huawei", "P50 Pro+", 1399);
		movil m12 = new movil("Samsung", "Z Flip 5G", 1550);

		ArrayList<movil> moviles = new ArrayList<movil>(); // creamos un arrayList de la clase Movil

		// Añadimos los moviles al arrayList
		moviles.add(m1);
		moviles.add(m2);
		moviles.add(m3);
		moviles.add(m4);
		moviles.add(m5);
		moviles.add(m6);
		moviles.add(m7);
		moviles.add(m8);
		moviles.add(m9);
		moviles.add(m10);
		moviles.add(m11);
		moviles.add(m12);

		System.out.println("Los moviles introducidos por defecto\n");
		for (movil m : moviles) {
			System.out.println(m.toString());
		}

		System.out.println("\nLos moviles ordenados por precio\n");

		Collections.sort(moviles); // ordenamos los moviles por el precio

		for (movil m : moviles) {
			System.out.println(m.toString());
		}

	}

}
