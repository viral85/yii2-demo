<?php
/**
 * ProductController v1
 * @author Ihor Karas <ihor@karas.in.ua>
 * Date: 03.04.15
 * Time: 00:35
 */

namespace api\versions\v1\controllers;


class QuoteController extends \api\common\controllers\QuoteController
{
	public $modelClass = '\api\versions\v1\models\Quote';

}