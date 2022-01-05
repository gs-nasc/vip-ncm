<?php

namespace VIPNCM\Utils;

use VIPNCM\Models\NCM;

class NCMManager {

    /**
     * @param string json
     * @param string codigoField
     * @param string descricaoField
     * @param string taxaNacionalField
     * @param string taxaImportadaField
     * @param string taxaEstadualField
     * @param string taxaMunicipalField
     * 
     * @return NCM
     */
    function fromJSON($json, $codigoField, $descricaoField, $taxaNacionalField, $taxaImportadaField, $taxaEstadualField, $taxaMunicipalField) {
        $json = json_decode($json, true);
        $ncm = new NCM();
        $ncm->codigo = $json[$codigoField];
        $ncm->descricao = $json[$descricaoField];
        $ncm->taxa_nacional = $json[$taxaNacionalField];
        $ncm->taxa_importada = $json[$taxaImportadaField];
        $ncm->taxa_estadual = $json[$taxaEstadualField];
        $ncm->taxa_municipal = $json[$taxaMunicipalField];
        return $ncm;
    }

    /**
     * @param array array
     * @param string codigoField
     * @param string descricaoField
     * @param string taxaNacionalField
     * @param string taxaImportadaField
     * @param string taxaEstadualField
     * @param string taxaMunicipalField
     * 
     * @return NCM
     */
    function fromArray($array, $codigoField, $descricaoField, $taxaNacionalField, $taxaImportadaField, $taxaEstadualField, $taxaMunicipalField) {
        $ncm = new NCM();
        $ncm->codigo = $array[$codigoField];
        $ncm->descricao = $array[$descricaoField];
        $ncm->taxa_nacional = $array[$taxaNacionalField];
        $ncm->taxa_importada = $array[$taxaImportadaField];
        $ncm->taxa_estadual = $array[$taxaEstadualField];
        $ncm->taxa_municipal = $array[$taxaMunicipalField];
        return $ncm;
    }

    /**
     * @param array map
     * @param string codigoField
     * @param string descricaoField
     * @param string taxaNacionalField
     * @param string taxaImportadaField
     * @param string taxaEstadualField
     * @param string taxaMunicipalField
     * 
     * @return NCM
     */
    function fromMap($map, $codigoField, $descricaoField, $taxaNacionalField, $taxaImportadaField, $taxaEstadualField, $taxaMunicipalField) {
        
        $ncms = array();

        for ($i=0; $i < count($map); $i++) { 
            $array = $map[$i];
            $ncm = new NCM();

            $ncm->codigo = $array[$codigoField];
            $ncm->descricao = $array[$descricaoField];
            $ncm->taxa_nacional = $array[$taxaNacionalField];
            $ncm->taxa_importada = $array[$taxaImportadaField];
            $ncm->taxa_estadual = $array[$taxaEstadualField];
            $ncm->taxa_municipal = $array[$taxaMunicipalField];

            $ncms[] = $ncm;
        }

        return $ncms;
    }

    /**
     * @param NCM ncm
     */
    function NCMtoJSON($ncm) {
        return json_encode($ncm);
    }

    /**
     * @param array array
     */
    function ArrayToJSON($array) {
        return json_encode($array);
    }
}