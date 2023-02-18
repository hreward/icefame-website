import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NumberSectionComponent } from './number-section.component';

describe('NumberSectionComponent', () => {
  let component: NumberSectionComponent;
  let fixture: ComponentFixture<NumberSectionComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ NumberSectionComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(NumberSectionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
