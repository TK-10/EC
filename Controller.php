<?php

namespace Customize\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Eccube\Controller\AbstractController;
use Customize\Repository\TestProductRepository;
use Customize\Form\Extension\CompanyNameRequiredExtension;


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
     * @Method("GET")
     * @Route("/sample", name="sample")
     * @Template("Sample/index.twig")
     */
    public function testMethod(Request $request)
    {
        $Product = $this->testProductRepository->find(3);
        return ['Product' => $Product]; 

    }
}