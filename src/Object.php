<?php

/*
 * Collection Library for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-collection
 * @package   yii2-collection
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\collection;

use ArrayAccess;
use IteratorAggregate;
use yii\base\Arrayable;

/**
 * Collection Object.
 * Simply holds items.
 */
class Object extends \yii\base\Object implements ArrayAccess, IteratorAggregate, Arrayable
{
    use CollectionTrait;
}
