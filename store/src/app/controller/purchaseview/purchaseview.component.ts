import { Component, OnInit } from '@angular/core';
import {PurcahseService} from "../../service/service/purcahse.service";
import {ActivatedRoute, Params} from "@angular/router";
import {PurchaseV} from "../../class/purcahseview";

@Component({
  selector: 'app-purchaseview',
  templateUrl: './purchaseview.component.html',
  styleUrls: ['./purchaseview.component.scss']
})
export class PurchaseviewComponent implements OnInit {
  reference: string;
  data:any;
  name:string;
    email:string;
    reference:string;
    total:string;
    create_at:any;
    detalles:any;
  constructor(
      private purchase: PurcahseService,
      private route: ActivatedRoute,
  ) {
      this.route.params.subscribe((params: Params) => {
          this.reference = params['reference'];
      });
  }

  ngOnInit() {
    this.dataFromView();
    let countde;

    countde = JSON.stringify(this.detalles);
    console.log(countde);


  }

  dataFromView(){
    this.purchase.getPurchase(this.reference).subscribe(
        (res) => {
            this.name=res.name_client;
            this.reference=res.reference;
            this.total=res.total;
            this.create_at=res.create_at.date;
            this.detalles = res.detalles;
        },
        (error) => {
            console.log(error);
        }
    );
  }

}
