import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DownloadAppPageComponent } from './download-app-page.component';

describe('DownloadAppPageComponent', () => {
  let component: DownloadAppPageComponent;
  let fixture: ComponentFixture<DownloadAppPageComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ DownloadAppPageComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(DownloadAppPageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
