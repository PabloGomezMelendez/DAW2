package com.example.demo;

import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.AnnotationConfigApplicationContext;

@SpringBootApplication
public class App {
    public static void main(String[] args) {
        AnnotationConfigApplicationContext context = new AnnotationConfigApplicationContext(AppConfig.class);

        Viaje viajeCoche = context.getBean(Viaje.class);

        System.out.println("El viaje en coche se ha iniciado\n" + viajeCoche);

        context.close();
    }
}
