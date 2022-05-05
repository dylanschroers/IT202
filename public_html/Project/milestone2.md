<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Bank Project</td></tr>
<tr><td> <em>Student: </em> Dylan Schroers(djs28)</td></tr>
<tr><td> <em>Generated: </em> 5/5/2022 12:29:53 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-2-bank-project/grade/djs28" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Create Accounts table and setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot from the db of the system user (Users table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166962150-818ef4ff-e509-4063-8f89-fa4448c1fb65.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot from the db of the Users table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot from the db of the world account (Accounts table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166962294-7152de18-ac34-435a-bb90-f4fe7fdd8988.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot from the db of the Accounts table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain the purpose and usage of these two entries and how they relate</td></tr>
<tr><td> <em>Response:</em> <p>These entries show a one to many relationship, where one user can have<br>many accounts. The Accounts table hold monetary information while the Users table holds<br>login and personal information on a user. The Accounts table&#39;s user_id is a<br>foreign key from the Users table&#39;s id column.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/55/">https://github.com/dylanschroers/IT202/pull/55/</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Dashboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the requested links/navigation</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166963372-ccae68a9-b14c-4581-afb1-1a33c68d68b3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> A screenshot showing the requested links/navigation for the dashboard page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain which ones are working for this milestone</td></tr>
<tr><td> <em>Response:</em> <p>Create Account, My Accounts (get-accounts), Deposits, and Withdraws all work.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/55/">https://github.com/dylanschroers/IT202/pull/55/</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Create a checking Account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Create Account Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166963637-b4377cb6-d68a-476a-9b3b-a6af5bbfdc1b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> A screenshot showing the Create Account Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing validation errors and success message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166963722-7b59d55d-a556-4ef6-a7f2-7f9a79f389ae.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> A screenshot showing the deposit is too low to create account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166963814-ed626396-4acd-47c1-9132-31703dcae90a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> A screenshot showing the account type is empty and unable to create<br>account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166963868-fe30fd9f-1e4f-47df-9789-9196abefbf80.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> A screenshot showing the success message from creating an account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the transaction generated from the initial deposit (from the DB)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166964183-a7604824-104a-4d13-8002-55790ec1b3a5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot showing the transaction generated from the initial deposit<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain which account number generation you used and the account creation process including the transaction logic</td></tr>
<tr><td> <em>Response:</em> <p>For account number generation, I created an entry into the accounts table with<br>an empty account number to generate an id, then took that id, padded<br>with zeroes to create account_number then updated accounts table with the account number.<br>For the transaction entry, I hard coded the src id to &quot;-1&quot; to<br>represent the world account and then took the id from last insert into<br>accounts table and set that for the destination, I then copy and pasted<br>this code but flipped src and dest to create the transaction pair.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/55/">https://github.com/dylanschroers/IT202/pull/55/</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//create_account.php">https://djs28-prod.herokuapp.com/Project//create_account.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to list their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's account list view (show 5 accounts)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166965474-c438cd9b-29dd-4408-be23-561668b2e792.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot showing the user&#39;s account list as a drop down menu and<br>table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the page is displayed and the data lookup occurs</td></tr>
<tr><td> <em>Response:</em> <p>The code selects the four columns from Accounts where user_id is the value<br>of the get_user_id() function, then it uses and fetchall to pass it to<br>an array where a foreach loop creates the table and a separate foreach<br>inside a form creates the dropdown menu.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/55/">https://github.com/dylanschroers/IT202/pull/55/</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//get_accounts.php">https://djs28-prod.herokuapp.com/Project//get_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Account Transaction Details </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of an account's transaction history (should have at least a few samples) Show account number/type, balance, opened date and transaction details</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166966082-17e18119-d68a-4b63-951f-8aba5aee97b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot of an account&#39;s transaction history<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the lookup and display occurs</td></tr>
<tr><td> <em>Response:</em> <p>The form containing the foreach of the accounts passes the account number to<br>be used in a select statement this time from the Transactions table and<br>then again uses a fetchall to bind it o an array and uses<br>an additional foreach to create a second table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/55/">https://github.com/dylanschroers/IT202/pull/55/</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//get_accounts.php">https://djs28-prod.herokuapp.com/Project//get_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Deposit/Withdraw </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a Screenshot of the Deposit Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166966528-a1a4d623-dee6-463c-ad1b-cfbca68baf47.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> A Screenshot of the Deposit Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a Screenshot of the Withdraw Page (this potentially can be the same page with different views)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166966688-cc7788c0-4b8c-4416-b043-dd17a9310209.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> A Screenshot of the Withdraw Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show validation error for negative numbers</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166966590-0dbded06-4cfb-4633-9181-a4d33d3bd4e6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Validation error for negative numbers<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Show validation error for withdrawing more than the account contains</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166966636-047deddf-0080-4ce0-8dce-d0177da7cf0d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Validation error for withdrawing more than the account contains<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Show a success message for deposit and withdraw (2 screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166966846-cf111def-cabc-4e0c-954b-17667190c373.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> A success message for deposit<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166966814-a927cb44-4058-47e6-9047-879835030c7d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> A success message for withdraw <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Show a screenshot of the transaction pairs in the DB for the above tests (should have accurate expected_total values)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166967051-67ab534b-5ba0-45e7-9ba4-a55074ff0cbd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot of the transaction pairs in the DB for the above tests<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain how transactions work</td></tr>
<tr><td> <em>Response:</em> <p>The transactions start by taking the account number, the amount being transferred and<br>a memo from a form. They then create an entry into Transactions table<br>with a NULL expected_total value and using the information from the form, then<br>the balance in the accounts table is updated with the sum of balance_changes<br>from the transaction table then lastly the transactions table&#39;s expected_total is updated with<br>the balance of the Accounts table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/55/">https://github.com/dylanschroers/IT202/pull/55/</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//deposit.php">https://djs28-prod.herokuapp.com/Project//deposit.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//withdraw.php">https://djs28-prod.herokuapp.com/Project//withdraw.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166969712-0275375a-5ea7-4b06-bfea-78c9ed5af26b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A screenshot showing your updated proposal.md file with checkmarks, dates, and link to<br>milestone1.md accordingly and a direct link to the path on Heroku prod<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/166968025-d2b98795-7f66-41a3-9fb8-d6672e1c0b0c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing that all issues are done<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-2-bank-project/grade/djs28" target="_blank">Grading</a></td></tr></table>