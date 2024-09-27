package String;

public class EjercicioA {

	public static void main(String[] args) {

		// Ejemplo de uso

		String str1 = "aeiou r";

		String str2 = "eo z w";

		String[] resultados = obtenerDiferencias(str1, str2);

		System.out.println("Out1 (presentes en str1 pero no en str2): " + resultados[0]);

		System.out.println("Out2 (presentes en str2 pero no en str1): " + resultados[1]);

	}

	public static String[] obtenerDiferencias(String str1, String str2) {
  
		StringBuilder out1 = new StringBuilder();

		StringBuilder out2 = new StringBuilder();

		// Recorrer str1 y agregar caracteres que no estén en str2 a out1

		for (char c : str1.toCharArray()) {

			if (!str2.contains(String.valueOf(c))) {

				out1.append(c);

			}

		}

		// Recorrer str2 y agregar caracteres que no estén en str1 a out2

		for (char c : str2.toCharArray()) {

			if (!str1.contains(String.valueOf(c))) {

				out2.append(c);

			}

		}

		// Devolver ambos resultados como un array de strings

		return new String[] { out1.toString(), out2.toString() };

	}

}
