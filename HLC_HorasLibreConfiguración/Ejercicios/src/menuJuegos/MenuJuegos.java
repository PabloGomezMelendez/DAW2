package menuJuegos;


import java.util.Scanner;

import atrapaBola.AtrapaLaPelota;
import caraCruz.CaraCruz;
import tresEnRaya.TresEnRaya;

public class MenuJuegos {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        boolean exit = false;

        while (!exit) {
            try {
                // Mostrar el menú
                System.out.println("====== Menú de Juegos ======");
                System.out.println("1. Atrapa la Pelota");
                System.out.println("2. Cara o Cruz");
                System.out.println("3. Tres en Raya");
                System.out.println("4. Salir");
                System.out.print("Selecciona una opción: ");

                // Leer opción del usuario
                int choice = scanner.nextInt();
                scanner.nextLine(); // Consumir el salto de línea sobrante

                // Evaluar la opción
                switch (choice) {
                    case 1:
                        AtrapaLaPelota.main(null); // Ejecutar Atrapa la Pelota
                        break;
                    case 2:
                        CaraCruz.main(null); // Ejecutar Cara o Cruz
                        break;
                    case 3:
                        TresEnRaya.main(null); // Ejecutar Tres en Raya
                        break;
                    case 4:
                        System.out.println("¡Gracias por jugar! Saliendo...");
                        exit = true; // Salir del bucle
                        break;
                    default:
                        System.out.println("Opción no válida. Intenta de nuevo.");
                }
            } catch (Exception e) {
                System.out.println("Entrada no válida. Por favor, ingresa un número.");
                scanner.nextLine(); // Limpiar el buffer en caso de error
            }
        }

        scanner.close(); // Cerrar Scanner al salir
    }
}