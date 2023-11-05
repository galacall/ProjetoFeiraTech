import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { MainscreenComponent } from './components/mainscreen/mainscreen.component';
import { LoginComponent } from './account/login/login.component';
import { ArtistasComponent } from './components/artistas/artistas.component';
import { EstudosComponent } from './components/estudos/estudos.component';
import { ExpoComponent } from './components/expo/expo.component';
import { InspireseComponent } from './components/inspirese/inspirese.component';



const routes: Routes = [
  { path: '', component: MainscreenComponent },
  { path: 'login', component: LoginComponent },
  { path: 'artistas', component: ArtistasComponent},
  { path: 'estudos', component: EstudosComponent},
  { path: 'expo', component: ExpoComponent},
  { path: 'inspire-se', component: InspireseComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
