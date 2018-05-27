import { TestBed, inject } from '@angular/core/testing';

import { PurcahseService } from './purcahse.service';

describe('PurcahseService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [PurcahseService]
    });
  });

  it('should be created', inject([PurcahseService], (service: PurcahseService) => {
    expect(service).toBeTruthy();
  }));
});
