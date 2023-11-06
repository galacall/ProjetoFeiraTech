import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';


@Component({
  selector: 'app-cadastro',
  templateUrl: './cadastro.component.html',
  styleUrls: ['./cadastro.component.css']
})
export class CadastroComponent implements OnInit {
  account = {
    name: '',
    email: '',
    password: ''
  };
  constructor(private router: Router) { }
  ngOnInit() {
    
  }

  onSubmit() {
    this.router.navigate(['/']);
  }
}
