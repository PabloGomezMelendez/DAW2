package pruebaFichero;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.PropertySource;


@Configuration
@ComponentScan("pruebaFichero")
@PropertySource("classpath:MiViaje.txt")
public class AppConfig {
	@Bean
	public Viaje viaje() {
		return new Viaje();
		}

}
