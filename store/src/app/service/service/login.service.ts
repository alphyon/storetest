import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';

@Injectable()
export class LoginService {
  url:any;
    private headers = new Headers({ 'X-Requested-With': 'XMLHttpRequest' });
  constructor(
      private http: Http,
  ) {
      this.url = 'http://localhost:8000/auth/login';
  }

    login(email, password){
        return this.http.post(this.url ,
            {'email':email,'password':password},
            { headers: this.headers }).map((res: Response) => res.json());
    }

}
