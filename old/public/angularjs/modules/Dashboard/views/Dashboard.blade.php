<h3>Welcome, {{ user.username }}</h3>

<h2>Users Sorted By ID Ascending</h2>
<p>User.query( { filter: 'id', sort: 'asc' });</p>
<p>{{ users_one }}</p>

<h2>Users Sorted By ID Descending</h2>
<p>User.query( { filter: 'id', sort: 'desc' });</p>
<p>{{ users_two }}</p>

<h2>Normal Users Call</h2>
<o>User.query();</p>
<p>{{ users_three }}</p>

<h2>Users Sorted by Username Ascending</h2>
<p>User.query( { filter: 'username', sort: 'asc' });</p>
<p>{{ users_four }}</p>

<h2>User Stats</h2>
<p>User.query( { stats: true });</p>	
<p>{{ users_stats }}</p>