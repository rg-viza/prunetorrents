#!/bin/php
<?php
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
                        $command = $tr."-t $tid -r";
                        exec($command); 
                }
        }
}
?>
