import {RouterModule, Routes} from '@angular/router';
import {ProductsComponent} from "./controller/products/products.component";
import {ProductComponent} from "./controller/product/product.component";
import {CartComponent} from "./controller/cart/cart.component";
import {DeleteCartComponent} from "./controller/delete-cart/delete-cart.component";
import {LoginComponent} from "./controller/login/login.component";






const APP_ROUTES: Routes = [
    {path: 'products', component: ProductsComponent},
    {path: 'product/:id', component: ProductComponent},
    {path: 'cartdel/:id', component: DeleteCartComponent},
    {path: 'cart', component: CartComponent},
    {path: 'login', component: LoginComponent},
    {path: '**', pathMatch: 'full', redirectTo: 'home'}
];

export const APP_ROUTING = RouterModule.forRoot(APP_ROUTES);
