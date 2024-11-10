import { Component } from '@angular/core';
import { Article } from '../../common/article';
import { ArticleService } from '../../services/article.service';

@Component({
  selector: 'app-blog',
  templateUrl: './blog.component.html',
  styleUrl: './blog.component.css'
})
export class BlogComponent {
  articles: Article[] = [];
  
  constructor(private articleService: ArticleService) { }

  ngOnInit() {
    this.listProducts();
  }

  listProducts() {
    this.articleService.getArticleList().subscribe(
      data => {
        this.articles = data;
        console.log(this.articles);
      }
    )
  }
}
