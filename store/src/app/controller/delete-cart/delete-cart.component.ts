import { Component, OnInit } from '@angular/core';
import {CartService} from "../../service/service/cart.service";
import { ActivatedRoute, Params, Router } from '@angular/router';
import { ToastsManager } from 'ng2-toastr/ng2-toastr';

@Component({
  selector: 'app-delete-cart',
  templateUrl: './delete-cart.component.html',
  styleUrls: ['./delete-cart.component.scss']
})
export class DeleteCartComponent implements OnInit {
 id:any;
  constructor(
      private serviceCart: CartService,
      private route: ActivatedRoute,
      private router: Router,
      private  toast: ToastsManager
  ) {
      this.route.params.subscribe((params: Params) => {
          this.id = params['id'];
      });

      this.deleteProductFromCart(this.id);
this.toast.info("Producto eliminado del carrito");
      this.router.navigate(['/products']);
  }

  ngOnInit() {
  }

  deleteProductFromCart(id){
    this.serviceCart.deleteProduct(id).subscribe(
        (res) => {
            console.log(res);
        },
        (error) => {
            console.log(error);
        }
    );
  }

}
