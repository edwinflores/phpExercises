/*This particular project was created simply for practice purposes, thus the name*/

To do list:
- Refactor the code, might be a good idea to start with:
	>authentication so that you don't have to declare the username and password every single time
	>connection with the database is repetitive, the same code is seen in multiple scripts but have similar syntax and takes the same arguments, change that
	>displaying the contents of the database is also repetitive in the sense that it uses the same logic, bits, and pieces for the forms, create a class for this task as well
	>the entire user account system isn't ideal right now, as no matter who the user is, they all use the same table. here are a few ideas on how you can improve it:
		= create a new column for the users table that acts as the Primary Key, it doesn't have on at the moment.
		= use the Primary Key from above as a Foreign Key for the items, a crude next step is to link it directly to the list table and just display it by sorting with the foreign key.
		= eventually though, the rate at which the above table will be populated will be high and searching would take relatively longer, it might be a good idea to create a separate list table for each row in user, code wise might be complicated but it'll be easier to search through just that particular user's items than search through the user's items and other's
		= for some reason I failed to include the sql_close() anywhere, considering the web page isn't dynamic at all. make sure to put it in when the time comes.
		