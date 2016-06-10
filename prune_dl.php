#!/bin/php
<?php
/** set $tr to the full path of transmission-remote plus a space **/
$tr = '/usr/local/bin/transmission-remote ';
exec($tr.'--list', $arrTorrents);
foreach($arrTorrents as $idx=>$torrent)
{
        if($idx>0)
        {
                $pctcomplete = substr($torrent,7,3);
                if($pctcomplete == '100')
                {
                        $tid = str_replace(" ", "", substr($torrent, 0, 4));
                        exec($tr."-t $tid -r");
                }
        }
}
?>
