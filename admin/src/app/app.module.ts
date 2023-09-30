import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { CKEditorModule } from '@ckeditor/ckeditor5-angular';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavigationComponent } from './navigation/navigation.component';
import { PPagesListComponent } from './p-pages-list/p-pages-list.component';
import { PDashboardComponent } from './p-dashboard/p-dashboard.component';
import { PNewsListComponent } from './p-news-list/p-news-list.component';
import { PNavListComponent } from './p-nav-list/p-nav-list.component';
import { PPagesFormComponent } from './p-pages-form/p-pages-form.component';

@NgModule({
  declarations: [
    AppComponent,
    NavigationComponent,
    PDashboardComponent,
    PPagesListComponent,
    PPagesFormComponent,
    PNewsListComponent,
    PNavListComponent
  ],
  imports: [
    CKEditorModule,
    BrowserModule,
    AppRoutingModule,
    NgbModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
