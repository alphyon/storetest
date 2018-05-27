import { Component, OnInit } from '@angular/core';
import {CartService} from "../../service/service/cart.service";
import { ActivatedRoute, Params,Router } from '@angular/router';
import { ToastsManager } from 'ng2-toastr/ng2-toastr';
@Component({
  selector: 'app-cart',
  templateUrl: './cart.component.html',
  styleUrls: ['./cart.component.scss']
})
export class CartComponent implements OnInit {
  product[]: any;
  total:any;
    numItems:any;
    id_user:any;
  constructor(
      private cartService: CartService,
      private toast: ToastsManager,
      private  router: Router
  ) {
    this.getCartProdcuts(localStorage.getItem("hash"));
  }

  ngOnInit() {
  }

  getCartProdcuts(hashc){
      this.cartService.getProducts(hashc).subscribe(
          (res) => {
              this.product = res.data;
              this.numItems = this.product.length;
              this.total = res.total;
              console.log(this.product);
          },
          (error) => {
              console.log(error);
          }
      );
  }

    pagar(){
      let detalle[]={};
        console.log(this.numItems);
      for(var i=0; i < this.numItems; i++){

          detalle[i]={'product_id':this.product[i].id_product, 'quantity':this.product[i].quantity};

      }


        this.cartService.pagarProductos(
            localStorage.getItem('id'),
            localStorage.getItem('hash'),
            this.total,
            detalle
        ).subscribe(
            (res) => {
                localStorage.removeItem('hash');
                this.toast.success("Compra realizada con exito");
                this.router.navigate(['/products']);
            },
            (error) => {
                console.log(error);
            }
        );
    }

}
