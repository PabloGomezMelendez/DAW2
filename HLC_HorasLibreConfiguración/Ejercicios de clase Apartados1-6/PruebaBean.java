

import java.util.ArrayList;
import java.util.List;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;
@SpringBootApplication
public class PruebaBean {
  public static void main(String[] args) {
    SpringApplication.run(PruebaBean.class, args);
  }
 
  @Bean
  public Persona constructorConList() {
	  List<Object> list = new ArrayList<>(20);
	  list.add("Vive en Sevilla.");
	  list.add(" Es programadora.");
    return new Persona("Eva", "33", list);
    
  }

  @Bean
  public Persona constructorSinList() {   
    return new Persona("Paco", "37");
    
  }

}
