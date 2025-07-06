<?php

class NodeDLLC {
    public $data;
    public $prev;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->prev = null;
        $this->next = null;
    }
}

class DoubleCircularLinkedListHeadOnly {
    public $head = null;

    public function insert($data) {
        $newNode = new NodeDLLC($data);

        if ($this->head === null) {
            // Kasus list kosong
            $newNode->next = $newNode;
            $newNode->prev = $newNode;
            $this->head = $newNode;
        } else {
            // Sisipkan sebelum head (di akhir list)
            $tail = $this->head->prev;

            $newNode->next = $this->head;
            $newNode->prev = $tail;

            $tail->next = $newNode;
            $this->head->prev = $newNode;
        }
    }

    public function displayForward() {
        if ($this->head === null) {
            echo "List kosong\n";
            return;
        }

        $current = $this->head;
        do {
            echo $current->data . " ";
            $current = $current->next;
        } while ($current !== $this->head);

        echo "\n";
    }

    public function displayBackward() {
        if ($this->head === null) {
            echo "List kosong\n";
            return;
        }

        $current = $this->head->prev; // start from tail
        do {
            echo $current->data . " ";
            $current = $current->prev;
        } while ($current !== $this->head->prev);

        echo "\n";
    }


    public function moveHeadNext() {
        if ($this->head !== null) {
            $this->head = $this->head->next;
        }
    }

    public function moveHeadPrev() {
        if ($this->head !== null) {
            $this->head = $this->head->prev;
        }
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
