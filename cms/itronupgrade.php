<?php
$path = '/home/philippi/library.philippinestudies.uk/cms';
require_once $path . "/bootstrap.php";
$application = new Omeka_Application("development",  array( "config" => CONFIG_DIR."/application.ini"));
$application->initialize();

$dbResource = new Omeka_Application_Resource_Db;
$dbResource->setinipath(BASE_DIR . "/db.ini");
$application->getBootstrap()->registerPluginResource($dbResource);
$db = $dbResource->init();

$manager = new Omeka_Db_Migration_Manager($db, UPGRADE_DIR);
if($manager->dbNeedsUpgrade()) {
    $manager->migrate();
    echo "db is upgraded.";
} else {
    echo "db is good.";
}

$pluginBroker = $application->getBootstrap()->getResource("Pluginbroker");
$pluginLoader = Zend_Registry::get("pluginloader");
$pluginInstaller = new Omeka_Plugin_Installer($pluginBroker, $pluginLoader);
$allPlugins = $pluginLoader->getPlugins();
foreach($allPlugins as $plugin) {
    if($plugin->hasNewVersion()) {
        $pluginInstaller->upgrade($plugin);
        echo "\n {$plugin->getDisplayName()} upgraded ";
    }
}
