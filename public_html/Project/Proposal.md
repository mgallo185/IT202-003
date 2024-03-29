# Project Name: Simple Arcade
## Project Summary: (Copy from proposal)
## Github Link: (Prod Branch of Project Folder)
## Project Board Link: 
## Website Link: (Heroku Prod of Project folder)
## Your Name:
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
      - PR Link #3 https://github.com/mgallo185/IT202-003/pull/46/
    
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/141145683-08ea717e-5312-4c4d-9e18-32f9fbd07295.png)
        - Screenshot #1 description: Updated register which includes adding adding a username.
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/141135349-3fc018d5-5591-4c8b-923e-6ea2c1789fcc.png)
        - Screenshot #2 description: Table featuring the users.
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/89924299/141146473-8ea23c19-a334-49c3-983b-4abf23a1d7cf.png)
        - Screenshot #3: Hashing of the password
        - Screenshot #4: ![image](https://user-images.githubusercontent.com/89924299/141146840-2069293d-bd01-46e2-bff4-7f26b0dac1e2.png)
        - Screenshot #4 description: Attempt to register an account using a email that already has an account which results in a message appearing stating the email is not available. The form does not clear the username or email, it only clears the password
        - Screenshot #5: ![image](https://user-images.githubusercontent.com/89924299/141147517-a202ec76-0c77-4cd1-8b67-a7fc99788bce.png)
        - Screenshot #5 description: Similar to screenshot 4, this attempts to register an account with a username that's already taken which results in the username not be avaiable. The form does not clear the username or email.
        - Screenshot #6: ![image](https://user-images.githubusercontent.com/89924299/141147927-01c6fe3a-e502-406d-8cef-6f6895332bd0.png)
        - Screenshot #6 description: Successful registration of a new user.

  - [x] \(11/09/2021 of completion) User will be able to login to their account (given they enter the correct credentials)

    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/42
      - PR link #2: https://github.com/mgallo185/IT202-003/pull/45/
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/141149752-50858bc5-00a6-4023-b9c0-7830ea4dd146.png)
        - Screenshot #1 description: Login page, the form can have the user login with either email or username which can be done on the same field.
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/141150814-b2775247-ddf6-44e1-ac17-58ecc79bc7d3.png)
        - Screenshot #2 description: Tried logging into an account that doesn't exist
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/89924299/141150713-5c1f641c-1af8-4ac2-867c-024035526ae0.png)
        - Screenshot #3 description tried logging into account with the wrong password
        - Screenshot #4: ![image](https://user-images.githubusercontent.com/89924299/141150895-21af6d3b-e40c-4f00-b60b-3bff56ce188b.png)
        - Screenshot #4 description: The user is directed to the home page
        - Screenshot #5: ![image](https://user-images.githubusercontent.com/89924299/141151063-f0ae05e2-4a7a-43a6-bff0-be8868075c58.png)
        -  Screenshot #5 description: Logging in fetches user details and saves them into a session
        - Screenshot #6: ![image](https://user-images.githubusercontent.com/89924299/141150618-be792a27-599a-4954-9624-ff4b98bfb733.png)
        - Screenshot #6 description: when trying to log in without a password or username, a message will appear stating to fill out the field
   
  - [x] \(11/09/2021 of completion) User will be able to logout
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/logout.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/48
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/89924299/141148353-ee3f576e-3a37-4e9f-84a2-511eb25d5c86.png)
        - Screenshot #1 description: Logout button is on the navigation.
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/141148465-882e5c55-7f3a-48d4-948d-8b1f9310be8c.png)
        - Screenshot #2 description: After clicking logout, the session will be destroyed and the user will be redirected to the login page. A message is shown that logging out was successful
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/89924299/141148637-a9436ead-6274-4ee9-aeb8-b1d7def351a3.png)
        - Screenshot #3 description: If the user tries to go back to the home page using the back button, they will not go to the home page, they would still stay on login with a message stating they could only access the home page if they are logged in.


  - [x] \(11/09/2021 of completion) Basic security rules implemented
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/43/
      - PR link #2: https://github.com/mgallo185/IT202-003/pull/45
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/141139158-8ca0aba4-4517-4c71-af88-28053dc3da33.png)
        - Screenshot #1 description: Function to check if user is logged in and function should be called on appropriate pages that only allow logged in users
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/141144409-41cb66dd-9d4f-44d7-ab64-d5749b5ca4f7.png)
        - Screenshot #2 description: Roles table
   
  - [x] \(11/09/2021 of completion) Basic Roles implemented
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/sql/ http://mtg24-prod.herokuapp.com/Project/admin/
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/41/
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
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/141129777-5d4479ea-bf27-4b47-a133-e7183e894e2f.png)
        - Screenshot #1 description: I made the background a dark blue and some of the text orange.

  - [x] \(11/09/2021 of completion) Any output messages/errors should be “user friendly”
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/profile.php 
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/17/
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
       
       
  - [x] \(11/09/2021)User will be able to edit their profile
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/46
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

               

  - [x] \(11/16/2021 of completion) Pick a simple game to implement, anything that generates a score that’s more advanced than a simple random number generator
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/game.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/64
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/143898484-f700e3d2-541e-491f-958c-2be8d0134952.png)
        - Screenshot #1 description: This game builds off of the previous HTML 5 HW where you have enemies coming onto the screen and the player needs to shoot them to earn points. You lose a point if an enemy gets to the other side of the screen and you lose a life if an enemy hits you. Shown above is the title screen
       - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/143898789-c09b4f9e-ac08-45cd-b051-cf014e0b5468.png)
        - Screenshot #2 description: This is the actual game, the red square is the playable character and the green square is the enemy


  - [x] \(11/29/2021 of completion) The system will save the user’s score at the end of the game if the user is logged in
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/AJAX/save_score.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/66
      - PR Link 2: https://github.com/mgallo185/IT202-003/pull/67
    - Screenshots
      - Screenshot #1
        -![image](https://user-images.githubusercontent.com/89924299/143814051-e89fcc01-6cd9-42e3-93fa-c5716c9f2d6a.png)

      - Screenshot #1 This is the table for the scores with each recieved score being a new entry even if its from the same user
      -   Screenshot #2
        - ![image](https://user-images.githubusercontent.com/89924299/143900307-f5f3ffd7-63c6-4d3b-84ce-623272298652.png)
      - Screenshot #2: The user is logged in and the score is saved shown in console.
      -  Screenshot #3
        - ![image](https://user-images.githubusercontent.com/89924299/143900529-62413dca-9e77-476e-bae5-a381d48bcb79.png)
      - Screenshot #3: After refreshing the page, a flash message is shown that the score is saved.
      - Screenshot #4
      - ![image](https://user-images.githubusercontent.com/89924299/143900806-86f7e2d1-ce15-4600-bd4f-b2f0d42cc043.png)
      - Screenshot #4: After someone who is not logged in plays the game and gets a score above 0 and refreshes the page. A flash message appears stating they need to be logged in for the score to save. 
      
  - [x] \(11/29/2021 of completion) The user will be able to see their last 10 scores
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/69
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/143901290-c02bfe77-33d3-489c-b75c-76ebbffb2d05.png)
        - Screenshot #1 description: Recent Scores for user 1sttest. These are 5 recent scores. 
       - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/143902075-1b0433fa-f45b-47ca-a72e-8eafaf03be7f.png)
       - Screenshot #2 description: After playing 11 games, the oldest score got removed, which shows the last 10 scores of the user. From screenshot 1, the oldest score was 1, now the oldest score is 2. 


  - [x] \(11/29/2021 of completion) Create functions that output the following scoreboards
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/home.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/69
      - PR Link #2: https://github.com/mgallo185/IT202-003/pull/73
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/143928304-db089f49-2731-4363-95ed-93d91f9b9cfc.png)
        - Screenshot #1 description: function of scoreboards for day, week, month, and year, all in one function with the limit of 10 results
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/143966916-8512bb99-351f-4b88-8baa-9c0287bde773.png)
        - Screenshot #2 description:  Scoreboards shown on home page.

