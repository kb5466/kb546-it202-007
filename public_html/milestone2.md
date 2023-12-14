<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 API Project</td></tr>
<tr><td> <em>Student: </em> Kristian Bulusan (kb546)</td></tr>
<tr><td> <em>Generated: </em> 12/13/2023 9:39:44 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-2-api-project/grade/kb546" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Define the appropriate table or tables for your API </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the table definition SQL files</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T01.46.20Screenshot%202023-12-13%20204541.png.webp?alt=media&token=9b6f9f68-2bf0-48c6-a540-a995d1b68687"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot is for making jokes for the database from the user<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T01.46.24Screenshot%202023-12-13%20204546.png.webp?alt=media&token=c61628d9-aa46-477a-9b46-2fac215a8fae"/></td></tr>
<tr><td> <em>Caption:</em> <p>Table for getting data from the database<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mappings</td></tr>
<tr><td> <em>Response:</em> <p>I made a table jokes for pulling data from the API after parsing<br>them, the contents of the data is jokes, API id, category, and rating.<br>I mapped them for each field that I wanted to keep for each<br>response from the API. The table CA_jokes is for when users would make<br>a joke and have their jokes be put into the database. It only<br>requires users for the category and the joke itself.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/kb5466/kb546-it202-007/pull/40/commits/acd7ae172675d37625c5bffef09bea73fc452426">https://github.com/kb5466/kb546-it202-007/pull/40/commits/acd7ae172675d37625c5bffef09bea73fc452426</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Data Creation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the Page and the Code (at least two)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T02.04.21Screenshot%202023-12-13%20210345.png.webp?alt=media&token=d9113249-058d-4eec-81b9-151986fd1ab6"/></td></tr>
<tr><td> <em>Caption:</em> <p>Where users would input their jokes in, only requires the category and joke<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Database Results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T02.07.08Screenshot%202023-12-13%20210656.png.webp?alt=media&token=bb22cb22-31f8-4fe4-aefd-22805ecec1b0"/></td></tr>
<tr><td> <em>Caption:</em> <p>I tried copying how create roles from create roles, but couldnt finish<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T02.09.01Screenshot%202023-12-13%20210851.png.webp?alt=media&token=9a7882c8-59c0-4ab8-8abf-85f570645564"/></td></tr>
<tr><td> <em>Caption:</em> <p>SHowing the response from the endpoint<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Misc Checklist</td></tr>
<tr><td> <em>Response:</em> <p>The api_id makes the entitites from the API unique. Unfortunately duplicates on manually<br>added items arent tracked, but if I would track it, I would compare<br>the body or joke to body or jokes already in the table and<br>not let users enter it if it already exists in the table. The<br>API handles it through API id, API id is unique so duplicates would<br>be avoided. Only admins have access to make a joke<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f">https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f">https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Data List Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot the list page and code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T02.18.33Screenshot%202023-12-13%20211822.png.webp?alt=media&token=d8499dad-482a-4e39-8d35-8ba44916294b"/></td></tr>
<tr><td> <em>Caption:</em> <p>can only show api data, cant filter<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>When pressing the refresh button, it only shows data from the API. only<br>admins can edit the data. Data can&#39;t be viewed<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f">https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f">https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> View Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T02.20.35Screenshot%202023-12-13%20212027.png.webp?alt=media&token=c3a508c7-6935-438a-a23e-01bb97705577"/></td></tr>
<tr><td> <em>Caption:</em> <p>Couldnt show or search specific data from the database. Can&#39;t display data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>Only admins can access this page<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f">https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f">https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Edit Data Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T02.21.50Screenshot%202023-12-13%20212027.png.webp?alt=media&token=4ef02fec-2aa1-48d0-9cb9-fe2299322853"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-kb546-prod-e32002342896.herokuapp.com/project/admin/manage_joke_data.php">https://it202-kb546-prod-e32002342896.herokuapp.com/project/admin/manage_joke_data.php</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f">https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Delete Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of related code/evidence</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T02.22.56Screenshot%202023-12-13%20211822.png.webp?alt=media&token=3c7919ee-6d9a-4699-8614-405c3aae6b29"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>Only the admin can put data in the database, couldn&#39;t get to deleting<br>data.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f">https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> API Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of Code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T02.25.09Screenshot%202023-12-13%20212451.png.webp?alt=media&token=dea77813-d3b7-4e73-9c13-2a3cb19a8eac"/></td></tr>
<tr><td> <em>Caption:</em> <p>The api is mapped by iterating through the array result then the array<br>inside the array is parsed depending on the key<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T02.25.51Screenshot%202023-12-13%20212423.png.webp?alt=media&token=47d9ed19-6b23-4f5e-9946-a6ea11d5b9fe"/></td></tr>
<tr><td> <em>Caption:</em> <p>The data is being called with the GET action<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>The API is parsed in the manage_jokes then after fetching the data it<br>is parsed and mapped. The API calls are only called every time the<br>refresh joke is pressed. My api data is used to checkout different kind<br>of jokes<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f">https://github.com/kb5466/kb546-it202-007/pull/40/commits/fa009680c8efd6a4ecb351d6a8b944b2a5c2402f</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What issues did you face and overcome during this milestone?</td></tr>
<tr><td> <em>Response:</em> <p>I faced having troubles with trying to figure out how to load the<br>data and display on my page<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> What did you find the easiest?</td></tr>
<tr><td> <em>Response:</em> <p>The easiest is mapping the api data to the database<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> What did you find the hardest?</td></tr>
<tr><td> <em>Response:</em> <p>Having the api data to show up and parsed properly<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Did you have to utilize any unanticipated APIs?</td></tr>
<tr><td> <em>Response:</em> <p>I used a memegenerator initially and couldnt do anything with it so I<br>just took a random joke generator instead<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of your project board</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fkb546%2F2023-12-14T02.39.04Screenshot%202023-12-13%20213857.png.webp?alt=media&token=a0f52dc4-2f2a-4749-a583-86e4f0f190ec"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing functionaliteis that I have to do and what I finished<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-2-api-project/grade/kb546" target="_blank">Grading</a></td></tr></table>