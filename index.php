<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>Title</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
		<!--semantic tag <main> used, plan in future to add <header> above and <footer> below, but not needed for now, but want to be sure that the main tag is correctly labeled and filled with content-->
		<!-- 2 <div>s within the <main> div: to separate the Backend Entities/Attributes section from the Frontend Persona/use Case sections -->
		<main>
			<h1>Data Design</h1>
			<p>1/10/2018 Anna Khamsamran</p>
			<!-- this <div> is to hold the Backend Entities/Attributes and keep it separate from the frontend stuff-->
			<div>
				<h2>Entities & Attributes</h2>
				<!--the <p> below is to enter information about what website/app this is about, or notes on the project-->
				<p>Here is a first-attempt to grok <em>Medium</em> blog website</p>
				<!--the entity tables below each have space for up to 10 attributes. In the case that there are less, rows can be deleted, but no more should be added to a table, as each entity should have not more than 10 attributes.  Copy and paste a whole table when more are needed, delete the ones that are not needed.-->
				<hr/>
				<table>
					<thead>
						<th colspan="3"><strong>Entity Name:</strong> member</th>
					</thead>
					<tr>
						<th>attributeName:(entityAttribute)</th>
						<th>PrimaryKey:</th>
						<th>Note:</th>
					</tr>
					<tr>
						<td>memberUserName(ID)</td>
						<td>Primary Key</td>
						<td>profileId (primary key)</td>
					</tr>
					<tr>
						<td>memberFirstName</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>memberLastname</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>memberEmail</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>memberPassword</td>
						<td></td>
						<td>profileHash</td>
					</tr>
					<tr>
						<td>memberProfile</td>
						<td></td>
						<td>about the blogger/short bio</td>
					</tr>
					<!-- this part of the table is currently unused...
					<tr>
						<td>TD 7 1</td>
						<td>TD 7 2</td>
						<td>TD 7 3</td>
					</tr>
					<tr>
						<td>TD 8 1</td>
						<td>TD 8 2</td>
						<td>TD 8 3</td>
					</tr>
					<tr>
						<td>TD 9 1</td>
						<td>TD 9 2</td>
						<td>TD 9 3</td>
					</tr>
					<tr>
						<td>TD 10 1</td>
						<td>TD 10 2</td>
						<td>TD 10 3</td>
					</tr>
					-->
				</table>

				<p>note: used the name "member" because this is the name that the website uses for its users/bloggers</p>
				<!--The tables were running into eachother, so I added the horizontal break between each of them, just to distinguish them from eachother-->
				<hr/>

				<table>
					<thead>
						<th colspan="3"><strong>Entity Name:</strong> blog</th>
					</thead>
					<tr>
						<th>attributeName (entityAttribute:)</th>
						<th>PrimaryKey:</th>
						<th>Note:</th>
					</tr>
					<tr>
						<td>blogId</td>
						<td>primary key</td>
						<td></td>
					</tr>
					<tr>
						<td>blogTitle</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>BlogContent</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>blogAuthor</td>
						<td>Foreign Key</td>
						<td>relationship to member entity. 1-to-n = member-to-blog</td>
					</tr>
					<tr>
						<td>blogDate</td>
						<td></td>
						<td></td>
					</tr>
					<!-- this part of the table is currently unused...
					<tr>
						<td>TD 6 1</td>
						<td>TD 6 2</td>
						<td>TD 6 3</td>
					</tr>
					<tr>
						<td>TD 7 1</td>
						<td>TD 7 2</td>
						<td>TD 7 3</td>
					</tr>
					<tr>
						<td>TD 8 1</td>
						<td>TD 8 2</td>
						<td>TD 8 3</td>
					</tr>
					<tr>
						<td>TD 9 1</td>
						<td>TD 9 2</td>
						<td>TD 9 3</td>
					</tr>
					<tr>
						<td>TD 10 1</td>
						<td>TD 10 2</td>
						<td>TD 10 3</td>
					</tr>
					-->
				</table>

				<hr/>

				<table>
					<thead>
						<th colspan="3"><strong>Entity Name:</strong> response </th>
					</thead>
					<tr>
						<th>attributeName (entityAttribute:)</th>
						<th>PrimaryKey:</th>
						<th>Note:</th>
					</tr>
					<tr>
						<td>responseId</td>
						<td>Primary Key</td>
						<td></td>
					</tr>
					<tr>
						<td>responseMember</td>
						<td>Foreign Key</td>
						<td>relationship to member entity: 1-to-many = member-to-response</td>
					</tr>
					<tr>
						<td>responseDate</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>responseHeadline</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>responseContent</td>
						<td></td>
						<td></td>
					</tr>
					<!-- this part of the table is currently unused...
					<tr>
						<td>TD 6 1</td>
						<td>TD 6 2</td>
						<td>TD 6 3</td>
					</tr>
					<tr>
						<td>TD 7 1</td>
						<td>TD 7 2</td>
						<td>TD 7 3</td>
					</tr>
					<tr>
						<td>TD 8 1</td>
						<td>TD 8 2</td>
						<td>TD 8 3</td>
					</tr>
					<tr>
						<td>TD 9 1</td>
						<td>TD 9 2</td>
						<td>TD 9 3</td>
					</tr>
					<tr>
						<td>TD 10 1</td>
						<td>TD 10 2</td>
						<td>TD 10 3</td>
					</tr>
					-->
				</table>

				<hr/>

				<table>
					<thead>
						<th colspan="3"><strong>Entity Name:</strong> clap</th>
					</thead>
					<tr>
						<th>attributeName (entityAttribute:)</th>
						<th>PrimaryKey:</th>
						<th>Note:</th>
					</tr>
					<tr>
						<td>clapId</td>
						<td>Primary Key</td>
						<td>this attribute may not be necessary because of the following 2 attributes combined can be co-primary keys</td>
					</tr>
					<tr>
						<td>clapMemberId</td>
						<td>Foreign Key</td>
						<td>relationship to member entity: 1-to-n = member-to-clap(each member can clap n times)</td>
					</tr>
					<tr>
						<td>clapBlogId</td>
						<td>Foreign Key</td>
						<td>relationship to blog entity: 1-to-n = blog-to-clap (each blog can have n claps)</td>
					</tr>
					<tr>
						<td>clapNumber</td>
						<td></td>
						<td>this site allows members to clap multiple times for a single blog, so this is required,since each member can give a different number of claps. it is NOT the same as a "like" in Facebook</td>
					<!-- this part of the table is currently unused...
					</tr>
					<tr>
						<td>TD 5 1</td>
						<td>TD 5 2</td>
						<td>TD 5 3</td>
					</tr>
					<tr>
						<td>TD 6 1</td>
						<td>TD 6 2</td>
						<td>TD 6 3</td>
					</tr>
					<tr>
						<td>TD 7 1</td>
						<td>TD 7 2</td>
						<td>TD 7 3</td>
					</tr>
					<tr>
						<td>TD 8 1</td>
						<td>TD 8 2</td>
						<td>TD 8 3</td>
					</tr>
					<tr>
						<td>TD 9 1</td>
						<td>TD 9 2</td>
						<td>TD 9 3</td>
					</tr>
					<tr>
						<td>TD 10 1</td>
						<td>TD 10 2</td>
						<td>TD 10 3</td>
					</tr>
					-->
				</table>

				<p>Note: the clap entity is an intermediary table between the member table and the blog table. it allows for a m-to-n relationship, by having 1-to-n relationships with both member and blog.</p>
			</div>
			<hr/>
			<!--this <div> is to hold all the front-end items. enter the "answer" or the information following the </strong> for each category. The "name of each required item is in <strong> bold, and the answers should be regular.  This is just a stylistic idea to distinguish question from answer, but is not required.-->
			<div>
				<h2>Personas, Use Cases, & Interaction Flow</h2>
				<h3>Persona:</h3>
				<ul>
					<li><strong>Name</strong>: </li>
					<li><strong>Personality</strong>:</li>
					<li><strong>Gender</strong>:</li>
					<li><strong>Age</strong>:</li>
					<li><strong>Technology</strong>:</li>
					<ul>
						<li><strong>Device</strong>Device:</li>
						<li><strong>Proficiency</strong>Proficiency:</li>
						<li><strong>Love/Hate</strong>Love/hate:</li>
					</ul>
					<li><strong>Attitudes & Needs</strong>Attitudes & needs:</li>
					<ul>
						<li><strong>What need does this person have?</strong></li>
						<li><strong>Why choose your site over other options?</strong></li>
					</ul>
				</ul>

				<h3>User Story</h3>
				<h4><em>"As a ___(role as relative to the application)___user, I want to__(what do they need to do)__</em>"</h4>
				<p></p>
				<h3>Use Case</h3>
				<ul>
					<li><strong>Title</strong></li>
					<li><strong>Name of the "actor, user or Persona, and their role</strong></li>
					<li><strong>Usage Preconditions</strong></li>
					<li><strong>Usage Postconditions</strong></li>
					<li><strong>Interactrion Flow(s), including alternates, if appropriate</strong></li>
					<li><strong>Frequency of Use</strong></li>
				</ul>
				<h3>Interaction Flow:</h3>
				<ul>
					<li><strong>User Action 1</strong></li>
					<li><strong>System Response 1</strong></li>
					<li><strong>User Action 2</strong></li>
					<li><strong>System Response 2</strong></li>
					<li><strong>User Action 3</strong></li>
					<li><strong>System Response 3</strong></li>
					<li><strong>User Action 4</strong></li>
					<li><strong>System Response 4</strong></li>
					<li><strong>User Action 5</strong></li>
					<li><strong>System Response 5</strong></li>
				</ul>
			</div>

		</main>

	</body>
</html>