- Milestone 3
   - [x] (12/10/2021 of completion) Users will have points associated with their account.
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/90
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/89924299/145664182-17fbc77f-6205-47c2-ba2a-347a086c4871.png)
        - Screenshot #1 description: Added points with a default value of 0 to the Users table
        - Screenshot 2: ![image](https://user-images.githubusercontent.com/89924299/145692735-646b1b45-b26a-435b-bacd-014c8f0b4778.png)
        - Screenshot #2: User points on profile page


  - [x] \(12/10/2021 of completion) Create a PointsHistory table (id, user_id, point_change, reason, created)
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/sql/init_db.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/95/
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/89924299/145664248-0237559f-e8e6-4e61-8d8d-9fe2981222e3.png)
        - Screenshot #1 description: PointsHistory Table. 


  - [x] \(12/9/2021 of completion) Competitions table should have the following columns (id, name, created, duration, expires (now + duration), current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean), min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created, modified)
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/sql/init_db.php
    - Pull Requests
      - PR link #1 https://github.com/mgallo185/IT202-003/pull/91/
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/145664347-12235ca7-5644-48f5-a866-36e7dcafd57f.png)


        - Screenshot #1 description: Competitons table
  - [ ] \(12/10/2021 of completion) User will be able to create a competition
  -  List of Evidence of Feature Completion
    - Status: Paritally Working 
    - Direct Link:https://mtg24-prod.herokuapp.com/Project/create_competitions.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/96
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/145691819-421f39b1-54a2-41ad-92fc-d01b66daa094.png)
        - Screenshot #1 description explaining what you're trying to show: On this page, the user will be able to create a competition


  - [ ] \(12/10/2021 of completion)Each new participant causes the Reward value to increase by at least 1 or 50% of the joining fee rounded up
  -  List of Evidence of Feature Completion
    - Status: Partially Working
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/create_competitions.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/96
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/145698146-a4fd0c75-e6e7-4076-9bff-80cd57817c23.png)
        - Screenshot #1 description explaining what you're trying to show: This function updates participants and increases the reward value by 50%
  - [x] \(12/10/2021 of completion)Have a page where the User can see active competitions (not expired)
  -  List of Evidence of Feature Completion
    - Status: Partially Working 
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/list_competitions.php
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/145691859-06fd4929-a934-4798-9e37-fbf763774b33.png)
        - Screenshot #1 description explaining what you're trying to show

  - [x] \(12/09/2021 of completion) Will need an association table CompetitionParticipants (id, comp_id, user_id, created)
  -  List of Evidence of Feature Completion
    - Status: Completed 
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/sql/init_db.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/100
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/89924299/145692646-1d1eebf7-6fee-45bd-8555-b4b3a69101a9.png)
        - Screenshot #1 description: Table of Competition Participants
    - [x] \(12/10/2021 of completion) User can join active competitions 
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/list_competitions.php
    - Pull Requests
      - PR link #1: - PR link #1: https://github.com/mgallo185/IT202-003/pull/101
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/89924299/145697045-b46a4822-3e24-4d65-a1d6-a8a9cd687858.png)

        - Screenshot #1 description explaining what you're trying to show: My function for the users to join active competitions
        - 
  - [] \(12/10/2021 of completion) Create function that calculates competition winners
  -  List of Evidence of Feature Completion
    - Status: Partially Working
    - Direct Link:  https://mtg24-prod.herokuapp.com/Project/list_competitions.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/101
    - Screenshots
    - Screenshot #1: ![calc_winner1](https://user-images.githubusercontent.com/89924299/145696910-98546553-4c67-4d46-a884-1894f18bdb1a.PNG)

    - Screenshot #1 description: Function Calc Winner Part 1
      - Screenshot #2: ![calc_winner2](https://user-images.githubusercontent.com/89924299/145696889-c237c27d-9019-4562-8fc4-767b9e9236e1.png)

        - Screenshot #2 description explaining what you're trying to show: Function Calc Winner Part 2.
 
