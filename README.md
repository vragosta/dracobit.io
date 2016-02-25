dracobit.io
Install vagrant

Open terminal, and run the following commands:

vagrant -v
virtualbox -v

If any of them do not return a version number, head to the client websites and download the technologies.
Clone Vagrant-dev-local-server from SC Bitbucket onto Desktop via the terminal and rename it dracobit
'cd' into vagrant_dracobit, Write the command 'mkdir www' to create the www folder
Run the command 'vagrant up' from the directory that shows the 'www' folder
Let the vagrant virtual machine boot up and install php/linux/wordpress
In the browser, enter localhost:8080

Installing dependencies

Open terminal, and run the following commands:

npm -v
bower -v

If any of them do not return a version number, head to the client websites and download the technologies.
Make sure you are in the 'themes/dracobit' directory then run the following commands:

sudo npm -g install gulp ( enter mac password )
npm install
sudo npm -g install bower ( enter mac password )
bower install
