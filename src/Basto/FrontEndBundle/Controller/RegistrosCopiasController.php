<?php

namespace Basto\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrosCopiasController extends Controller
{
    public function listaAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $request = $this->getRequest();
        $dql = "SELECT registros_copias FROM BastoFrontEndBundle:RegistrosCopias registros_copias ";
        if ($request->getMethod() == 'POST') {   
            $arrControles = $request->request->All();
            if($request->request->get('OpDescargarLog')) {
                $arrIndices = $request->request->get('OpDescargarLog');            
                $arRegistroCopia = $em->getRepository('BastoFrontEndBundle:RegistrosCopias')->find($arrIndices[0]);
                //$strRutaLocal ="C:\copias";
                $strRutaLocal ="/home/administrador/copias";
                $strDirectorioUsuario = "1"; 
                $strDirectorioArchivo = $arRegistroCopia->getDirectorio(); 
                $strNombreArchivo = $arRegistroCopia->getNombreArchivoLog();
                $strRuta = $strRutaLocal . DIRECTORY_SEPARATOR . $strDirectorioUsuario . DIRECTORY_SEPARATOR . $arRegistroCopia->getCodigoCopiaFk() . DIRECTORY_SEPARATOR .  $strDirectorioArchivo . DIRECTORY_SEPARATOR . $strNombreArchivo;    
                header ("Content-Disposition: attachment; filename=" . $strNombreArchivo); 
                header ("Content-Type: text/plain");            
                header ("Content-Length: ".filesize($strRuta));
                readfile($strRuta);
            }
            if($request->request->get('OpDescargarCopia')) {
                $arrIndices = $request->request->get('OpSubmit');            
                $arRegistroCopia = $em->getRepository('BastoFrontEndBundle:RegistrosCopias')->find($arrIndices[0]);
                //$strRutaLocal ="C:\copias";
                $strRutaLocal ="/home/administrador/copias";
                $strDirectorioUsuario = "1"; 
                $strDirectorioArchivo = $arRegistroCopia->getDirectorio(); 
                $strNombreArchivo = $arRegistroCopia->getNombreArchivo();
                $strRuta = $strRutaLocal . DIRECTORY_SEPARATOR . $strDirectorioUsuario . DIRECTORY_SEPARATOR . $arRegistroCopia->getCodigoCopiaFk() . DIRECTORY_SEPARATOR .  $strDirectorioArchivo . DIRECTORY_SEPARATOR . $strNombreArchivo;    
                header ("Content-Disposition: attachment; filename=" . $strNombreArchivo); 
                header ("Content-Type: application/x-rar-compressed, application/octet-stream");            
                header ("Content-Length: ".filesize($strRuta));
                readfile($strRuta);
            }                        
            if($request->request->get('OpBuscar')) {
                if($arrControles['TxtFechaDesde'] != "" && $arrControles['TxtFechaHasta'] != "") {
                    $dql .= " WHERE registros_copias.fechaInicio >='" . $arrControles['TxtFechaDesde'] . " 00:00:00' AND registros_copias.fechaInicio <='" . $arrControles['TxtFechaHasta'] . " 23:59:59'";
                }                                               
            }        
        } else {
            $dql   = "SELECT registros_copias FROM BastoFrontEndBundle:RegistrosCopias registros_copias";            
        }                
        $query = $em->createQuery($dql);
        $paginator = $this->get('knp_paginator');
        $arRegistrosCopias = $paginator->paginate($query, $this->get('request')->query->get('page', 1),10);                       
        return $this->render('BastoFrontEndBundle:Consultas/RegistrosCopias:lista.html.twig', array('arRegistrosCopias' => $arRegistrosCopias));
    }     
}
