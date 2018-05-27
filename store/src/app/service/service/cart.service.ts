import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import {Observable} from 'rxjs';
import {AppConfigService} from "../app-config-service.service";
@Injectable()
export class CartService {
    private url: string;
    private url2: string;
    private headers = new Headers({ 'X-Requested-With': 'XMLHttpRequest' });
  constructor(
      private http: Http,
      private appConfigService: AppConfigService
  ) {
      this.url = this.appConfigService.config.api+'/cart';
      this.url2 = this.appConfigService.config.api+'/purchase';
  }



    getProducts(hash) {
        return this.http.get(this.url + '/' + hash+"/?token="+localStorage.getItem('token'))
            .map((res: Response) => res.json());
    }

    createProduct(hash, id_producto, quantity, name,price){
        return this.http.post(this.url+"/?token="+localStorage.getItem('token') ,
            {'hash':hash,'id_product':id_producto, 'quantity':quantity,'name': name,'price':price},
            { headers: this.headers }).map((res: Response) => res.json());
    }

    updateProduct(id,quantity){
        return this.http.put(this.url+id+"/?token="+localStorage.getItem('token') , {'quantity':quantity},
            { headers: this.headers }).map((res: Response) => res.json());
    }

    deleteProduct(id){
        return this.http.delete(this.url+"/"+id+"/?token="+localStorage.getItem('token') ,
        { headers: this.headers }).map((res: Response) => res.json());
    }

    pagarProductos(id, reference, total,detalle){
        return this.http.post(this.url2+"/?token="+localStorage.getItem('token') ,
            {'user_id':id,'reference':reference, 'total':total,'details': detalle},
            { headers: this.headers }).map((res: Response) => res.json());
    }

}
