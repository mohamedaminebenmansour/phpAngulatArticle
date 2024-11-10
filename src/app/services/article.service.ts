import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Article } from '../common/article';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ArticleService {

  private baseUrl = 'http://localhost:3000/index.php';

  constructor(private httpClient: HttpClient) { }

  getArticleList(): Observable<Article[]> {
    console.log('getProductList() called');
    
    return this.httpClient.get<Article[]>(this.baseUrl);
}
}
