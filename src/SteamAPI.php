<?php
/*
  _____ _                                  _____ _____ 
 / ____| |                           /\   |  __ \_   _|
| (___ | |_ ___  __ _ _ __ ___      /  \  | |__) || |  
 \___ \| __/ _ \/ _` | '_ ` _ \    / /\ \ |  ___/ | |  
 ____) | ||  __/ (_| | | | | | |  / ____ \| |    _| |_ 
|_____/ \__\___|\__,_|_| |_| |_| /_/    \_\_|   |_____|
 
 Author: https://github.com/yusufhan                                        
                                            
*/
	class SteamAPI
	{

		private $key;

		public 	$personaname,
			$realname,
			$profileurl,
			$timecreated,
			$avatar,
			$avatarmedium,
			$avatarfull,
			$avatarhash,
			$loccountrycode,
			$locstatecode,
			$loccityid,
			$personastate,
			$personastateflags,
			$profilestate,
			$commentpermission,
			$communityvisibilitystate,
			$primaryclanid;
		
		public function __construct($apikey)
		{
			$apikey == "STEAMKEY" ? die("Steam API Key not exist") : $this->key = $apikey;
		}

		public function getUser($steamid)
		{
			$target = json_decode(file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $this->key . "&steamids=" . $steamid));

			$userData = $target->response->players[0];

			@$this->personaname = $userData->personaname;
			@$this->realname = $userData->realname;

			@$this->profileurl = $userData->profileurl;
			@$this->profilestate = $userData->profilestate;
			@$this->timecreated = $userData->timecreated;

			@$this->avatar = $userData->avatar;
			@$this->avatarmedium = $userData->avatarmedium;
			@$this->avatarfull = $userData->avatarfull;
			@$this->avatarhash = $userData->avatarhash;

			@$this->loccountrycode = $userData->loccountrycode;
			@$this->locstatecode = $userData->locstatecode;
			@$this->loccityid = $userData->loccityid;

			@$this->personastate = $userData->personastate;
			@$this->personastateflags = $userData->personastateflags;
			@$this->communityvisibilitystate = $userData->communityvisibilitystate;
			@$this->commentpermission = $userData->commentpermission;
			@$this->primaryclanid = $userData->primaryclanid;
			
		}

	}

?>
