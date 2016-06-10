#!/bin/php
<?php
/** set $tr to the full path of transmission-remote plus a space **/
$tr = '/usr/local/bin/transmission-remote ';
exec($tr.'--list | grep 100\%', $arrTorrents);
foreach($arrTorrents as $idx=>$torrent)
{
        $tid = str_replace(" ", "", substr($torrent, 0, 4));
        exec($tr."-t $tid -r");
}
?>
