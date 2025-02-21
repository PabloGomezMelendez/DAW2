import { Component, OnInit } from '@angular/core';

declare var $: any; // ADD THIS

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  standalone: false,
  styleUrl: './app.component.css'
})
export class AppComponent implements OnInit {
  title = 'proyecto004';
  ngOnInit(): void {
    $('[data-bs-toggle="popover"]').popover();
  }

  valor1!: number;
  valor2!: number;
  valor3!: number;

  intentos = 0;
  contadorVictorias = 0;
  media = 0.0;

  resultado = "";

  constructor() {
    this.lanzarDados();
  }

  lanzarDados() {
    this.valor1 = this.generarAleatorio();
    this.valor2 = this.generarAleatorio();
    this.valor3 = this.generarAleatorio();
    this.comprobarResultado();
  }

  comprobarResultado() {
    if (this.valor1 == this.valor2 && this.valor1 == this.valor3) {
      this.resultado = "Has Ganado!";
      this.contadorVictorias++;
    } else {
      this.resultado = "-_-";
    }
    this.intentos++;
    this.media = this.contadorVictorias / this.intentos;
  }

  generarAleatorio() {
    return Math.floor(Math.random() * 6) + 1;
  }

}