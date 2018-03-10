<!-- ## Introduction
For this assignment, we'd like you to demonstrate your skills in the following:
* HTML
* CSS
* Javascript
* PHP
* Git
* Documentation

For this assignment, you should follow your process and standards. 
Think of your assignment as an application that will need to be maintaned and possibly extended in the future. -->

****- [x] **Please note I:** do not use a database to save the information, but find another solution.
- [x] **Please note II:** we measure all requirements in this assignment equally heavy and check that they are all met, since the special requirements clarify to us your technical and logical thinking skills. So make sure to read carefully

## Assignment
<!-- Build a small blog consisting of only one responsive page.
The structure of the page is attached png file. -->

On this blog, a form should be available to submit a new post without the browser refreshing the page.
The page should display all the posts starting from the most recent.
**Please note:** If the user refreshes the page, the information already posted should be preserved.

<!-- The form consists of the following input fields:
* Title
* Content
* Image upload (supporting only jpg and png)
* Email address -->

<!-- It should not be possible to submit the form if:
- [x] The Emaill address is missing or incorrect
- [x] The Title is missing
- [x] Both the content and the Image fields are empty -->
<!-- 
In case of any validation error, the user should receive feedback and the submission should not take place.
 -->
During the form submission, the user should be informed that a process is happening: provide some visual animated feedback.

After submitting, the PHP backend of your blog will perform another round of validation.
Specifically it will check that:
- [x] The Email address submitted equals the one of the blog owner
- [x] The uploaded file is of a supported type: either jpg or png
- [x] The post was submitted by an authorized source, i.e. the blog frontend

After the post has been validated:
- [x] Attach a timestamp to it (YYYY/MM/DD, HH:MM)
- [x] Process the post content by:
  - [x] Process the image so that it can fit in a 300x300px square, saving it and discarding the original file
  - [x] Creating the front end markup that will be returned (see wireframe)
  - [x] Save all the words that are longer than 4 characters so that the five most used words across all posts are displayed on the frontend
- [x] Return all the information to the frontend and:
  - [x] Make sure that the post is displayed as the latest one
  - [x] Update the list of the most used words