- Milestone 4
 - [x] \(12/19/2021 of completion) User can set their profile to be public or private
 -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/105
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/89924299/146690917-732c81b7-8242-42f4-9e19-58e5d20cff2d.png)
        - Screenshot #1 description explaining what you're trying to show: Button that enables a user to switch their profile to public
  - [ ] \(mm/dd/yyyy of completion) User will be able to see their competition history
-  List of Evidence of Feature Completion
    - Status: Incomplete
    - Attempt at competititons history, but even if it worked. I cannnot test it because of issue of Points and Create Competitions 
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/147023890-0ea7a305-3a15-4020-8ffa-ea4f5573ad65.png)


 - [ ] \(mm/dd/yyyy of completion) User with the role of “admin” can edit a competition where paid_out = false
 -  List of Evidence of Feature Completion
    - Status: Incomplete
    - I could not figure out how to approach this step.
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)


  - [ ] \(mm/dd/yyyy of completion) Add pagination to the Active Competitions view
 -  List of Evidence of Feature Completion
    - Status: Partially Working
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 : ![image](https://user-images.githubusercontent.com/89924299/147023560-e1aa3fad-db92-41bf-8b9d-5b4cb83096e2.png)
      - Pagination appears on List Competions, but I cannot test it 
      - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/147023671-be5f6b2a-d8b9-43ea-ad7f-4db9c34f9781.png)
      - Paginate function is called in list competitions.
  - [x] \(12/19/2021 of completion) Anywhere a username is displayed should be a link to that user’s profile
 -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/home.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/105
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/146690749-eb1fbb2a-1d38-47e2-ad5c-a8e4566024c0.png)
      - Screenshot of attempt to click on a private profile which results in a flash message stating that the profile is private.
      - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/146690858-ab79ba76-076e-45b7-8cfb-ab0367a5f384.png)
      - Screenshot of User JediMike seeing the public profile of 1sttest.
  - [ ] \(mm/dd/yyyy of completion) Viewing an active or expired competition should show the top 10 scoreboard related to that competition
 -  List of Evidence of Feature Completion
    - Status: Incomplete
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
  - [x] \(12/18/2021 of completion) Game should be fully implemented/complete by this point
