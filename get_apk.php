<html>
<head></head>
<body>

   <?php

   error_reporting(-1);
   ini_set('display_errors', 'On');
   date_default_timezone_set('UTC');

   echo $_POST['appUrl'];
   echo 'hiiii\n';
   $dateDirName = 'tmp/' . date('ljS\ofFYhisA') . '/';
   $currManifest = $dateDirName . 'manifest.json';
   echo shell_exec('mkdir ' . $dateDirName . ' 2>&1');

   #$path = 'export ANDROID_HOME=/url-to-apk/android/android-sdk-linux; export PATH=$PATH:/url-to-apk/android/android-sdk-linux/tools; export PATH=$PATH:/url-to-apk/crosswalk; export PATH=$PATH:/url-to-apk/bin;';
   $path = 'export ANDROID_HOME=/url-to-apk-backend/android-sdk-linux; export PATH=$PATH:/url-to-apk-backend/android-sdk-linux/tools; export PATH=$PATH:/url-to-apk-backend/crosswalk; ';

   //$manifestFileText = '{"name": "Tablet Updater", "icons": [ {  "src": "icon.png", "sizes": "128x128",  "type": "image/png", "density": "4.0" } ], "start_url": "' . $_POST['url'] . '", "display": "standalone","orientation": "any" }';
   $manifestFileText = '{"name": "Tablet Updater", "start_url": "' . $_POST['appUrl'] . '", "display": "standalone","orientation": "any" }';
   echo $manifestFileText;
   file_put_contents($currManifest, $manifestFileText);
   //$app_url = ' --app-url=' . $_POST['url'];

   $default_args = ' --package=org.gentoo.rms --manifest=' . $currManifest . ' --arch=arm --target-dir=' . $dateDirName;
   $command = "bash -c '" . $path . "make_apk.py " . $default_args . " 2>&1 1>" . $dateDirName ."/output.txt'";

   echo '</br></br>command: ' . $command . "</br></br></br>";
   $a = shell_exec($command);
   echo $a;

   echo "<a href='" . $dateDirName . "/Rms_arm.apk'>richardStallamIzBae.apk</a>";
   ?>

</body>
</html>

<? /*

export ANDROID_HOME=/root/url-to-apk-backend/android-sdk-linux; export PATH=$PATH:/root/url-to-apk-backend/android-sdk-linux/tools; export PATH=$PATH:/root/url-to-apk-backend/crosswalk

make_apk.py --package=org.gentoo.rms --manifest=test.manifest --arch=arm --target-dir=a 2>&1


====path
export ANDROID_HOME=/url-to-apk/android/android-sdk-linux; export PATH=$PATH:/url-to-apk/android/android-sdk-linux/tools; export PATH=$PATH:/url-to-apk/crosswalk; export PATH=$PATH:/url-to-apk/bin
====

{"name": "Tablet Updater", "start_url": "http://google.com ", "display": "standalone","orientation": "any" }


*/ ?>

