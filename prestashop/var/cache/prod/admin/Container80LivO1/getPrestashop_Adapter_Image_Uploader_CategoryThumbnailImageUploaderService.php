<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Image_Uploader_CategoryThumbnailImageUploaderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.image.uploader.category_thumbnail_image_uploader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Image\Uploader\CategoryThumbnailImageUploader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.image.uploader.category_thumbnail_image_uploader'] = new \PrestaShop\PrestaShop\Adapter\Image\Uploader\CategoryThumbnailImageUploader();
    }
}
