<?php
$dName = dirname(__FILE__).'/f';
$dir   = scandir($dName);
unset ($dir[0]);
unset ($dir[1]);
rsort($dir);
$html = '';
foreach ($dir as $k=> $f) {
    $html .= '<tr>
        <td>
            '.$k.'
        </td>
        <td>
            <a href="f/'.$f.'">'.$f.'</a>
        </td>
        <td style="color:blue;font-weight:bold;">
            '.filesize($dName.'/'.$f).' kb
        </td>
        <td>
            <a style="color:red;" href="delete.php?n='.$f.'">Delete</a>
        </td>
    </tr>';
}
?>
<table border="1px" width="600">
    <tr>
        <td>
            #
        </td>
        <td>
           Name
        </td>
        <td>
            Size
        </td>
        <td>
            Delete?
        </td>
    </tr>
    <?echo $html ;?>
</table>
<script type="text/javascript">
    setInterval(function(){
        window.location.reload();
    }, 10000);
</script>