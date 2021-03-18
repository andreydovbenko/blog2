<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard
	public function dashboard(){
		return view('admin.dashboard', [
			'categories' => Category::LastCategories(5),
			'articles' => Article::LastArticles(5),
			'count_categories' => Category::count(),
			'count_articles' => Article::count()
		]);
		}
}
