# Book-Storage-Website
Group Project for CSCI 440 - 01W

Purpose:
The purspose of this website was to create a enviroment where users can store information about books that they really like. As well as create discussions and have a
growth in community surrounding books, authors, and whatever else comes to mind. Though this website is used for storing book information first, the secondary main goal
was to create a enviroment where the community can foster discussions and kindredship. 

Functions:

add_Book.php is the script that will be adding the book to the database, it will be pulling the information
from the book_insert_form.html.

delete_Books.php is the script that will be deleting a selected book from the database. 
The needed variable in the system is the ISBN number of the book that was inputed into the databse, pulls information from delete_book_insert_form.html.

delete_book_insert_form.html is the user interface that will aquire the ISBN number from the user and 
deliver this data to the delete_Book.php form.

getV2.php this is a complete remake of the orginal get function, though the purpose is the same. This file retreives the information from the Book database table.
It then displays all of the results inside of a table.

getV2.html A simple button to allow the user to execute the function.

insert_book_form.html will be the user interface allowing the necessary information to be submitted. The information will
be stripped and utilized by the add_Book.php function.
