import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LandingComponent } from './components/landing/landing.component';

const routes: Routes = [
  {path: '', component: LandingComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes,{
     anchorScrolling: 'enabled'
  })],
  exports: [RouterModule]
})
export class AppRoutingModule { }
