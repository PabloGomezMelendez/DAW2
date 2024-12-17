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
    public Tripulacion tripulacion1() {
        return new Tripulacion("Lisa", "Driver");
    }

    @Bean
    public Tripulacion tripulacion2() {
        return new Tripulacion("Lucas", "Assistant");
    }

    @Bean
    public Tripulacion tripulacion3() {
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
    public Barco superBarco() {
        Barco barco = new Barco("Talgo 747", TipoBarco.NUCLEAR, 100);
        barco.setTripulacion(List.of(tripulacion1(), tripulacion2(), tripulacion3()));
        return barco;
    }

    @Bean
    public Viaje viajeBarco() {
        Viaje viaje = new Viaje(superBarco(), Set.of(pasajero1(), pasajero2(), pasajero3(), pasajero4(), pasajero5(), pasajero6()));
        return viaje;
    }
}


