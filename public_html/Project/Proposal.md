# Youtube Video Part 1: https://youtu.be/2XtlxepdEAE
# Youtube Video Part 2: https://youtu.be/gN_xIKy0r8Q
# Youtube Video Part 3: https://youtu.be/iUg0n-2jDQY
# Youtube Video Part 4: https://youtu.be/2IMj71AXB3Y
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

- [X] \(11/30/2021) User with an admin role or shop owner role will be able to add products to inventory
  - List of Evidence of Feature Completion
  - Status: Completed
  - Direct Link: https://mc729-prod.herokuapp.com/Project/admin/add_items.php
  - Pull Requests
    - PR link #1: https://github.com/mc-729/IT202-003/pull/67
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/144171533-e4af5c16-f52b-45b9-b60c-32b8c12e1868.png)
      - Screenshot #1 description explaining what you're trying to show:
        - This shows I created an item/product with the id of 13.

    - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/144171796-fb6f230d-7126-44be-b827-d68bf0119045.png)
      - Screenshot #2 description explaining what you're trying to show:
        - This shows the item/product created with an id of 13 in the Products table. It was oreos.

- [X] \(12/7/2021) Any user will be able to see products with visibility = true on the Shop page
  - List of Evidence of Feature Completion
  - Status: Completed
  - Direct Link: https://mc729-prod.herokuapp.com/Project/shop.php
  - Pull Requests
    - PR link #1: https://github.com/mc-729/IT202-003/pull/75
    - PR link #2: https://github.com/mc-729/IT202-003/pull/76
    - PR link #3: https://github.com/mc-729/IT202-003/pull/77
    - PR link #4: https://github.com/mc-729/IT202-003/pull/78
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/145084273-ab0439f6-60d5-4d0e-9fed-43480fe90b16.png)
      - Screenshot #1 description explaining what you're trying to show:
        - This shows that the shop is public (I am not logged in). It only shows items with a visibility of 1 or TRUE based on the Products table. I did not keep it to the 10 most recent because I added more than 10 items and I was working on the next feature alongside this one. The filters and sorting work as well as the search by partial name or full name of product.

    - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/145084875-102ce29e-4317-422c-8709-12bc4f82caee.png)
      - Screenshot #2 description explaining what you're trying to show:
        - This shows the products table so that you can see which items have a visibility of 1/True or 2/False.

- [X] \(12/7/2021) Admin/Shop owner will be able to see products with any visibility
  - List of Evidence of Feature Completion
  - Status: Completed
  - Direct Link: https://mc729-prod.herokuapp.com/Project/admin/list_items.php
  - Direct Link 2: https://mc729-prod.herokuapp.com/Project/admin/all_items.php
  - Pull Requests
    - PR link #1: https://github.com/mc-729/IT202-003/pull/75
    - PR link #2: https://github.com/mc-729/IT202-003/pull/76
    - PR link #3: https://github.com/mc-729/IT202-003/pull/77
    - PR link #4: https://github.com/mc-729/IT202-003/pull/78
    - PR link #5: https://github.com/mc-729/IT202-003/pull/79
    - PR link #6: https://github.com/mc-729/IT202-003/pull/93
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/145085240-345ac4c2-c037-4c24-9ca2-486ccef5cacf.png)
      - Screenshot #1 description explaining what you're trying to show:
        - This shows the list_items.php. In here all the items, even the out of stock and visibility of 2 items, are clearly visible to the admin/shop owner.

    - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/145085706-2586074f-0477-4b26-9ff3-7f17c174ea62.png)
      - Screenshot #2 description explaining what you're trying to show:
        - This shows the all_items.php. In here, the page is similar to the shop.php page and all items are visible except out of stock items. Still a WIP but since the previous screenshot shows the out of stock items, I hope this counts.
  
    - Screenshot #3 ![image](https://user-images.githubusercontent.com/50148042/145660042-797c0dca-45a9-4bf1-9861-ad311b7c8961.png)
      - Screenshot #3 description explaining what you're trying to show:
        - This shows the all_items.php and actually works as intended now by showing all products in/out of stock to the admin/shop owner without having to search up the product like in list_items.php or having to hit the button in list_items.php. As you can see there are more pages in here than shop.php, an item with 0 in stock, and items with false visibility that only admins and shop owners can see.

