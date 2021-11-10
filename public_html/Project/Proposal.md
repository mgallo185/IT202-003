# Project Name: Simple Arcade
## Project Summary: This project will create a simple Arcade with scoreboards and competitions based on the implemented game.
## Github Link: https://github.com/mgallo185/IT202-003/tree/prod/public_html/Project
## Project Board Link: https://github.com/mgallo185/IT202-003/projects/1 
## Website Link: https://mtg24-prod.herokuapp.com/Project/
## Your Name: Michael Gallo

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
  - [x] \(11/06/2021) User will be able to register a new account
    -  List of Evidence of Feature Completion
    - Status: Completed 
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/register.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/32
      - PR Link #2: https://github.com/mgallo185/IT202-003/pull/48
      - 
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
      - ![image](https://user-images.githubusercontent.com/89924299/140626601-fb50cdf5-adce-40df-ba9c-f41bdd051255.png)
        - Screenshot #1 description: early version of register showcasing regsitering an account
        - ![image](https://user-images.githubusercontent.com/89924299/140626626-e64294cb-673b-4569-afa1-d54e53ed89ab.png)


  - [x] \(11/09/2021 of completion) User will be able to login to their account (given they enter the correct credentials)

    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/42
      - 
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

  - [x] \(11/09/2021 of completion) User will be able to logout
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/logout.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/48
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show


  - [x] \(11/09/2021 of completion) Basic security rules implemented
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/141139158-8ca0aba4-4517-4c71-af88-28053dc3da33.png)
        - Screenshot #1 description: Function to check if user is logged in and function should be called on appropriate pages that only allow logged in users
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/141144409-41cb66dd-9d4f-44d7-ab64-d5749b5ca4f7.png)
        - Screenshot #2 description: Roles table
  - [x] \(11/09/2021 of completion) Basic Roles implemented
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 : ![image](https://user-images.githubusercontent.com/89924299/141135349-3fc018d5-5591-4c8b-923e-6ea2c1789fcc.png)
        - Screenshot #1 description: Table featuring the users.
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/141136100-99cad030-0f5c-4c7e-97bd-01312311a228.png)
        - Screenshot #2 description: User Roles table with id, user_id, role_id, is_active, created, and modified
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/89924299/141135491-8e62f9bc-58c1-4ad7-8289-d97b45706475.png)
        - Screenshot #3 description: This is my roles table that features id, name, description, is_active, modified, and created. 
        - Screenshot #4 ![image](https://user-images.githubusercontent.com/89924299/141137999-e7c947a0-04cd-42de-b0aa-e7c8b67f12d2.png)
        - Screenshot #4 description: This is the function to see if the user has a role.

   - [x] \(11/09/2021 of completion) Site should have basic styles/theme applied; everything should be styled
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/styles.css https://mtg24-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - https://github.com/mgallo185/IT202-003/pull/44/
      - 
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/141129777-5d4479ea-bf27-4b47-a133-e7183e894e2f.png)

        - Screenshot #1 description: I made the background a dark blue and some of the text orange.

  - [x] \(11/09/2021 of completion) Any output messages/errors should be “user friendly”
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/141134004-814bee05-0a8a-4615-ab75-6c0717903530.png)
        - Screenshot #1 description: Here's an example of one of user friendly changes. When inputing the wrong current password when attempting to change your password in your profile, a popup message appears showing that an invalid password was inputted.
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/141141008-d942d12b-261a-423c-90ff-307d3ee77ebb.png)
        - Screenshot #2 description: What causes these user friendly messages is the flash.php file as shown above.


  - [x] \(11/09/2021) User will be able to see their profile
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/44/
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/141130893-08b50106-9f1a-4e13-9003-c214fcd8bef7.png)
        - Screenshot #1 description: This is the profile page where the user can see their profile
 -
  - [x] \(11/09/2021)User will be able to edit their profile
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/46
      - 
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/141131332-50873a79-86b7-45f1-8ba9-0f6e45991f6c.png)
        - Screenshot #1 description: The user can change their information if they wish on this page. They can change their username or email as long as the email or username isn't already taken. They change their password as long as they input their old password and then input the new password twice.
       - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/141132930-f3fb8ecd-cc25-4598-b522-41f34250674b.png)
       - Screenshot #2 description: Here I attempt to change my email from 1sttest@email.com to 1test@email.com
       - Screenshot #3: ![image](https://user-images.githubusercontent.com/89924299/141133148-ecb5919f-a40b-4250-8750-2767b2dd9339.png)
       - Screenshot #3 description: The result of my attempt to change the email is that it didn't apply because the email already has it's own profile
       - Screenshot #4 ![image](https://user-images.githubusercontent.com/89924299/141133710-be51c970-228c-46f8-8251-3fde60f703fe.png)
       - Screenshot #4 description: Here I'm attempting to update my password. I'm using the wrong current password to show that the change to a new password will not apply.
       - Screenshot #5: ![image](https://user-images.githubusercontent.com/89924299/141134004-814bee05-0a8a-4615-ab75-6c0717903530.png)
       - Screenshot #5 description: The result of Screenshot 4 results in the password not being changed because I inputed the wrong current password

               

        
- Milestone 2
- Milestone 3
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
