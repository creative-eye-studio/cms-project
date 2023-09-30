import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PPagesFormComponent } from './p-pages-form.component';

describe('PPagesFormComponent', () => {
  let component: PPagesFormComponent;
  let fixture: ComponentFixture<PPagesFormComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [PPagesFormComponent]
    });
    fixture = TestBed.createComponent(PPagesFormComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
