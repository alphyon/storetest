import { Component, OnInit } from '@angular/core';
import {LoginService} from "../../service/service/login.service";
import {ToastsManager} from "ng2-toastr";

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {
    model: any = {};
  constructor(
      private login: LoginService,
      private toast: ToastsManager
  ) { }

  ngOnInit() {
  }

  loginUser(){
    this.login.login(this.model.username,this.model.password).subscribe(
        (res) => {
            localStorage.setItem('id',res.user_id);
            localStorage.setItem('fullname',res.full_name);
            localStorage.setItem('token',res.token);
            this.toast.success('Bienvenido '+ res.full_name);
        },
        (error) => {
            this.toast.error('Ocurrio un Error al loguearse');
            console.log(error);
        }
    );
  }

}
