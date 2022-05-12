<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Dylan Schroers(djs28)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 2:25:37 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-3-bank-project/grade/djs28" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168138517-c2ca7836-0ad7-4cda-b608-ff3d48c06d89.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of transfer page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168138678-e9d2217b-d49d-4db8-88cd-3357c4f85202.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing dropdown values<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168138902-5ff87709-97f8-44aa-a6c5-eaf7d12d8450.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing user can&#39;t transfer more funds than they have<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168138975-14750536-a4cf-44c1-b2cc-53e411817f4f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing user can&#39;t transfer to the same account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168139053-5dc797b0-5d29-464d-87ad-187e37230d54.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing you can&#39;t transfer an negative balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168139982-fb0ea448-33be-4e23-8c72-f88ca77cc860.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the generated transaction history from the db<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168139306-ee5ac6c7-758a-4bd7-91a2-5672f9a556a4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the Accounts table showing both affected accounts<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <p>The code selects id and account number where the user_id matches the results<br>from get_user_id(), the results are bound to an array and the array is<br>used in a foreach statement inside the form to create the dropdown menu.<br>The results of the dropdowns are then passed into and insert into statement<br>for the transactions table, then the accounts are updated form the sum of<br>balance changes in the transaction table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/54">https://github.com/dylanschroers/IT202/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project/transfers.php">https://djs28-prod.herokuapp.com/Project/transfers.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168140618-7e14ab8e-d45d-4a10-b5bd-75330dc56158.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of transaction history page showing the new transfer transaction<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168140655-d1b70709-0083-443f-9447-63eb0099f6a2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshots demonstrating the filters and pagination<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <p>The filter works by taking the results from the form and then concatenating<br>additional where clauses on the select query. The pagination works by passing the<br>results array into the paginate function which figures out the total entries and<br>how many per page and therefore how many pages and then allows the<br>code the show results in a limited amount.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/54">https://github.com/dylanschroers/IT202/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project/get_accounts.php">https://djs28-prod.herokuapp.com/Project/get_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168141540-c8ba1161-2fa4-4845-aca0-67eec5238458.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing the user&#39;s profile with the new fields<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/54">https://github.com/dylanschroers/IT202/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to profile page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project/profile.php">https://djs28-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168141893-45a6de22-af30-44e6-a02e-03b08a2ae025.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the external transfer page with filled in data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168141945-46040d09-aee4-4876-a566-a2432800b565.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing user can&#39;t send more than they have<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168142012-8c953186-74f5-4f5b-96b2-5a9b164d34bf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing they can&#39;t send a negative amount<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168142094-6a6169a7-ae5c-4192-9d83-c8abde33de11.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing message if a user doesn&#39;t exist and/or a destination account wasn&#39;t<br>found<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168142206-f1f9b319-89fc-4999-9ace-8b7e1cc3008d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the transactions table showing the recorded transfer<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168142260-d050207f-c641-4401-9386-5b3c27b5970a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing the updated account balances<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <p>The code uses a select statement with a join to find the other<br>users account, the select statement has two where clauses the last name of<br>the account must match the last name of the result of the form,<br>and the account number partial matches the account number results of the form.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/dylanschroers/IT202/pull/54">https://github.com/dylanschroers/IT202/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://djs28-prod.herokuapp.com/Project//ext_transfers.php">https://djs28-prod.herokuapp.com/Project//ext_transfers.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168143439-e0fa5cec-d930-4997-b383-14df3ead2670.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md<br>accordingly and a direct link to the path on Heroku prod<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/60888108/168143006-7a5608eb-c66c-4033-bf40-79d85c091228.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshots showing which issues are done/closed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-3-bank-project/grade/djs28" target="_blank">Grading</a></td></tr></table>