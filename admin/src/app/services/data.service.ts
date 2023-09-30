import { Injectable } from '@angular/core';
import { Router } from '@angular/router';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

@Injectable({
  providedIn: 'root'
})
export class DataService {

  constructor(public router: Router) { }

  public activeRoute: any = this.router.url;

  // CK Editor 5
  public editor = ClassicEditor;
  public editorConfig: any;

  editorPage() {
    return {
      plugins: [ /* ... */  ],
      toolbar: [ /* ... */ ]
    }
  }
  
}
