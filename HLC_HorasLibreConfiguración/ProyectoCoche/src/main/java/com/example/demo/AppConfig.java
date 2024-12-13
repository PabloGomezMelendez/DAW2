package com.example.demo;

import java.util.List;
import java.util.Set;

import org.springframework.context.annotation.AnnotationConfigApplicationContext;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.PropertySource;

@Configuration
@ComponentScan("com.example.demo")
@PropertySource("classpath:MiViaje.txt")
public class AppConfig {

    @Bean
    public Tripulacion crewMember1() {
        return new Tripulacion("Lisa", "Driver");
    }

    @Bean
    public Tripulacion crewMember2() {
        return new Tripulacion("Lucas", "Assistant");
    }

    @Bean
    public Tripulacion crewMember3() {
        return new Tripulacion("Moe", "Waiter");
    }

    @Bean
    public Pasajero pasajero1() {
        return new Pasajero("Pacho", 1);
    }

    @Bean
    public Pasajero pasajero2() {
        return new Pasajero("Gilberto", 1);
    }

    @Bean
    public Pasajero pasajero3() {
        return new Pasajero("Limón", 3);
    }

    @Bean
    public Pasajero pasajero4() {
        return new Pasajero("P. Escobar", 4);
    }

    @Bean
    public Pasajero pasajero5() {
        return new Pasajero("Berna", 5);
    }

    @Bean
    public Pasajero pasajero6() {
        return new Pasajero("Javier Peña", 6);
    }

    @Bean
    public Coche superCoche() {
        Coche coche = new Coche("Talgo 747", TipoCoche.NUCLEAR, 100);
        coche.setTripulacion(List.of(crewMember1(), crewMember2(), crewMember3()));
        return coche;
    }

    @Bean
    public Viaje viajeCoche() {
        Viaje viaje = new Viaje(superCoche(), Set.of(pasajero1(), pasajero2(), pasajero3(), pasajero4(), pasajero5(), pasajero6()));
        return viaje;
    }
}


