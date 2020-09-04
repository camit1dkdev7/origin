<?php
/**
 * Copyright © Ulmod. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Dynamic\Fields\Api\Data;

/**
 * Interface OrderCommentInterface
 * @api
 */
interface OrderCommentInterface
{
    /**
     * @return string|null
     */
    public function getComment();

    /**
     * @param string $comment
     * @return null
     */
    public function setComment($comment);
}
