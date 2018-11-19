<?php

namespace App\Controller;

use App\Entity\NaughtyStudent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function index()
    {
        $students = $this->getDoctrine()->getRepository(NaughtyStudent::class)->findAll();
        return $this->render('students.html.twig', [
            'students' => $students
        ]);
    }
}
