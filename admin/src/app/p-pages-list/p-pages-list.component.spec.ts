import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PPagesListComponent } from './p-pages-list.component';

describe('PPagesListComponent', () => {
  let component: PPagesListComponent;
  let fixture: ComponentFixture<PPagesListComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [PPagesListComponent]
    });
    fixture = TestBed.createComponent(PPagesListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
