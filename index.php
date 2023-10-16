<?php

require_once 'books.php';
require_once 'customers.php';

$book1 = new Book(
    '9788187981954',
    'Opekkha',
    'Humayun Ahmed',
    6
);

$book2 = new Book(
    '9788187981952',
    'Himu',
    'Humayun Ahmed',
    12
);
$book3 = new Book(
    '9788187981953',
    'Aj Himur Biye',
    'Humayun Ahmed',
    0
);

$customer1 = new  Customer(
    1,
    'Adrit',
    'Chowdhury',
    'adrit.chowdhury@gmail.com'
);
$customer2 = new  Customer(
    2,
    'Ayushman',
    'Chowdhury',
    'ayushman.chowdhury@gmail.com'
);

echo "<b>BOOK</b></br>";
// isAvailable
echo "Book-1 is available? " . $book1->__call("isAvailable","") . "</br>";
// getPrintableTitle
echo "Book-1 Title: " . $book1->__call("getPrintableTitle","") . "</br>";

echo "</br>";

// addCopy
echo "Book-1 Title: " . $book1->__call("getPrintableTitle","") . "</br>";
echo "Book-3 availableCopy: " . $book3->__get("availableCopy") . "</br>"; 
$book3->__call("addCopy","2"); // add A copy of Book-3
echo "Book-3 availableCopy after adding 2 copy: " . $book3->__get("availableCopy") . "</br>";

echo "</br>";

//getTitle
echo "Book-1 Title: <b>" . $book1->__get("title") . "</b></br>";
//getAuthor
echo "Book-1 Author: <b>" . $book1->__get("author") . "</b></br>";
//getIsbn
echo "Book-1 Isbn: <b>" . $book1->__get("isbn") . "</b></br>";

//Customer INFO.
echo "</br> <b>CUSTOMER</b> </br>";
echo "Customer-1 Id: <b>" . $customer1->__get("id") . "</b></br>";
echo "Customer-1 First Name: <b>" . $customer1->__get("firstName") . "</b></br>";
echo "Customer-1 Last Name: <b>" . $customer1->__get("lastName") . "</b></br>";
echo "Customer-1 Email: <b>" . $customer1->__get("email") . "</b></br>";
$customer1->__set("email","adrit@gmail.com");
echo "Customer-1 Email: <b>" . $customer1->__get("email") . "</b></br>";

?>
