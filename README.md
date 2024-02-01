# Junior PHP Test

Dear candidate,

As part of the hiring process, we have a few tasks that we would like you to complete. These tasks are designed to assess your proficiency in PHP and your understanding of 
Object-Oriented Programming. 

Instructions for each task are below. 

Please clone this repository to your local machine and then create a new, public repository on your own GitHub account where you can push your changes. 

Make sure to create a new branch where you make modifications as you solve the tasks. Regular and meaningful commits are greatly appreciated as they help us understand your process. 

## Tasks

### Task 1: Problem Solving
Overview of solutions:

--Opening PHP tag
--Function call
--Assignment in if condition
--Extra closing parenthesis
--Overwriting variable 

The reason behind code modifications:

--The opening PHP tag should be <?php
--The function get_product is called, but the defined function is get_products.
--There's an assignment (=) inside the if condition instead of a comparison operator (== or ===). This will assign $productId to $product['id'].
--There's an extra closing parenthesis after $productId in the if condition. 
--Inside the loop, $productDetails is overwritten with each iteration. We should append the product details to an array instead.

Challenges faced: I had some challenges initially finding the errors but after some testing and playing aroudn with the code, they became more apparent.


### Task 2: Class Refactor Task

Using the corrected code from Task 1, refactor the `get_products` function into a `Product` class using Object-Oriented PHP. The class should have a constructor that takes in the `$products` array and a method to find a product by its ID.

Remember, we would like to see the use of encapsulation and Dependency Injection in your solution.

### Task 3: Data Retrieval Task

For this task, create an integration using PHP to retrieve the product data from a Google Sheets document. Make sure to interact with the Google Sheets API and parse the response correctly. The goal is to replace our static `$products` array with data fetched from a spreadsheet.

### Task 4: Documentation

Please include comments in your code to explain your logic. Also, update this README in your private repository to provide an overview of your solutions, the reason behind your code 
modifications, and any challenges you faced.

After you have completed all tasks and updated the README, please create a pull request to the main branch in your private repository and share the link with us so we can review your 
work.

---
Thank you in advance for your effort and time, and good luck!
