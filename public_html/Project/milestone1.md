<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Dylan Schroers(djs28)</td></tr>
<tr><td> <em>Generated: </em> 4/4/2022 11:26:36 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone1-deliverable/grade/djs28" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161669417-3fb86f8a-bd2a-4ff5-bcbd-62e2108b4117.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the duplicate email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161669727-880614e7-069b-4e45-bec2-84c2f5b0de16.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing successful registration<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161669851-df32f87a-9a58-4e28-809f-4660bff99711.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table in vs code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/18">https://github.com/dylanschroers/IT202/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Takes in input through js form then runs validation code, ie &quot;users_check_duplicate&quot;, if<br>no errors are caught, the input is added to the Users table and<br>the confirmation message is shown.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161670262-3a9321fa-3eb6-460a-a5d2-7ab605e8042b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing an invalid password on login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161670292-3ab78637-bd72-41de-b2ef-f181ff2ff9a5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Confirmation message showing a succesful login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/18">https://github.com/dylanschroers/IT202/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Checks user input against already determined information in Users table and either gives<br>an error message and explains what went wrong or successfully logs in.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161670514-b4624e00-65a1-44ee-a255-75e9690fbdc7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful log out message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161670608-59210ffd-39c5-42d8-add4-7befda4ababa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message showing how a logged out user cant access this page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/18">https://github.com/dylanschroers/IT202/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>destroys session and gives success message<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161670608-59210ffd-39c5-42d8-add4-7befda4ababa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message showing how a logged out user cant access this page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161670803-e9d331ad-e6eb-4e38-bd49-6585d55d6a36.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing a user without an appropriate role can&#39;t access a role-protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161670858-234615a0-d07d-4248-8862-db049676c4ee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the Roles table with data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161670889-fa78490e-105b-46c3-970f-f7b79846f88d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the UserRoles table with data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/18">https://github.com/dylanschroers/IT202/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>checks if session is not null and if it is redirects and gives<br>error message<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>checks if user has appropriate role, and if not redirects and displays error<br>message<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161671283-00431cc6-30df-4488-a38a-3eb001403f39.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot to show an example of my site&#39;s styles/theme<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/42">https://github.com/dylanschroers/IT202/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>Gives various tags a variety of background colors, the navigation list is given<br>a drop shadow through filter:drop-shadow, rounded edges through border-radius, various margins, a padding<br>of 10px and text aligned center<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161671656-194640d6-caf6-401c-a4d6-6a0267165b5b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the successful log out message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161671709-d2300fea-0cdd-4039-a62b-bd7bb832fa36.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the successful log in message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/42">https://github.com/dylanschroers/IT202/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>When a given message is displayed it uses grammatically correct and easily understood<br>writing<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161671768-9ced2893-e10c-4a30-86b3-8213d1acf82b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the User Profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/42">https://github.com/dylanschroers/IT202/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>takes user input from users table and displays it<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161672351-a3a3b145-b5a4-489f-9c0d-6ab209bb05d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the User Profile page success message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161672420-5ec47980-5cba-4dfe-891b-43ec692dfee9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user table before alteration<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161672529-0b794312-8d02-42dd-b7b8-36074adfaa07.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user table after alteration<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/42">https://github.com/dylanschroers/IT202/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>takes user input and validates it, and then modifies the data in users<br>table<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161672850-f4f50245-e488-48f3-8e38-6bed5565a198.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing my updated proposal.md file with checkmarks, dates, and link to milestone1.md<br>accordingly and a direct link to the path on heroku dev<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/161672742-e85b6a50-7cfa-479a-8630-b3e6d5b71f2a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing which issues are done/closed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone1-deliverable/grade/djs28" target="_blank">Grading</a></td></tr></table>