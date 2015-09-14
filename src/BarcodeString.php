<?php
/**
 *
 * @author RW <raff@picoprime.com>
 * Date: 14/09/15
 */

namespace PicoPrime\BarcodeGen;

interface BarcodeString
{
    public function generateString($text);
}