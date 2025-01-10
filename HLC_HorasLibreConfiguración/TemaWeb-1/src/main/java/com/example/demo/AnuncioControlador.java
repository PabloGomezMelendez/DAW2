package com.example.demo;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class AnuncioControlador {
	
	@GetMapping("/nuevoAnuncio")
	public String nuevoAnuncio() {
		return "nuevoAnuncio";
	}
	@GetMapping("/anuncio")
	public String anuncio(@RequestParam(name="nombre", required=false, defaultValue="World") String nombre, Model model) {
		model.addAttribute("nombre", nombre);
		return "anuncio";
	}

}
