DiscordPanel:

## What is it?
DiscordPanel is an HTML, PHP, CSS, JS, and more designed discord bot software what works as a panel.
Currently, you can, restart, stop and start a bot from the panel.
You can have an unlimited number of bots added as long as you have the details.
There is a rated development knowledge of 2.4/10 to use this script.
There is a To-Do page where you can add, edit and remove items!
There is a BUG area where you can list any bugs your bot/bots may have. There is also a widget on the home screen
The whole code is open source, what is amazing!

## Why use DiscordPanel?
We own and run around 14 discord bots what are on hundreds of thousands of discord servers, so downtime can impact us a lot. So our lead developer designed a software called DiscordPanel the only free self-hosted discord bot control panel. If your bot is on discordbots.org then you can use the status widget on the home screen, but don't worry as in a future update we will be adding another way to use the status widget.

## How to setup DiscordPanel 2?
This update changed a lot and fixed all known bugs, and also made it much easier for you to make the website work. Along with a new login system whats helpful for hosts!
1. Upload all files in "Files" folder to the directory of the website URL you want to use
2. Navigate to "Template/config.php" and fill out all the details (Help for Discord Oauth2 below too)
3. Edit files bot1Owners.json, bot2Owners.json, bot3Owners.json, and bot4Owners.json (All in /Templates file) and enter the bot owner login ID (See how to find it below) you can enter as many user IDS into it as you need to. All users who arnt named on the list wont be able to login to that bots panel.
4. Go to YOURURL/Install and click "Install" if successful you will get a page saying it has been installed successfully
5. Remove the whole "Install" file and then you are ready to use the website :)

## To find a user ID:
On discord go to settings.
Then go to Apperance and enable Develeper Mode
Then you should be able to righclick on a users name then click "Copy ID"

## To get a Discord App:
A discord app is needed to get the discord Oauth2 working.
Steps are:
1. Go to: https://discordapp.com/developers/applications/me#top
2. Click "New App"
3. Name the app
4. Add a redirect ( Should be: https://yourdomain.tld/callback/login.php )
5. Click done
6. Copy the given "Client ID" at the top and enter into config file where needed
7. Reveal the "Client Secret" and copy it into the top of the config file where needed

## To add an item to To-Do:
As long as you've set up the panel right with SQL you should be able to click on the “To Do List” link on the side navbar and the todo list page will open
Click on “Write Something Here…”
Then write something on the todo list there
Click on “Submit”
You should get an alert if it works


## To edit a To-Do item:
Go to the To Do List page
Under the item on the todo page, there will be a text box with a green tick next to it
Write the new detail in that text box then click the tick
If successful an alert will popup


## To remove an item from To-Do:
Go to the To Do List page
Click the red “-” logo next to the item you want to remove
If successful an alert will popup

## To add an item to Bugs::
As long as you've set up the panel right with SQL you should be able to click on the “Bugs” link on the side navbar and the Bugs page will open
Click on “Enter bug here...”
Then write something on the todo list there
Click on “Submit”
You should get an alert if it works

## To edit a Bug:
Go to the Bug page
Under the item on the Bug page, there will be a text box with a green tick next to it
Write the new detail in that text box then click the tick
If successful an alert will popup

## To remove an item from Bugs:
There are two ways to do this…
Go to the main (Home) page and click on the red “-” logo next to the item you want to remove the widget
If successful an alert will popup
Or
Go to the Bugs page
Click the red “-” logo next to the item you want to remove
If successful an alert will popup

## DiscordPanel Version 2

## Offical Website: https://Discordpanel.xyz
## Demo Website: https://demo.Discordpanel.xyz
## Watch the instilation video: https://youtu.be/Rmhb92uZbJA (v1.0-1.4 only)
## Donate to keep development active at https://PayPal.me/braderstm
## Join the official discord support server for DiscordPanel: https://discord.gg/q2RDufd
