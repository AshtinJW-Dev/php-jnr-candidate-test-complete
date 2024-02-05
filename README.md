# Junior PHP Test

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

Challenges faced: I had some challenges initially finding the errors but after some testing and playing around with the code, they became more apparent.


### Task 2: Class Refactor Task

Overview of solutions:

(ProductClass)
--We define a private property $products.
--We use the constructor method __construct().
--We define a public method getProductById().

(ProductTest)
--We require the Product.php file.
--We create an instance of the Product class, passing the $products array to its constructor.
--We define the product ID we want to search for.
--We call the getProductById() method.
--We output the details of the matching product.

The reason behind code modifications:

(ProductClass)
--$products is used to store the array of products.
--the constructor method __construct() takes the $products array as a parameter and assigns it to the $products property.
--getProductById() takes a product ID as a parameter and returns an array of matching products.

(ProductTest)
--We require the task2ProductClass.php file to include the Product class definition.
--We call the getProductById() method to find the product with the specified ID.

Challenges faced: One challenge that was faced in Task 2 was ensuring proper encapsulation and dependency injection while refactoring the function into a class. 

### Task 3: Data Retrieval Task

Overview of solutions:

--Setting up Google API credentials and obtaining a service account JSON key file.
--Writing PHP code to authenticate with the Google Sheets API using the service account credentials.
--Retrieving data from the specified Google Sheets document using the Sheets API.
--Processing the response to extract product data from the spreadsheet.
--Outputting the product details retrieved from the spreadsheet.


The reason behind code modifications:

--Changes were made to the PHP script to integrate with the Google Sheets API and fetch data dynamically from the spreadsheet.
--The code was modified to use the Google API Client Library for PHP to interact with the Sheets API.
--Authentication settings were updated to use a service account and the corresponding JSON key file.
--The code was adjusted to handle API requests and responses, including error handling and processing of retrieved data.

Challenges faced:

Authentication and Permissions: Setting up the correct authentication and ensuring that the service account had the necessary permissions to access the Google Sheets document was a challenge.

SSL Certificate Verification: Resolving SSL certificate verification issues when making requests to the Google Sheets API was another challenge. This required disabling SSL verification.

Understanding API Usage: Understanding how to use the Google Sheets API and making API requests.

### Task 4: Documentation

Thanks so much for the oppurtunity! It's been great practice solving the tasks.
