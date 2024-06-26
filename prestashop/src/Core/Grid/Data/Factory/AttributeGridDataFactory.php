<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

use PrestaShop\PrestaShop\Adapter\Shop\Url\ImageFolderProvider;
use PrestaShop\PrestaShop\Core\Grid\Data\GridData;
use PrestaShop\PrestaShop\Core\Grid\Record\RecordCollection;
use PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface;

/**
 * Decorates database records for grid presentation
 */
final class AttributeGridDataFactory implements GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $attributeDataFactory
     */
    public function __construct(
        private readonly GridDataFactoryInterface $attributeDataFactory,
        private readonly ImageFolderProvider $imageFolderProvider
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function getData(SearchCriteriaInterface $searchCriteria)
    {
        $records = $this->attributeDataFactory->getData($searchCriteria);
        $modifiedRecords = $this->modifyRecords($records->getRecords()->all());

        return new GridData(
            new RecordCollection($modifiedRecords),
            $records->getRecordsTotal(),
            $records->getQuery()
        );
    }

    /**
     * @param array $records
     *
     * @return array
     */
    private function modifyRecords(array $records): array
    {
        foreach ($records as &$record) {
            if (file_exists(_PS_IMG_DIR_ . 'co/' . (int) $record['id_attribute'] . '.jpg')) {
                $record['texture'] = $this->imageFolderProvider->getUrl() . '/' . (int) $record['id_attribute'] . '.jpg';
            }
        }

        return $records;
    }
}