-  List of Evidence of Feature Completion
    - Status: Completed
- Direct Link: https://mtg24-prod.herokuapp.com/Project/game.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/64
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/146653507-ab2e0339-6b2f-47bf-a4a8-069d7a651a19.png)
      - My Game has been done since Milestone 2. This is the main title screen.
      - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/146658351-37b5798c-7603-4112-83ac-ab9d1c39205d.png)
      - Flash message that states the players score will be saved if the player is logged in.


    - [ ] \(mm/dd/yyyy of completion)User’s score history will include pagination
-  List of Evidence of Feature Completion
    - Status: Partially working
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/147021621-ade2f075-20b9-4604-9813-bebd7ead8dda.png)
  - [x] \(12/18/2021 of completion) Home page will have a weekly, monthly, and lifetime scoreboard
    -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://mtg24-prod.herokuapp.com/Project/home.php
    - Pull Requests
      - PR link #1: https://github.com/mgallo185/IT202-003/pull/69
      - PR Link #2: https://github.com/mgallo185/IT202-003/pull/73
    - Screenshots
      - Screenshot #1: ![image](https://user-images.githubusercontent.com/89924299/147008933-8c0d253e-b88f-46fd-a947-e9c231abb76b.png)
      - Screenshot 1 Description. Incoroporated this in Milestone 3. There are buttons to switch between a weekly, daily, monthly, and lifetime scoreboard. Currently the score board is for monthly. 
      - Screenshot #2: ![image](https://user-images.githubusercontent.com/89924299/146658309-1c53e0a9-cbdb-43bb-b8b6-32ac19a793ba.png)
      - Game link on nav heading and an example of how the scoreboard works.
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

    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board

