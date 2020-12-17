### Project: College - Using PHP and MySQL

#### LINKS

1. This project's page: ( _does not exist, yet!_ ): ---- xhttps://kmjax.surge.sh/hw/2020-12-09_college/
1. Menu of all projects: [https://kmjax.surge.sh](https://kmjax.surge.sh)

#### DESCRIPTION

Create a responsive website for a university that contains the following pages and features: Home, Regestration, Login, Logout, with a Student Portal (dashboard, course regestration, personal data editing, and viewing financial data)

#### STATUS

LOTS TO DO! Project initiated on 2020-12-16.

#### PREVIOUS STATUS MESSAGES

- None yet

_NOTE: Since these live assignment pages are stored on Surge.sh, static images of the webpage output are displayed instead of a live page. This is due to Surge.sh not being able to host dynamic PHP web pages._

#### FURTHER DETAILED LIST OF OBJECTIVES TO COMPLETE:

##### PAGES

- [ ] Home Page
- [ ] Registration Page
- [ ] Login Page
- [ ] Logout Page
- [ ] Student Portal with the following features:
- [ ] --- Dashboard
- [ ] --- Course Registration add/drop
- [ ] --- Edit Personal Data
- [ ] --- View Financial Data
- [ ] --- Logout

##### FEATURES

- [ ] Is Responsive
- [ ] Themed to be "college-y"
- [ ] Written PHP
- [ ] Stores data in MySQL database
- [ ] Login verfies the password

##### REQUIREMENTS

- [ ] Registration must collect and store the following fields: username, first and last name, email address, phone number, street address, street address 2, city, state (must be a dropdown), postal code, gender, user photo, notes, and i agree checkbox
- [ ] Registration allows user to upload their picture
- [ ] Registration has a text area for notes and special needs
- [ ] Registration requires a user click the "I agree" checkbox
- [ ] Registration must sanitize data
- [ ] Registration must encrypt the password
- [ ] Registration must verify password (two fields must match)
- [ ] Database must have tables to store students, courses, and student/course selections
- [ ] Upon successful registration, a welcome message should be displayed
- [ ] Upon successful registration, a welcome email should be sent with a link verification (non-functional)
- [ ] Website should use PHP session variables instead of passing data between forms via hidden fields
- [ ] Student Portal should show the student's enrolled courses, or display a message saying that the are not enrolled in any courses yet
- [ ] Course enrollment will list available courses (5 minimum). Each course will have the following data: course number, course name, day(s)/time, cost, short description, number of credits, instructor's name, course status (published?).
- [ ] Students can select and enroll in one or more courses
- [ ] After selection of courses, it should show a selected list along with the total cost. There should be a make payment button (non-functional).
- [ ] Students should be able to edit their personal information
- [ ] Students should be able to add/drop classes
- [ ] Utilize "start sessions" on appropriate pages
- [ ] Do not attempt login if username and/or password are empty
- [ ] Destroy session on bad login attempt
- [ ] If user is not logged in when going to the dashboard, automatically redirect to the login page
- [ ] Provide a link/button to logout of the dashboard
- [ ] On logout, destroy session and redirect to login page

#### SOURCE

GitHub repository: [https://github.com/kmjax/college](https://github.com/kmjax/college)

Clone from GitHub via HTTPS:

`git clone https://github.com/kmjax/college.git`
