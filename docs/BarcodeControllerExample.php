<?php

namespace Amalizer\Http\Controllers;

use PicoPrime\BarcodeGen\BarcodeGenerator;

class BarcodeController extends Controller
{
    /**
     * @var \PicoPrime\BarcodeGen\BarcodeGenerator
     */
    protected $barcode;

    public function __construct(BarcodeGenerator $barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * Generate barcode as DATA URL image.
     *
     * @param string $text
     * @param int $size
     * @param string $orientation
     * @param string $codeType
     * @return \Intervention\Image\Image
     * @throws \Exception
     */
    public function barcodeAsDataUrl(
        $text = '',
        $size = 50,
        $orientation = 'horizontal',
        $codeType = 'code128'
    ) {
        return $this->barcode
            ->init($text, $size, $orientation, $codeType)
            ->generate()
            ->encode('data-url');
    }

    /**
     * Generate barcode as PNG image.
     *
     * @param string $text
     * @param int $size
     * @param string $orientation
     * @param string $codeType
     * @return mixed
     * @throws \Exception
     */
    public function barcodeAsPng(
        $text = '',
        $size = 50,
        $orientation = 'horizontal',
        $codeType = 'code128'
    ) {
        return $this->barcode
            ->init($text, $size, $orientation, $codeType)
            ->generate()
            ->response('png');
    }
}
