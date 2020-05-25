<?php

namespace App\Http\Controllers;

use App\Models\Blog\Blog;


class BlogController extends Controller
{
    public function index(){

        $blogs = Blog::orderBy("created_at","desc")->paginate(9);

        $blog_popular = Blog::limit(5)->orderBy("viewed","desc")->get();

        return view('blog.index',[
            'blogs' => $blogs,
            'blog_popular'=>$blog_popular,
            'title' => "AutoCar | Car Stock | Новости |  Блог Страница №".$blogs->currentPage(),
            'meta_description' => "CARSTOCK.COM.UA — Новости |  Блог. Cтраница №".$blogs->currentPage()." Обьявления продажи авто."
        ]);
    }

    public function showNews($slug){
        $blog = Blog::where('slug',$slug)->first();

        $blog->viewed++;
        $blog->update();

        if(!$blog){
            abort(404);
        }

        $blog_popular = Blog::limit(5)->orderBy("viewed","desc")->get();

        return view('blog.detail',[
            'blog'=>$blog,
            'blog_popular'=>$blog_popular,
            'title' => $blog->title." AutoCar | Car Stock | Новости |  Блог",
            'meta_description' => $blog->meta_description." CARSTOCK.COM.UA — Новости |  Блог."
        ]);
    }
}
