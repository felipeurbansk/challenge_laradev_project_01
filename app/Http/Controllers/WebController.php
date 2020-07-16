<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();
        $head = $this->seo->render(
            'Página home',
            'Uma descrição de teste para esse site que está começando agora.',
            route('web.home'),
            asset('images/img_bg_2.jpg')
        );

        return view('front.home', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function course()
    {
        $head = $this->seo->render(
            'Página de cursos',
            'Página destinado a maiores informações do curso..',
            route('web.course'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.course', [
            'head' => $head
        ]);
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        $head = $this->seo->render(
            'Página de blog',
            'Página para listagem de todos os artigos publicado em nosso blog.',
            route('web.blog'),
            asset('images/img_bg_2.jpg')
        );

        return view('front.blog', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function article(Request $request, $uri)
    {
        $post = Post::where('uri',  $uri)->first();

        $head = $this->seo->render(
            env('APP_NAME') . ' - ' . $post->title,
            $post->title,
            route('web.article', $post->uri),
            \Illuminate\Support\Facades\Storage::url( \App\Support\Cropper::thumb($post->cover, 1200, 628) )
        );

        return view('front.article',[
            'head' => $head,
            'post' => $post
        ]);
    }

    public function contact()
    {
        $head = $this->seo->render(
            'Página de contato',
            'Página com maiores informações de contato.',
            route('web.contact'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.contact', [
            'head' => $head
        ]);
    }

    public function sendMail(Request $request) {
//        return new Contact($request->all());

        Mail::send(new Contact($request->all()));
    }
}
