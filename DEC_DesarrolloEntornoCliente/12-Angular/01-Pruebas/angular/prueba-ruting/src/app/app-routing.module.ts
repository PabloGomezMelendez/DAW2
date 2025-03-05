import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { Error404Component } from './error404/error404.component';
import { ListadoProductosComponent } from './listado-productos/listado-productos.component';
import { ListadoClienteComponent } from './listado-cliente/listado-cliente.component';

const routes: Routes = [
  {
    path: 'home',
    component: HomeComponent,
  },
  {
    path: 'listado-productos',
    component: ListadoProductosComponent,
  },
  {
    path: 'listado-cliente',
    component: ListadoClienteComponent,
  },
  {
    path: '**', component: Error404Component
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