- [X] \(12/08/2021) Admin/Shop owner will be able to edit any product
  - List of Evidence of Feature Completion
  - Status:  Partially Completed
  - Direct Link: https://mc729-prod.herokuapp.com/Project/shop.php
  - Direct Link: https://mc729-prod.herokuapp.com/Project/admin/edit_items.php
  - Direct Link: https://mc729-prod.herokuapp.com/Project/admin/list_items.php
  - Direct Link: https://mc729-prod.herokuapp.com/Project/admin/edit_items.php?id=1
  - Pull Requests
    - PR link #1: https://github.com/mc-729/IT202-003/pull/90
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/145659831-f35cdcbe-9ffa-426c-8e3f-25c2653ec211.png)
      - Screenshot #1 description explaining what you're trying to show
        - This image shows I can edit any product as an admin or shop owner. However, my "Edit" url on the shop.php as the Shop Owner/Admin redirects me to edit_items.php. This means I get redirected to a page where I can't edit unlike the image shown above. How I got to the image above was from list_items.php and it was able to redirect me to the correct editing page and from there I can edit to my desire.

- [X] \(12/10/2021) User will be able to click an item from a list and view a full page with more info about the item (Product Details Page)
  - List of Evidence of Feature Completion
  - Status: Partially Working
  - Direct Link: https://mc729-prod.herokuapp.com/Project/list_productDetails.php
  - Pull Requests
    - PR link #1: https://github.com/mc-729/IT202-003/pull/92
    - PR link #2: https://github.com/mc-729/IT202-003/pull/93
    - PR link #3: https://github.com/mc-729/IT202-003/pull/94
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/145659552-3f2142b2-2938-438c-93a4-8780a121c9fd.png)
      - Screenshot #1 description explaining what you're trying to show
        - A partially working php page for productDetails.php. I had a problem getting the link to work when any user with any role clicked on "View Details" on shop.php.

    - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/145660304-6f9f9f77-4805-49f9-ab5e-56b06774ba34.png)
      - Screenshot #2 description explaining what you're trying to show
        - Here you have the type the URL and must be logged in to see this php page. This is also a WIP and a different way I thought to approach this feature but still couldn't get it to work. What I wanted to happen is to not display the visibility column but also not display any items that are false==2 visibility. Unlike the previous link and image, based on the professors work, this doesn't work exactly as intended when a user clicks view more details on a specific item. This shows all the items and its details instead of just the one specific item. So there is that to fix too.

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

- [X] \(12/17/2021) User will be able to purchase items in their Cart
  - List of Evidence of Feature Completion
  - Status: Incomplete, partially working 
  - Direct Link: N/A Since it isn't fully working
  - Pull Requests
    - PR link #1 https://github.com/mc-729/IT202-003/pull/91
    - PR link #2 https://github.com/mc-729/IT202-003/pull/102
    - PR link #3 https://github.com/mc-729/IT202-003/pull/103
    - PR link #4 https://github.com/mc-729/IT202-003/pull/105
    - PR link #5 https://github.com/mc-729/IT202-003/pull/106
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/146627175-8b77a7d0-a880-4d47-8e07-7ac3be3d1d35.png)
      - Screenshot #1 description explaining what you're trying to show
        - Orders, OrderItems, and Cart tables have been made with no issues but my purchase history table is not up. Also working on a checkout form sql table as well, that hasn't been made. When it comes to making sql tables my struggle is usually the syntax and determining the data type I need.

- [X] \(12/17/2021) Order Confirmation Page
  - List of Evidence of Feature Completion
  - Status: Incomplete, partially working
  - Direct Link: https://mc729-prod.herokuapp.com/Project/orderConfirmation.php
  - Pull Requests
    - PR link #1 https://github.com/mc-729/IT202-003/pull/91
    - PR link #2 https://github.com/mc-729/IT202-003/pull/102
    - PR link #3 https://github.com/mc-729/IT202-003/pull/103
    
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/146627385-aa87d45a-e816-4717-b0ec-a6856f170483.png)
      - Screenshot #1 description explaining what you're trying to show
        - Order confirmation page has been made but is blank. Still need to find the appropriate template for it before. Need to work on previous bullet points/features of this current and previous milestone to probably make more progress or better sense of this.

