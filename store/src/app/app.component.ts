import { Component, ViewContainerRef } from '@angular/core';
import { ToastsManager } from 'ng2-toastr/ng2-toastr';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'app';
  visual: boolean;
  fullname: any;
    constructor(private toastr: ToastsManager, vRef: ViewContainerRef) {
        this.toastr.setRootViewContainerRef(vRef);

    }

    loginUser(){
      if(localStorage.getItem('id')== undefined){
         this.visual = false;

      }else{
        this.visual = true;
        this.fullname = localStorage.getItem('fullname');
      }
    }
}
