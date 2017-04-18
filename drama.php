<?php
	$drama_inc = 828615 - 803260 - 55164;
	if(isset($_GET["count"])) {
		echo $drama_inc + (int)file_get_contents("/srv/http/drama.txt");
		exit(0);
	}
?>
<?php if (!isset($_GET["plain"])) : ?>
<?php endif; ?>
<?php
$combinations = array(
	"people" => array("augitesoul", "vos", "rory", "Vamig Aliev", "BlesseNTumble", "Excrafter", "AlexSocol", "AndreySV", "Byomakuta", "Agentx49", "Thaun_", "KingOfMiners", "pra", "RonFall", "SteveKung", "MJRLegends", "micdoodle8", "radfast", "EzerArch", "my legs", "Gabe", "GOD", "Internet"),
	"sites" => array("something rnadom", "Venom Gaming", "GC Forums", "BetterDiscord", "BetterDiscord2", "augitesite", "Google", "angusnicneven.com", "Wikipedia", "VK", "MCForums", "Internet"),
	"things" => array("Galacticraft 3", "Galacticraft 4", "Galacticraft 2", "Amun-Ra", "More Planets", "More Planets 2", "Extra Planets", "GalaxySpace", "Galaxy Additions", "Space_Advanced", "Blank Planet", "Extended Planets", "Vacuum Horizon", "4Space", "Internet"),
	"packs" => array("Feed The Beast", "the ForgeCraft pack", "FTB Monster", "FTB Unstable", "Agrarian Skies", "Direwolf20 Pack", "Tekkit", "Hexxit", "ATLauncher", "Resonant Rise", "MCUpdater", "Attack of the B-Team", "Mindcrack", "Dreamland", "ForgeCraft", "Technic"),
	"function" => array("MJ support", "RF support", "EU support", "FMP compatibility", "tiered rockets", "automatic mining", "GregTech balance", "ComputerCraft APIs", "OpenComputers APIs", "Bukkit plugin compatibility", "MCPC+ support", "ID allocation", "ore processing", "smelting", "crafting", "balance", "bees", "ThaumCraft integration", "realism", "decorative blocks", "new mobs", "TCon tool parts", "new wood types", "bundled cable support", "new player capes", "more drama", "less drama", "microblocks", "drama generation commands", "Blutricity support", "overpowered items", "underpowered items", "new ores", "better SMP support", "achievements", "quests", "more annoying worldgen", "new fuels", "evolved mobs", "gases", "dyed stuff", "dungeons", "my legs"),
	"adj" => array("bad", "wrong", "illegal", "horrible", "nasty", "not in ForgeCraft", "noncompliant with Mojang's EULA", "a serious problem", "incompatible", "a waste of time", "wonderful", "amazing", "toxic", "too vanilla", "shameful", "disappointing", "bloated", "outdated", "incorrect", "full of drama", "too realistic"),
	"badsoft" => array("malware", "spyware", "adware", "DRM", "viruses", "trojans", "keyloggers", "stolen code", "easter eggs", "potential login stealers", "adf.ly links", "bad code", "stolen assets", "malicious code", "secret backdoors", "ransomware", "CoS", "Internet Explorer", "hidden commands", "arbitrary code execution"),
	"drama" => array("bugs", "crashes", "drama", "lots of drama", "imbalance", "pain and suffering", "piracy", "bees", "adf.ly", "no more cookies", "unsealed environement"),
	"crash" => array("crash", "explode", "break", "lag", "blow up", "corrupt chunks", "corrupt worlds", "rain hellfish", "spawn bees", "make wrong dimension IDs"),
	"ban" => array("ban", "kick", "put a pumpkin of shame on", "add items mocking", "blacklist", "whitelist", "give admin rights to", "shame", "destroy", "kill"),
	"code" => array("code", "assets", "ideas", "concepts", "a single function", "5 lines of code", "a class", "a few files", "a ZIP file", "Gradle buildscripts", "a GitHub repository", "a variable", "a binary image", "hex", "a glitch Pokémon"),
	"worse" => array("worse", "better", "faster", "slower", "more stable", "less buggy", "weaker", "stronger", "harder", "greenier"),
	"ac1" => array("sue", "destroy the life of", "flame", "cause drama about", "complain about", "kick", "ban", "kill", "annoy", "steal all the cookies of"),
	"price" => array("200$", "250$", "300$", "350$", "400$", "450$", "500$", "600$", "0.1$"),
	"activates" => array("activates", "works", "functions", "breaks", "starts", "executes"),
	"says" => array("says", "tweets", "claims", "confirms", "denies", "whispers", "shouts", "announces", "prints", "posts", "spreads the word", "writes"),
	"enormous" => array("big", "large", "huge", "gigantic", "enormous", "godzilla-sized" )
);
$sentences = array(
	"[people] launched a DoS attack on the website of [things]",
	"[sites] urges everyone to stop using [things]",
	"After a [enormous] amount of requests, [packs] removes [things]",
	"After a [enormous] amount of requests, [packs] adds [things]",
	"After a [enormous] amount of requests, [packs] adds [function] to [things]",
	"[people] plays [things] on Twitch",
	"[people] fixes [function] in [things] to be unlike [things]",
	"[things] makes [things] [crash], [sites] users complain",
	"[people] complained about being in [things] on [sites]",
	"[people] releases [code] of [things] for [price]",
	"[sites] considers [things] worse than [things]",
	"[people] made [things] depend on [things]",
	"[people] bans [people] from using [things] in [packs]",
	"[people] complains that [things] discussion doesn't belong on [sites]",
	"[people] has a Patreon goal to add [function] to [things] for [price] a month",
	"[people] has a Patreon goal to add [things] compatibility to [things] for [price] a month",
	"[people] complains that [people] replaced [things] by [things]",
	"[people] complains that [people] replaced [things] by [things] in [packs]",
	"[people] complains that [people] removed [function] in [packs]",
	"[people] decided that [things] is too [adj] and replaced it with [things]",
	"[people] [says] [things] is [adj].",
	"[people] [says] [things] is literally [adj].",
	"[things] is not updated for the latest version of Minecraft.",
	"[people] removes [things] from [packs].",
	"[people] adds [things] to [packs].",
	"[people] quits modding. Fans of [things] rage.",
	"[people] is found to secretly like [things]",
	"[people] openly hates [function] in [things]",
	"[people] threatens to [ac1] [people] until they remove [things] from [packs]",
	"[people] threatens to [ac1] [people] until they remove [function] from [things]",
	"[people] threatens to [ac1] [people] until they add [function] to [things]",
	"[people] came out in support of [things]",
	"[people] came out in support of [drama]",
	"[people] and [people] came out in support of [drama]",
	"[people] came out against [drama], [sites] rages",
	"[people] and [people] came out against [drama], [sites] rages",
	"[people] forks [things] causing [drama]",
	"[people] [says] to replace [things] with [things]",
	"[people] [says] [people] causes drama",
	"[things] fans claim that [things] should be more like [things]",
	"[things] fans claim that [things] should have better [function]",
	"[people] [says] that [things] should be more like [things]",
	"[people] [says] that [things] should be less like [things]",
	"[people] rebalances [things] for [packs]",
	"[people] adds [function] to [things] by request of [people]",
	"[people] removes [function] from [things] by request of [people]",
	"[people] removes compatibility between [things] and [things] by request of [people]",
	"[people] [says] [people]'s attitude is [adj]",
	"[people] [says] [sites]'s attitude is [adj]",
	"[people] quits the development team of [things]",
	"[people] [says] [things] is too much like [things]",
	"[people] [says] [things] is a ripoff of [things]",
	"[people] [says] [people] stole [code] from [people]",
	"[people] [says] [people] did not steal [code] from [people]",
	"[people] decides to [ban] [people] from [packs]",
	"[things] doesn't work with [things] since the latest update",
	"[people] sues [things]",
	"[people] [says] [things] is [adj] on [sites]",
	"[people] [says] [things] is full of [badsoft]",
	"[people] [says] [things] causes [drama]",
	"[people] [says] [things] causes [drama] when used with [things]",
	"[people] [says] using [things] and [things] together is [adj]",
	"[people] rants about [things] on [sites]",
	"[people] rants about [function] in mods on [sites]",
	"[people] steals code from [things]",
	"[things] breaks [function]",
	"[people] sues [things] developers",
	"[people] reminds you that [things] is [adj]",
	"[people] and [people] get into a drama fight on [sites]",
	"Fans of [things] and [things] argue on [sites]",
	"[people] and [people] argue about [things]",
	"[people] puts [badsoft] in [things]",
	"[people] complains about [things] breaking [things]",
	"[people] complains about [things] breaking [function]",
	"[people] complains about [things] including [function]",
	"[things] breaks [function] in [things]",
	"[things] breaks [things] support in [things]",
	"[things] adds code to [ban] [people] automatically",
	"[things] adds code to [ban] people using [things]",
	"[things] removes compatibility with [things]",
	"[people] [says] not to use [things]",
	"[people] [says] not to use [things] with [things]",
	"[people] finds [badsoft] in [things]",
	"[people] drew a nasty graffiti about [people]",
	"[people] drew a nasty graffiti about [things]",
	"[things] makes [things] [crash] when used with [things]",
	"[things] makes [things] [crash] when used by [people]",
	"[things] makes [things] crash [things] when used by [people]",
	"[things] adds [badsoft] that only [activates] in [packs]",
	"[things] adds [badsoft] that only [activates] alongside [things]",
	"[things] makes [people] invincible from [things] in [packs]",
	"[people] decides to base their entire modpack on [things]",
	"[people] tweaks balance in [things] too much, annoying [sites]",
	"[people] tweaks balance in [things] too much, annoying [people]",
	"[people] [says] [people] is worse than [people]",
	"[people] [says] [things] is [worse] than [things]",
	"[people] bans [people] from [sites]",
	"[people] starts a war against [things]; reason is the release of [code]",
	"Community of [things] wants to rule the world using their software" 
	"[people],[people],[people] hate [things] because [people] made [sites]" 	
	
);

function str_replace_first($search, $replace, $subject) {
    $pos = strpos($subject, $search);
    if ($pos !== false) {
        $subject = substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}

$s = $sentences[rand(0, count($sentences)-1)];
foreach(array_keys($combinations) as $key) {
	for($i = 0; $i < 4; $i++) {
		$combo = $combinations[$key][rand(0, count($combinations[$key])-1)];
		$s = str_replace_first("[".$key."]", $combo, $s);
	}
}
echo($s);
?>
<?php if (!isset($_GET["plain"])) : ?>
<?php endif; ?>
