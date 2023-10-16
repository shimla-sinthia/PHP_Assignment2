<?php 

class Book {
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct(
        string $isbn,
        string $title,
        string $author,
        int $available = 0
    ) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }
    public function __get($name) {
        if($name == 'title') {
            return $this->title;
        }
        elseif($name == 'author') {
            return $this->author;
        }
        elseif($name == 'isbn') {
            return $this->isbn;
        }
        elseif($name == 'availableCopy') {
            return $this->available;
        }
    }
    public function __set($name, $value) {
        if($name == 'available') {
            $this->available = $value;
        }
        elseif($name == 'title') {
            $this->title = $value;
        }
        elseif($name == 'author') {
            $this->author = $value;
        }
        elseif($name == 'isbn') {
            $this->isbn = $value;
        }
        elseif($name == 'availableCopy') {
            $this->available = $value;
        }
    }
    public function __call($method, $args) {
        if($method == 'getCopy') {
            if($this->available < 1) {
                return false;
            } else {
                $this->available--;
                return true;
            }
        }
        elseif($method == 'addCopy') {
            $this->available = $this->available + $args[0];
            return true;
        }
        elseif($method == 'isAvailable') {
            if($this->available < 1) {
                return false;
            } else {
                return true;
            }
        }
        elseif($method == 'getPrintableTitle') {
            $result = '<i>' . $this->title . '</i> - ' . $this->author;
            if(!$this->available) {
                $result .= '<b> Not available</b>';
            }
            return $result;
        }
    }

}

?>
