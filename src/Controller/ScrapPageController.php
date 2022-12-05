<?php

namespace App\Controller;

use App\Entity\ScrapPage;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ScrapPageController extends AbstractController
{
    #[Route('/scrap_page/list', name: 'scrap_page_list')]
    public function list(Request $req): JsonResponse
    {
        $scrap_pages = $this->getDoctrine()
            ->getRepository(ScrapPage::class)
            ->findBy([], ['id' => 'ASC'], $req->get('length'), $req->get('start'));

        $recordsTotal = $this->getDoctrine()
            ->getRepository(ScrapPage::class)
            ->createQueryBuilder('s')
            ->select('count(s.id)')
            ->getQuery()
            ->getSingleScalarResult();

        return $this->json(ScrapPage::dataTableList(
            $scrap_pages,
            $recordsTotal,
            $req->get('draw'), 
            $this->isGranted('ROLE_SUPER_ADMIN')

        ));
    }

    #[Route('/scrap_page/delete/{id}', name: 'scrap_page_delete')]
    public function delete(ScrapPage $scrap_page)
    {
        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($scrap_page);
        $entityManager->flush();
        

        $this->addFlash('success', 'Record deleted Successfully');

        return $this->redirectToRoute('home');
    }


}