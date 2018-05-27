import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import {AppConfigService} from "../app-config-service.service";

@Injectable()
export class LoginService {
  url:any;
    private headers = new Headers({ 'X-Requested-With': 'XMLHttpRequest' });
  constructor(
      private http: Http,
      private appConf: AppConfigService
  ) {
      this.url = appConf.config.login;
  }

    login(email, password){
        return this.http.post(this.url ,
            {'email':email,'password':password},
            { headers: this.headers }).map((res: Response) => res.json());
    }

}
