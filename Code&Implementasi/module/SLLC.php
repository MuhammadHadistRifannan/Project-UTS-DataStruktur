<?php

class NodeSCLL {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class SingleCircularLinkedList {
    private $head = null;

    public function insert($data) {
        $newNode = new NodeSCLL($data);
        if ($this->head === null) {
            $this->head = $newNode;
            $newNode->next = $this->head;
        } else {
            $temp = $this->head;
            while ($temp->next !== $this->head) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->next = $this->head;
        }
    }

    public function display() {
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
}
