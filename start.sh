#PocketPE
#Server Software for Minecraft Pocket Edition
#Website: pocketpe.esy.es
#If you find issues report them on the Issue Tracker


#Loader

ppeFile="src/PocketPE/PocketPE.php";
src="src";
error=0;
PHP='bin/php7/bin/php'

if [ -d src ]; then
	# Check if bin and PHP exists
	if [ -d "bin/php7/bin" ]; then
		if [ -e $PHP ]; then 
			if [ -x $PHP ]; then
				error=0
				# Everything is fine all checks passed
			else
				echo "PHP File is not executable"
				error=1
			fi
		else
			echo "Couldn't find any PHP executable inside 'bin/php7/bin'"
			error=1
		fi
	else
		echo "Couldn't find PHP"
		error=1
	fi
else
	echo "Couldn't find PocketPE source";
	error=1
fi


   
#Starting Server
if [ $error -lt 1 ]; then
	$PHP -f $ppeFile
else 
	echo "Exit with error"
fi

#Stopping Server
#You can find all the log of the server in your server files. In the log folder. The session name was sesion_%what_session%#

#Crash
#Ohs Nos, we have crashed. Check all Binaries and code in plugins.
