<?php

/**
 * 单链表节点
 *
 * Class SingleLinkedListNode
 *
 */
class SingleLinkedListNode
{
    public $data;

    public $next;

    public function __construct($data = null)
    {
       $this->data = $data;
       $this->next = null;
    }
}