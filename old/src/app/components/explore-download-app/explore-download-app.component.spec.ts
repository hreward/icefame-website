import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ExploreDownloadAppComponent } from './explore-download-app.component';

describe('ExploreDownloadAppComponent', () => {
  let component: ExploreDownloadAppComponent;
  let fixture: ComponentFixture<ExploreDownloadAppComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ExploreDownloadAppComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ExploreDownloadAppComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
