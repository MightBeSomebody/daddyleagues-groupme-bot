<?php
switch ($cmd) {
	case 'config': // returns config info
		if (!array_key_exists(1, $command) || $command[1] == "") {
			$command[1] = "all";
		}
		sendConfig($command[1]);		break;		
	case 'set': // set a value in the xml file
				// use this to set info, config, and twitch names
		// use case-sensitive msg text for values
		$sCommand = preg_split( '/\s+/', $json->txt);
		setCommand(array_slice($sCommand, 1));
		break;
	
	default:
		sendMsg(sprintf("Invalid command. send \"%shelpme\" for help", $cmd_prefix));
		break;
}
?>