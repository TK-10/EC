<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Customize\Service;

use Eccube\Repository\ProductRepository;

class SampleService
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;


    /**
     * CartService constructor.
     */
    public function __construct(ProductRepository $productRepository) 
    {
        $this->productRepository = $productRepository;

    }

    /**
     * 
     *
     * 
     * –¼Ì‚ğ‘Sæ“¾
     * 
     *
     * @return array
     */
    public function getGadgetgetFindAll()
    {

        $name = [];
        $Products = $this->productRepository->findAll();
        if(!empty($Products)){
            foreach($Products as $Product){
                $name[] = $Product->getName();
            }
        }
        return $name;
    }
}
