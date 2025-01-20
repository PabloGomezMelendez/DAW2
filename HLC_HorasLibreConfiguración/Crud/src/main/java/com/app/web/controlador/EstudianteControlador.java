package com.app.web.controlador;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.app.web.servicio.EstudianteServicio;


@Controller
public class EstudianteControlador {
	
	@Autowired
	private EstudianteServicio servicio;
	
	@GetMapping({"/estudiantes","/"})
	public String listarEstudiantes(Model modelo) {
		modelo.addAttribute("estudiantes",servicio.listarTodosLosEstuduantes());
		return "estudiantes";
	}
	
}
