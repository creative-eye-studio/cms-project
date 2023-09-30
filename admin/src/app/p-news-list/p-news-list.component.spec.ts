import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PNewsListComponent } from './p-news-list.component';

describe('PNewsListComponent', () => {
  let component: PNewsListComponent;
  let fixture: ComponentFixture<PNewsListComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [PNewsListComponent]
    });
    fixture = TestBed.createComponent(PNewsListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
