# College-Study-Materials-Chatbot
This project is a College Chatbot System developed using Dialogflow, HTML, CSS, JavaScript, and MongoDB. It serves as a platform for students to access their college study materials and provides a secure login system.

Features

Secure Login System: Users must log in using their credentials. Returning users are authenticated by their previously set password. If the credentials are incorrect, access is denied.
Dialogflow Integration: The chatbot provides easy access to college study materials, categorized by departments like CSE, ECE, AIDS, Civil, and Mechanical.
Responsive Design: The user interface is designed to work seamlessly across devices.
Dynamic Navigation: Includes navigation options for "Home," "About," "Products," and "Contact."
Logout Functionality: Users can log out and return to the login page for added security.

Technology Stack

Frontend: HTML, CSS, JavaScript
Backend: Node.js with MongoDB
Dialogflow: For building and integrating the chatbot functionality

Project Structure

index.html: Login page for user authentication.
index2.html: Dashboard page that links to different department-specific chatbot sections.
CSS: Styling for the application.
JavaScript: Handles form submission and server communication for login.

How It Works

Users log in using their credentials.
If authenticated, they are directed to a dashboard where they can select their department.
Upon selection, the user is redirected to a Dialogflow-embedded chatbot that provides the study materials for that department.
