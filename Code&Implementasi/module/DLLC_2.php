<?php

class NodeDCLL {
    public $data;
    public $next;
    public $prev;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
        $this->prev = null;
    }
}

class DoubleCircularLinkedList {
    private $head = null;
    private $tail = null;

    public function insert($data) {
        $newNode = new NodeDCLL($data);

        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
            $newNode->next = $newNode;
            $newNode->prev = $newNode;
        } else {
            $newNode->prev = $this->tail;
            $newNode->next = $this->head;
            $this->tail->next = $newNode;
            $this->head->prev = $newNode;
            $this->tail = $newNode;
        }
    }

    public function displayForward() {
        if ($this->head === null) {
            echo "List kosong\n";
            return false;
        }

        $temp = $this->head;
        do {
            echo $temp->data . " ";
            $temp = $temp->next;
        } while ($temp !== $this->head);
        echo "\n";
        return true;
    }

    public function displayBackward() {
        if ($this->tail === null) {
            echo "List kosong\n";
            return false;
        }

        $temp = $this->tail;
        do {
            echo $temp->data . " ";
            $temp = $temp->prev;
        } while ($temp !== $this->tail);
        echo "\n";
        return true;
    }

    public function toArray() {
    $result = [];

    if ($this->head == null) {
        return $result;
    }

    $current = $this->head;
    do {
        $result[] = $current->data;
        $current = $current->next;
    } while ($current !== $this->head);

    return $result;
}

}
