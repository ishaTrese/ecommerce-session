Session Management and File Inclusion Implementation

Overview
- This implementation uses an Object-Oriented Session Wrapper Class and modular PHP file inclusion to manage user authentication, session handling, and consistent page composition across the application.

Approach
- Session Management:
    Instead of directly manipulating $_SESSION variables throughout the codebase, all session operations are encapsulated in a single Session class with static methods. 

- File Inclusion:
    The application uses require_once to dynamically compose pages from reusable components and layout templates

Submitted by: Silvio, Trisha Mae P. – Group 10
