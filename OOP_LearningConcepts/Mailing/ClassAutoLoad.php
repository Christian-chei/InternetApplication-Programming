<?php
require_once 'conf.php';

$directories = ["Forms", "Layouts", "Globals", "Proc", "Fncs"];

spl_autoload_register(function ($className) use ($directories){
    foreach($directories as $directory) {
        $filepath = __DIR__ . "/$directories/" . $className . 'php';
        if (file_exists($filepath)) {
            require_once $filepath;
            return;

        }
    }
});

$ObjSendMail = new SendMail();
$ObjForm = new forms();
$ObjLayout = new Layouts();

$ObjAuth = new Auth($conf);
$ObjFncs = new Fncs();

$ObjAuth->Signup($conf, $ObjFncs, $Lang, $ObjSendMail);



