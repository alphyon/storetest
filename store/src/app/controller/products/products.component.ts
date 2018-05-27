import { Component, OnInit } from '@angular/core';
import {ProductsService} from '../../service/service/products.service';


@Component({
    selector: 'app-products',
    templateUrl: './products.component.html',
    styleUrls: ['./products.component.css']
})
export class ProductsComponent implements OnInit {
    products: any[];
    constructor(
        private productService: ProductsService
    ) { }

    ngOnInit() {
        this.getProducts();
    }

    getProducts() {
        this.productService.getAllProducts().subscribe(
            (res) => {
                this.products = res.data;
            },
            (error) => {
                console.log(error);
            }
        );
    }

    test(){
        alert("ok");
    }
}
