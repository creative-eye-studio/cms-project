import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { PDashboardComponent } from './p-dashboard/p-dashboard.component';
import { PPagesListComponent } from './p-pages-list/p-pages-list.component';
import { PNewsListComponent } from './p-news-list/p-news-list.component';
import { PNavListComponent } from './p-nav-list/p-nav-list.component';
import { PPagesFormComponent } from './p-pages-form/p-pages-form.component';

const routes: Routes = [
  { path: '', component: PDashboardComponent},
  { path: 'pages', component: PPagesListComponent},
  { path: 'pages/ajouter', component: PPagesFormComponent},
  { path: 'news', component: PNewsListComponent},
  { path: 'navigation', component: PNavListComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
