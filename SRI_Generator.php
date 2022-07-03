
<?php
function SRI_Gen($file)
{
    $data = file_get_contents($file);
    $src = "src=" . $file;
    $integity = 'integrity="sha256-' . base64_encode(hash("sha256", $data, true)) . '"';
    $cross_site = 'crossorigin="anonymous"';

    echo $src . " " . $integity . " " . $cross_site;
}
?>