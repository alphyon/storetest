import {BrowserModule} from '@angular/platform-browser';
import {NgModule, NO_ERRORS_SCHEMA,APP_INITIALIZER} from '@angular/core';
import {MDBBootstrapModule} from 'angular-bootstrap-md';
import {HttpModule} from '@angular/http';
import {ToastModule} from 'ng2-toastr/ng2-toastr';
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import { FormsModule }   from '@angular/forms';

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
import { LoginComponent } from './controller/login/login.component';
import {LoginService} from "./service/service/login.service";
import { PurchaseviewComponent } from './controller/purchaseview/purchaseview.component';
import {PurcahseService} from "./service/service/purcahse.service";

export function startupServiceFactory(config: AppConfigService): Function {
    return () => config.load();
}

@NgModule({
    declarations: [
        AppComponent,
        ProductsComponent,
        ProductComponent,
        CartComponent,
        DeleteCartComponent,
        LoginComponent,
        PurchaseviewComponent,
    ],
    imports: [
        CommonModule,
        BrowserModule,
        HttpModule,
        MDBBootstrapModule.forRoot(),
        APP_ROUTING,
        ToastModule.forRoot(),
        BrowserAnimationsModule,
        FormsModule
    ],
    schemas: [NO_ERRORS_SCHEMA],
    providers: [
        AppConfigService,
        {
            provide: APP_INITIALIZER,
            useFactory: startupServiceFactory,
            deps: [AppConfigService],
            multi: true
        },
        ProductsService,
        CartService,
        LoginService,
        PurcahseService
    ],
    bootstrap: [AppComponent]
})
export class AppModule {
}
