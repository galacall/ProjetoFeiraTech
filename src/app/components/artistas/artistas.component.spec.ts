import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ArtistasComponent } from './artistas.component';

describe('ArtistasComponent', () => {
  let component: ArtistasComponent;
  let fixture: ComponentFixture<ArtistasComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [ArtistasComponent]
    });
    fixture = TestBed.createComponent(ArtistasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
