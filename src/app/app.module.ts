import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { FooterComponent } from './components/footer/footer.component';
import { LandingComponent } from './components/landing/landing.component';
import { BannerComponent } from './components/banner/banner.component';
import { ProyectoComponent } from './components/proyecto/proyecto.component';
import { DepartamentosComponent } from './components/departamentos/departamentos.component';
import { PrototipoComponent } from './components/prototipo/prototipo.component';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    FooterComponent,
    LandingComponent,
    BannerComponent,
    ProyectoComponent,
    DepartamentosComponent,
    PrototipoComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
