import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { ListadoClienteComponent } from './listado-cliente/listado-cliente.component';
import { ListadoProductosComponent } from './listado-productos/listado-productos.component';
import { Error404Component } from './error404/error404.component';
import { provideHttpClient } from '@angular/common/http';
// import { HttpClientModule } from '@angular/common/http';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    ListadoClienteComponent,
    ListadoProductosComponent,
    Error404Component
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    // HttpClientModule
  ],
  providers: [
    provideHttpClient()
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
