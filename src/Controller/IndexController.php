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
        $offset = null;
        $news = $repo->findBy(array(), array('id' => "DESC"), 3, $offset);
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
        $rules = $repository->findAll();
        return $this->render('index/info.html.twig',[
            'rules' => $rules,
        ]);
    }
}
