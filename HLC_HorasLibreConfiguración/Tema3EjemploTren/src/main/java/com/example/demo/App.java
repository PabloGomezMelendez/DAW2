package com.example.demo;

import org.springframework.context.ApplicationContext;
import org.springframework.context.ConfigurableApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;;

public class App {
	public static void main(String[] args) {
		ApplicationContext context = new ClassPathXmlApplicationContext("beans.xml");

		Trip trainTrip = (Trip) context.getBean("trainTrip");

		System.out.println("TrainTrip was created; \n" + trainTrip);

		((ConfigurableApplicationContext) context).close();
	}
}
