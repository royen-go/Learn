<?php

//如果字符串是通过单链表来存储的，那该如何来判断是一个回文串

include_once 'SingleLinkedList.php';
include_once 'SingleLinkedListNode.php';


$sll = new SingleLinkedList();

$sll->insert('l');
$sll->insert('e');
$sll->insert('v');
$sll->insert('e');
$sll->insert('l');

//$sll->insert('m');
//$sll->insert('o');
//$sll->insert('o');
//$sll->insert('m');


//使用 快慢双指针，快指针一次走两步，慢指针一次走一步。


$fast = $sll->head->next;
$slow = $sll->head->next;

while($fast && $fast->next) {
    $fast = $fast->next->next;

    $slow = $slow->next;
}

var_dump($slow->data, $fast->data);
