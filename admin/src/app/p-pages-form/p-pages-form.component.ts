import { Component, OnInit  } from '@angular/core';
import { DataService } from '../services/data.service';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';


@Component({
  selector: 'app-p-pages-form',
  templateUrl: './p-pages-form.component.html',
  styleUrls: [
    './p-pages-form.component.scss'
  ]
})

export class PPagesFormComponent implements OnInit {

  public Editor = ClassicEditor;
  public editorConfig;

  pageName: String = "";
  
  constructor(public api: DataService) { 
    this.editorConfig = this.api.editorPage();
  }

  ngOnInit(): void {
    this.initPage();
  }

  initPage() {
    (this.api.activeRoute == "/pages/ajouter") ? this.pageName = "Créer une page" : "Modifier une page";
  }
  
}