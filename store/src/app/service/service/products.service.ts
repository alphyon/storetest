import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import {Observable} from 'rxjs';
import {AppConfigService} from "../app-config-service.service";

@Injectable()
export class ProductsService {

    private url: string;
    private url2: string;
    private  tst: string;

  constructor(
      private http: Http,
      private appvar: AppConfigService,
  ) {
      this.url = appvar.config.api+'/products';
      this.url2 = appvar.config.api+'/product';
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
