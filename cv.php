<form method="post">
    <button name="btn-cv" class="btn btn-secondary">Telecharger mon CV</button>
</form>

<?php
if(isset($_POST['btn-cv'])){
    $file = "assets/pdf/Projet_4_Potfolio.pdf";
    if(file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    }
}
?>
