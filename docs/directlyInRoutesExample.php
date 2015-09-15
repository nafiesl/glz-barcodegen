<?php

Route::get(
    'barcode/img/{text}/{size?}/{codeType?}/{orientation?}', 
    
    function ($text, $size = 50, $codeType = 'code128', $orientation = 'horizontal') {
        
        $barcode = new \PicoPrime\BarcodeGen\BarcodeGenerator();

        return $barcode
            ->generate(compact('text', 'size', 'orientation', 'codeType'))
            ->response('png');
    }
);