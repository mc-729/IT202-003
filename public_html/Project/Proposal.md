# Project Name: Simple Shop
## Project Summary: This project will create a simple e-commerce site for users. Administrators or store owners will be able to manage inventory and users will be able to manage their cart and place orders.
## Github Link: https://github.com/mc-729/IT202-003/tree/prod
## Project Board Link: https://github.com/mc-729/IT202-003/projects/1
## Website Link: https://mc729-prod.herokuapp.com/Project/login.php
## Your Name: Matthew Cabrera

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- Milestone 1
- [X] \(11/1/2021) User will be able to register a new account 
  - Form Fields
    - Username, email, password, confirm password (other fields optional)
    - Email is required and must be validated
    - Username is required
    - Confirm password’s match

  - Users Table
    - Id, username, email, password (60 characters), created, modified

  - Password must be hashed (plain text passwords will lose points)
  - Email should be unique
  - Username should be unique
  - System should let user know if username or email is taken and allow the user to correct the error without wiping/clearing the form
    - The only fields that may be cleared are the password fields

  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mc729-prod.herokuapp.com/Project/register.php
    - Pull Requests
      - PR link #1 https://github.com/mc-729/IT202-003/pull/9
      - PR link #2 https://github.com/mc-729/IT202-003/pull/36 
      - PR link #3 https://github.com/mc-729/IT202-003/pull/37
      - PR link #4 https://github.com/mc-729/IT202-003/pull/46
      - Issue Link #1 https://github.com/mc-729/IT202-003/issues/11
   
    - Screenshots
     
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/140771406-30058f08-80ea-4857-9ced-eadd6ea5928f.png) 
        - Screenshot #1 description explaining what you're trying to show:
          - This shows that the form fields are displaying and functioning as intended.
     
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/140771620-3cbe22d0-9350-4471-8f6b-b1bd17e921aa.png) 
        - Screenshot #2 description explaining what you're trying to show:
          - This shows that the users table has been created and functions. Also has hashed passwords.
     
      - Screenshot #3 ![image](https://user-images.githubusercontent.com/50148042/140772218-ad936228-bb00-4caf-82f5-da2dfb03dd16.png)
        - Screenshot #3 description explaining what you're trying to show:
          - This shows that the email must be unique in order to register.
     
      - Screenshot #4 ![image](https://user-images.githubusercontent.com/50148042/140772426-2d9eb2cc-9718-488a-b4fa-d8a00094ff78.png)
        - Screenshot #4 description explaining what you're trying to show:
          - This shows that the username must be unique in order to register.
     
      - Screenshot #5 ![image](https://user-images.githubusercontent.com/50148042/140773310-319b4535-db99-4dd6-83a8-7568705f3dba.png)
        - Screenshot #5 description explaining what you're trying to show:
          - This shows that the account has successfully been registered.
      
      - Screenshot #6 ![image](https://user-images.githubusercontent.com/50148042/141145614-2807cede-c170-452b-b422-c0d04903c299.png)
        -  Screenshot #6 description explaining what you're trying to show:
          - Email and Username field do not get cleared when one of them is taken.

- [X] \(11/01/2021) User will be able to login to their account (given they enter the correct credentials) 

  - Form
    - User can login with email or username
      - This can be done as a single field or as two separate fields
    - Password is required
  - User should see friendly error messages when an account either doesn’t exist or if passwords don’t match
  - Logging in should fetch the user’s details (and roles) and save them into the session.
  - User will be directed to a landing page upon login
    - This is a protected page (non-logged in users shouldn’t have access)
    - This can be home, profile, a dashboard, etc
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mc729-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - PR link #1 https://github.com/mc-729/IT202-003/pull/28
      - PR link #2 https://github.com/mc-729/IT202-003/pull/36
      - PR link #3 https://github.com/mc-729/IT202-003/pull/46 
      - Issue Link #1 https://github.com/mc-729/IT202-003/issues/12
    
    - Screenshots
      
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/140776525-dfa412f9-88f5-4597-a162-34968cd576ff.png)
        - Screenshot #1 description explaining what you're trying to show:
          - Successful login!

      - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/140777139-3e06ee33-edb0-4935-9d30-9ca9032c658a.png)
        - Screenshot #2 description explaining what you're trying to show:
          - Failed login, wrong password with flash message.
      
      - Screenshot #3 ![image](https://user-images.githubusercontent.com/50148042/141147747-f44addc0-4a6a-4aca-8f39-ff74a3580727.png)
        - Screenshot #3 description explaining what you're trying to show:
          - Failed login, wrong/not found email with flash message.
     
      - Screenshot #4 ![image](https://user-images.githubusercontent.com/50148042/141212897-3f020ca4-c34b-40d5-8849-1faedc8c02fd.png)
        - Screenshot #4 description explaining what you're trying to show:
          - Fetch user details

