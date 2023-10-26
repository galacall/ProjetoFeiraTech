import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MainscreenComponent } from './components/mainscreen/mainscreen.component';
import { TopbarComponent } from './widgets/topbar/topbar.component';
import { LoginComponent } from './components/login/login.component';
import { ArtistasComponent } from './components/artistas/artistas.component';
import { EstudosComponent } from './components/estudos/estudos.component';
import { ExpoComponent } from './components/expo/expo.component';
import { InspireseComponent } from './components/inspirese/inspirese.component';

@NgModule({
  declarations: [
    AppComponent,
    MainscreenComponent,
    TopbarComponent,
    LoginComponent,
    ArtistasComponent,
    EstudosComponent,
    ExpoComponent,
    InspireseComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
