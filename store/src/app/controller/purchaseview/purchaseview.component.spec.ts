import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PurchaseviewComponent } from './purchaseview.component';

describe('PurchaseviewComponent', () => {
  let component: PurchaseviewComponent;
  let fixture: ComponentFixture<PurchaseviewComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PurchaseviewComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PurchaseviewComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
