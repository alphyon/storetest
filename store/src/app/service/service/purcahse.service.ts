import { Injectable } from '@angular/core';
import {AppConfigService} from "../app-config-service.service";
import {Http, Response} from "@angular/http";

@Injectable()
export class PurcahseService {
  url:string;
  constructor(
      private appConfig: AppConfigService,
      private http: Http
  ) {
    this.url = appConfig.config.api+"/purchase/full";
  }

    getPurchase(reference) {
        return this.http.get(this.url + '/' + reference)
            .map((res: Response) => res.json());
    }

}
