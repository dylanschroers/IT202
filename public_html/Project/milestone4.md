<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Bank Project</td></tr>
<tr><td> <em>Student: </em> Dylan Schroers(djs28)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 3:20:30 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-4-bank-project/grade/djs28" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168145106-cdef6b7d-97db-47e8-a881-795270c884b8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of new column on the Users table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168145151-2f1f877b-309c-4fa4-8fc0-749630945d97.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of updated profile edit view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of profile view view<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/59">https://github.com/dylanschroers/IT202/pull/59</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//profile.php">https://djs28-prod.herokuapp.com/Project//profile.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>The checkbox in the profile page is used to update the visibility column<br>in the users table. The column is a Boolean value of either 1<br>or 0 and is used in the where clause of select statements.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to open a savings account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the create account page for savings with the form filled in</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168145533-fdffa924-01a9-4038-a2a1-29613484d474.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the create account page for savings with the form filled in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the code that determines the APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168145648-2e0f72cc-8a11-41de-b3f2-bd34f0fc419b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing that there is no code determining APY<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the related error and success messages when creating a savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168145749-7004ec14-5690-490c-9781-a275a687d605.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshots of the related error message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168145774-4a14ebe2-5a87-4ef1-b3e2-27671911da6e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshots of the related success message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the db showing the new savings account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168145857-a1f7c681-b2c7-4d68-8d11-53edd6178b22.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the db showing the new savings account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/60">https://github.com/dylanschroers/IT202/pull/60</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//create_account.php">https://djs28-prod.herokuapp.com/Project//create_account.php</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the logic behind the APY value</td></tr>
<tr><td> <em>Response:</em> <p>Set value taken from a google search of average savings account APY.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to take out a loan </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the form for opening a loan along with the system generated APY</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168146035-98dbeb36-788b-4500-9c05-2ad3bc83d3c4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing the form for opening a loan<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing the user's accounts that can be deposited into</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168146068-0a878782-5246-4a74-9870-b50129f60053.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing the user&#39;s accounts that can be deposited into<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot from the db showing the loan account has a negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168146195-77587163-d5e7-4c70-a9f0-568fbfce55e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot from the db showing the loan account has a negative balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot from the User's account list page showing the loan displaying as a positive value</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168146154-18efa355-33fa-4e02-8ebd-9e36da9f2d73.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot from the User&#39;s account list page showing the loan displaying as a<br>positive value<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the code logic for updating the loan's balance per the requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168146437-0f7e934b-082f-45e9-bac1-a4a2ef069290.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing the code logic for updating the loan&#39;s balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot showing user can't transfer more money from a loan account (alternatively don't show loan accounts in the dropdown for transfer transactions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168146522-44b38011-fff7-40ca-9d5a-85729f9a3a0a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing loan accounts don&#39;t show in the dropdown for transfer transactions<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add screenshots of any other errors and success</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168146638-a589189d-b409-482c-a567-afeb0ddfe7c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshots of errors<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168146692-c1ff4f1c-df8a-45d2-ab50-df0b310bb238.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshots of success<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/61">https://github.com/dylanschroers/IT202/pull/61</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to create/open loan page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//loans.php">https://djs28-prod.herokuapp.com/Project//loans.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//payLoan.php">https://djs28-prod.herokuapp.com/Project//payLoan.php</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain the special code implementations for loans</td></tr>
<tr><td> <em>Response:</em> <p>The loans show with a positive balance through an if statement when creating<br>the array that is passed into the foreach loop to create the table.<br>Other special cases are dealt with by creating separate pages for taking out<br>a loan or paying it off.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Listing accounts should show applicable APY or - if none is set for a particular account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the account list showing a combination of checkings, savings, loans, etc</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168148887-6e32292f-5bbd-4efd-beaa-81aa2b1c37e5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the account list showing a combination of checkings, savings, loans<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/63">https://github.com/dylanschroers/IT202/pull/63</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the Account list page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//get_accounts.php">https://djs28-prod.herokuapp.com/Project//get_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> User will be able to close an account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing validation that an account can't be closed if it has a balance (regular account and loan)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168148978-289d50bd-866e-4cd0-bb16-debc7eac7388.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing validation that an account can&#39;t be closed if it has a<br>balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot from the DB showing a closed account as inactive</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168149098-2f4a152b-02f0-441c-b773-31f6c256f1c0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot from the DB showing a closed account as inactive<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshots of the various account list queries (in the code) showing the changes to use is_active (be sure to include ucid and date)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168149400-f647e016-a906-4ed3-841b-ef78fdc489cd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of account list query<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168150130-b914c48d-534d-4d5e-b9b2-c507620a869e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of deposit account list query<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/62">https://github.com/dylanschroers/IT202/pull/62</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a link to the page where a user can close an account</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//close_accounts.php">https://djs28-prod.herokuapp.com/Project//close_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Admin role </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=Incomplete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of user search with search results shown (show the user's name, link to view their accounts, link to open account, and link/button to deactivate user)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the updated User's table of the new is_active column</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the admin's view of listing another user's account (from the user search results link) Show a mix of frozen and unfrozen accounts</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the admin's view of listing another user's transaction history</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of account lookup page with partial result matches (ensure it has links to the transactions page of the account and the ability to freeze/unfreeze)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 7: </em> Add related url(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code logic for the different views and admin actions</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168152069-6ebafd98-52dc-4f6a-8f2d-ae74f55ce5d8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md<br>accordingly and a direct link to the path on Heroku prod<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168151691-99072107-1633-4d3d-9200-0af2ef07208d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing which issues are done/closed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-4-bank-project/grade/djs28" target="_blank">Grading</a></td></tr></table>