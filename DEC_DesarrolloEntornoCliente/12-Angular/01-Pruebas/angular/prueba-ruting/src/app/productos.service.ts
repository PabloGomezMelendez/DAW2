import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

const URL_BASE='https://ejerciciostutorialesya.com/vue/datos.php';

@Injectable({
  providedIn: 'root'
})


export class ProductosService {

  constructor(private httpClient: HttpClient) { }

  //Metodo que devuelve un array de productos
  obtenerProductos(){
    return this.httpClient.get<any>(`${URL_BASE}`);
  }
}
