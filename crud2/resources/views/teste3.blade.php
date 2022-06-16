@php

class AssinaDocumentoClass{
    public $proprietarioDocumento = "Joao";
    public $validadeDocumento = "30/11/2020";

    public function assinarDocumento(){
        echo nl2br("\n");
        echo("/---------3---------/");
        $result=" ";
        $result = $this->proprietarioDocumento;
        $result .=$this->validadeDocumento;
       return $result; 
       echo nl2br("\n");
    }
}

$obj = new AssinaDocumentoClass();
$callback = $obj->assinarDocumento();
echo nl2br("\n");
echo($callback);
echo nl2br("\n");

@endphp
<a href="/">voltar para home<a>
