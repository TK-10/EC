<?php

namespace Customize\Form\Type;

use Customize\Repository\TestProductRepository;
use Eccube\Form\Type\Front\EntryType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;



class SampleFormType extends AbstractType
{
    /**
     * 
     * @var TestProductRepository
     * 
     */
    protected $testProductRepository;

    /**
     * SampleFormType constructor.
     */
    public function __construct(TestProductRepository $testProductRepository)
    {
        $this->testProductRepository = $testProductRepository;
    }
    
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder->add('title', TextType::class, []);

        $builder->add('submit', SubmitType::class, [
            'label' => '•\Ž¦‚·‚é',
        ]);
    }


    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'kana';
    }
}
