<?php 
/**
 * Criar uma simples classe que possa ler o conteúdo 
 * de um arquivo texto. Essa classe deverá conter um 
 * atributo privado que será usado para guardar o 
 * conteúdo do arquivo lido, um método para carregar o
 * arquivo e outro para visualizar o atributo.
 */
class leitorTexto {    
    private $conteudoArquivo = '';
  
    /**
     * Sets the private string variable
     */
    public function setConteudo($filePath) {
      #Abrir arquivo      
      $this->conteudoArquivo = file_get_contents($filePath);
    }

    public function getConteudo() {
      return $this->conteudoArquivo;
    }  
}


//Apenas para testar
// $leitor = new leitorTexto();
// $leitor->setConteudo("./uploads/teste.txt");
// echo ($leitor->getConteudo());
?>