import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable()
export class ApiServiceService {
    private apiUrl = 'localhost:8000/src/api.php';

    constructor(private http: HttpClient) {}

    // Método para realizar uma solicitação GET
    getData(): Observable<any> {
        return this.http.get(this.apiUrl);
    }

    // Método para realizar uma solicitação POST
    postData(data: any): Observable<any> {
        return this.http.post(this.apiUrl, data);
    }
}
