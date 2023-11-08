import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent {
  loginForm: FormGroup;

  constructor(
    private fb: FormBuilder,
    private http: HttpClient
  ) {
    this.loginForm = this.fb.group({
      email: ['', [Validators.required, Validators.email]],
      senha: ['', Validators.required]  
    });    
  }

  onSubmit() {
    if (this.loginForm.valid) {
      const { email, senha } = this.loginForm.value;  // Alterado de 'password' para 'senha'
      const loginData = { email, senha };
      this.http.post<any>('http://localhost:8000/api.php', loginData)
        .subscribe(
          (response) => {
            console.log('Resposta do servidor:', response);
            if (response && response.message === 'Login bem-sucedido') {
              console.log('Login efetuado com sucesso:', response.message);
              // Redirecione ou realize ações adicionais aqui
            } else {
              console.error('Resposta inválida do servidor:', response);
            }
          },
          (error) => {
            console.error('Erro durante o login:', error);
          }
        );
    }
  }
}
/*
'http://localhost:8000/api.php'
*/