- [X] \(11/01/2021) User will be able to logout 
  - Logging out will redirect to login page
  - User should see a message that they’ve successfully logged out
  - Session should be destroyed (so the back button doesn’t allow them access back in)
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mc729-prod.herokuapp.com/Project/register.php Once registered the logout should work and redirect to login.php
    - Pull Requests
      - PR link #1: https://github.com/mc-729/IT202-003/pull/38
      - PR link #2: https://github.com/mc-729/IT202-003/pull/46
      - Issues Link #1: https://github.com/mc-729/IT202-003/issues/13
   
    - Screenshots
      
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/140778742-b287ea6f-59c2-4da8-829a-330d16357bda.png)
        - Screenshot #1 description explaining what you're trying to show:
          - Successful logout and cannot go back, must be logged in to see

      - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/141218754-2b9bddb0-608c-4e6a-944b-9594df6c4a47.png)
        - Screenshot #2 description explaining what you're trying to show:
          - Succesful logout and flash message stating a successful logout. User is also redirected back to the login page (login.php).

- [X] \(11/10/2021) Basic security rules implemented 
  - Authentication:
    - Function to check if user is logged in
    - Function should be called on appropriate pages that only allow logged in users
  - Roles/Authorization:
    - Have a roles table (see below)
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://github.com/mc-729/IT202-003/tree/Milestone1/public_html/Project
    - Pull Requests
      - PR link #1 https://github.com/mc-729/IT202-003/pull/46
      - Issues Link #1: https://github.com/mc-729/IT202-003/issues/14
   
    - Screenshots
     
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/141149430-1a1f305d-3ce5-4e63-9e7b-09e20eebcab0.png)
        - Screenshot #1 description explaining what you're trying to show
          - Have a roles table
     
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/141215707-325638c1-617b-4b8f-b153-e0dc4bea15cb.png)
        - Screenshot #2 description explaining what you're trying to show
          - Function being called on in profile.php
     
      - Screenshot #3 ![image](https://user-images.githubusercontent.com/50148042/141215733-fac19f2d-39e1-4457-9a17-f813105b76a2.png)
        - Screenshot #3 description explaining what you're trying to show
          - Function being called on in home.php

- [X] \(11/10/2021 of completion) Basic Roles implemented (from the proposal bullet point, if it's a sub-point indent it properly)
  - Have a Roles table	(id, name, description, is_active, modified, created)
  - Have a User Roles table (id, user_id, role_id, is_active, created, modified)
  - Include a function to check if a user has a specific role (we won’t use it for this milestone but it should be usable in the future)
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mc729-prod.herokuapp.com/Project/admin/create_role.php
    - Pull Requests
      - PR link #1 https://github.com/mc-729/IT202-003/pull/46
      - Issues Link #1: https://github.com/mc-729/IT202-003/issues/15
    
    - Screenshots
     
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/141149430-1a1f305d-3ce5-4e63-9e7b-09e20eebcab0.png)
        - Screenshot #1 description explaining what you're trying to show
          - Have a Roles table	(id, name, description, is_active, modified, created)
     
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/141149443-ba48435c-dcff-405d-8183-a28ee358f11e.png)
        - Screenshot #2 description explaining what you're trying to show
          - Have a User Roles table (id, user_id, role_id, is_active, created, modified)
      
      - Screenshot #3 ![image](https://user-images.githubusercontent.com/50148042/141202751-a61db376-34a9-4da8-9395-817bc96860b0.png)
        - Screenshot #3 description explaining what you're trying to show
          - Include a function to check if a user has a specific role (we won’t use it for this milestone but it should be usable in the future)

