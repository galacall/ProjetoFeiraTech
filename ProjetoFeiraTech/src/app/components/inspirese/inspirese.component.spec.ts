import { ComponentFixture, TestBed } from '@angular/core/testing';

import { InspireseComponent } from './inspirese.component';

describe('InspireseComponent', () => {
  let component: InspireseComponent;
  let fixture: ComponentFixture<InspireseComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [InspireseComponent]
    });
    fixture = TestBed.createComponent(InspireseComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
