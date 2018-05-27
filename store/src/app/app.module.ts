import {BrowserModule} from '@angular/platform-browser';
import {NgModule, NO_ERRORS_SCHEMA} from '@angular/core';
import {MDBBootstrapModule} from 'angular-bootstrap-md';
import {HttpModule} from '@angular/http';
import {ToastModule} from 'ng2-toastr/ng2-toastr';
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';


//Components
import { AppComponent } from './app.component';
import { ProductsComponent } from './controller/products/products.component';
//Services
import {AppConfigService} from './service/app-config-service.service';
import {ProductsService} from './service/service/products.service';

import {APP_ROUTING} from './routes';
import { ProductComponent } from './controller/product/product.component';
import {CommonModule} from "@angular/common";
import { CartComponent } from './controller/cart/cart.component';
import {CartService} from "./service/service/cart.service";
import { DeleteCartComponent } from './controller/delete-cart/delete-cart.component';
@NgModule({
    declarations: [
        AppComponent,
        ProductsComponent,
        ProductComponent,
        CartComponent,
        DeleteCartComponent,
    ],
    imports: [
        CommonModule,
        BrowserModule,
        HttpModule,
        MDBBootstrapModule.forRoot(),
        APP_ROUTING,
        ToastModule.forRoot(),
        BrowserAnimationsModule
    ],
    schemas: [NO_ERRORS_SCHEMA],
    providers: [
        AppConfigService,
        ProductsService,
        CartService
    ],
    bootstrap: [AppComponent]
})
export class AppModule {
}
