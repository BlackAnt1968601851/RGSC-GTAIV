This is the Social Club Server Replacement server for Social Club on GTA IV. restoring the ability to play online on patch 7 and below

You will need IIS

You will need to create a single certificate for all these domains
www.rockstargames.com
rockstargames.com
tv.rockstargames.com
socialclub.rockstargames.com
mls.rockstargames.com


once created open IIS and add handlers to PHP as a FastCGIModule and for the file/extension create one for auth and one for start
the start is equivalent to start.php but without the extension part.

I will make a video on setting this up once I get a change. wait for the release of the video if you don't know what to do.
