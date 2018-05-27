import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Params,Router } from '@angular/router';
import {ProductsService} from "../../service/service/products.service";
import { ToastsManager } from 'ng2-toastr/ng2-toastr';
import {Products} from "../../class/products";
import {log} from "util";
import {CartService} from "../../service/service/cart.service";
import has = Reflect.has;

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.scss']
})
export class ProductComponent implements OnInit {
    id: any;
    product: Products = new Products();
    tempq = 1;
    quantityt: any;
    constructor(
        private productService: ProductsService,
        private route: ActivatedRoute,
        private toast: ToastsManager,
        private cart: CartService,
        private  router: Router
    ) {
        this.route.params.subscribe((params: Params) => {
             this.id = params['id'];
        });
    }

    ngOnInit() {
        this.getProduct();
    }

    getProduct() {
        this.productService.getProduct(this.id).subscribe(
            (res) => {
                this.product = res.data;
                this.quantityt = this.product['quantity'];
                console.log(this.product);
            },
            (error) => {
                console.log(error);
            }
        );
    }

restProdcut(){
    if(this.tempq <= 1){
        this.toast.warning("Minimo 1 unidad")
        this.tempq =1;

    }else{
        this.tempq =this.tempq-1;

    }
}

    sumProdcut(){
        if(this.tempq >= this.quantityt){
            this.toast.warning("Supera las existencias");
            this.tempq =this.quantityt;

        }else{
            this.tempq =this.tempq+1;

        }
    }

     generateHash() {
        return '_' + Math.random().toString(36).substr(2, 9);
     };

    addToCart(){
        var hascod;
        if(localStorage.getItem('hash')==undefined){
            hascod = this.generateHash();
            localStorage.setItem('hash',hascod);
        }else{
            hascod = localStorage.getItem('hash');
        }
        this.cart.createProduct(hascod,this.product['id'],this.tempq,this.product['name'],this.product['price']).subscribe(
            (res) => {
                this.toast.success("Producto Agregado");
                this.router.navigate(['/products']);
            },
            (error) => {
                console.log(error);
            }
        );

    }

}
