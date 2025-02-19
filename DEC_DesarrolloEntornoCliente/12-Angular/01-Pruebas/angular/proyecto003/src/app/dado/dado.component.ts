import { Component } from '@angular/core';

@Component({
  selector: 'app-dado',
  standalone: false,
  templateUrl: './dado.component.html',
  styleUrl: './dado.component.css'
})
export class DadoComponent {
  valor: number = 0;
  //Genera valores aleatroiso apara el dado
  constructor() {
    this.valor = this.generarValorAleatorio();
  }
  generarValorAleatorio(): number {
    return Math.floor(Math.random() * 6) + 1;
  }



}
