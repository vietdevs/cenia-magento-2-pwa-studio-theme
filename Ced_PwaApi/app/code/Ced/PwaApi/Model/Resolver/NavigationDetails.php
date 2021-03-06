<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Ced\PwaApi\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlAuthorizationException;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\GraphQl\Model\Query\ContextInterface;

/**
 * @inheritdoc
 */
class NavigationDetails implements ResolverInterface
{
    /**
     * @var SendFriendHelper
     */
    private $sendFriendHelper;

    /**
     * @var SendEmail
     */
    private $sendEmail;

    /**
     * @param SendEmail $sendEmail
     * @param SendFriendHelper $sendFriendHelper
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Framework\Pricing\Helper\Data $pricingHelper,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        \Magento\Catalog\Helper\Category $catalogHelper,
        \Magento\Catalog\Model\CategoryRepository $catalogRepository
    ){
        $this->_scopeConfig = $scopeConfig;
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->pricingHelper = $pricingHelper;
        $this->categoryFactory = $categoryFactory;
        $this->catalogHelper = $catalogHelper;
        $this->catalogRepository = $catalogRepository;
    }

    /**
     * @inheritdoc
     */
    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        $a = [];
        $a['data'][0] =2;
        $a['data'][1] =1;

        return $a;
    }
}
