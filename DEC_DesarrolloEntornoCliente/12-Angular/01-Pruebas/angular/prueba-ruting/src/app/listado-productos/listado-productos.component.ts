import { Component, OnInit } from '@angular/core';
import { ProductosService } from '../productos.service';
import { Iproducto } from '../iproducto';

@Component({
  selector: 'app-listado-productos',
  standalone: false,
  templateUrl: './listado-productos.component.html',
  styleUrl: './listado-productos.component.css'
})

export class ListadoProductosComponent implements OnInit {

  productos!: Iproducto[];

  constructor(private serviciosProductos: ProductosService) { }

  ngOnInit(): void {
    this.serviciosProductos.obtenerProductos().subscribe((data: any) => {
      this.productos = data;
      console.log(this.productos[0]);
    });
  }

}