- [X] \(12/21/2021) User will be able to see their Purchase History
  - List of Evidence of Feature Completion
  - Status: Incomplete, partially working
  - Direct Link: https://mc729-prod.herokuapp.com/Project/userPurchaseHistory.php
  - Pull Requests
    - PR link #1 https://github.com/mc-729/IT202-003/pull/91
    - PR link #2 https://github.com/mc-729/IT202-003/pull/102
    - PR link #3 https://github.com/mc-729/IT202-003/pull/103
    - PR link #4 https://github.com/mc-729/IT202-003/pull/105
    - PR link #5 https://github.com/mc-729/IT202-003/pull/106
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/146627301-23c8cad0-1637-4399-a250-9b63659b470f.png)
      - Screenshot #1 description explaining what you're trying to show
        - The php file has been made but it is blank because I haven't found an appropriate template for it. Will continue to look over slides and github.

    - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/146627701-3db5650b-d21d-483e-8d8b-6b0bc35376e8.png)
      - Screenshot #2 description explaining what you're trying to show
        - The error I get while trying to run my sql table for purchase history. I also feel the need to mention that I tried to add in a Bills_History table and it actually ran but I realized that was not needed for the shop project. I was overthinking a feature of giving users credits to actually purchase the item but all they needed to be able to do was click the purchase button and be taken to their cart or order confirmation page.
    
    - Screenshot #3 ![image](https://user-images.githubusercontent.com/50148042/147015930-ee818b8b-7b67-4cee-b8cc-c1b0981e6ec3.png)
      - Screenshot #3 description explaining what you're trying to show
        - I made as some progress in creating the look for the php page now but still getting this flash error message.

- [X] \(12/17/2021) Store Owner will be able to see all Purchase History
  - List of Evidence of Feature Completion
  - Status: Incomplete, partially working
  - Direct Link: https://mc729-prod.herokuapp.com/Project/admin/allPurchaseHistory.php
  - Pull Requests
    - PR link #1 https://github.com/mc-729/IT202-003/pull/105
    - PR link #2 https://github.com/mc-729/IT202-003/pull/106
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/147016618-4ecfed78-c2f6-4b1c-b3fc-6fe48fadb43e.png)
      - Screenshot #1 description explaining what you're trying to show
        - Here I am showing a similar page to the user's purchase history, however I wanted the admin to be the only one to view this and to be able to see all purchases made. Having similar issues as the other php page for the user's purchase history. 

- Milestone 4

- [X] \(12/13/2021) User can set their profile to be public or private (will need another column in Users table)
  - List of Evidence of Feature Completion
  - Status: Completed
  - Direct Link: https://mc729-prod.herokuapp.com/Project/profile.php
  - Direct Link: https://mc729-prod.herokuapp.com/Project/profile.php?edit=true
  - Pull Requests
    - PR link #1 https://github.com/mc-729/IT202-003/pull/98
    - PR link #2 https://github.com/mc-729/IT202-003/pull/97
    - PR link #3 https://github.com/mc-729/IT202-003/pull/96
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/145930905-1477e1ee-011f-4431-9e13-9721574b028f.png)
      - Screenshot #1 description explaining what you're trying to show
        - Slider to pick between having a public and private profile.
    
    - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/145931166-25022f28-6fe3-4331-b250-0cbab92f32db.png)
      - Screenshot #2 description explaining what you're trying to show
        - The users table now has the visibility column because of the new alter table sql file and shows that the account I am using now has a visibility of 1 when I changed it.

- [X] \(12/21/2021) User will be able to rate a product they purchased
  - List of Evidence of Feature Completion
  - Status: Incomplete, partially working
  - Direct Link: https://mc729-prod.herokuapp.com/Project/shop.php
  - Pull Requests
    - PR link #1: https://github.com/mc-729/IT202-003/pull/108
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/147019447-0548555e-677f-4f0b-b31c-ec2035eb051d.png)
      - Screenshot #1 description explaining what you're trying to show
        - Ratings table created and working. However, most of my problems have been related to table issues and the user can't really rate their items. So I've been having a hard time trying to fix it without breaking the code provided on github and the help from the slides.

- [X] \(12/21/2021) User’s Purchase History Changes
  - List of Evidence of Feature Completion
  - Status: Incomplete, partially working
  - Direct Link: https://mc729-prod.herokuapp.com/Project/userPurchaseHistory.php
  - Pull Requests
    - PR link #1 https://github.com/mc-729/IT202-003/pull/105
    - PR link #2 https://github.com/mc-729/IT202-003/pull/106
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/147019678-b6033b21-2ccb-4cae-affe-8d59518c166c.png)
      - Screenshot #1 description explaining what you're trying to show
        - The php page was created and on the front end at the very least has been designed to look the part. It does not function however as I am having the same issues as I did in MS2 and MS3.
