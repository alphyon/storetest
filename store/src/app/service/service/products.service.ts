import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import {Observable} from 'rxjs';
import {AppConfigService} from '../app-config-service.service';

@Injectable()
export class ProductsService {

    private url: string;
    private url2: string;

  constructor(
      private http: Http,
      private appConfigService: AppConfigService
  ) {
      this.url = 'http://localhost:8000/api/v1/products';
      this.url2 = 'http://localhost:8000/api/v1/product';
  }


    getAllProducts() {
        return this.http.get(this.url+"/?token="+localStorage.getItem('token'))
            .map((res: Response) => res.json());
    }

    getProduct(id) {
        return this.http.get(this.url2 + '/' + id+"/?token="+localStorage.getItem('token'))
            .map((res: Response) => res.json());
    }

}
