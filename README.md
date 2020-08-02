# Book-Storage-Website
Group Project for CSCI 440 - 01W

Purpose:

The purspose of this website was to create a enviroment where users can store information about books that they really like. As well as create discussions and have a
growth in community surrounding books, authors, and whatever else comes to mind. Though this website is used for storing book information first, the secondary main goal
was to create a enviroment where the community can foster discussions and kindredship. 

File Descriptions:

Discussion Board Breakdown: We do not have any hard code on hand for the forum as we as a team decided to utilize a third party plugin for the website. 
The software is Kunena version 5.1.18 created by Kunena Team. This file gives a breakdown on the process of creating the discussion forum.

Gnatt_Chart_Final.xlsx: File holding the Gnatt Chart that was used for the project.

How Login Was Created: We do not have any hard code on hand for the login as we decided to implement software that was provided by joomla for the login.
The document goes over how we adapted the software to meet the needs of our website.

Issue Regarding Search Files: Documentation to give reasoning behind the issues with the search codes. 

Project_Charter_Final.docx: It is the Project Charter for the project.

Project_Scope_Final.doc: It is the Scope for the project.

Search_Book_Form.html: The html code for the search book interface. Pulls the inputed varaible from the user and passes it to the php script.

Search_Genre_Form.html: The html code for the search genre interface. Pulls the inputed varaible from the user and passes it to the php script.

Search_Library_Form.html: The html code for the search library interface. Pulls the inputed varaible from the user and passes it to the php script.

add_Book.php: The script that will be adding the book to the database, it will be pulling the information
from the book_insert_form.html.

delete_Books.php: The script that will be deleting a selected book from the database. 
The needed variable in the system is the ISBN number of the book that was inputed into the databse, pulls information from delete_book_insert_form.html.

delete_book_insert_form.html:The user interface that will aquire the ISBN number from the user and 
deliver this data to the delete_Book.php form.

getV2.php: A complete remake of the orginal get function, though the purpose is the same. This file retreives the information from the Book database table.
It then displays all of the results inside of a table.

getV2_Form.html: A simple button to allow the user to execute the function.

insert_book_form.html: The user interface allowing the necessary information to be submitted. The information will
be stripped and utilized by the add_Book.php function.

search.php: Is the php script that takes the passed variable from the search html forms and attempts to search the database returning results. 
(Still under Construction)
