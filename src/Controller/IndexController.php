<?php

namespace App\Controller;

use App\Entity\Rules;
use App\Entity\SiteNews;
use App\Repository\RulesRepository;
use App\Repository\SiteNewsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(SiteNewsRepository $repo)
    {
        $news = new SiteNews();
        $limite = 3;
        $news = $repo->findAll($limite,'DESC');
        return $this->render('index/index.html.twig', [
            'news' => $news,
        ]);
    }

     /**
     * @Route("/news/{id}", name="news")
     */
    public function news(SiteNewsRepository $repo, $id)
    {
       
        $news = new SiteNews();
        $news = $repo->find($id);
        return $this->render('index/news.html.twig', [
            'news' => $news,
        ]);
    }

    /**
     * @Route("/info", name="information")
     */
    public function info(RulesRepository $repository)
    {
        $rules = new Rules();
        $rules2 = new Rules();
        $rules3 = new Rules();
        $rules = $repository->findAll();
        $rules2 = $repository->findBy(
            ['categorie' => 'Règles Générales']
        );
        return $this->render('index/info.html.twig',[
            'rules' => $rules,
            'ruless' => $rules2
        ]);
    }
}
