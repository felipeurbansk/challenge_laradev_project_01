<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $head = $this->seo->render(
            'Página home',
            'Uma descrição de teste para esse site que está começando agora.',
            route('web.home'),
            asset('images/img_bg_2.jpg')
        );

        return view('front.home', [
            'head' => $head
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
        $head = $this->seo->render(
            'Página de blog',
            'Página para listagem de todos os artigos publicado em nosso blog.',
            route('web.blog'),
            asset('images/img_bg_2.jpg')
        );

        return view('front.blog', [
            'head' => $head
        ]);
    }

    public function article()
    {
        return view('front.article');
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
}
