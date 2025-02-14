import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  standalone: false,
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'proyecto001';
  nombre = 'Pablo';
  edad = 25;
  fumador = false;
  estudiante = true;
  sueldos: number[] = [1000, 2000, 3000];
  provinciasAndaluzas = [{ id: 1, nombre: 'Almería' }, { id: 2, nombre: 'Cádiz' }, { id: 3, nombre: 'Córdoba' }, { id: 4, nombre: 'Granada' }, { id: 5, nombre: 'Huelva' }, { id: 6, nombre: 'Jaén' }, { id: 7, nombre: 'Málaga' }, { id: 8, nombre: 'Sevilla' }];

  contador = 0;

  esFumador() {
    return this.fumador ? 'Es fumador' : 'No es fumador';
  }
  diHolaMundo() {
    alert('!Hola Mundo¡');
  }

  incrementar() {
    this.contador++;
  }
  decrementar() {
    this.contador--;
  }
  reiniciar() {
    this.contador = 0;
  }

}
