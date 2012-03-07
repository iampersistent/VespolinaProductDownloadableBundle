<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\ProductDownloadableBundle\Document;

use Vespolina\ProductBundle\Document\BaseProduct;

class DownloadableProduct extends BaseProduct
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var string $pdfFilePath
     */
    protected $pdfFilePath;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get $pdfFilePath
     *
     * @return string $pdfFilePath
     */
    public function getPdfFilePath()
    {
        return $this->pdfFilePath;
    }

    /**
     * Set $pdfFilePath
     *
     * @param string $pdfFilePath
     */
    public function setPdfFilePath($pdfFilePath)
    {
        $this->pdfFilePath = $pdfFilePath;
    }

    /**
     * @var string $id
     */
    protected $price;

    /**
     * Get $price
     *
     * @return string $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
