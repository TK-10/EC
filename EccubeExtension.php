<?php
namespace Customize\Twig\Extension;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

use Customize\Service\SampleService;

class EccubeExtension2 extends AbstractExtension
{
    /**
     * @var SampleService
     */

     protected $sampleService;

    /**
     * EccubeExtension2 constructor.
     */
    public function __construct(SampleService $sampleService)
    {
        $this->sampleService = $sampleService;
    }


    public function getFunctions()
    {
        return [
            new TwigFunction('find_all', [$this, 'FindAll']),
        ];
    }

    public function FindAll(){
        return $this->sampleService->getGadgetgetFindAll();//ServiceのgetGadgetgetFindAllメソッドを呼び出し
    }
}