- [X] \(11/10/2021 of completion) Site should have basic styles/theme applied; everything should be styled (from the proposal bullet point, if it's a sub-point indent it properly)
  - I.e., forms/input, navigation bar, etc
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mc729-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - PR link #1 https://github.com/mc-729/IT202-003/pull/46
      - Issues Link #1: https://github.com/mc-729/IT202-003/issues/16
   
    - Screenshots
      
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/141149806-f8b02207-5a48-4344-b19d-c60ba114e7f2.png)
        - Screenshot #1 description explaining what you're trying to show
          - Bootstrap implemented and changed for personal design.

- [X] \(11/10/2021 of completion) Any output messages/errors should be "user friendly" (from the proposal bullet point, if it's a sub-point indent it properly)
  - Any technical errors or debug output displayed will result in a loss of points
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mc729-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - PR link #1 https://github.com/mc-729/IT202-003/pull/46
      - Issues Link #1: https://github.com/mc-729/IT202-003/issues/17
   
    - Screenshots
     
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/140777139-3e06ee33-edb0-4935-9d30-9ca9032c658a.png)
        - Screenshot #1 description explaining what you're trying to show
          - Friendly error message in red.

- [X] \(11/10/2021 of completion) User will be able to see their profile (from the proposal bullet point, if it's a sub-point indent it properly)
  - Email, username, etc
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mc729-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1 https://github.com/mc-729/IT202-003/pull/46
      - Issues Link #1: https://github.com/mc-729/IT202-003/issues/18
    
    - Screenshots
     
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/141149973-afac244a-e569-4674-9aea-9469c15d19de.png)
        - Screenshot #1 description explaining what you're trying to show
          - User is able to see their profile

- [X] \(11/10/2021 of completion) Users will be able to edit their profile (from the proposal bullet point, if it's a sub-point indent it properly)
  - Changing username/email should properly check to see if it’s available before allowing the change
  - Any other fields should be properly validated
  - Allow password reset (only if the existing correct password is provided)
    - Hint: logic for the password check would be similar to login
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mc729-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1 https://github.com/mc-729/IT202-003/pull/46
      - Issues Link #1: https://github.com/mc-729/IT202-003/issues/19 
   
    - Screenshots
     
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/141150365-4d1bf3a5-a7d0-4db3-9953-c9886c8b563b.png)
        - Screenshot #1 description explaining what you're trying to show:
          - This shows the logic used to check passwords.
     
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/141213775-af08e169-b444-47e5-b1ab-f9ecc3c54138.png)
        - Screenshot #2 description explaining what you're trying to show:
          - This shows if usernames and/or emails can be changed.

- Milestone 2
- [] \(mm/dd/yyyy) User with an admin role or shop owner role will be able to add products to inventory
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) Any user will be able to see products with visibility = true on the Shop page
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) Admin/Shop owner will be able to see products with any visibility
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) Admin/Shop owner will be able to edit any product
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) User will be able to click an item from a list and view a full page with more info about the item (Product Details Page)
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) User must be logged in for any Cart related activity below
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) User will be able to add items to Cart
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) User will be able to see their cart
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) User will be able to change quantity of items in their cart
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) User will be able to remove a single item from their cart vai button click
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) User will be able to clear their entire cart via a button click
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- Milestone 3
- [] \(mm/dd/yyyy) User will be able to purchase items in their Cart
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) Order Confirmation Page
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) User will be able to see their Purchase History
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- [] \(mm/dd/yyyy) Store Owner will be able to see all Purchase History
  - List of Evidence of Feature Completion
  - Status: Pending
  - Direct Link:
  - Pull Requests
    - PR link #1
  
  - Screenshots
    
    - Screenshot #1
      - Screenshot #1 description explaining what you're trying to show

- Milestone 4
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board