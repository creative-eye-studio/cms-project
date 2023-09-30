import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PNavListComponent } from './p-nav-list.component';

describe('PNavListComponent', () => {
  let component: PNavListComponent;
  let fixture: ComponentFixture<PNavListComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [PNavListComponent]
    });
    fixture = TestBed.createComponent(PNavListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
