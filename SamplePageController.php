<?php

namespace Customize\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Eccube\Controller\AbstractController;
use Customize\Repository\TestProductRepository;
use Customize\Form\Type\SampleFormType;


class SamplePageController extends AbstractController
{
    /**
     * 
     * @var TestProductRepository
     * 
     */
    protected $testProductRepository;
    /**
     * SamplePageController constructor.
     */
    public function __construct(TestProductRepository $testProductRepository)
    {
        $this->testProductRepository = $testProductRepository;
    }
    /**
     * 
     * @Route("/sample", name="sample")
     * @Template("Sample/index.twig")
     */
    public function testMethod(Request $request)
    {
        $builder = $this->formFactory->createNamedBuilder('',SampleFormType::class);
        $form = $builder->getForm();
        $form->handleRequest($request);

        $status = 'none';
        if ($form->isSubmitted() && $form->isValid()) {
    
            $status = 'succces';
        }
        return [
           'form' => $form->createView(),
           'Status' => $status
        ];
        
    }
}