- [X] \(12/21/2021) Store Owner Purchase History Changes
  - List of Evidence of Feature Completion
  - Status: Incomplete, partially working
  - Direct Link: https://mc729-prod.herokuapp.com/Project/admin/allPurchaseHistory.php
  - Pull Requests
    - PR link #1 https://github.com/mc-729/IT202-003/pull/105
    - PR link #2 https://github.com/mc-729/IT202-003/pull/106
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/147019890-62149ac8-f532-4378-88bc-7a55ffa59502.png)
      - Screenshot #1 description explaining what you're trying to show
        - I've been getting similar results for every new page I make with the same flash error message. The fact that the purchase history table is also not working is contributing to this issue as well.

- [X] \(12/07/2021) Add pagination to Shop Page (and any other product lists not yet mentioned)
  - List of Evidence of Feature Completion
  - Status: Completed
  - Direct Link: https://mc729-prod.herokuapp.com/Project/shop.php
  - Pull Requests
    - PR link #1: https://github.com/mc-729/IT202-003/pull/75
    - PR link #2: https://github.com/mc-729/IT202-003/pull/76
    - PR link #3: https://github.com/mc-729/IT202-003/pull/77
    - PR link #4: https://github.com/mc-729/IT202-003/pull/78
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/145932005-242f8cf0-804e-418c-a910-0aa1e00d4755.png)
      - Screenshot #1 description explaining what you're trying to show
        - Code has been implemented to add pagination into shop.php on my prod branch. Should have been visible since MS2.

- [X] \(12/07/2021) Store Owner will be able to see all products out of stock
  - List of Evidence of Feature Completion
  - Status: Completed
  - Direct Link: https://mc729-prod.herokuapp.com/Project/admin/list_items.php
  - Direct Link: https://mc729-prod.herokuapp.com/Project/admin/all_items.php
  - Pull Requests
    - PR link #1: https://github.com/mc-729/IT202-003/pull/75
    - PR link #2: https://github.com/mc-729/IT202-003/pull/76
    - PR link #3: https://github.com/mc-729/IT202-003/pull/77
    - PR link #4: https://github.com/mc-729/IT202-003/pull/78
    - PR link #5: https://github.com/mc-729/IT202-003/pull/79
    - PR link #6: https://github.com/mc-729/IT202-003/pull/93
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/145085240-345ac4c2-c037-4c24-9ca2-486ccef5cacf.png)
      - Screenshot #1 description explaining what you're trying to show:
        - This shows the list_items.php. In here all the items, even the out of stock and visibility of 2 items, are clearly visible to the admin/shop owner.

    - Screenshot #2 ![image](https://user-images.githubusercontent.com/50148042/145085706-2586074f-0477-4b26-9ff3-7f17c174ea62.png)
      - Screenshot #2 description explaining what you're trying to show:
        - This shows the all_items.php. In here, the page is similar to the shop.php page and all items are visible except out of stock items. Still a WIP but since the previous screenshot shows the out of stock items, I hope this counts.
  
    - Screenshot #3 ![image](https://user-images.githubusercontent.com/50148042/145660042-797c0dca-45a9-4bf1-9861-ad311b7c8961.png)
      - Screenshot #3 description explaining what you're trying to show:
        - This shows the all_items.php and actually works as intended now by showing all products in/out of stock to the admin/shop owner without having to search up the product like in list_items.php or having to hit the button in list_items.php. As you can see there are more pages in here than shop.php, an item with 0 in stock, and items with false visibility that only admins and shop owners can see.

- [X] \(12/21/2021) User can sort products by average rating on the Shop Page
  - List of Evidence of Feature Completion
  - Status: Incomplete, partially working
  - Direct Link: https://mc729-prod.herokuapp.com/Project/shop.php
  - Pull Requests
    - PR link #1: https://github.com/mc-729/IT202-003/pull/108
  
  - Screenshots
    
    - Screenshot #1 ![image](https://user-images.githubusercontent.com/50148042/147020453-58916af8-195c-4965-acc7-e0c7651ca682.png)
      - Screenshot #1 description explaining what you're trying to show
        - The user does have the option to sort the products based on the average rating but because of the previous features having some technical issues, this doesn't work too.
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