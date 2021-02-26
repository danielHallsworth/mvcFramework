# mvcFramework

Worked to be picked up by another developer:

1. Add the functionality to send couriers information about a specific batch, this could be adding an extra function into CourierMovements or create a seperate class which handles this task (this would be preferred method to keep logic seperate). What is needed in here is data from the courier such as courier name and preferred data transport method, the product delivered and the batch it was delivered on.

2. Build upon the Routing in index.html, specifically for Batches as the current process required the users to enter /batch/ which is fine. the problem is that the user has to enter an extra paramaeter to access the batchView e.g. /batch/1 . This needs more work to make more user freindly


3. Have a look at CourierController there is a variable $splitUrl which splits the URL parameters on '/' and stores the values into an array. I belive this could be done a better way and the current method could cause errors. as if the user doesn't enter all 3 parameters in correct order the current code isn't smart enough to recognise that and will cause issues.
