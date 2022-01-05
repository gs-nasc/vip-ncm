<?php

namespace VIPNCM\Utils;

class FileManager
{
    /**
     * @param stirng base64
     * @param string output
     * 
     * @return void
     */
    function saveFile($base64, $output)
    {
        $this->deleteFile($output);

        $base64 = str_replace("data:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;base64,", "", $base64);

        $ifp = fopen($output, "wb");

        fwrite($ifp, base64_decode($base64));

        fclose($ifp);
    }

    /** 
     * @param string file
     * 
     * @return void
     */
    function deleteFile($file)
    {
        if (file_exists($file)) unlink($file);
    }
}
